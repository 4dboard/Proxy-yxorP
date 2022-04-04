<?php /* yxorP */

namespace Predis\Profile;
interface ProfileInterface
{

    public function getVersion();

    public function supportsCommand($commandID);

    public function supportsCommands(array $commandIDs);

    public function createCommand($commandID, array $arguments = array());
}
