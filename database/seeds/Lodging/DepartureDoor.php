<?php

use Illuminate\Database\Seeder;

class DepartureDoor extends Seeder
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
                'question' => "Consultant/guest greeted by door personnel within 30 seconds of stepping out of hotel, door personnel consistently make good eye contact with guest/consultant, smiles and offers pleasant expressions?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 49,
            ],
            [
                'question' => "Door personnel well groomed even in inclement weather, in uniforms that are well kept, clean and appropriate and includes nametag, if applicable?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 49,
            ],
            [
                'question' => "If the consultant was not introduced by a bellperson during the check out, did the doorperson actively attempt to obtain the guest name either by obtaining the name from valet personnel or reviewing luggage tags and use the guest name in conversation to further personalize the service?",
                'possible_point' => 5,
                'question_no' => 3,
                'category_id' => 49,
            ],
            [
                'question' => "Door person immediately ascertains transportation needs and either initiates or follows up on valet parking services, hailing a cab, coordinating airport shuttle services, etc?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 49,
            ],
            [
                'question' => "Inclement weather services automatically offered such as umbrella service to waiting cars/shuttles/cabs?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 49,
            ],
            [
                'question' => "Door personnel actively offers to take luggage and hand held bags offering either the comfort of a waiting area in the hotel or the comfort of transportation cab while they guest's luggage?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 49,
            ],
            [
                'question' => "If applicable, door person opens car doors for guests, stressing ladies first?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 49,
            ],
            [
                'question' => "Door person provides a fond farewell (e.g. Have a safe journey home) inclusive of use of guest name in parting comment?",
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 49,
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
