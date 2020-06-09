<?php

use Illuminate\Database\Seeder;

class GuestBathShower extends Seeder
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
                'question' => "Shower stall floor and wall tiling is clean and free of soil, hair, soap residue, mold, mildew, lime and water marks?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 10,
            ],

            [
                'question' => "Caulking around stall and stall doors is brilliant white, in good condition, continuous without gaps or holes?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 10,
            ],

            [
                'question' => "Floor and wall tile and grout is attractive and in good condition free of cracks, discoloration, abrasions or overt wear?",
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 10,
            ],

            [
                'question' => "Shower drain works properly draining quickly?",
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 10,
            ],

            [
                'question' => "Fixtures of superior quality, are upscale in design and attractive?",
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 10,
            ],

            [
                'question' => "Shower fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue?",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 10,
            ],

            [
                'question' => "Shower head properly and securely affixed to wall?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 10,
            ],

            [
                'question' => "Shower head offers numerous flow settings?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 10,
            ],

            [
                'question' => "Flow of water from head consistent and comfortable?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 10,
            ],

            [
                'question' => "Water temperature consistent with setting made by guests?",
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 10,
            ],

            [
                'question' => "Soap dishes and amenity holders are clean, free of soap residue?",
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 10,
            ],

            [
                'question' => "Amenities and bath soaps displayed are new, neatly displayed, clean and logoed?",
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 10,
            ],

            [
                'question' => "Stall doors clean, free of soap build up, mold, mildew?",
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 10,
            ],

            [
                'question' => "Stall doors opens-closes easily, door tracks clean, caulking and gaskets in good condition?",
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 10,
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
