<?php /* yxorP */


namespace Predis\Command;


interface CommandInterface
{

    public function getId();


    public function setSlot($slot);


    public function getSlot();


    public function setArguments(array $arguments);


    public function setRawArguments(array $arguments);


    public function getArguments();


    public function getArgument($index);


    public function parseResponse($data);
}
