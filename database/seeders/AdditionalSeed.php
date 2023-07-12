<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Bouncer;

class AdditionalSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bouncer = Bouncer::create();
        $bouncer->allow('admin')->to([
            'access-panel'
        ]);
    }
}
