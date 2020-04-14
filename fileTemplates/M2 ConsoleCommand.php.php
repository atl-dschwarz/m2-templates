<?php

namespace ${NAMESPACE};

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ${NAME}
 */
class ${NAME} extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        ${DS}this->setName('${COMMAND_NAME}')
            ->setDescription('${COMMAND_DESCRIPTION}');

        parent::configure();
    }
    
    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface ${DS}input, OutputInterface ${DS}output)
    {

    }
}
