<?php

use Illuminate\Database\Seeder;

class RoomReMake extends Seeder
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
                'question' => 'Request for room makeup satisfied within 30 minutes of request?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 15,
            ],
            [
                'question' => 'Room attendants knock twice before entering room announcing themselves?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 15,
            ],
            [
                'question' => 'Room attendants always respect "Do Not Disturb" signage both in person and by telephone?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 15,
            ],
            [
                'question' => 'When a housekeeper enters a room with the guest present, housekeeper should first excuse themselves, apologize for the inconvenience and ask if service is required at that time?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 15,
            ],
            [
                'question' => 'Sheets and pillow cases changed in accordance with hotel policy unless otherwise specified? Linens tightly tucked in and refitted to bed?',
                'possible_point' => 4,
                'question_no' => 5,
                'category_id' => 15,
            ],
            [
                'question' => 'Bed made to original standard at check in with bedspread placed neatly back onto the bed,all decorative pillows and shams arranged decoratively daily?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 15,
            ],
            [
                'question' => '	Guest clothing picked up and folded or otherwise arranged? Guest shoes paired neatly and left in approximate place guest left them or out of the way?',
                'possible_point' => 4,
                'question_no' => 7,
                'category_id' => 15,
            ],
            [
                'question' => 'Guest room ambiance inviting and appropriate to time of day. Ambiance should be bright and inviting, draperies open, room freshener used?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 15,
            ],
            [
                'question' => 'All ashtrays and wastebaskets emptied and clean?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 15,
            ],
            [
                'question' => 'All complimentary presentations replaced or replenished as needed (pens and notepads, coffee station supplies, stationary bottled waters/glassware, valet-laundry set ups)?',
                'possible_point' => 4,
                'question_no' => 10,
                'category_id' => 15,
            ],
            [
                'question' => 'Newspapers and magazines on floor returned to proper places, magazine displays reorganized?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 15,
            ],
            [
                'question' => "Housekeeper has removed any obvious trash and used food and beverage articles, room service supplies from the tabletops, desk top and other guestroom areas prior to the guest's return?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 15,
            ],
            [
                'question' => 'Carpeting vacuumed daily, tiled or wood flooring swept daily?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 15,
            ],
            [
                'question' => 'Repair issues brought to the attention of maintenance and repaired with urgency?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 15,
            ],
            [
                'question' => 'All low level ledges and furniture touched up and dusted daily?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 15,
            ],
            [
                'question' => 'Lights, television and remote control operation checked to insure proper working condition. Remote returned to original placement at check in?',
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 15,
            ],
            [
                'question' => 'Bathroom floor swept and mopped daily?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 15,
            ],
            [
                'question' => 'Vanity sinks cleaned, rinsed and dried daily? Vanity fixtures cleaned, dried and re-polished to a high level of shine? Personal toiletries straightened out, placed upright, and arranged on a cloth?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 15,
            ],
            [
                'question' => 'Fresh soaps and amenities generously replenished, guest never uses the last of anything and guest never feels as if they will be left without any supply?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 15,
            ],
            [
                'question' => 'Bathtub area cleaned and rinsed daily? Bathtub fixtures cleaned, dried and re-polished to a high level of shine? Soaps replenished?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 15,
            ],
            [
                'question' => 'Shower area cleaned and rinsed daily, walls and shower stall doors cleaned and dried? Shower fixtures cleaned and polished to a high level of shine?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 15,
            ],
            [
                'question' => 'Commode cleaned and rinsed, free of any soil or excrement?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 15,
            ],
            [
                'question' => 'Used linen removed and replaced with fresh linens as needed?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 15,
            ],
            [
                'question' => 'Paper products stocked and neat, toilet tissue re-creased and monogrammed (if applicable)?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 15,
            ],
            [
                'question' => 'All room furniture returned to original position, including ironing board and iron?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 15,
            ],
            [
                'question' => 'Upon leaving a room with a guest present, housekeeping should bid a pleasant farewell upon departure.',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 15,
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
