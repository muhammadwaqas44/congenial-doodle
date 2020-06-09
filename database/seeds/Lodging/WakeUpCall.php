<?php

use Illuminate\Database\Seeder;

class WakeUpCall extends Seeder
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
                'question' => "Automated wake up call systems easy to understand and program, function effectively?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 27,
            ],
            [
                'question' => "Live wake up requests, staff utilizes caller ID system to use guest surname both while taking the wake up call requests and when terminating the call to personalize service to the highest degree?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 27,
            ],
            [
                'question' => "Room number and wake up call time repeated and confirmed and guest needs are well anticipated as GSR extends an offer of additional services such as follow up calls or morning in room dining order placement is offered?",
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 27,
            ],
            [
                'question' => 'Telephone conversation is closed with a pleasant final, personalized remark? (i.e.: "Pleasant dreams Mr. Smith")',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 27,
            ],
            [
                'question' => 'Live and recorded wake up calls and follow up calls received within 5 minutes of requested time?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 27,
            ],
            [
                'question' => "Guest surname used during live wake up calls to personalize the service, attendant voice smiles through the phone lines with warmth in voice?(unless recorded), greeting pleasant and cheery?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 27,
            ],
            [
                'question' => "Guest needs are well anticipated as GSR extends an offer of additional services such as follow up calls or transfers to in room dining to place an order?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 27,
            ],
            [
                'question' => "Recorded wake up calls properly cued and clear, calls not received mid message or dead air evident?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 27,
            ],
            [
                'question' => "Time of day, temperature and weather provided, even if message is recorded?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 27,
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
