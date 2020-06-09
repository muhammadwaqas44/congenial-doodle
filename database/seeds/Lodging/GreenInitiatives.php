<?php

use Illuminate\Database\Seeder;

class GreenInitiatives extends Seeder
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
                'question' => 'Card in guest room indicating green policies for changing and making beds?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 12,
            ],
            [
                'question' => 'Cards in bathrooms indicating green policy for washing towels?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 12,
            ],
            [
                'question' => 'Valet/laundry bags made from recycle materials?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 12,
            ],
            [
                'question' => '	Available recycling bin providing in room?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 12,
            ],
            [
                'question' => 'Use of fluorescent light bulbs in light fixtures?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 12,
            ],
            [
                'question' => 'Card present in room inspiring guest to turn off electrical fixtures when guestroom is not occupied?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 12,
            ],
            [
                'question' => 'In suites, are energy efficient appliances present?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 12,
            ],
            [
                'question' => 'Does guest bathroom possess a low-flow shower head?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 12,
            ],
            [
                'question' => 'Bathrooms possess high compression commodes?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 12,
            ],
            [
                'question' => 'HVAC system automatically shuts off when exterior doors are open?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 12,
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
