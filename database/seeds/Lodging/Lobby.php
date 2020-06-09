<?php

use Illuminate\Database\Seeder;

class Lobby extends Seeder
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
                'question' => 'Lobby temperature comfortable during all visits, free of any unpleasant odors?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby area has soft music playing?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 37,
            ],
            [
                'question' => 'Overall lobby flooring free of debris and spills and any concrete, wood or tile in good condition?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 37,
            ],
            [
                'question' => 'Any area rugs and or carpeted flooring free of debris dirt, tracking and stains, carpeting is in good condition, free of snags, seam separation and other damage, pile color is vibrant, not worn eroded?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 37,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind, dcor fixtures and artwork properly hung and adhering to walls well, walls in general free of abrasions, scarring, scuffs and other noticeable damage?',
                'possible_point' => 4,
                'question_no' => 5,
                'category_id' => 37,
            ],
            [
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust patterns, cobwebs, soil accumulation of any kind, ceiling areas are in good repair and free of rust, cracks peeling, staining or damage of any other kind?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 37,
            ],
            [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 37,
            ],
            [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris, in good working order, ceiling fans in sync, all chandelier lighting on and in good working order?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby light fixtures, including table and floor lamps, all on and working properly, no burned out bulbs, all in good repair, free of cobwebs, dust and dirt, lamp shades in good condition?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 37,
            ],
            [
                'question' => 'Cords for lobby table and floor lamps, properly secured, in good condition?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby windows and sills clean free of soil build up, spotting, smudges and streaks, dead bugs, soil, dust and or debris of any kind?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby window sills in good condition, if painted, not peeling, cracked, bubbling, gaskets adhering to windows properly?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby windows in good condition, no cracks or chipping noted to glass, window treatments properly adhering to the wall, all draperies, blinds and decorations clean, free of dust or stains and in good repair?',
                'possible_point' => 4,
                'question_no' => 13,
                'category_id' => 37,
            ],
            [
                'question' => 'Doors, including door frames, escutcheons, hardware, and kick plate are free of soil build up or stains are in good condition free of tarnish, scarring, dings and other damage and operate as expected?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby Furniture is neatly arranged, provides various seating options for guests during all visits?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby furniture stylishly current, decorative, in good condition free of staining, rips and tears, wood free of scarring and dings, fabric free of soil buildup?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby/Atrium plants, flowers clean and healthy looking, containers clean, in good repair and attractive?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby dcor items, Holiday decorations clean, free of dust and dirt, properly hung and in good repair?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 37,
            ],
            [
                'question' => 'House telephones clean and function properly?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 37,
            ],
            [
                'question' => 'Lobby signage current, clean, neat and in good repair, any information about food and beverage outlets, recreational offerings, hours of operation and style, current menu and promotions visible and appealing?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 37,
            ],
            [
                'question' => 'All work stations neat, clean and organized, any and all marketing and brochure racks stocked, neat and clean?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 37,
            ],
            [
                'question' => 'Any and all periodicals arranged neatly and current, any marketing and brochure racks stocked, neat and clean?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 37,
            ],
            [
                'question' => 'Wireless internet access offered and provided in all public access areas? System offers a strong signal?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 37,
            ],
            [
                'question' => 'Adequate directional sign age in public areas?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 37,
            ],
            [
                'question' => 'Refreshment stations (morning coffee, afternoon lemonade, evening milk and cookies etc.) if available, kept stocked, neat, clean and tidy during duration of offer?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 37,
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
