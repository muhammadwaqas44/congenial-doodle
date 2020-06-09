<?php

use Illuminate\Database\Seeder;

class Directions extends Seeder
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
                'question' => 'No guest waits longer than 5 minutes to be assisted by concierge personnel?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 20,
            ],
            [
                'question' => 'GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach desk (within 5 feet of the desk)?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 20,
            ],
            [
                'question' => 'Concierge personnel always greet the guest first with professionalism and warmth, with an offer of assistance that is sincere and hospitable?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 20,
            ],
            [
                'question' => 'Staff neatly groomed in appropriate uniform, pressed, neat and clean, wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 20,
            ],
            [
                'question' => "GSRs ask questions to fully determine the guest's final objective without heavy prompting and do not simply answer a question. Seek purpose of trip - Ex:",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 20,
            ],
            [
                'question' => "Does GSR offer an alternative in order to service the guest more efficiently? Ex.",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 20,
            ],
            [
                'question' => 'All information is accurate, and GSR does not mislead guest. GSR offers to ascertain hours of operation/product availability before sending guest on their way.',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 20,
            ],
            [
                'question' => "Area maps available and used GSR's pointing out and highlighting suggested route on the map?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 20,
            ],
            [
                'question' => 'GSR offers to print out directions for guest?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 20,
            ],
            [
                'question' => 'GSR anticipates guest need by offering to assist with transportation options and necessary scheduling of transportation?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 20,
            ],
            [
                'question' => 'Concierge or GSR seek to provide additional service?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 20,
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
