<?php

use Illuminate\Database\Seeder;

class BreakfastBuffet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Greeting form
            [
                'question' => 'Host/hostesses in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 67,
            ],
            [
                'question' => 'Host/Hostess is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 67,
            ],
            [
                'question' => 'Host/Hostess wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 67,
            ],
            [
                'question' => 'Host/Hostess staff efficiently and pleasantly handling flow of guests in and out of restaurant?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 67,
            ],
            [
                'question' => 'Smoking/non smoking and indoor/outdoor seating preferences ascertained and accommodated if applicable?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 67,
            ],
            [
                'question' => 'Complimentary newspapers available?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 67,
            ],
            [
                'question' => 'Reading materials automatically offered to single diners?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 67,
            ],
            [
                'question' => 'Menus if applicable presented, current and clean?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 67,
            ],
            [
                'question' => 'Menus handed to guests rather than placed on tables?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 67,
            ],
            [
                'question' => 'Did hostess/host mention the available buffet?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 67,
            ],
            [
                'question' => 'Extra place settings removed?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 67,
            ],
            ///// Atmosphere form
            [
                'question' => 'First impression of dining room favorable, tables uniformly set?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 68,
            ],
            [
                'question' => 'Dining room floor clean?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 68,
            ],
            [
                'question' => 'Dining room lighting, temperature and music set to comfortable levels and appropriate for time of day?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 68,
            ],
            [
                'question' => "Consultant's table properly set up for service, centerpieces uniform and complete with condiments fully stocked?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 68,
            ],
            [
                'question' => "Consultant's table properly set up for service, place settings complete and uniform?",
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 68,
            ],
            [
                'question' => "Consultant's table properly set up for service, table properly bussed free of debris, beverage rings, wetness or stickiness? If covered in linen, linens in good condition, crisp, clean and evenly spread?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 68,
            ],
            [
                'question' => 'Cloth napkins clean, color consistent, not worn, damaged or stained?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 68,
            ],
            [
                'question' => 'Mugs provided clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 68,
            ],
            [
                'question' => 'Glassware provided clean, free of spotting, soap residue or food residue?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 68,
            ],
            [
                'question' => 'Flatware provided clean, not dented or food debris evident?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 68,
            ],
            [
                'question' => "Consultant's table physically in good condition, sturdy, doesn't wobble, free of scarring, wear and damage?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 68,
            ],
            [
                'question' => "Chair seats/banquettes recently wiped, fabric clean and free of soil and staining?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 68,
            ],
            [
                'question' => "Chair/banquette backing, seats, legs free of excessive soil, scarring, dings and damage?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 68,
            ],

            ///// Initial Service form
            [
                'question' => 'Guest greeted pleasantly or acknowledged by server within 1 minute?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 69,
            ],
            [
                'question' => 'Server in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 69,
            ],
            [
                'question' => 'Server is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 69,
            ], [
                'question' => 'Server wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 69,
            ], [
                'question' => 'If reservation made, or guest asked name by hostess for seating purposes, server informed of and used guest surname throughout service?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 69,
            ], [
                'question' => 'Did server introduce the buffet, offering descriptions and offering suggestions on specific buffet items?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 69,
            ], [
                'question' => 'Staff knowledgeable about hot and cold foods associated with the buffet offering as well as available juices and other beverages?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 69,
            ], [
                'question' => 'Did server offer and suggest coffee and juice as well as identify any beverages that were part of the buffet offering?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 69,
            ], [
                'question' => 'Did server identify any other beverages that were part of the buffet offering?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 69,
            ], [
                'question' => 'Guest served beverages within 3 minutes of order being taken?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 69,
            ], [
                'question' => 'In the absence of an ala carte (omelet) station, did server offer any ala carte items or services from the kitchen?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 69,
            ],
            ///// Buffet Service form
            [
                'question' => 'Ample, appropriate and clean dishware provided?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 70,
            ],
            [
                'question' => 'China, platters, plates not worn, chipped or damaged?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 70,
            ],
            [
                'question' => 'Buffet items labeled, labels neat and attractive?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 70,
            ], [
                'question' => 'Buffet table well decorated, table compliments food presentations and themes?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 70,
            ], [
                'question' => 'Buffet table kept meticulously and surgically clean?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 70,
            ], [
                'question' => 'Serving utensils provided on buffet appropriate, clean and convenient?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 70,
            ], [
                'question' => 'Food areas around buffet safe, floors dry, sterno contained, etc.?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 70,
            ], [
                'question' => 'Food fresh in appearance, well stocked during observation?',
                'possible_point' => 5,
                'question_no' => 8,
                'category_id' => 70,
            ], [
                'question' => 'Hot items kept hot, cold items kept cold?',
                'possible_point' => 5,
                'question_no' => 9,
                'category_id' => 70,
            ], [
                'question' => 'Product flavorful and texture good?',
                'possible_point' => 5,
                'question_no' => 10,
                'category_id' => 70,
            ],[
                'question' => 'Buffet variety good, offering some regional or ethnic items, low fat items, signature and unique items?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 70,
            ],[
                'question' => 'Buffet runner staff friendly, helpful and greeting guests and familiar with items?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 70,
            ],[
                'question' => 'Buffet traffic flow smooth, convenient, free of excessive delay?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 70,
            ],
            ///// Table Service form
            [
                'question' => 'Server did a good job of removing soiled plates not allowing plates to stack or accumulate?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 71,
            ],
            [
                'question' => 'Did the server do a good job of removing used flatware and replenishing with clean flatware?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 71,
            ],
            [
                'question' => 'Server discreetly folds napkin for guest during each visit to the buffet?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 71,
            ],
            [
                'question' => 'Server suggests another beverage or refills beverage when drink full, or within 2 minutes of being empty?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 71,
            ],
            [
                'question' => 'Did the server check back periodically to insure guest satisfaction?',
                'possible_point' => 3 ,
                'question_no' => 5,
                'category_id' => 71,
            ],
            [
                'question' => 'Staff behavior is not hectic or chaotic?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 71,
            ], [
                'question' => 'Staff does not eat, drink, smoke or chew gum within view of guests?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 71,
            ], [
                'question' => 'Staff posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 71,
            ], [
                'question' => 'Vacated tables quickly cleared and reset and uniformly set to standard?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 71,
            ],[
                'question' => 'Management personnel visible during the meal period offering staff direction, performing guest service and interacting with guests regularly?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 71,
            ],[
                'question' => 'Were you invited back, or offered the suggestion of a different meal period or outlet to visit during your stay?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 71,
            ],
            [
                'question' => 'Server prompt with delivery of check, either discreetly placed during the breakfast meal or within 1 minute of request?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 71,
            ],
            [
                'question' => 'Did the check accurately reflect the number and type of buffets ordered?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 71,
            ],
            [
                'question' => 'Was the check time (within 10 minutes) and date accurate?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 71,
            ],
            [
                'question' => 'Bill presented in folder with a pen?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 71,
            ],[
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 71,
            ],
            ///// À La Carte form
            [
                'question' => 'First impression of ala carte station favorable, station itself clean, organized and neat?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 72,
            ], [
                'question' => 'First impression of ala carte station favorable, condiments and accompaniments neatly and attractively presented?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 72,
            ], [
                'question' => 'Food prep staff appearance neat, uniforms, shoes and aprons clean?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 72,
            ], [
                'question' => 'Food prep staff friendly, helpful and greeting guests?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 72,
            ], [
                'question' => 'Items prepared correctly and to guest preferences?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 72,
            ], [
                'question' => 'Special requests accommodated, whenever possible?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 72,
            ], [
                'question' => 'Items prepared attractively, pleasing to the eye?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 72,
            ], [
                'question' => 'After ordering, ala carte buffet items ready in less than 3 minutes?',
                'possible_point' => 4,
                'question_no' => 8,
                'category_id' => 72,
            ],[
                'question' => 'All guests serviced within 3 minutes of arriving at ala carte station?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 72,
            ],[
                'question' => 'Guest offered the option of waiting for the item to be prepared or having it delivered to the guest table?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 72,
            ],[
                'question' => 'Food prep staff wearing latex gloves while handling raw / cooked food products?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 72,
            ],[
                'question' => 'Proper utensils used when portioning omelet ingredients?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 72,
            ],[
                'question' => 'Omelet mixture properly held over ice or in a refrigerated unit?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 72,
            ],
            ///// Facility form
            [
                'question' => '	Floors/carpeting kept clean and free of fallen food and debris, swept as needed; free of accumulated dirt and dust?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 73,
            ],
            [
                'question' => 'Floors/carpeting in good repair free of excessive wear, tears, scarring, dings or other damage?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 73,
            ],
            [
                'question' => 'Walls, wall coverings, decor items clean free of dust, spills, heavy soil and damage?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 73,
            ],[
                'question' => 'Dcor items clean, free of dust and not damaged or worn?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 73,
            ],[
                'question' => 'Ceilings, ceiling vents clean, free of soil, dust, dirt or stains and not damaged?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 73,
            ],[
                'question' => 'Ceiling fans clean, free of rust, dust and dirt?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 73,
            ],[
                'question' => 'Ceiling fans on and in sync, all working properly free of wobbling?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 73,
            ],[
                'question' => 'Windows clean free of spotting, streaks and smudges?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 73,
            ],[
                'question' => 'Plants and flowers clean, healthy, containers clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 73,
            ],[
                'question' => 'Side stations and visible service stations kept clean, neat, organized?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 73,
            ],[
                'question' => 'Side stations and visible service station areas no overly worn or damaged?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 73,
            ],[
                'question' => 'No noise and distraction from kitchen or side station (unless part of concept)?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 73,
            ],[
                'question' => 'Merchandising display, poster, blackboards, table tents etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 73,
            ],
            ///// Departure form
            [
                'question' => 'Was front door podium manned upon exit from the restaurant?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 74,
            ],
            [
                'question' => 'Did the hostess make eye contact with the guest as they departed the restaurant?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 74,
            ],
            [
                'question' => 'Did the host/hostess thank the guest asking them to return as they departed the restaurant?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 74,
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
