<?php /* yxorP */


namespace Predis\Connection;


interface CompositeConnectionInterface extends NodeConnectionInterface
{

    public function getProtocol();


    public function writeBuffer($buffer);


    public function readBuffer($length);


    public function readLine();
}
