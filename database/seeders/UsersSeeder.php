<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Bouncer;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = User::factory()->times(50)->create();

        foreach ($factory as $user) {
            $user->assign('user');
            $user->allow()->toOwn(Blog::class)->to(['update', 'delete']);
        }

    }
}
