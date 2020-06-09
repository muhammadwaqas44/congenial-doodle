<?php

use Illuminate\Database\Seeder;

class GuestBathLinen extends Seeder
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
                'question' => "Linens supplied clean, new looking and, color and texture is uniform?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 9,
            ],
            [
                'question' => "Linens supplied minimum of 3 bath towels?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 9,
            ],
            [
                'question' => "Linens supplied minimum of 2 hand towels?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 9,
            ],
            [
                'question' => "Linens supplied minimum 2 wash cloths?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 9,
            ],
            [
                'question' => "Linens supplied minimum matting at both shower and bath tub?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 9,
            ],
            [
                'question' => "If bathrobes supplied with room, they are of superior quality and comfort, clean, not stained and in good condition, colorfast, not overly worn or snagged?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 9,
            ],
            [
                'question' => "Bathrobes are attractively hung and presented?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 9,
            ],
            [
                'question' => "If slippers are supplied, are they new, wrapped?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 9,
            ],
            [
                'question' => "Commode/bidets are clean and rims are dry, free of hair, water, bodily excretions, etc?",
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 9,
            ],
            [
                'question' => "Commode seat and cover firmly affixed to unit, doesn't slide?",
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 9,
            ],
            [
                'question' => "Commode/bidets in good condition and repair, flushes properly and quietly, no evident damage to appearance?",
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 9,
            ],
            [
                'question' => "Hair dryer supplied, clean and working properly?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 9,
            ],
            [
                'question' => "Ground Fault Interrupter (GFI) on electric sockets in bathrooms?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 9,
            ],
            [
                'question' => "Paper products fully stocked and neat and attractively presented, back up toilet paper provided?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 9,
            ],
            [
                'question' => "Waste basket available clean and lined?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 9,
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
