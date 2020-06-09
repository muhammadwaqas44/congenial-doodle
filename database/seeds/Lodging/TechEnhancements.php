<?php

use Illuminate\Database\Seeder;

class TechEnhancements extends Seeder
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
                'question' => 'Is a wireless internet connection offered in the guest room?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 13,
            ],
            [
                'question' => 'Is a wireless internet connection available in the hotel lobby and common areas?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 13,
            ],
            [
                'question' => 'Is there a variety of internet speeds offered?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 13,
            ],
            [
                'question' => 'Wireless connection works with other devices (ie iPhone, Blackberry, etc)',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 13,
            ],
            [
                'question' => 'Internet Service supports a minimum of three devices?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 13,
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
