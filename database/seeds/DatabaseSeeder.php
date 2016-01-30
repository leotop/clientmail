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
            'email' => 'celius55@yahoo.com',
            'nume' => 'admin_nume',
            'prenume' => 'admin_prenume',
            'ziua' => 7,
            'luna' => 8,
            'sexul' => 'masculin',
            'compania' => 'Laravel' 
        ]);

        DB::table('sendmail')->insert([
            'email' => 'celius55@yahoo.com2',
            'nume' => 'admin_nume2',
            'prenume' => 'admin_prenume2',
            'ziua' => 72,
            'luna' => 82,
            'sexul' => 'masculin2',
            'compania' => 'Laravel2' 
        ]);
    }
}
