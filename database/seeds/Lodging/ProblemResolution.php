<?php

use Illuminate\Database\Seeder;

class ProblemResolution extends Seeder
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
                'question' => 'GSR whether in person or by telephone offers full attention to guest as issue is presented?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 19,
            ],
            [
                'question' => "GSR asks questions to determine the significant facts of the issue that's bothering the guest?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 19,
            ],
            [
                'question' => 'Courteous and friendly service extended, once identified, guest surname used in conversation comfortably to personalize the service?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 19,
            ],
            [
                'question' => 'GSR offers professional empathy for the situation, apologizes for any incident involving the hotel/resort even if not at fault?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 19,
            ],
            [
                'question' => 'GSR escalates issue to proper level of authority in an attempt to resolve the issue stated?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 19,
            ],
            [
                'question' => 'GSR offers viable action plan and or timetable to help resolve issue, and confirms that it would meet the immediate need of the guest in resolving the current issue?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 19,
            ],
            [
                'question' => 'GSR offers a time estimate of how long it will take to resolve issue or how long to expect to wait for further contact and updates from guest services?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 19,
            ],
            [
                'question' => 'Problem resolved as explained by the GSR',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 19,
            ],
            [
                'question' => 'Concierge or GSR seek to provide additional service?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 19,
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
