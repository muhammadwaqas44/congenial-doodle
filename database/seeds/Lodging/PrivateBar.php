<?php

use Illuminate\Database\Seeder;

class PrivateBar extends Seeder
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
                'question' => 'Mini bar conforms to room dcor, private and discreet?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 11,
            ],
            [
                'question' => 'Exterior cabinet not worn or damaged, clean, tidy, free of rings spills and debris?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 11,
            ],
            [
                'question' => 'Interior of unit, shelving not worn or damaged, interior walls clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 11,
            ],
            [
                'question' => '	Refrigeration unit operates properly keeping product cold, yet freezer properly defrosted?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 11,
            ],
            [
                'question' => 'Minimum par on glassware includes at least two stem glasses, 2 rocks/highball glasses glassware clean free of lipstick, spotting or soap accumulations?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 11,
            ],
            [
                'question' => 'Good variety of items, full inventory provided, inventory neat, clean and sealed properly?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 11,
            ],
            [
                'question' => 'Napkins, openers, and stir sticks neatly stocked?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 11,
            ],
            [
                'question' => 'Inventory sheet and price list present?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 11,
            ],
            [
                'question' => 'Products currently dated and fresh in look and flavor?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 11,
            ],
            [
                'question' => 'Mini bar attendants knock on the door, announce themselves and ask to check and verify contents of mini bar? Mini bar attendants are neat in appearance, well groomed, uniform clean and wearing a nametag ?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 11,
            ],
            [
                'question' => 'Mini bar attendants smiles and or makes pleasant facial expressions and good eye contact with guest during interactions, always is cordial uses proper verbiage?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 11,
            ],
            [
                'question' => 'Minibar serviced daily, consumed items fully restocked?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 11,
            ],
            [
                'question' => 'All items used correctly itemized on the folio at the end of the stay?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 11,
            ],
            [
                'question' => 'Mini bar cars are neat and orderly, in good condition?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 11,
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
