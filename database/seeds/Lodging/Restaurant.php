<?php

use Illuminate\Database\Seeder;

class Restaurant extends Seeder
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
                'category_id' => 18,
            ],
            [
                'question' => 'GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach desk (within 5 feet of the desk)?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 18,
            ],
            [
                'question' => 'Concierge personnel always greet the guest first with professionalism and warmth, with an offer of assistance that is sincere and hospitable?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 18,
            ],
            [
                'question' => 'Staff neatly groomed in appropriate uniform, pressed, neat and clean, wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 18,
            ],
            [
                'question' => 'Courteous and friendly service extended, once identified, guest surname used in conversation comfortably to personalize the service?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 18,
            ],
            [
                'question' => "GSRs ask questions to fully determine the guest's final objective without heavy prompting and do not simply answer a question. Ex:",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 18,
            ],
            [
                'question' => 'GSR suggests hotel outlets and amenities before referring guest off property?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 18,
            ],
            [
                'question' => 'Menus of recommended hotel restaurants are available for review and presented without request?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 18,
            ],
            [
                'question' => 'Concierge or GSR extends an offer to make the reservation for the guest, obtains specifics of party number, time, preference etc?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 18,
            ],
            [
                'question' => 'oncierge or GSR anticipates future needs of guest or special requests, inquiring about transportation needs of guest to the restaurant, provides without prompting a written confirmation of the reservation, written information including the address, telephone number of the restaurant, and driving directions.',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 18,
            ],
            [
                'question' => "At every convenient opportunity, GSR's and Concierge personnel inquire as to the success or enjoyment of the recommendations they made?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 18,
            ],
            [
                'question' => 'Concierge or GSR seek to provide additional service?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 18,
            ],
            [
                'question' => 'Concierge desk and work stations kept neat and clean, not worn, damaged or unsightly?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 18,
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
