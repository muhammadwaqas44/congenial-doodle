<?php

use Illuminate\Database\Seeder;

class LaundryShoeShine extends Seeder
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
                'question' => "Laundry service offered 6 days a week? Hotel offers complimentary overnight shoe shine? (Commercial and convention hotels and resorts only)?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 24,
            ],
            [
                'question' => "Call for service answered in a timely manner under 3 rings?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 24,
            ],
            [
                'question' => 'Employee\'s voice warm, "smiles through the phone" Employee greeting is professional in nature, employee always speaks clearly utilizing proper verbiage identifies self as they offer to assist?',
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 24,
            ],
            [
                'question' => "GSR utilizes caller ID to personalize service in greeting and during conversation, frequently?",
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 24,
            ],
            [
                'question' => 'Employee extends service, assistance options, offering direction on procedures, where to find laundry/shine bags and slips and an estimated time of return of items?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 24,
            ],
            [
                'question' => "Employee offers additional services before ending conversation/interaction?",
                'possible_point' => 4,
                'question_no' => 6,
                'category_id' => 24,
            ],
            [
                'question' => "	All laundry, cleaning and pressing performed precisely according to guest instruction and delivery time requests including starch, fold and other special instructions including delivery of items at time of guest preference or when promised by in collateral materials.",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 24,
            ],
            [
                'question' => "Minor mending and button replacement performed automatically with a note advising guests of the repairs?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 24,
            ],
            [
                'question' => "Shoes/Garments/articles presenting in an interesting, elegant manner?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 24,
            ],
            [
                'question' => 'Did the charge properly post to the room account?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 24,
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
