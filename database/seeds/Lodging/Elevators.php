<?php

use Illuminate\Database\Seeder;

class Elevators extends Seeder
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
                'question' => "Wait for elevator never exceeds two minutes?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator landing push button lighting working properly, illuminate properly?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator directional, up/down indicator lighting working properly, illuminate properly as car arrives?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator landings kept free of debris?",
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 44,
            ],
            [
                'question' => 'Elevator exterior doors and door frames attractive, uniformly painted, clean?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 44,
            ],
            [
                'question' => "Exterior doors open and stay open at a comfortable intervals after cab arrives?",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator cab lighting working properly, all bulbs illuminated, lighting levels comfortable?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator panel lighting and floor buttons illuminate properly?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 44,
            ],
            [
                'question' => "Elevator cab tiled/wood flooring clean, free of soil, soil build up, debris or dust?",
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 44,
            ],
            [
                'question' => 'Elevator cab tiled/wood flooring clean, free of soil, soil build up, debris or dust?, flooring in good condition, free of broken or cracked tiles, wood scarring or erosion, abrasions, tile and grout in good condition, floor free of buckling?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 44,
            ],
            [
                'question' => 'Any carpeted area rugs in cabs free of debris dirt, tracking and stains, all carpeted or area rugs in cabs in good condition, pile uniform in color and vibrant, pile not worn or eroded, carpeting free of snags, tears, seam separation and other damage?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 44,
            ],
            [
                'question' => 'Cab walls, inclusive of wall coverings, stainless steel or brass, any baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind as well as being free of abrasions, scarring, scuffs and other damage?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 44,
            ],
            [
                'question' => 'Ceilings, crown moldings, and ceiling grates or ceiling venting free of dust patterns, cobwebs, soil accumulation of any kind, ceilings, moldings and venting in good repair free of rust, cracks, peeling, evident water damage, staining or damage of any other kind?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 44,
            ],
            [
                'question' => 'Elevator ride is smooth, starts and stops at floors are smooth?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 44,
            ],
            [
                'question' => 'Elevator permit or notice posted and current, emergency phone present, operable and in good condition?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 44,
            ],
            [
                'question' => 'Elevators with key card functioning properly for floors?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 44,
            ],
            [
                'question' => 'Any information about food and beverage outlets, recreational offerings, hours of operation and style, current menu and promotions visible and appealing?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 44,
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
