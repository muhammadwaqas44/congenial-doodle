<?php

use Illuminate\Database\Seeder;

class Transportation extends Seeder
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
                'question' => 'Transportation operator answers in 3 rings or less, greeting clear, operator pleasant?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 16,
            ],
            [
                'question' => 'Tram/Van/ transportation arrives within 5 minutes of call or within the time frame offered?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver neatly groomed in a clean, appropriate uniform that in good condition, driver wearing a nametag (if applicable)?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver offers personal assistance whenever possible, opening doors for guests, assisting guests into the vehicle and actively offers to assist guest with belongings loads/unloads guest belongings?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver is knowledgeable of resort, outlets, current hours of operation and resort promotions?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver confirms return transportation options and procedures with guest?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 16,
            ],
            [
                'question' => 'Transportation signage easily visible, illuminated and easily seen at night? Exterior of car/van/tram/water taxi clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 16,
            ],
            [
                'question' => 'Vehicle interiors clean and in good repair?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver always operates vehicle safely? Ride is smooth, comfortable and quiet?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 16,
            ],
            [
                'question' => 'No tips solicited?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 16,
            ],
            [
                'question' => 'Driver provides a fond farewell (e.g. Enjoy your dinner, day at the beach, etc) in parting comment?',
                'possible_point' => 5,
                'question_no' => 11,
                'category_id' => 16,
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
