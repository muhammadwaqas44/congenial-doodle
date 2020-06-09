<?php

use Illuminate\Database\Seeder;

class Housekeeping extends Seeder
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
                'question' => "Call for service answered in a timely manner under 3 rings?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 23,
            ],
            [
                'question' => 'Employee\'s voice warm, "smiles through the phone" Employee greeting is professional in nature, employee always speaks clearly utilizing proper verbiage identifies self as they offer to assist?',
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 23,
            ],
            [
                'question' => "GSR utilizes caller ID to personalize service in greeting and during conversation, frequently?",
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 23,
            ],
            [
                'question' => "Requests acknowledged verbally and estimated time of delivery is offered?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 23,
            ],
            [
                'question' => 'If applicable, GSR anticipates needs well offering an item or service that would compliment the stated need?, ie; "Would you like shaving cream in addition to the razor"?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 23,
            ],
            [
                'question' => "GSR inquires if additional services are needed before terminating the call?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 23,
            ],
            [
                'question' => "Items or requested services provided as promised/expected within 20 minutes time?",
                'possible_point' => 5,
                'question_no' => 7,
                'category_id' => 23,
            ],
            [
                'question' => "Staff neatly groomed, uniform appropriate, neat clean, nametag worn?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 23,
            ],
            [
                'question' => "GSR greets guest by name, smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they present their services?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 23,
            ],
            [
                'question' => 'If applicable, GSR anticipates needs well offering to further service guest;, ie; "here is the luggage rack you requested, let me put the suitcase on it for you".',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 23,
            ],
            [
                'question' => "GSR service initiated with follows up within 1 hour to ensure service was performed or item requested delivered?",
                'possible_point' => 4,
                'question_no' => 11,
                'category_id' => 23,
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
