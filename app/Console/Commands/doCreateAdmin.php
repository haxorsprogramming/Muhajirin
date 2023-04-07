<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class doCreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "do:createAdmin";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Command untuk create admin baru";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Create administrator user");
        $this->info("=========================");
        $username = $this->ask("Masukkan username : ");
        $role = $this->ask("Masukkan role (ADMIN, OPERATOR) : ");
        $password = $this->secret("Masukkan password : ");

        $params = [
          "username" => $username,
          "role" => $role,
          "password" => $password
        ];

        $this->info("create user process ...");
        $this->createUser($params);
        sleep(2);
        $this->info("Success create admin user, silahkan login di aplikasi ...");
        return Command::SUCCESS;
    }

    function createUser($params) : bool
    {
        $mUser = new UserModel();
        $mUser->username = $params['username'];
        $mUser->role = $params['role'];
        $mUser->password = Hash::make($params['password']);;
        $mUser->active = "1";
        $mUser->save();
        return true;
    }
}
