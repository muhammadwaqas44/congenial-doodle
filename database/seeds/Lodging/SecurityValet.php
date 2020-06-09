<?php

use Illuminate\Database\Seeder;

class SecurityValet extends Seeder
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
                'question' => 'If cash payment, transactions appear normal?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 32,
            ],
            [
                'question' => 'Cash/items left in car not touched or removed?',
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 32,
            ],
            [
                'question' => 'Valets verify and reconcile claim stub or guest name before turning over keys and ownership of car?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 32,
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
