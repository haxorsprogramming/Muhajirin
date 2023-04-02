<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class doRebuildDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:rebuildDatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command untuk melakukan migrasi database & seeder data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Artisan::call('migrate:refresh --seed');
        $this->info("Success migrate & seed database ...");
        return Command::SUCCESS;
    }
}
