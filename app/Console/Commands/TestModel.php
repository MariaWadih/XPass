<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class TestModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'maria';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'x7 test model command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       /* $user = User::create([
            'name' => 'maria',
            'email' => 'maria.@example.com',
            'password' => bcrypt('password123'), 
        ]);
        dd($user);*/
        $users = User::find(2);
        dd($users);

    }
}
