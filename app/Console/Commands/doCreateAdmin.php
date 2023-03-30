<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class doCreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:createAdmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command untuk create admin baru';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Create administrator user");
        sleep(3);
        return Command::SUCCESS;
    }
}
