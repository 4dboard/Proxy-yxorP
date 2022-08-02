<?php namespace yxorP\app\lib\psr\http\mongoDB;

use yxorP\app\lib\http\mongoDB\BSON\Serializable;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException as DriverRuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Manager;
use yxorP\app\lib\http\mongoDB\Driver\ReadPreference;
use yxorP\app\lib\http\mongoDB\Driver\Server;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use yxorP\app\lib\http\mongoDB\Driver\WriteConcern;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\RuntimeException;
use yxorP\app\lib\http\mongoDB\Operation\WithTransaction;
use ReflectionClass;
use function end;
use function get_object_vars;
use function in_array;
use function is_array;
use function is_object;
use function is_string;
use function key;
use function MongoDB\BSON\fromPHP;
use function MongoDB\BSON\toPHP;
use function reset;
use function substr;

function all_servers_support_write_stage_on_secondary(array $servers): bool
{
    static $wireVersionForWriteStageOnSecondary = 13;
    foreach ($servers as $server) {
        if ($server->getType() === Server::TYPE_LOAD_BALANCER) {
            continue;
        }
        if (!server_supports_feature($server, $wireVersionForWriteStageOnSecondary)) {
            return false;
        }
    }
    return true;
}

function apply_type_map_to_document($document, array $typeMap)
{
    if (!is_array($document) && !is_object($document)) {
        throw InvalidArgumentException::invalidType('$document', $document, 'array or object');
    }
    return toPHP(fromPHP($document), $typeMap);
}

function generate_index_name($document): string
{
    if ($document instanceof Serializable) {
        $document = $document->bsonSerialize();
    }
    if (is_object($document)) {
        $document = get_object_vars($document);
    }
    if (!is_array($document)) {
        throw InvalidArgumentException::invalidType('$document', $document, 'array or object');
    }
    $name = '';
    foreach ($document as $field => $type) {
        $name .= ($name != '' ? '_' : '') . $field . '_' . $type;
    }
    return $name;
}

function is_first_key_operator($document): bool
{
    if ($document instanceof Serializable) {
        $document = $document->bsonSerialize();
    }
    if (is_object($document)) {
        $document = get_object_vars($document);
    }
    if (!is_array($document)) {
        throw InvalidArgumentException::invalidType('$document', $document, 'array or object');
    }
    reset($document);
    $firstKey = (string)key($document);
    return isset($firstKey[0]) && $firstKey[0] === '$';
}

function is_pipeline($pipeline): bool
{
    if (!is_array($pipeline)) {
        return false;
    }
    if ($pipeline === []) {
        return false;
    }
    $expectedKey = 0;
    foreach ($pipeline as $key => $stage) {
        if (!is_array($stage) && !is_object($stage)) {
            return false;
        }
        if ($expectedKey !== $key) {
            return false;
        }
        $expectedKey++;
        $stage = (array)$stage;
        reset($stage);
        $key = key($stage);
        if (!isset($key[0]) || $key[0] !== '$') {
            return false;
        }
    }
    return true;
}

function is_in_transaction(array $options): bool
{
    if (isset($options['session']) && $options['session'] instanceof Session && $options['session']->isInTransaction()) {
        return true;
    }
    return false;
}

function is_last_pipeline_operator_write(array $pipeline): bool
{
    $lastOp = end($pipeline);
    if ($lastOp === false) {
        return false;
    }
    $lastOp = (array)$lastOp;
    return in_array(key($lastOp), ['$out', '$merge'], true);
}

function is_mapreduce_output_inline($out): bool
{
    if (!is_array($out) && !is_object($out)) {
        return false;
    }
    if ($out instanceof Serializable) {
        $out = $out->bsonSerialize();
    }
    if (is_object($out)) {
        $out = get_object_vars($out);
    }
    if (!is_array($out)) {
        throw InvalidArgumentException::invalidType('$out', $out, 'array or object');
    }
    reset($out);
    return key($out) === 'inline';
}

function is_write_concern_acknowledged(WriteConcern $writeConcern): bool
{
    return ($writeConcern->getW() !== 0 && $writeConcern->getW() !== -1) || $writeConcern->getJournal() === true;
}

function server_supports_feature(Server $server, int $feature): bool
{
    $info = $server->getInfo();
    $maxWireVersion = isset($info['maxWireVersion']) ? (integer)$info['maxWireVersion'] : 0;
    $minWireVersion = isset($info['minWireVersion']) ? (integer)$info['minWireVersion'] : 0;
    return $minWireVersion <= $feature && $maxWireVersion >= $feature;
}

function is_string_array($input): bool
{
    if (!is_array($input)) {
        return false;
    }
    foreach ($input as $item) {
        if (!is_string($item)) {
            return false;
        }
    }
    return true;
}

function recursive_copy($element)
{
    if (is_array($element)) {
        foreach ($element as $key => $value) {
            $element[$key] = recursive_copy($value);
        }
        return $element;
    }
    if (!is_object($element)) {
        return $element;
    }
    if (!(new ReflectionClass($element))->isCloneable()) {
        return $element;
    }
    return clone $element;
}

function create_field_path_type_map(array $typeMap, string $fieldPath): array
{
    if (isset($typeMap['fieldPaths']) && is_array($typeMap['fieldPaths'])) {
        $fieldPaths = $typeMap['fieldPaths'];
        $typeMap['fieldPaths'] = [];
        foreach ($fieldPaths as $existingFieldPath => $type) {
            $typeMap['fieldPaths'][$fieldPath . '.' . $existingFieldPath] = $type;
        }
    }
    if (isset($typeMap['root'])) {
        $typeMap['fieldPaths'][$fieldPath] = $typeMap['root'];
    }
    if (substr($fieldPath, -2, 2) === '.$') {
        $typeMap['fieldPaths'][substr($fieldPath, 0, -2)] = 'array';
    }
    $typeMap['root'] = 'object';
    return $typeMap;
}

function with_transaction(Session $session, callable $callback, array $transactionOptions = [])
{
    $operation = new WithTransaction($callback, $transactionOptions);
    $operation->execute($session);
}

function extract_session_from_options(array $options): ?Session
{
    if (!isset($options['session']) || !$options['session'] instanceof Session) {
        return null;
    }
    return $options['session'];
}

function extract_read_preference_from_options(array $options): ?ReadPreference
{
    if (!isset($options['readPreference']) || !$options['readPreference'] instanceof ReadPreference) {
        return null;
    }
    return $options['readPreference'];
}

function select_server(Manager $manager, array $options): Server
{
    $session = extract_session_from_options($options);
    if ($session instanceof Session && $session->getServer() !== null) {
        return $session->getServer();
    }
    $readPreference = extract_read_preference_from_options($options);
    if (!$readPreference instanceof ReadPreference) {
        $readPreference = new ReadPreference(ReadPreference::RP_PRIMARY);
    }
    return $manager->selectServer($readPreference);
}

function select_server_for_aggregate_write_stage(Manager $manager, array &$options): Server
{
    $readPreference = extract_read_preference_from_options($options);
    if ($readPreference === null || $readPreference->getMode() === ReadPreference::RP_PRIMARY) {
        return select_server($manager, $options);
    }
    $server = null;
    $serverSelectionError = null;
    try {
        $server = select_server($manager, $options);
    } catch (DriverRuntimeException $serverSelectionError) {
    }
    if (!all_servers_support_write_stage_on_secondary($manager->getServers())) {
        $options['readPreference'] = new ReadPreference(ReadPreference::RP_PRIMARY);
        if ($server === null || $server->isSecondary()) {
            return select_server($manager, $options);
        }
    }
    if ($serverSelectionError !== null) {
        throw $serverSelectionError;
    }
    return $server;
}
