<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class links extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            'link' => 'https://www.linkedin.com/in/rick-visser-394881109/',
            'icon' => '<i class="fab fa-linkedin"></i>',
        ]);

        DB::table('links')->insert([
            'link' => 'https://www.instagram.com/rick_groningen/',
            'icon' => '<i class="fab fa-instagram"></i>',
        ]);

        DB::table('links')->insert([
            'link' => 'https://github.com/rick98788',
            'icon' => '<i class="fab fa-github"></i>',
        ]);
    }
}
