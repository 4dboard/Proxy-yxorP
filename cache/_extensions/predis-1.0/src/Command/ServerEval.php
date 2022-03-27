<?php /* yxorP */


namespace Predis\Command;


class ServerEval extends Command
{

    public function getId(): string
    {
        return 'EVAL';
    }


    public function getScriptHash(): string
    {
        return sha1($this->getArgument(0));
    }
}
