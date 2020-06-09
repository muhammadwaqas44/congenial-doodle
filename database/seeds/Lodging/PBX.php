<?php

use Illuminate\Database\Seeder;

class PBX extends Seeder
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
                'question' => "External calls consistently are answered within 3 rings by hotel operator who identifies self and hotel/resort contacted, and if necessary, location?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 26,
            ],
            [
                'question' => "PBX personnel enunciate well, employee's voice is pleasant and understandable, employee greeting is professional in nature as they offer to assist?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 26,
            ],
            [
                'question' => "Operator knowledgeable of hotel staff names and departments, facilities and telephone extensions?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 26,
            ],
            [
                'question' => "Internal calls consistently are answered within 3 rings by hotel operator who identifies self and department as they offer to assist?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 26,
            ],
            [
                'question' => 'GSR uses caller ID system to personalize the service by using the guest name in greeting and comfortably during conversation, attendant courteous & knowledgeable, voice smiles through the phone lines with warmth in voice?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 26,
            ],
            [
                'question' => "Requests acknowledged verbally and pleasantly when connecting call?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 26,
            ],
            [
                'question' => "Automatic message service offered or operator offers to take message prior to 6th ring?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 26,
            ],
            [
                'question' => "Voice mail operating properly, audio quality is excellent? Message light promptly illuminated in guest room within 5 minutes of receiving message, full message received?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 26,
            ],
            [
                'question' => "Voice mail system is easy to use and understand and effective for callers and recipients alike?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 26,
            ],
            [
                'question' => 'Operator asks for and waits for response whenever putting guest on hold, and operator then thanks guest for waiting?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 26,
            ],
            [
                'question' => 'Caller never placed on hold longer than 30 seconds?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 26,
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
