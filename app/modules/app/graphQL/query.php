<?php

namespace yxorP\app\modules\app\GraphQL;

use ArrayObject;
use yxorP\app\lib\data\graphQL\GraphQL;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\http\App;
use yxorP\app\lib\http\appAware;
use yxorP\app\modules\app\graphQL\GraphQL;
use yxorP\app\modules\app\graphQL\Type\Definition\ObjectType;
use yxorP\app\modules\app\graphQL\Type\Schema;

/**
 * @property App $app
 */
class query extends appAware
{

    public $queries;
    public $mutations;
    public $types;
    public $directives;
    protected bool $initialized = false;

    public function process($query = '{}', $variables = null): array
    {
        if (!$this->initialized) $this->init();

        $result = GraphQL::executeQuery(new Schema([
            'query' => new ObjectType($this->queries->getArrayCopy()),
            'mutation' => new ObjectType($this->mutations->getArrayCopy()),
            'types' => $this->types->getArrayCopy(),
            'directives' => $this->directives->getArrayCopy(),
        ]), $query, [], null, $variables)->toArray();

        if (isset($result['data'])) foreach ($result['data'] as $key => $value) if ($value && is_string($value)) {
            $start = substr($value, 0, 1);
            $end = substr($value, -1, 1);
            if (($start === '[' && $end === ']') || ($start === '{' && $end === '}')) $result['data'][$key] = json_decode($value); elseif ($value === 'null') $result['data'][$key] = null;
        }
        return $result;
    }

    public function init()
    {

        if ($this->initialized) return;

        $this->queries = new ArrayObject(['name' => 'Query', 'fields' => []]);
        $this->mutations = new ArrayObject(['name' => 'Mutation', 'fields' => []]);
        $this->types = new ArrayObject([]);
        $this->directives = new ArrayObject(GraphQL::getStandardDirectives());
        $this->app->trigger('graphql.config', [$this]);
        $this->initialized = true;
    }
}
