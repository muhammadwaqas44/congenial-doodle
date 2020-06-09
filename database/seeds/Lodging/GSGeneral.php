<?php

use Illuminate\Database\Seeder;

class GSGeneral extends Seeder
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
                'question' => 'Guest receives a welcome phone call or amenity presentation within one hour of checking in to insure satisfaction with room and to offer assistance on guest needs?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 17,
            ],
            [
                'question' => "Children's Club, featuring supervised cultural and entertainment activities at least 8 hours daily at resort's?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 17,
            ],
            [
                'question' => "GSR's demonstrate that customer service isn't a department or one department's responsibility? GSR is proactive and empathetic toward the complete needs of guest satisfaction that even if a problem with one aspect of their stay that doesn't affect their immediate job responsibilities, is directed to and followed up upon by that employee?",
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 17,
            ],
            [
                'question' => 'Employees passing guests in common areas, corridors, lobby, property grounds extend greetings first, make eye contact and smile?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 17,
            ],
            [
                'question' => 'GSRs met in common areas offer at least partial escort to guests rather than pointing out directions?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 17,
            ],
            [
                'question' => 'If guest moves to a different room accommodation, the guest services staff informs all relevant departments (e.g. PBX, Front Desk, Housekeeping? )',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 17,
            ],
            [
                'question' => 'Concierge or guest relations staff speak a minimum of two languages?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 17,
            ],
            [
                'question' => 'Resort properties offering vacation ownership possibilities handle solicitation with the highest degree of professionalism?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 17,
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
