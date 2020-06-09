<?php

use Illuminate\Database\Seeder;

class SecurityGeneral extends Seeder
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
                'question' => 'All lost and found items properly recorded and logged?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 33,
            ],
            [
                'question' => "Guest room folio's secure, credit card number not visible on folio?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 33,
            ],
            [
                'question' => 'Security responds to distress calls and/or injuries within 5 minutes?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 33,
            ],
            [
                'question' => 'If resort cards are issued, is the staff insuring their use throughout the resort?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 33,
            ],
            [
                'question' => "Security fills out 'incident reports' for all guest injuries or losses of valuables?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 33,
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
