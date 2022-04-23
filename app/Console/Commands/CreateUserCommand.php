<?php

namespace Rxak\App\Console\Commands;

use Rxak\App\Models\User;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'create:user';

    protected function configure(): void
    {
        $this->addOption(
            'username',
            null,
            InputOption::VALUE_REQUIRED,
            'Username for user'
        );

        $this->addOption(
            'email',
            null,
            InputOption::VALUE_REQUIRED,
            'Email for user'
        );

        $this->addOption(
            'password',
            null,
            InputOption::VALUE_REQUIRED,
            'Password for user'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = $input->getOption('email');

        $user = User::getByEmail($email) ?? new User();

        $user->username = $input->getOption('username');
        $user->email = $email;
        $user->password = password_hash($input->getOption('password'), PASSWORD_DEFAULT);

        $user->save();

        return Command::SUCCESS;
    }
}