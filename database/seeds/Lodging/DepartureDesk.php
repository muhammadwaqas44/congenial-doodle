<?php

use Illuminate\Database\Seeder;

class DepartureDesk extends Seeder
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
                'question' => "	Guest waits no longer than 5 minutes to complete check out?",
                'possible_point' => 5,
                'question_no' => 1,
                'category_id' => 48,
            ],
            [
                'question' => "If more than three guests are waiting, additional help is summoned and offers assistance?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 48,
            ],
            [
                'question' => "Front Office personnel are all neatly groomed in appropriate uniforms, wearing nametags, if applicable, their posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 48,
            ],
            [
                'question' => "Priority service or a separate Express Check Out area offered and available for loyalty program and preferred guests when volume dictates?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 48,
            ],
            [
                'question' => "GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach reception desk (within 5 feet of the desk)?",
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 48,
            ],
            [
                'question' => "Front desk personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 48,
            ],
            [
                'question' => "As soon as guest identifies himself, Front desk GSR utilizes guest name a minimum of 3 times during checkout in a comfortable manner to personalize service?",
                'possible_point' => 4,
                'question_no' => 7,
                'category_id' => 48,
            ],
            [
                'question' => "GSR always inquires as to how guest stay was?",
                'possible_point' => 4,
                'question_no' => 8,
                'category_id' => 48,
            ],
            [
                'question' => "If a complaint is voiced, is the matter immediately handled to the guest satisfaction or is a member of management immediately summoned?",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 48,
            ],
            [
                'question' => "Folio accurate?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 48,
            ],
            [
                'question' => "Staff member automatically offers a zero balance folio, logoed envelope, folds and places closed out folio into envelope and hands to guest thanking guest for staying with property?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 48,
            ],
            [
                'question' => "GSR anticipates the guest future need by insuring that guest needs no luggage or transportation assistance such as calling for a car from valet or shuttle services?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 48,
            ],
            [
                'question' => "GSR thanks consultant/guest for business?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 48,
            ],
            [
                'question' => "Front desk associate makes an invitation or expression of hope for the guest to return?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 48,
            ],
            [
                'question' => "All work stations neat and clean?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 48,
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
