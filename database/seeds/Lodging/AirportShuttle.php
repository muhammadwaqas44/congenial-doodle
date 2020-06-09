<?php

use Illuminate\Database\Seeder;

class AirportShuttle extends Seeder
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
                'question' => 'Hotel operator answers in 3 rings or less, greeting clear, operator pleasant, identifies hotel and themselves?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 2,
            ],
            [
                'question' => 'Guest name requested at beginning of conversation?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 2,
            ],
            [
                'question' => 'Guest name used to personalize the service from that point forward?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 2,
            ],
            [
                'question' => 'Estimated time of pick up offered, clear and accurate instructions given on where pick up will occur?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 2,
            ],
            [
                'question' => 'Pre-arranged airport transportation arrives within 5 minutes of quoted time and at the correct location?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 2,
            ],
            [
                'question' => 'Any signage used by driver is correctly spelled, attractive in design and appearance?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver introduces self to guest/consultant?, greets consultant by surname?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver neatly groomed in clean uniform, wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver offers personal assistance, actively takes possession of guest belongings loads/unloads guest luggage, driver makes active invitation to the guest to sit in the comfort of the vehicle?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver physically opens doors for guest, always ladies first, whenever possible and applicable?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 2,
            ],
            [
                'question' => "Guest offered an amenity, towels (cool or warm), bottled beverages, reading materials inclusive of the hotel/resort's branded publication available?",
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 2,
            ],
            [
                'question' => 'Current reading materials available and in good condition?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 2,
            ],
            [
                'question' => 'Guest offered choice of non alcoholic beverages and bottled water?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 2,
            ],
            [
                'question' => 'During trip from airport, driver welcomes guests to the area?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver is knowledgeable of area, describes interesting facts and information about area to guest?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver confirms return transportation options and procedures with guest?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 2,
            ],
            [
                'question' => 'Transportation drivers knowledgeable about hours of operation of outlets, activities and services of hotel and resort?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 2,
            ],
            [
                'question' => 'Exterior of car/van/tram/water taxi clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 2,
            ],
            [
                'question' => 'Transportation signage easily visible, illuminated and easily seen at night?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 2,
            ],
            [
                'question' => 'Vehicle interiors clean and in good repair?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 2,
            ],
            [
                'question' => "Driver's offer personalized service by offering a choice of music and temperature?",
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 2,
            ],
            [
                'question' => 'Ride is smooth, comfortable and quiet?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 2,
            ],
            [
                'question' => 'Driver always operates vehicle safely?',
                'possible_point' => 3,
                'question_no' => 23,
                'category_id' => 2,
            ],
            [
                'question' => 'Guest arrival well anticipated, member of management meets all VIP guests and town car service guests as they arrive at the hotel/resort?',
                'possible_point' => 3,
                'question_no' => 24,
                'category_id' => 2,
            ], [
                'question' => 'Guest/consultant is greeted by surname upon arrival?',
                'possible_point' => 3,
                'question_no' => 25,
                'category_id' => 2,
            ], [
                'question' => 'All guests arriving by hotel car will not be detained at the reception desk, but will be taken from the curbside directly to their room.',
                'possible_point' => 3,
                'question_no' => 26,
                'category_id' => 2,
            ], [
                'question' => 'No tips solicited?',
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 2,
            ], [
                'question' => 'Driver provides a fond farewell (e.g. Enjoy your stay) inclusive of use of guest name in parting comment?',
                'possible_point' => 5,
                'question_no' => 28,
                'category_id' => 2,
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
