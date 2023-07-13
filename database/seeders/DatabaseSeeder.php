<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Bouncer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $bouncer = Bouncer::create();

        $user = User::create([
            'name' => 'admin',
            'email' => 'placeholder@email.com',
            'password' => bcrypt('admin')
        ]);

        $user->assign('admin');

        $bouncer->allow('admin')->to([
            'access-panel',
            'create-blog',
            'update-blog',
            'delete-blog',
            'update-user',
            'ban-user',
            'assign-role',
            'remove-role'
            ]);

        $this->call([
            UsersSeeder::class,
            BlogsSeeder::class
        ]);
    }
}
