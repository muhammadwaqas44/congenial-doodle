<?php

use Illuminate\Database\Seeder;

class Building extends Seeder
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
                'question' => 'Signage well lit and in good repair?, Great sign on-working properly clearly visible from roadway?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 36,
            ],
            [
                'question' => 'Flags and other signage in good condition and repair?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 36,
            ],
            [
                'question' => 'Entry landscaping well manicured and maintained, all lawns, flowerbeds and shrubbery healthy and attractive, offers appealing sense of anticipation during arrival?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 36,
            ],
            [
                'question' => 'Building facade/exterior clean and in good repair?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 36,
            ],
            [
                'question' => 'Porte-cochere in good condition free of damage, stains, cobwebs, etc?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 36,
            ],
            [
                'question' => 'Driveways well marked, directional signage conveys easy to understand direction, driveways free of litter, cigarette butts and in overall good condition?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 36,
            ],
            [
                'question' => 'Curbs clean, well marked and in good condition?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 36,
            ],
            [
                'question' => 'Sidewalks are clean, free of debris and paper litter, in good condition, free of damage, and free of hazards such as uneven slabs, snow and ice?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 36,
            ],
            [
                'question' => 'All exterior garden areas are lush and well manicured, walkways are litter free, in good condition and well marked and well lit at night?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 36,
            ],
            [
                'question' => 'Exterior lighting all on, adequate, and clean?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 36,
            ],
            [
                'question' => 'No exposed areas of unsightly equipment or supply storage?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 36,
            ],
            [
                'question' => 'All exterior trash receptacles neat, not overflowing, orderly in appearance?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 36,
            ],
            [
                'question' => 'Porte-cochere and entry foyers well lit?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 36,
            ],
            [
                'question' => 'All building entrances attractively maintained, vestibules clean, neat and attractive, any matting and carpeting clean, recently vacuumed, free of debris, litter and heavy soil?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 36,
            ],
            [
                'question' => 'All building entrances attractively maintained, available waste disposal units not full or overflowing, appropriate and attractive, cigarette urns kept attractive and recently attended to?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 36,
            ],
            [
                'question' => 'Entry doors and windows, free of dirt, streaking or smudges?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 36,
            ],
            [
                'question' => 'Entry doors and revolving doors in good condition and operating properly?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 36,
            ],
            [
                'question' => '	Parking lot clean and free of debris, striping in good physical condition?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 36,
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
