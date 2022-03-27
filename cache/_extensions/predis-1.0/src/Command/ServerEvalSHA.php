<?php /* yxorP */


namespace Predis\Command;


class ServerEvalSHA extends ServerEval
{

    public function getId(): string
    {
        return 'EVALSHA';
    }


    public function getScriptHash()
    {
        return $this->getArgument(0);
    }
}
