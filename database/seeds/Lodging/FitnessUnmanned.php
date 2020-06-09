<?php

use Illuminate\Database\Seeder;

class FitnessUnmanned extends Seeder
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
                'question' => 'Entry way, entry doors & windows clean?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 40,
            ],
            [
                'question' => 'Entry way, entry doors & windows in good condition and appealing?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 40,
            ],
            [
                'question' => 'Signs posted for hours of operation, dress requirements, age requirements, entrance requirements and privileges?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 40,
            ],
            [
                'question' => 'Variety of exercise equipment, minimum of 3 of the following: free weights, barbells, dumbbells, universal weight machine, or other similar strength equipment?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 40,
            ],
            [
                'question' => 'Variety of exercise equipment, minimum of 3 of the following: Life cycle or equivalent, Stairmaster or equivalent, free weights, universal weight machine or equivalent, track or equivalent?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 40,
            ],
            [
                'question' => 'Variety of exercise equipment, minimum of 3 of the following: Body matting, tension roping, jump ropes, medicine balls, aerobic steps/platforms, heavy bags, speed bags?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 40,
            ],
            [
                'question' => 'Exercise equipment clean free of staining, smears, soil?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 40,
            ],
            [
                'question' => 'Exercise equipment working properly and in good repair, all padding in good condition, ropes, pulleys operate smoothly, handles in good condition?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 40,
            ],
            [
                'question' => 'Are specialized services, (personal trainers, yoga/aerobics/spinning classes) available, scheduled and promoted?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 40,
            ],
            [
                'question' => 'Floors and or carpeting throughout facility clean, free of debris and soil accumulation?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 40,
            ],
            [
                'question' => 'Floors and or carpeting throughout facility in good repair?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 40,
            ],
            [
                'question' => 'Walls throughout facility clean, free of dust, soil accumulation, spills, scuffs?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 40,
            ],
            [
                'question' => 'Walls throughout facility in good condition and repair free of cracks, dents, holes or other damage?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 40,
            ],
            [
                'question' => 'Mirrored wall available?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 40,
            ],
            [
                'question' => 'Any mirrors throughout the facility clean free of smudges and streaking?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 40,
            ],
            [
                'question' => 'Any mirrors throughout the facility in good condition, free of cracks, silver backing in good condition?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 40,
            ],
            [
                'question' => 'Ceilings throughout facility clean, free of dust, soil accumulation, cobwebs?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 40,
            ],
            [
                'question' => 'Ceilings and ceiling venting throughout facility in good condition and repair free of cracks, dents, holes, water damage or other damage?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 40,
            ],
            [
                'question' => 'Posters and signs neat, relevant and timely?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 40,
            ],
            [
                'question' => 'Lockers supplied clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 40,
            ],
            [
                'question' => 'Restroom facilities and locker area clean free of debris, towels items on floor?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 40,
            ],
            [
                'question' => 'Restroom facilities and locker areas in good repair?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 40,
            ],
            [
                'question' => 'Restroom facilities and locker areas well lit, free of obnoxious odor, comfortable temperature?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 40,
            ],
            [
                'question' => 'Instructions and precautions for equipment posted prominently?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 40,
            ],
            [
                'question' => 'Alarm button or emergency phone present when fitness center unattended?',
                'possible_point' => 3,
                'question_no' => 25,
                'category_id' => 40,
            ],
            [
                'question' => 'Each cardio unit has own television monitor?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 40,
            ],
            [
                'question' => 'Visual and audio aspects of televisions operate as expected?',
                'possible_point' => 2,
                'question_no' => 27,
                'category_id' => 40,
            ],
            [
                'question' => 'In the absence of individual televisions, 25 inch or larger televisions present within viewing distance of stationary equipment?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 40,
            ],
            [
                'question' => 'Headphones available for guest use in fitness centers with larger televisions?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 40,
            ],
            [
                'question' => 'Complimentary water available?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 40,
            ],
            [
                'question' => 'Wall mounted clock?',
                'possible_point' => 1,
                'question_no' => 31,
                'category_id' => 40,
            ],
            [
                'question' => 'Towels available, clean and in good condition?',
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 40,
            ],
            [
                'question' => 'Rental equipment, rackets, weight belts, etc. in good condition?',
                'possible_point' => 1,
                'question_no' => 33,
                'category_id' => 40,
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
