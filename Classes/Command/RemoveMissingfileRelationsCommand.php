<?php

declare(strict_types=1);

namespace Conpassione\Cpdevsite\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use TYPO3\CMS\Core\Core\Bootstrap;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

#[Autoconfigure(tags: [
    [
        'name' => 'console.command',
        'command' => 'conpassione:remove-missingfilerelations',
        'description' => 'Remove missing FAL-file relations',
    ]
])]
class RemoveMissingfileRelationsCommand extends Command
{
    public function __construct(
        private readonly SiteFinder $siteFinder,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setHelp('Remove missing FAL-file relations');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        Bootstrap::initializeBackendAuthentication();

        /* Update-Query MYSQL Syntax
            update tx_cpkm_domain_model_litter set l_status = 100
            where (hidden = 0) AND (starttime = 0) AND (endtime = 0)
                AND (l_status = 2) AND (l_date < (unix_timestamp(current_timestamp) - 86400*90));
        */

        $site = $this->siteFinder->getSiteByPageId(1);
        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        $queryBuilder = $connectionPool->getQueryBuilderForTable('sys_file');
        $connection = $connectionPool->getConnectionByName('Default');
        $sql = 'DELETE FROM sys_file WHERE sys_file.missing = 1 AND sys_file.uid NOT IN(SELECT sys_file_reference.uid_local FROM sys_file_reference WHERE sys_file_reference.uid = sys_file.uid)';
        $statement = $connection->executeStatement($sql);

        $io = new SymfonyStyle($input, $output);
        $io->title('Removing missing FAL-file relations from site');
        if ($statement > 0) {
            $io->note($statement . ' File(s) successfully deleted.');
        } else {
            $io->note('No Files found to deleted.');
        }
        return Command::SUCCESS;
    }
}
