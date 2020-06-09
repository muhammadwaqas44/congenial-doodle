<?php

use Illuminate\Database\Seeder;

class Retail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Check-In Service form
            [
                'question' => 'Shop counter area and all work stations clean, neat and tidy?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 137,
            ],
            [
                'question' => 'Shop area millwork, marble, granite, dcor items in good repair?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 137,
            ],
            [
                'question' => 'Shop GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach counter (within 5 feet of the counter)?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 137,
            ], [
                'question' => 'Shop personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 137,
            ], [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 137,
            ], [
                'question' => 'GSR welcomes guests with professionalism and warmth?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 137,
            ], [
                'question' => 'Shop personnel anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 137,
            ], [
                'question' => 'Once guest is identified, GSR utilizes guest name a minimum of 3 times during the ensuing conversation and check in process?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 137,
            ], [
                'question' => 'Returning guests warmly welcomed back?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 137,
            ], [
                'question' => 'Payment or credit is discreetly established?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 137,
            ], [
                'question' => 'If immediate payment is rendered, is preview of check offered and provided?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 137,
            ], [
                'question' => 'Cash placed into drawer, proper change issued?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 137,
            ],
            ///// Facilities form
            [
                'question' => 'Shop hours clearly posted?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 138,
            ],
            [
                'question' => 'Shop open minimum of 12 hours?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 138,
            ],
            [
                'question' => 'All shop entrances attractively maintained, any matting and carpeting clean, recently vacuumed, free of debris, litter and heavy soil?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 138,
            ],
            [
                'question' => 'Entry doors and windows, free of dirt, streaking or smudges?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 138,
            ],
            [
                'question' => 'Entry doors in good condition and operating properly?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop temperature comfortable during all visits?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop areas adequately lit, all bulbs working even decorative fixtures?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 138,
            ],
            [
                'question' => 'Overall flooring free of debris and spills?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 138,
            ],
            [
                'question' => 'Any tiled flooring clean, free of soil, soil build up, dust?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 138,
            ],
            [
                'question' => 'Any tiled flooring in good condition, free of broken or cracked tiles, grout in good condition, tiles free of buckling?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 138,
            ],
            [
                'question' => 'Any carpeted flooring free of debris dirt, tracking and stains?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 138,
            ],
            [
                'question' => 'Any carpeted flooring pile uniform in color and vibrant, pile not worn or eroded, carpeting free of snags, tears, seam separation and other damage?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 138,
            ],
            [
                'question' => 'Any wood flooring clean, free of soil build up, wax build up in corners, dusty and dirt?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 138,
            ],
            [
                'question' => 'Any and all wood flooring in good condition, free of scarring, scratches, buckling, and appears to be recently polished and buffed to a high level of shine?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 138,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 138,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails and decor fixtures and artwork properly hung and adhering to the walls as well as being free of abrasions, scarring, scuffs and other damage?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 138,
            ],
            [
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 138,
            ],
            [
                'question' => 'Ceilings, crown moldings and ceiling venting in good repair free of rust, cracks, peeling, evident water damage, staining or damage of any other kind?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop windows clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop window sills free of dead bugs, soil, dust and or debris of any kind?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop window sills in good condition, if painted, not peeling, cracked, bubbling, gaskets adhering to windows properly?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail shop window treatments, draperies, blinds and decorations properly adhering to the wall, attractive and in good repair?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 138,
            ],
            [
                'question' => 'Product displays, hanger displays and furniture neatly arranged, in good condition, provides attractive displays?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 138,
            ],
            [
                'question' => 'Product displays, hangar displays and furniture dust free?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 138,
            ],
            [
                'question' => 'Product neatly displayed, product folded or neatly and attractively hung and appealing?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 138,
            ],
            [
                'question' => 'Posters and signs neat, relevant and timely?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 138,
            ],
            [
                'question' => 'Retail venue(s) provide good assortment of items? ( toiletries, gift items, souvenirs, clothing, reading materials etc?)',
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 138,
            ],
            [
                'question' => 'Were graphic displays used to advertise products or services?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 138,
            ],
            [
                'question' => 'Did advertising graphics catch your eye and present a clear sales message to you?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 138,
            ],
            [
                'question' => 'Sale items prominently displayed and advertised?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 138,
            ],
            [
                'question' => 'Were you greeted within 1 minutes of stepping into the store or department?',
                'possible_point' => 2,
                'question_no' => 31,
                'category_id' => 138,
            ],
            [
                'question' => 'Employees actively working the floor and approachable, not just standing behind the desk?',
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 138,
            ],
            [
                'question' => 'While actively browsing, were consultants and other guests offered assistance within 5 minutes?',
                'possible_point' => 2,
                'question_no' => 33,
                'category_id' => 138,
            ],
            [
                'question' => 'Shop staff in uniform that includes nametag?',
                'possible_point' => 1,
                'question_no' => 34,
                'category_id' => 138,
            ],
            [
                'question' => 'Shop staff in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 35,
                'category_id' => 138,
            ],
            [
                'question' => 'Shop staff is well groomed?',
                'possible_point' => 1,
                'question_no' => 36,
                'category_id' => 138,
            ],
            [
                'question' => 'Did the sales associate ascertain the need of the customer and make suggestion or mention any of the advertised sales items to you?',
                'possible_point' => 2,
                'question_no' => 37,
                'category_id' => 138,
            ],
            [
                'question' => 'When you asked questions, did the sales associate appear knowledgeable about the product?',
                'possible_point' => 2,
                'question_no' => 38,
                'category_id' => 138,
            ],
            [
                'question' => 'Was eye contact maintained between the sales associates and the consultant/guest?',
                'possible_point' => 3,
                'question_no' => 39,
                'category_id' => 138,
            ],
            [
                'question' => 'Did the sales associate have a professional demeanor?',
                'possible_point' => 2,
                'question_no' => 40,
                'category_id' => 138,
            ],
            [
                'question' => 'Did the sales associates you came into contact with display enthusiasm and a sincere willingness to assist you?',
                'possible_point' => 1,
                'question_no' => 41,
                'category_id' => 138,
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
