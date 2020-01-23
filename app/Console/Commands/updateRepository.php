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
        Artisan::call('down');
        $this->composerInstaller();
        $exec = $this->gitUpdater();

        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        Artisan::call('up');
        return $exec;
    }
    protected function composerInstaller()
    {
        $process = new Process(['composer', 'install']);
        $process->mustRun();
    }

    protected function gitUpdater() {
        $process = new Process(['git', 'pull', 'origin', 'master']);
        $process->mustRun();

        return $process->getOutput();
    }
}
