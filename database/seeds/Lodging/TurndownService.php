<?php

use Illuminate\Database\Seeder;

class TurndownService extends Seeder
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
                'question' => 'Turndown Service automatically provided each night?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 14,
            ],
            [
                'question' => 'If turndown service was requested at a specific time, was the service executed within 15 minutes of the time requested by the guest?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 14,
            ],
            [
                'question' => 'Bedspread removed or neatly folded back? Sheets and pillows neatly turned, linens tucked, bed looks comfortable?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 14,
            ],
            [
                'question' => 'Bedspread and throw pillows placed in a discreet location out of ordinary view?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 14,
            ],
            [
                'question' => 'Amenity or unique night-time ritual incorporated?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 14,
            ],
            [
                'question' => 'Bottled water placed bedside on nightstand for each guest?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 14,
            ],
            [
                'question' => 'Draperies closed?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 14,
            ],
            [
                'question' => 'Guest room ambiance inviting and appropriate to comfortable night-time warm and comforting environment demonstrated through draperies closed, low level lighting, television turned off or set to the information/hotel/resort promotional channel at low volume? If television is turned off, music on and set to low volume?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 14,
            ],
            [
                'question' => 'Guest clothing picked up and folded or otherwise arranged? Guest shoes paired neatly and left in approximate place guest left them or out of the way?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 14,
            ],
            [
                'question' => 'Housekeeper fills ice bucket?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 14,
            ],
            [
                'question' => "Newspapers and magazines on floor returned to proper places, magazine displays reorganized? Housekeeper has removed any obvious trash and used food and beverage articles, room service supplies from the tabletops, desk top and other guestroom areas prior to the guest's return? All wastebaskets emptied and clean?",
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 14,
            ],
            [
                'question' => 'Personal toiletries straightened out, placed upright, and arranged on a cloth? Vanity sinks cleaned, rinsed and dried? Vanity fixtures cleaned, dried and re-polished to a high level of shine?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 14,
            ],
            [
                'question' => 'Fresh soaps and amenities generously replenished, guest never uses the last of anything and guest never feels as if they will be left without any supply?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 14,
            ],
            [
                'question' => 'Used linen removed and replaced with fresh linens as needed?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 14,
            ],
            [
                'question' => 'Paper products stocked and neat, toilet tissue re-creased and monogrammed (if applicable)?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 14,
            ],
            [
                'question' => 'All room furniture returned to original position, including ironing board and iron?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 14,
            ],
            [
                'question' => 'Temperature/weather conditions presented in written form for the following day at bedside?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 14,
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
