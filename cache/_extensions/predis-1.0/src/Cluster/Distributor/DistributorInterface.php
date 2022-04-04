<?php /* yxorP */

namespace Predis\Cluster\Distributor;
interface DistributorInterface
{

    public function add($node, $weight = null);

    public function remove($node);

    public function getSlot($hash);

    public function getBySlot($slot);

    public function getByHash($hash);

    public function get($value);

    public function getHashGenerator();
}
