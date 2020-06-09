<?php

use Illuminate\Database\Seeder;

class Beach extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            [
                'question' => "	Signs present indicating lifeguard availability and guest responsibility?",
                'possible_point' => 5,
                'question_no' => 1,
                'category_id' => 42,
            ],
            [
                'question' => "Index of hazard symbols and beach awareness symbols present and being utilized?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 42,
            ],
            [
                'question' => "Beach area clean and free of litter?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 42,
            ],
            [
                'question' => "Beach groomed daily?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 42,
            ],
            [
                'question' => 'All beach furniture in good condition and repair free of rust, missing slats, bent or damaged framing, cushioning is free of any rips tears or gouges?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 42,
            ],
            [
                'question' => "All covered canopies and umbrellas are clean, free of soil build up, bird droppings, leaves and debris?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 42,
            ],
            [
                'question' => "Towel service available and provided by attendants, setting up chaise seating?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 42,
            ],
            [
                'question' => "Food and beverage services available?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 42,
            ],
            [
                'question' => "System of signaling for food and beverage service incorporated in reserved seating areas?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 42,
            ],
            [
                'question' => 'Refreshments offered within 15 minutes of sitting down at reserved seating?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 42,
            ],
            [
                'question' => '	Refreshments or water regularly offered within 15 minute intervals?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 42,
            ],
            [
                'question' => 'Towels stations available with ample supply of towels?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 42,
            ],
            [
                'question' => 'Supply of sun care products and child floatation devices available?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 42,
            ],
            [
                'question' => 'Towe3l bins provided, attractive not overflowing?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 42,
            ],
            [
                'question' => 'Beach services provided, when taken fully explained?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 42,
            ],
            [
                'question' => 'Convenient, operable beach shower, foot bath available and clean?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 42,
            ],


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
