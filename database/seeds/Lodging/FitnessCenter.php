<?php

use Illuminate\Database\Seeder;

class FitnessCenter extends Seeder
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
                'question' => 'Wheelchair accessible restroom available?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 39,
            ],
            [
                'question' => 'Restroom temperature and lighting conditions comfortable, air fresh, free of odors?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 39,
            ],
            [
                'question' => 'Doors are clean, paint uniform and vibrant in color, free of build up, soil, spills or other stains, free of damage such as nicks dings, cracks and peeling?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 39,
            ],
            [
                'question' => "Men's/Ladies room signage in good repair and appealing?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 39,
            ],
            [
                'question' => 'Any tiled flooring clean, recently swept and mopped, free of soil, water trails, spills or spotting, tackiness near urinals or other excrement, build up, dust, flooring in good condition, free of broken or cracked tiles, grout is clean and in good condition, tiles free of buckling?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 39,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind, in good condition free of peeling wallcoverings, gouges, staining or other damages?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 39,
            ],
            [
                'question' => 'Baseboards of walls free of dirt, soil, scuff markings and spills of any kind, walls in good repair, properly affixed, free of abrasions, scarring, scuffs, dings and other damage?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 39,
            ],
            [
                'question' => 'Wall decorative items and artwork (if applicable) provided appealing and clean all ledges free of dust and grime?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 39,
            ],
            [
                'question' => 'Ceilings, crown moldings, free of dust, dust patterns, cobwebs, soil accumulation of any kind, ceiling areas not marred, free of cracking, peeling, evident water damage, staining or damage of any other kind?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 39,
            ],
            [
                'question' => 'Ceiling exhaust venting free of dust, mold and grime of any kind?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 39,
            ],
            [
                'question' => 'Vanity counter tops and shelving clean, free of any, grime, rings, spotting, soap residue, staining, hairs, dust, in good condition, free of splitting, cracks, or other visible damage?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 39,
            ],
            [
                'question' => 'Caulking around vanities brilliant white, continuous without gaps or holes?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 39,
            ],
            [
                'question' => 'Sinks are clean and dry and free of hair, cosmetic residue, soap residue, spotting, sink porcelain is attractive and in good condition free of cracks, abrasions or overt wear?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 39,
            ],
            [
                'question' => 'Sink fixtures operate smoothly?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 39,
            ],
            [
                'question' => 'Sink fixtures operate smoothly?, fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue any automated fixtures working properly?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 39,
            ],
            [
                'question' => 'Mirror in good condition, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?, glass is streak and smudge free any ledges are clean as well?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 39,
            ],
            [
                'question' => 'Soap dispensers well stocked with soap to accommodate need?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 39,
            ],
            [
                'question' => 'Urinals function properly and are clean and free of stains, cigarette butts, paper debris? Commodes, commode seats clean, functioning properly?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 39,
            ],
            [
                'question' => 'Commodes function properly flushing quickly and quietly, seats clean and firmly affixed, porcelain clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 39,
            ],
            [
                'question' => 'Partition doors and walls clean, free of markings, scratches or graffiti?',
                'possible_point' => 3,
                'question_no' => 20,
                'category_id' => 39,
            ],
            [
                'question' => 'Paper supplies, toilet paper, towels, tissues, neatly displayed, adequately stocked?',
                'possible_point' => 3,
                'question_no' => 21,
                'category_id' => 39,
            ],
            [
                'question' => 'Air dryer/paper towel dispenser/cloth towels neatly arranged, working properly?',
                'possible_point' => 3,
                'question_no' => 22,
                'category_id' => 39,
            ],
            [
                'question' => 'Paper trash receptacles, lined/cloth hampers neat, in good condition, attractive not overflowing?',
                'possible_point' => 3,
                'question_no' => 23,
                'category_id' => 39,
            ],
            [
                'question' => 'Wheelchair accessible restroom available?',
                'possible_point' => 3,
                'question_no' => 24,
                'category_id' => 39,
            ],
            [
                'question' => 'Restroom temperature and lighting conditions comfortable, air fresh, free of odors?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 39,
            ],
            [
                'question' => 'Doors are clean, paint uniform and vibrant in color, free of build up, soil, spills or other stains, free of damage such as nicks dings, cracks and peeling?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 39,
            ],
            [
                'question' => "Men's/Ladies room signage in good repair and appealing?",
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 39,
            ],
            [
                'question' => 'Any tiled flooring clean, recently swept and mopped, free of soil, water trails, spills or spotting, tackiness near urinals or other excrement, build up, dust, flooring in good condition, free of broken or cracked tiles, grout is clean and in good condition, tiles free of buckling?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 39,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind, in good condition free of peeling wallcoverings, gouges, staining or other damages?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 39,
            ],
            [
                'question' => 'Baseboards of walls free of dirt, soil, scuff markings and spills of any kind, walls in good repair, properly affixed, free of abrasions, scarring, scuffs, dings and other damage?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 39,
            ],
            [
                'question' => 'Wall decorative items and artwork (if applicable) provided appealing and clean all ledges free of dust and grime?',
                'possible_point' => 1,
                'question_no' => 31,
                'category_id' => 39,
            ],
            [
                'question' => 'Ceilings, crown moldings, free of dust, dust patterns, cobwebs, soil accumulation of any kind, ceiling areas not marred, free of cracking, peeling, evident water damage, staining or damage of any other kind?',
                'possible_point' => 1,
                'question_no' => 32,
                'category_id' => 39,
            ],
            [
                'question' => 'Ceiling exhaust venting free of dust, mold and grime of any kind?',
                'possible_point' => 4,
                'question_no' => 33,
                'category_id' => 39,
            ],
            [
                'question' => 'Vanity counter tops and shelving clean, free of any, grime, rings, spotting, soap residue, staining, hairs, dust, in good condition, free of splitting, cracks, or other visible damage?',
                'possible_point' => 2,
                'question_no' => 34,
                'category_id' => 39,
            ],
            [
                'question' => 'Caulking around vanities brilliant white, continuous without gaps or holes?',
                'possible_point' => 3,
                'question_no' => 35,
                'category_id' => 39,
            ],
            [
                'question' => 'Sinks are clean and dry and free of hair, cosmetic residue, soap residue, spotting, sink porcelain is attractive and in good condition free of cracks, abrasions or overt wear?',
                'possible_point' => 1,
                'question_no' => 36,
                'category_id' => 39,
            ],
            [
                'question' => 'Sink fixtures operate smoothly?',
                'possible_point' => 2,
                'question_no' => 37,
                'category_id' => 39,
            ],
            [
                'question' => 'Sink fixtures operate smoothly?, fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue any automated fixtures working properly?',
                'possible_point' => 1,
                'question_no' => 38,
                'category_id' => 39,
            ],
            [
                'question' => 'Mirror in good condition, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?, glass is streak and smudge free any ledges are clean as well?',
                'possible_point' => 1,
                'question_no' => 39,
                'category_id' => 39,
            ],
            [
                'question' => 'Soap dispensers well stocked with soap to accommodate need?',
                'possible_point' => 1,
                'question_no' => 40,
                'category_id' => 39,
            ],
            [
                'question' => 'Urinals function properly and are clean and free of stains, cigarette butts, paper debris? Commodes, commode seats clean, functioning properly?',
                'possible_point' => 2,
                'question_no' => 41,
                'category_id' => 39,
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
