<?php

use Illuminate\Database\Seeder;

class ExecutiveLoungeFood extends Seeder
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
                'question' => 'All meal presentations occur on time, tables nicely decorated, food properly stocked and attractive in presentation, ample and appropriate clean plates, flatware, and glassware present for guest volume, serving utensils available clean and in good condition?',
                'possible_point' => 5,
                'question_no' => 1,
                'category_id' => 35,
            ],
            [
                'question' => 'All meal presentations well maintained, food items labeled, serving utensils clean, food items kept stocked and fresh in appearance, surrounding area and tables kept meticulous and clean, free of fallen food and debris?',
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 35,
            ],
            [
                'question' => 'Food product to high quality standard, food offering is of nice variety offering some regional or ethnic items, low fat items, all food is fresh, hot items kept hot, cold items kept cold, product flavor and texture good?',
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 35,
            ],
            [
                'question' => 'Beverage stations kept stocked during presentation times, full bar service available during evening service times?',
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 35,
            ],
            [
                'question' => 'Club/Concierge personnel spend the majority of their time acting as hosts/hostesses, offering additional beverage service and conversation with guests, rather than busser service just cleaning up empty plates?',
                'possible_point' => 5,
                'question_no' => 5,
                'category_id' => 35,
            ],
            [
                'question' => 'Club/Concierge personnel keep lounge area tables clean and tidy during all meal periods?',
                'possible_point' => 4,
                'question_no' => 6,
                'category_id' => 35,
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
