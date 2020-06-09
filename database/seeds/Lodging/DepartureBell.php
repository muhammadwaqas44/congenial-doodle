<?php

use Illuminate\Database\Seeder;

class DepartureBell extends Seeder
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
                'question' => "Bell stand phone answered in 3 rings or less?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 47,
            ],
            [
                'question' => "Initial greeting is clear and audible, GSR speaks slowly and clearly, easily understood?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 47,
            ],
            [
                'question' => "GSR identifies themselves?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 47,
            ],
            [
                'question' => "Bell personnel utilize caller identification system effectively and greets guest by surname?",
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person offers estimate on when service will arrive?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person arrives to pick up luggage within 5 minutes of call, knocks three times on the door announcing themselves and intention?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person smiles or offers pleasant expression, makes good eye contact with guest and greets the consultant/guest by surname to personalize the service to the highest level?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 47,
            ],
            [
                'question' => "Bell personnel are well groomed, in uniform that is neat, clean, pressed and includes a nametag, if applicable?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 47,
            ],
            [
                'question' => "Bell personnel always uses proper verbiage (e.g. My pleasure, yes, immediately, of course, etc?)",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 47,
            ],
            [
                'question' => "Bell staff always uses door stop, not a piece of consultant's luggage while delivering luggage?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person effectively loads luggage onto bell cart, bell carts is clean and in good condition?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person does a final check of room inclusive of bathroom, closets and electrical sockets at desk and nightstand to insure that the guest has not left anything behind?",
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person offers guest alternative of being escorted down or coming down at own pace?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person inquires about transportation from hotel, offers to call for the guest/consultant's car?",
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person at a minimum inquires about stay, addresses any concerns brought to him by consultant immediately to management?",
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 47,
            ],
            [
                'question' => "Bell service or luggage assistance available 24 hours daily?",
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person escorts guest making pleasant conversation along the way seeking some commonality to personalize the service to the guest",
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person either waits for guest to complete checkout and then escorts guest to hotel entry or offers verbal direction on sequence of services to follow?",
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 47,
            ],
            [
                'question' => "Bell person provides a fond farewell (e.g. Have a safe journey home) inclusive of use of guest name in parting comment?",
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 47,
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
