<?php

use Illuminate\Database\Seeder;

class Maintenance extends Seeder
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
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 25,
            ],
            [
                'question' => "Employee's voice warm, \"smiles through the phone\" Employee greeting is professional in nature, employee always speaks clearly utilizing proper verbiage identifies self as they offer to assist?",
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 25,
            ],
            [
                'question' => "GSR utilizes caller ID to personalize service in greeting and during conversation, frequently?",
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 25,
            ],
            [
                'question' => "Requests acknowledged verbally and estimated time of service is offered?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 25,
            ],
            [
                'question' => 'Service provided within 30 minutes, problem is either resolved, guest offered room change, or room charge deleted?',
                'possible_point' => 5,
                'question_no' => 5,
                'category_id' => 25,
            ],
            [
                'question' => "Engineer appearance neat, in uniform with nametag. Engineer uses guest surname?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 25,
            ],
            [
                'question' => "Engineer greets guest by name, smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they present their services?",
                'possible_point' => 4,
                'question_no' => 7,
                'category_id' => 25,
            ],
            [
                'question' => "Engineer competent and efficient in making repair, all tools removed, repair area cleaned up?",
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 25,
            ],
            [
                'question' => "If repair occurred when consultant was not present, a card or note left in room indicating service was provided?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 25,
            ],
            [
                'question' => 'Engineer apologized for the problem and wished the guest a pleasant day?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 25,
            ],
            [
                'question' => 'Member of guest services or management follows up and contacts the guest to ensure that the service has been performed and that the guest is now satisfied with the room?',
                'possible_point' => 5,
                'question_no' => 11,
                'category_id' => 25,
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
