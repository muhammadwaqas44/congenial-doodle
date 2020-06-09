<?php

use Illuminate\Database\Seeder;

class SpecialNeeds extends Seeder
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
                'question' => "No guest waits longer than 5 minutes to be assisted by concierge personnel?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 22,
            ],
            [
                'question' => "GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach desk (within 5 feet of the desk)?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 22,
            ],
            [
                'question' => "Concierge personnel always greet the guest first with professionalism and warmth, with an offer of assistance that is sincere and hospitable?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 22,
            ],
            [
                'question' => "Staff neatly groomed in appropriate uniform, pressed, neat and clean, wearing a nametag?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 22,
            ],
            [
                'question' => "Courteous and friendly service extended, once identified, guest surname used in conversation comfortably to personalize the service?",
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 22,
            ],
            [
                'question' => "GSRs ask questions to fully determine the guest's final objective without heavy prompting and do not simply answer a question. Seek objective - What is the need or occasion?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 22,
            ],
            [
                'question' => "After determining the special need or occasion, GSR suggests different options to accomodate the need or occasion.",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 22,
            ],
            [
                'question' => "GSR attempts to satisfy the need or occasion through promotion of a hotel product or service?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 22,
            ],
            [
                'question' => "GSR offers further services to enhance the guest experience. EX. 'Would you like flowers to be delivered with the wine you requested for your wife's birthday?'",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 22,
            ],
            [
                'question' => "Concierge or GSR seek to provide additional service?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 22,
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
