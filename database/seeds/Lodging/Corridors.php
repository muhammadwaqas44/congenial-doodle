<?php

use Illuminate\Database\Seeder;

class Corridors extends Seeder
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
                'question' => "Corridor areas adequately lit, all bulbs working even decorative fixtures, temperature comfortable and corridor areas free of unpleasant odors?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 43,
            ],
            [
                'question' => "	Overall flooring in good condition, free of broken or cracked tiles, grout in good condition, wood flooring free of excessive scarring, scratches, and recently polished?, Any and all carpeting uniform in color and vibrant, pile in good condition free of erosion, seam separation and snags?, all corridor flooring is free of debris, spills, and soil buildup?",
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 43,
            ],
            [
                'question' => "Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind?, artwork properly hung and adhering to the walls as well as being free of abrasions, scarring, scuffs and other damage?",
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 43,
            ],
            [
                'question' => "Ceilings, crown moldings and ceiling venting in good repair free of rust, cracks, peeling, evident water damage, staining or damage venting free of dust patterns, cobwebs, soil accumulation of any kind?",
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 43,
            ],
            [
                'question' => 'Guest room doors are clean, paint uniform and vibrant in color, kick plates free of build up, soil, tarnish or other stains, doors free of nicks, dings cracks and peeling?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 43,
            ],
            [
                'question' => "Door number signage attractive, clean and in good repair?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 43,
            ],
            [
                'question' => "Door frames in good repair free of scratches and marks and are clean, paint is uniform and vibrant?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 43,
            ],
            [
                'question' => "Service doors are in good repair free of damage such as nicks, dings, cracks or peeling?, Service doors are clean, paint uniform and vibrant in color, kick plates free of build up, soil, tarnish or other stains?",
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor windows and window sills clean free of dead bugs, soil build up, spotting, smudges and streaks or debris of any kind?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 43,
            ],
            [
                'question' => 'Corridor windows in good condition, no cracks or chipping noted to glass?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor window sills in good condition, if painted, not peeling, cracked, bubbling, gaskets adhering to windows properly?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor window treatments, draperies, properly hung, attractive in good repair, any blinds and window decorations clean, free of dust or stains?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor treatments, draperies, blinds and decorations properly adhering to the wall, attractive and in good repair?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor furniture stylish and current as well as decorative, in good repair and free of debris and heavy soil build up?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor light fixtures, including table and floor lamps, all on and working properly, no burned out bulbs?",
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 43,
            ],
            [
                'question' => "Corridor light fixtures, including table and floor lamps, all in good repair, free of cobwebs, dust and dirt, lamp shades in good condition, cords hidden when possible and properly secured?",
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 43,
            ],
            [
                'question' => "House phones available, working properly dialing directly to PBX station, phones inspected are clean, no build up on ear or mouthpieces?",
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 43,
            ],
            [
                'question' => "Housekeeper carts never interfere with guest traffic flow, are neat and organized?",
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 43,
            ],
            [
                'question' => "All trash, used towels, etc., disposed of into housekeeping cart, or housekeeping rooms, not seen in corridor of hotels?",
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 43,
            ],
            [
                'question' => "Room Service tables/trays removed within 1 hour of a guest placing them outside of their guest room?",
                'possible_point' => 3,
                'question_no' => 20,
                'category_id' => 43,
            ],
            [
                'question' => "Vending/ice area clean and in good repair?",
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 43,
            ],
            [
                'question' => "Directional signage adequate, clear, clean and in good repair?",
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 43,
            ],
            [
                'question' => "Exit signs working properly, clearly marked, easy to see?",
                'possible_point' => 3,
                'question_no' => 23,
                'category_id' => 43,
            ],
            [
                'question' => "Fire equipment clearly marked and current, stairwells unobstructed?",
                'possible_point' => 3,
                'question_no' => 24,
                'category_id' => 43,
            ],
            [
                'question' => "Fire stairwells clean/free of obstruction?",
                'possible_point' => 3,
                'question_no' => 25,
                'category_id' => 43,
            ],
            [
                'question' => "Advertisement and promotions current, display clean and in good repair?",
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 43,
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
