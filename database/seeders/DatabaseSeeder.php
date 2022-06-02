<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Rick Visser',
            'email' => 'rickvisser99@gmail.com',
            'password' => bcrypt('Riagriir14!'),
        ]);

        DB::table('links')->insert([
            'name' => 'LinkedIn',
            'link' => 'https://www.linkedin.com/in/rick-visser-394881109/',
            'icon' => '<i class="fa-brands fa-linkedin"></i>',
        ]);

        DB::table('links')->insert([
            'name' => 'GitHub',
            'link' => 'https://github.com/cytorick',
            'icon' => '<i class="fa-brands fa-github"></i>',
        ]);

        DB::table('links')->insert([
            'name' => 'Instagram',
            'link' => 'https://www.instagram.com/rick_groningen/',
            'icon' => '<i class="fa-brands fa-instagram"></i>',
        ]);

        DB::table('links')->insert([
            'name' => 'Email',
            'link' => 'rickvisser99@gmail.com',
            'icon' => '<i class="fa-solid fa-envelope"></i>',
        ]);

        DB::table('jobs')->insert([
            'id' => '1',
            'company' => 'Poiesz',
            'function' => 'Delivery Driver',
            'image' => 'poiesz.png',
            'street' => 'C. Jetserstraat 1/1',
            'place' => 'Hoogkerk',
            'website' => 'https://www.poiesz-supermarkten.nl',
            'start_date' => '2021-09-09',
            'end_date' => '2022-09-09',
            'contract_type' => 'Temporary Contract',
            'is_active' => '1',
        ]);

        DB::table('jobs')->insert([
            'id' => '2',
            'company' => 'Bouwmaat',
            'function' => 'Additional Worker',
            'image' => 'bouwmaat.png',
            'street' => 'Bornholmstraat 38',
            'place' => 'Groningen',
            'website' => 'https://www.bouwmaat.nl',
            'start_date' => '2020-06-01',
            'end_date' => '2021-06-01',
            'contract_type' => 'Temporary Contract',
            'is_active' => '0',
        ]);

        DB::table('jobs')->insert([
            'id' => '4',
            'company' => 'MediaMarkt',
            'function' => 'Sales',
            'image' => 'mediamarkt.png',
            'street' => 'Sontplein 3C',
            'place' => 'Groningen',
            'website' => 'https://www.mediamarkt.nl',
            'start_date' => '2019-06-12',
            'end_date' => '2020-02-12',
            'contract_type' => 'Temporary Contract',
            'is_active' => '0',
        ]);

        DB::table('jobs')->insert([
            'id' => '5',
            'company' => 'Action',
            'function' => 'Additional Worker',
            'image' => 'action.png',
            'street' => 'Reitdiephaven 255',
            'place' => 'Groningen',
            'website' => 'https://www.action.com/nl-nl/',
            'start_date' => '2015-12-01',
            'end_date' => '2017-03-01',
            'contract_type' => 'Temporary Contract',
            'is_active' => '0',
        ]);

        DB::table('internships')->insert([
            'id' => '1',
            'company' => 'Praes',
            'name' => 'Back-End Developer',
            'image' => 'praes.png',
            'street' => 'Stavangerweg 23-16',
            'place' => 'Groningen',
            'website' => 'https://praes.nl',
            'start_date' => '2022-02-14',
            'end_date' => '2022-07-18',
            'contract_type' => 'Internship',
            'is_active' => '1',
        ]);

        DB::table('internships')->insert([
            'id' => '2',
            'company' => 'Custom Website',
            'name' => 'Full-Stack Developer',
            'image' => 'customwebsite.png',
            'street' => 'Atoomweg 2J',
            'place' => 'Groningen',
            'website' => 'https://www.customwebsite.nl',
            'start_date' => '2019-09-01',
            'end_date' => '2020-02-01',
            'contract_type' => 'Internship',
            'is_active' => '0',
        ]);

        DB::table('schools')->insert([
            'id' => '1',
            'name' => 'Software Developer',
            'schools' => 'Alfa College',
            'image' => 'alfacollege.png',
            'street' => 'Boumaboulevard 573',
            'place' => 'Groningen',
            'start_date' => '2018-09-04',
            'end_date' => '2022-07-16',
            'is_active' => '1',
            'status' => 'Active',
        ]);

        DB::table('schools')->insert([
            'id' => '2',
            'name' => 'Civil Engineering',
            'schools' => 'Alfa College',
            'image' => 'alfacollege.png',
            'street' => 'Admiraal de Ruyterlaan 2',
            'place' => 'Groningen',
            'start_date' => '2017-09-04',
            'end_date' => '2018-07-15',
            'is_active' => '0',
            'status' => 'Terminated (no diploma)',
        ]);

        DB::table('schools')->insert([
            'id' => '3',
            'name' => 'VMBO-TL (mavo)',
            'schools' => 'CSG Selion',
            'image' => 'selion.png',
            'street' => 'Diamantlaan 14',
            'place' => 'Groningen',
            'start_date' => '2012-09-03',
            'end_date' => '2017-06-20',
            'is_active' => '0',
            'status' => 'Graduated',
        ]);

        DB::table('certificates')->insert([
            'id' => '1',
            'name' => 'Forklift',
            'schools' => 'SBK Opleidingen',
            'image' => 'sbk.png',
            'street' => 'Bornholmstraat 15',
            'place' => 'Groningen',
            'start_date' => '2021-07-14',
            'end_date' => '2026-07-16',
        ]);

        DB::table('certificates')->insert([
            'id' => '2',
            'name' => 'VCA Vol',
            'schools' => 'STE Examenbureau',
            'image' => 'ste.png',
            'street' => 'Admiraal de Ruyterlaan 2',
            'place' => 'Groningen',
            'start_date' => '2017-06-15',
            'end_date' => '2027-06-17',
        ]);

        DB::table('certificates')->insert([
            'id' => '3',
            'name' => 'Programming with SQL',
            'schools' => 'Oracle',
            'image' => 'oracle.png',
            'street' => 'Boumaboulevard 573',
            'place' => 'Groningen',
            'start_date' => '2022-02-08',
            'end_date' => null,
        ]);

        DB::table('certificates')->insert([
            'id' => '4',
            'name' => 'Database Designer',
            'schools' => 'Oracle',
            'image' => 'oracle.png',
            'street' => 'Boumaboulevard 573',
            'place' => 'Groningen',
            'start_date' => '2021-06-01',
            'end_date' => null,
        ]);

        DB::table('certificates')->insert([
            'id' => '5',
            'name' => 'Drivers License B',
            'schools' => 'CBR',
            'image' => 'cbr.png',
            'street' => 'Protonstraat 3',
            'place' => 'Groningen',
            'start_date' => '2018-07-20',
            'end_date' => null,
        ]);

        DB::table('skills')->insert([
            'id' => '1',
            'name' => 'Laravel',
            'icon' => '<i class="fa-brands fa-laravel"></i>',
            'color' => 'red',
        ]);

        DB::table('skills')->insert([
            'id' => '2',
            'name' => 'PHP',
            'icon' => '<i class="fa-brands fa-php"></i>',
            'color' => '#474A8A',
        ]);

        DB::table('skills')->insert([
            'id' => '3',
            'name' => 'Windows',
            'icon' => '<i class="fa-brands fa-windows"></i>',
            'color' => '#00a1f1',
        ]);

        DB::table('skills')->insert([
            'id' => '4',
            'name' => 'Mac',
            'icon' => '<i class="fa-brands fa-apple"></i>',
            'color' => 'white',
        ]);

        DB::table('skills')->insert([
            'id' => '5',
            'name' => 'HTML5',
            'icon' => '<i class="fa-brands fa-html5"></i>',
            'color' => '#E44D26',
        ]);

        DB::table('skills')->insert([
            'id' => '6',
            'name' => 'CSS',
            'icon' => '<i class="fa-brands fa-css3-alt"></i>',
            'color' => '#2965f1',
        ]);

        DB::table('languages')->insert([
            'name' => 'Dutch',
            'percentage' => '90',
            'level' => 'Mother Tongue',
        ]);

        DB::table('languages')->insert([
            'name' => 'English',
            'percentage' => '65',
            'level' => 'Medior',
        ]);

        DB::table('languages')->insert([
            'name' => 'German',
            'percentage' => '30',
            'level' => 'Beginner',
        ]);
    }
}
