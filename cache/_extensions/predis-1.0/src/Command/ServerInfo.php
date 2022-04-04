<?php /* yxorP */

namespace Predis\Command;
class ServerInfo extends Command
{

    public function getId(): string
    {
        return 'INFO';
    }

    public function parseResponse($data): array
    {
        $info = array();
        $infoLines = preg_split('/\r?\n/', $data);

        foreach ($infoLines as $row) {
            if (!str_contains($row, ':')) {
                continue;
            }

            [$k, $v] = $this->parseRow($row);
            $info[$k] = $v;
        }

        return $info;
    }

    protected function parseRow($row): array
    {
        [$k, $v] = explode(':', $row, 2);

        if (preg_match('/^db\d+$/', $k)) {
            $v = $this->parseDatabaseStats($v);
        }

        return array($k, $v);
    }

    protected function parseDatabaseStats($str): array
    {
        $db = array();

        foreach (explode(',', $str) as $dbvar) {
            [$dbvk, $dbvv] = explode('=', $dbvar);
            $db[trim($dbvk)] = $dbvv;
        }

        return $db;
    }

    protected function parseAllocationStats($str): array
    {
        $stats = array();

        foreach (explode(',', $str) as $kv) {
            @list($size, $objects, $extra) = explode('=', $kv);
            if (isset($extra)) {
                $size = ">=$objects";
                $objects = $extra;
            }

            $stats[$size] = $objects;
        }

        return $stats;
    }
}
