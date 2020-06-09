<?php

use Illuminate\Database\Seeder;

class GuestBath extends Seeder
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
                'question' => "Bathroom door is clean and in good repair, door paint uniform, door is free of nicks, dings cracks and peeling, door is vibrant in color, free of build up, soil, spills or other stains?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 8,
            ],
            [
                'question' => "Door frame is clean and in good repair, free of scratches or marks, painted surface is clean, color is uniform and vibrant?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 8,
            ],
            [
                'question' => "Any tiled flooring clean, recently swept and mopped, free of soil, hair from previous guests, water trails or spotting, build up, dust?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 8,
            ],
            [
                'question' => "Any tiled flooring in good condition, free of broken or cracked tiles, grout is clean and in good condition, tiles free of buckling?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 8,
            ],
            [
                'question' => "Any area bath matting and rugs are clean, attractive and in good condition?",
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 8,
            ],
            [
                'question' => "Walls, inclusive of wall coverings and chair rails are clean free of dust, hand prints, soil, scuff markings and spills of any kind?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 8,
            ],
            [
                'question' => "Walls, inclusive of wall coverings, and chair rails in good repair, properly hung and adhering to the walls, free of bubbling or seam separation as well as being free of abrasions, scarring, dings, scuffs and other damage?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 8,
            ],
            [
                'question' => "Baseboards of walls are clean and in good repair, free of dust and hair, dirt, soil scuff markings and spills of any kind, properly affixed to the wall, free of abrasions, scarring, dings and other damage?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 8,
            ],
            [
                'question' => "Wall decorative items and artwork (if applicable) provided appealing and clean all ledges free of dust and grime?",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 8,
            ],
            [
                'question' => "	Ceilings, crown moldings, clean and in good condition, free of human hair, dust, dust patterns, cobwebs, cracking, peeling, evident water damage, staining, discoloration or damage of any other kind?",
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 8,
            ],
            [
                'question' => "Ceiling exhaust venting properly affixed and working properly, clean and in good repair, free of dust, mold, rust or grime of any kind?",
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 8,
            ],
            [
                'question' => "Vanity counter tops made of high quality stone, marble or granite?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 8,
            ],
            [
                'question' => "Vanity countertops and shelving clean and in good condition, free of visible damage, any grime, rings, spotting, soap residue, hairs and dust?",
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 8,
            ],
            [
                'question' => "Caulking around vanity brilliant white, continuous without gaps or holes?",
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 8,
            ],
            [
                'question' => "Sink(s) are clean and dry and free of hair, cosmetic residue, soap residue, spotting?",
                'possible_point' => 5,
                'question_no' => 15,
                'category_id' => 8,
            ],
            [
                'question' => "Sink(s) porcelain is attractive and in good condition free of cracks, abrasions or overt wear?",
                'possible_point' => 4,
                'question_no' => 16,
                'category_id' => 8,
            ],
            [
                'question' => "Sink(s) provided work properly retaining water and draining properly?",
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 8,
            ],
            [
                'question' => "Sink fixtures of superior quality, are upscale in design and attractive?",
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 8,
            ],
            [
                'question' => "Sink fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue?",
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 8,
            ],
            [
                'question' => "Amenities are of superior quality, amenities neatly displayed consist of at least: shampoo, conditioner, lotion?",
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 8,
            ],
            [
                'question' => "2 water glasses available, glassware is in good condition, not chipped, is clean and crystal clear, free of spotting, or soap build up?",
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 8,
            ],
            [
                'question' => "Bathroom mirror clean and in good condition, glass is streak and smudge free, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?",
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 8,
            ],
            [
                'question' => "Magnifying/Make up mirror provided, works properly and adjusts easily for the guest, is clean, streak free, free of smudges?",
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 8,
            ],
            [
                'question' => "Entry light switch works, all lighting functioning properly, all bulbs work?",
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 8,
            ],
            [
                'question' => "Light switches are physically in good condition, are clean free of fingerprints, soil or grime?",
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 8,
            ],
            [
                'question' => "Lighting fixtures and encasements attractive and in good condition, clean, free of soil or dust?",
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 8,
            ],
            [
                'question' => "Subdued night-time lighting option available and working?",
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 8,
            ],
            [
                'question' => "Bath tub is clean and free of soil, hair, soap residue, lime and water marks?",
                'possible_point' => 5,
                'question_no' => 28,
                'category_id' => 8,
            ],
            [
                'question' => "Caulking around tub is brilliant white, in good condition, continuous without gaps or holes?",
                'possible_point' => 2,
                'question_no' => 29,
                'category_id' => 8,
            ],
            [
                'question' => "Tub porcelain is attractive and in good condition free of cracks, discoloration, abrasions or overt wear?",
                'possible_point' => 3,
                'question_no' => 30,
                'category_id' => 8,
            ],
            [
                'question' => "Tub works properly retaining water and draining properly?",
                'possible_point' => 3,
                'question_no' => 31,
                'category_id' => 8,
            ],
            [
                'question' => "Fixtures of tub superior quality, are upscale in design and attractive?",
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 8,
            ],
            [
                'question' => "Tub fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue?",
                'possible_point' => 3,
                'question_no' => 33,
                'category_id' => 8,
            ],
            [
                'question' => "Soap dishes and amenity holders are clean, free of soap residue?",
                'possible_point' => 2,
                'question_no' => 34,
                'category_id' => 8,
            ],
            [
                'question' => "Amenities and bath soaps displayed are new, neatly displayed, clean and logoed?",
                'possible_point' => 2,
                'question_no' => 35,
                'category_id' => 8,
            ],
            [
                'question' => "Soap supplied at tub, sink and shower?",
                'possible_point' => 1,
                'question_no' => 36,
                'category_id' => 8,
            ],
            [
                'question' => "Wall tiling around tub is clean and free of soil, hair, soap residue, mold, mildew, lime and water marks?",
                'possible_point' => 3,
                'question_no' => 37,
                'category_id' => 8,
            ],
            [
                'question' => "Shower head properly and securely affixed to wall offers numerous flow settings?",
                'possible_point' => 3,
                'question_no' => 38,
                'category_id' => 8,
            ],
            [
                'question' => "	Flow of water from head consistent and comfortable?",
                'possible_point' => 2,
                'question_no' => 39,
                'category_id' => 8,
            ],
            [
                'question' => "Water temperature consistent with setting made by guests?",
                'possible_point' => 2,
                'question_no' => 40,
                'category_id' => 8,
            ],
            [
                'question' => "Shower curtain clean, free of soap build up, mold, mildew?",
                'possible_point' => 2,
                'question_no' => 41,
                'category_id' => 8,
            ],
            [
                'question' => "Shower curtain rod arched, not straight offering more shower room in tubs?",
                'possible_point' => 1,
                'question_no' => 42,
                'category_id' => 8,
            ],
            [
                'question' => "Shower curtain opens-closes easily, all shower curtain rings are present and in good condition?",
                'possible_point' => 2,
                'question_no' => 43,
                'category_id' => 8,
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
