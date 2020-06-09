<?php

use Illuminate\Database\Seeder;

class DepartureValet extends Seeder
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
                'question' => "	If called from guestroom, car available as guest/consultant leaves the building?, if called by front desk or at hotel/resort entrance, car is delivered within 10 minutes?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 50,
            ],
            [
                'question' => "Valet personnel well groomed even in inclement weather, in uniforms that are well kept, clean and appropriate and includes nametag, if applicable?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 50,
            ],
            [
                'question' => "Valet/parking attendant smiles or offers pleasant expression, offers full attention and makes good eye contact with guest at all times during conversations?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 50,
            ],
            [
                'question' => "Valet's verify owner's identity before turning over car keys, utilizing the guest name thereafter to personalize the service to the highest possible level?",
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 50,
            ],
            [
                'question' => "Valet's return car in guest comfortable condition, if inclement weather, the seats are wiped down, radio and seats returned to same guest position, temperature controls set appropriately to the weather conditions for guest comfort?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 50,
            ],
            [
                'question' => "Umbrella service provided, if applicable during inclement weather?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 50,
            ],
            [
                'question' => "Valets offer directions to next destination, written directions or GPS addresses and directions offered if inquired?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 50,
            ],
            [
                'question' => "Valets offer bottled water to all departing guests?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 50,
            ],
            [
                'question' => "Any valuables, jewelry or money is intact and remains untouched?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 50,
            ],
            [
                'question' => "Valet parking accessible 24 hours per day?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 50,
            ],
            [
                'question' => "	Valet provides a fond farewell (e.g. Have a safe journey home) inclusive of use of guest name in parting comment?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 50,
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
