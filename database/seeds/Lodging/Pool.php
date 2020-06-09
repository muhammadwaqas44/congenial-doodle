<?php

use Illuminate\Database\Seeder;

class Pool extends Seeder
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
                'question' => "Signs present indicating lifeguard availability and guest responsibility?",
                'possible_point' => 5,
                'question_no' => 1,
                'category_id' => 41,
            ],
            [
                'question' => "Poolside rescue equipment readily available, including extendible hook and two life safety devices?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 41,
            ],
            [
                'question' => "Pool and pool area illuminated after dark, no burned out bulbs?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 41,
            ],
            [
                'question' => "Pool decking and patio clean, free of debris and leaves?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 41,
            ],
            [
                'question' => "Pool decking and patio in good condition and repair free of cracks, discoloration, damage of any kind?",
                'possible_point' => 4,
                'question_no' => 5,
                'category_id' => 41,
            ],
            [
                'question' => "Pool lining, marcite and inner tile clean, free of algae, build up and leaves?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 41,
            ],
            [
                'question' => "Pool lining, marcite and tile clean, in good condition and repair free of cracks, stains or other damage?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 41,
            ],
            [
                'question' => "Pool water clean and clear and inviting?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 41,
            ],
            [
                'question' => "Pool water temperature comfortable, between 80 and 82 degrees?",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 41,
            ],
            [
                'question' => "	Any pool recreational amenities, slides, fountains, baby pools etc, as expected, working properly and appealing?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 41,
            ],
            [
                'question' => "Hot tub/Jacuzzi available?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 41,
            ],
            [
                'question' => "Hot Tub lining, marcite and inner tile clean, free of algae, build up and leaves?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 41,
            ],
            [
                'question' => "Hot Tub lining, marcite and tile clean, in good condition and repair free of cracks, stains or other damage?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 41,
            ],
            [
                'question' => "Hot tub water clean and clear and inviting?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 41,
            ],
            [
                'question' => "Hot Tub/Jacuzzi motor mechanisms working properly, automatic or easy for guest to understand and operate?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 41,
            ],
            [
                'question' => "Temperature of Hot Tub/Jacuzzi prominently posted?",
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 41,
            ],
            [
                'question' => "Health and safety disclaimers associated with Hot Tub/Jacuzzi prominently posted in close proximity?",
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 41,
            ],
            [
                'question' => "All poolside lounge furniture neatly and uniformly lined and arranged each morning?",
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 41,
            ],
            [
                'question' => "All poolside lounge and seating furniture neatly and uniformly lined and re-arranged as needed throughout the day?",
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 41,
            ],
            [
                'question' => "All poolside lounge and seating furniture clean free of soil build up and staining?",
                'possible_point' => 4,
                'question_no' => 20,
                'category_id' => 41,
            ],
            [
                'question' => "All poolside furniture in good condition and repair free of rust, missing slats, bent or damaged framing, cushioning is free of any rips tears or gouges?",
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 41,
            ],
            [
                'question' => "All covered canopies and umbrellas are clean, free of soil build up, bird droppings, leaves and debris?",
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 41,
            ],
            [
                'question' => "Adequate tables and chairs available for guest use?",
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 41,
            ],
            [
                'question' => "Towel service available and provided by attendants, setting up chaise seating?",
                'possible_point' => 3,
                'question_no' => 24,
                'category_id' => 41,
            ],
            [
                'question' => "Attendants vigil and aware of vacated lounge seating removing soiled towels within 20 minutes of guests departing so that other guests might be encouraged to lounge?",
                'possible_point' => 3,
                'question_no' => 25,
                'category_id' => 41,
            ],
            [
                'question' => "Food and beverage services available?",
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 41,
            ],
            [
                'question' => "Refreshments offered within 15 minutes of sitting down at pool lounge seating?",
                'possible_point' => 2,
                'question_no' => 27,
                'category_id' => 41,
            ],
            [
                'question' => "Refreshments or water regularly offered within 15 minute intervals?",
                'possible_point' => 2,
                'question_no' => 28,
                'category_id' => 41,
            ],
            [
                'question' => "Towels stations available with ample supply of towels?",
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 41,
            ],
            [
                'question' => "Supply of sun care products and child floatation devices available?",
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 41,
            ],
            [
                'question' => "Towel bins provided, attractive not overflowing?",
                'possible_point' => 2,
                'question_no' => 31,
                'category_id' => 41,
            ],
            [
                'question' => "Decking area kept free of soiled towels?",
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 41,
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
