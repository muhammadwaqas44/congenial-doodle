<?php

use Illuminate\Database\Seeder;

class SecurityDesk extends Seeder
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
                'question' => "Identification of guest checking in verified by driver's license/photo identification during check in process.",
                'possible_point' => 4,
                'question_no' => 1,
                'category_id' => 29,
            ],
            [
                'question' => "Guest room number and personal information kept confidential at desk room number not printed on keys?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 29,
            ],
            [
                'question' => "GSR requests picture ID and guest name, or refers guest to security when requesting additional or duplicate keys?",
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 29,
            ],
            [
                'question' => "Side entrances locked late at night or accessible by room keys only?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 29,
            ],
            [
                'question' => "Security visible and presence felt in hotel common areas late at night?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 29,
            ],
            [
                'question' => "Parking lot well lit, security cameras or personnel seen monitoring lot after dark?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 29,
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
