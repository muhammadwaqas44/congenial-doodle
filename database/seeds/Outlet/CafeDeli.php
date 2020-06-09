<?php

use Illuminate\Database\Seeder;

class CafeDeli extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Atmosphere form
            [
                'question' => 'Exterior of Caf free from trash and residue?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 108,
            ],
            [
                'question' => 'Lighting inside and outside Caf set to a level appropriate for the time of day?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 108,
            ],
            [
                'question' => 'Hours of operation posted?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 108,
            ],
            [
                'question' => 'Music in unit on, volume and type of music appropriate to level of business?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 108,
            ], [
                'question' => 'Flooring /carpeting clean, free of heavy soil, stains, fallen food or other debris?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 108,
            ], [
                'question' => 'Caf counter clean, free of food debris, beverage rings, stickiness, clutter and debris?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 108,
            ],
            ///// Services form
            [
                'question' => 'Order taken within 3 minutes, even with guests waiting in line?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 109,
            ],
            [
                'question' => 'Caf GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach counter (within 5 feet)?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 109,
            ],
            [
                'question' => 'Caf personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 109,
            ], [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 109,
            ], [
                'question' => 'Uniform appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 109,
            ], [
                'question' => 'GSR wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 109,
            ], [
                'question' => 'Caf personnel anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 109,
            ], [
                'question' => 'Returning guests warmly welcomed back?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 109,
            ], [
                'question' => 'Were items suggested to increase the sale, and to better serve the guest?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 109,
            ], [
                'question' => 'Consultant asked if the order would be eaten in or taken out?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 109,
            ], [
                'question' => 'Food ticket time did not exceed 10 minutes?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 109,
            ], [
                'question' => 'Order correctly fabricated, requests and preferences adhered too?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 109,
            ], [
                'question' => 'Was food or beverage fresh, made to order, high standard of appearance and taste?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 109,
            ], [
                'question' => 'Food service articles, plates, to go containers of high quality and of good condition?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 109,
            ], [
                'question' => 'Consultant thanked for patronage and asked to come again?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 109,
            ], [
                'question' => 'If immediate payment is rendered, is a preview of the check offered and provided?',
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 109,
            ], [
                'question' => 'If immediate payment is rendered, is proper change returned?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 109,
            ], [
                'question' => 'If immediate payment is rendered, is closed check receipt provided?',
                'possible_point' => 3,
                'question_no' => 18,
                'category_id' => 109,
            ], [
                'question' => '	Check accurately reflects items ordered?',
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 109,
            ],
            ///// Facility form
            [
                'question' => 'Menus and reader boards prominently placed, in good condition, easy to read?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 110,
            ],
            [
                'question' => 'Initial impression of visible kitchen areas attractive, uncluttered?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 110,
            ],
            [
                'question' => 'Visible kitchen equipment coffee/espresso machines clean, sanitary looking?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 110,
            ],
            [
                'question' => 'Was the kitchen area kept clean, food handling areas and equipment clean and sanitary?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 110,
            ],
            [
                'question' => 'Stainless steel recently polished, free of fingerprints, smears or staining?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 110,
            ],
            [
                'question' => 'Visible kitchen floors clean, recently swept and free of fallen food, debris?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 110,
            ],
            [
                'question' => 'Any/all food displays fresh looking and appealing?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 110,
            ],
            [
                'question' => 'All food displays stocked to the level of business or anticipated business?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 110,
            ],
            [
                'question' => 'All display equipment, refrigerators, shelving, displays clean, free of soil, dust, food debris, paper debris, mold, fingerprints or hand smears?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 110,
            ],
            [
                'question' => 'Deck, patio or lobby tables and seating neat, uniformly set up for service, attractive?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 110,
            ],
            [
                'question' => 'Deck, patio, or lobby tables and seating furniture free of noticeable damage, bubbling, wear, abrasions, scarring, scarring, rips, tears or excessive wear?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 110,
            ],
            [
                'question' => 'Patio Deck chairs free of soil accumulation and stains including cushions?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 110,
            ],
            [
                'question' => 'Caf and kitchen walls clean, free of spills and staining and not damaged?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 110,
            ],
            [
                'question' => 'Ceilings and ceiling vents clean free of cobwebs and debris, rust and dust?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 110,
            ],
            [
                'question' => 'Caf windows, door glass, clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 110,
            ],
            [
                'question' => 'Doors, including door frames, escutcheons, hardware, and kick plate are free of soil build up or stains?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 110,
            ],
            [
                'question' => 'Paper products stocked, napkins, straws, plastic flatware, cups etc.',
                'possible_point' => 6,
                'question_no' => 17,
                'category_id' => 110,
            ],
            [
                'question' => 'Condiment areas kept clean, neat and organized?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 110,
            ],
            [
                'question' => 'Condiments stocked and readily available?',
                'possible_point' => 6,
                'question_no' => 19,
                'category_id' => 110,
            ],
            [
                'question' => 'Any and all merchandising displays, posters, blackboards, table tents, etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 110,
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
