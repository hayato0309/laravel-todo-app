<?php

use Illuminate\Database\Seeder;
use Faker\Provider\tr_TR\DateTime;
use Illuminate\Support\Facades\Date;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodys = ['Clean the room.', 'Study Laravel.', 'Study English.'];
        foreach ($bodys as $body) {
            DB::table('todos')->insert([
                'body' => $body,
                'created_at' => '2021-06-24',
                'updated_at' => '2021-06-24'
                // 'created_at' => new DateTime(),
                // 'updated_at' => new DateTime()
            ]);
        }
    }
}
