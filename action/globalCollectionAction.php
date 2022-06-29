<?php use yxorP\Http\EventWrapper;

class globalCollectionAction extends EventWrapper
{
    public function onBuildContext(): void
    {
        self::set('REPLACE', self::get('APP')->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace']) ?
            self::get('APP')->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace'])['value'] : null);
        self::set('PATTERN', self::get('APP')->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern']) ?
            self::get('APP')->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern'])['value'] : null);
    }
}