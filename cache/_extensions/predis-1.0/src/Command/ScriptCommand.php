<?php /* yxorP */

namespace Predis\Command;
abstract class ScriptCommand extends ServerEvalSHA
{

    public function getKeys(): array
    {
        return array_slice($this->getArguments(), 2, $this->getKeysCount());
    }

    protected function getKeysCount(): int
    {
        return 0;
    }

    public function getEvalArguments(): array
    {
        $arguments = $this->getArguments();
        $arguments[0] = $this->getScript();

        return $arguments;
    }

    abstract public function getScript();

    protected function filterArguments(array $arguments): array
    {
        if (($numkeys = $this->getKeysCount()) && $numkeys < 0) {
            $numkeys = count($arguments) + $numkeys;
        }

        return array_merge(array(sha1($this->getScript()), $numkeys), $arguments);
    }
}
