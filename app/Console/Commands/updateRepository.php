<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class updateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update application repository on server.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $execs = Array();
        Artisan::call('down');
        $execs[] = $this->composerInstaller();
        $execs[] = $this->gitUpdater();

        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        Artisan::call('up');

        foreach ($execs as $exec) {
            $this->info($exec);
        }

    }
    protected function composerInstaller()
    {
        $process = Process::fromShellCommandline('composer install');
        $process->mustRun(null, ['COMPOSER_HOME' => '/home/carvalho_csleo_gmail_com/.config/composer']);

        return $process->getOutput();
    }

    protected function gitUpdater() {
        $process = Process::fromShellCommandline('git pull origin master');
        $process->mustRun();

        return $process->getOutput();
    }
}
