<?php

use Illuminate\Database\Seeder;

class StatuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statues= ['None','Start Consultant', 'Submitted By Consultant','Start Editor','Back To Consultant','Submitted By Editor'];

        foreach ($statues as $statue) {
            \App\Status::create(['name' => $statue]);
        }
    }
}
