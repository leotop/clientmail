<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert(['name' => 'Vitalii', 'email' => 'vdobos@mail.ru', 'password' => 22]);
        DB::table('sendmail')->insert([
            ['email' => 'celius55@yahoo.com',
            'nume' => 'admin',
            'prenume' => 'admin',
            'ziua' => 7,
            'luna' => 8,
            'sexul' => 'masculin',
            'compania' => 'Laravel'],

            ['email' => 'marahovschii.victor@mail.ru',
            'nume' => 'admin',
            'prenume' => 'admin',
            'ziua' => 7,
            'luna' => 8,
            'sexul' => 'masculin',
            'compania' => 'Laravel'],

            ['email' => 'vdobos@mail.ru',
            'nume' => 'vitalii',
            'prenume' => 'dobos',
            'ziua' => 22,
            'luna' => 2,
            'sexul' => 'masculin',
            'compania' => 'fizica'],

            ['email' => 'vitalii732002@yahoo.com',
            'nume' => 'vitalii',
            'prenume' => 'dobos',
            'ziua' => 22,
            'luna' => 2,
            'sexul' => 'masculin',
            'compania' => 'fizica'],

            ['email' => 'berdean@rambler.ru',
            'nume' => 'natalia',
            'prenume' => 'berdea',
            'ziua' => 8,
            'luna' => 3,
            'sexul' => 'femenin',
            'compania' => 'fizica'],

            ['email' => 'matematica.72@mail.ru',
            'nume' => 'lilia',
            'prenume' => 'brinza',
            'ziua' => 0,
            'luna' => 0,
            'sexul' => 'femenin',
            'compania' => 'fizica']
        ]);
    }
}
