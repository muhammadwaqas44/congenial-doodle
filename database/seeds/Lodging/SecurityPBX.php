<?php

use Illuminate\Database\Seeder;

class SecurityPBX extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms= [
            [
                'question' => 'Incoming external calls connected only if guest name is provided?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 31,
            ],
            [
                'question' => 'Incoming external calls who give guest name and request room number politely told room number is confidential?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 31,
            ],
            [
                'question' => 'Unanswered wake up calls responded to by security in a timely manner?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 31,
            ]

        ];
        foreach ($forms as $form) {
            \App\GenericForm::create([
                'question' => $form['question'],
                'possible_point' => $form['possible_point'],
                'question_no' => $form['question_no'],
                'category_id' => $form['category_id'],
            ]);
        }
    }
}
