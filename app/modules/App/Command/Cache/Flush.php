<?php

namespace yxorP\app\modules\app\command\Cache;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use yxorP\app\lib\http\app;

class flush
{

    protected static string $defaultName = 'app:cache:flush';
    protected ?app $app = null;

    public function __construct(App $app)
    {
        $this->app = $app;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setHelp('This command empties the /storage/tmp folder');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $this->app->helper('system')->flushCache();

        $output->writeln('<info>[✓]</info> Tmp folder was flushed!');
        return 1;
    }
}
