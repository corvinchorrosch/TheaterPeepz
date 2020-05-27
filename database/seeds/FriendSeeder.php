<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('friends')->insert([
            'name'=> 'Klaus Müller',
            'mail'=> 'klausmueller@test.de'
        ]);

        DB::table('friends')->insert([
            'name'=> 'Horst Gunter',
            'mail'=> 'horstgunter@test.de'
        ]);

        DB::table('friends')->insert([
            'name'=> 'Lisa Shari',
            'mail'=> 'lisashari@test.de'
        ]);

        DB::table('friends')->insert([
            'name'=> 'Corvin Chorrosch',
            'mail'=> 'c_chorrosch@test.de'
        ]);

        DB::table('friends')->insert([
            'name'=> 'Ingo Flamingo',
            'mail'=> 'ingoflamingo@test.de'
        ]);
    }
}
