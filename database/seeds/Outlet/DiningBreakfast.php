<?php

use Illuminate\Database\Seeder;

class DiningBreakfast extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// First Impression form
            [
                'question' => '	First impression of dining room favorable, tables uniformly set?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 84,
            ],
            [
                'question' => 'Dining room floor clean?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 84,
            ],
            [
                'question' => 'Dining room lighting, temperature and music set to comfortable levels and appropriate for time of day?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 84,
            ],
            [
                'question' => 'Consultants table properly set up for service, centerpieces uniform and complete with condiments fully stocked?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 84,
            ],
            [
                'question' => 'Consultants table properly set up for service, place settings complete and uniform?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 84,
            ],
            [
                'question' => 'Consultants table properly set up for service, table properly bussed free of debris, beverage rings, wetness or stickiness? If covered in linen, linens in good condition, crisp, clean and evenly spread?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 84,
            ],
            [
                'question' => 'Cloth napkins clean, color consistent, not worn, damaged or stained?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 84,
            ],
            [
                'question' => 'Mugs provided clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 84,
            ],
            [
                'question' => 'Glassware provided clean, free of spotting, soap residue or food residue?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 84,
            ],
            [
                'question' => 'Flatware provided clean, not dented or food debris evident?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 84,
            ],
            [
                'question' => "Consultant's table physically in good condition, sturdy, doesn't wobble, free of scarring, wear and damage?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 84,
            ],
            [
                'question' => "Chair seats/banquettes recently wiped, fabric clean and free of soil and staining?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 84,
            ],
            [
                'question' => "Chair/banquette backing, seats, legs free of excessive soil, scarring, dings and damage?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 84,
            ],
            ///// Greeting form
            [
                'question' => 'Host/hostesses in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 85,
            ],
            [
                'question' => 'Host/Hostess is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 85,
            ],
            [
                'question' => 'Host/Hostess wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 85,
            ],
            [
                'question' => 'Host/Hostess staff efficiently and pleasantly handling flow of guests in and out of restaurant?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 85,
            ],
            [
                'question' => "	Smoking/non smoking and indoor/outdoor seating preferences ascertained and accommodated if applicable?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 85,
            ],
            [
                'question' => 'Complimentary newspapers available?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 85,
            ],
            [
                'question' => "Reading materials automatically offered to single diners?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 85,
            ],
            [
                'question' => 'Menus presented, current and clean?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 85,
            ],
            [
                'question' => '	Menus handed to guests rather than placed on tables?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 85,
            ],
            [
                'question' => 'Extra place settings removed?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 85,
            ],
            ///// Order Taking form
            [
                'question' => "Server asks appropriate questions and makes active suggestions during the order taking process to ensure that the guest's complete needs and desires are met, including accompaniments and ala carte items to the meal?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 86,
            ],
            [
                'question' => "Server knowledgeable on food items, able to answer questions on preparation techniques and ingredients correctly and with ease on menu items?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 86,
            ],
            [
                'question' => "Did the server attempt to suggest specific items not already ordered to compliment the meal and to increase the check?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 86,
            ],
            [
                'question' => "Entre delivery comfortably timed and paced, entrees arrive within 12 minutes of order being placed?",
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 86,
            ],
            [
                'question' => 'Entrees delivered ladies first and to appropriate party, not auctioned off?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 86,
            ],
            [
                'question' => "Entree presentation, preparation and cooking technique to guest specific request or as described on menu?",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 86,
            ],
            [
                'question' => "Appropriate flatware pre-set prior, not after delivery of starter courses?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 86,
            ],
            [
                'question' => "Entrees delivered appealing, attractive in plate presentation?",
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 86,
            ],
            [
                'question' => "All entrees served to requested specification and at the correct temperatures?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 86,
            ],
            [
                'question' => 'All entrees offer nice flavor?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 86,
            ],
            [
                'question' => 'Appropriate condiments accompany the meal at delivery?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 87,
            ],
            [
                'question' => 'Server inquires as to satisfaction with entrees within 2 minutes of delivery and while guests are still eating?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 87,
            ],
            ///// Initial Service form
            [
                'question' => "Guest greeted pleasantly or acknowledged by server within 1 minute?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 87,
            ],
            [
                'question' => "Server in proper uniform that is neat, clean, appropriate, recently ironed?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 87,
            ],
            [
                'question' => "Server is neatly groomed?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 87,
            ],
            [
                'question' => "Server wearing a nametag?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 87,
            ],
            [
                'question' => "If reservation made, or guest asked name by hostess for seating purposes, server informed of and used guest surname throughout service?",
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 87,
            ],
            [
                'question' => "Did server introduce the menu, offering descriptions and offering suggestions on specific menu items?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 87,
            ],
            [
                'question' => "Staff knowledgeable about hot and cold foods associated with the menu?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 87,
            ],
            [
                'question' => "Did server offer and suggest coffee and juice?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 87,
            ],
            [
                'question' => "Guest served beverages within 3 minutes of order being taken?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 87,
            ],
            ///// Ongoing Service form
            [
                'question' => "Entree plates removed from the guest's right within 5 minutes of all guests finishing?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 88,
            ],
            [
                'question' => "Server discreetly folds napkin for guest should they leave the table during the visit?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 88,
            ],
            [
                'question' => "Server suggests another beverage or refills beverage when drink full, or within 2 minutes of being empty?",
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 88,
            ],
            [
                'question' => 'Did the server check back periodically to insure guest satisfaction?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 88,
            ],
            [
                'question' => 'Staff behavior is not hectic or chaotic?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 88,
            ],
            [
                'question' => 'Staff does not eat, drink, smoke or chew gum within view of guests?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 88,
            ],
            [
                'question' => 'Staff posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 88,
            ],
            [
                'question' => 'Vacated tables quickly cleared and reset and uniformly set to standard?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 88,
            ],
            [
                'question' => "Management personnel visible during the meal period offering staff direction, performing guest service and interacting with guests regularly?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 88,
            ],
            [
                'question' => "Were you invited back, or offered the suggestion of a different meal period or outlet to visit during your stay?",
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 88,
            ],
            [
                'question' => "Server prompt with delivery of check, either discreetly placed during the breakfast meal or within 1 minute of request?",
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 88,
            ],
            [
                'question' => 'Was dirty china and flatware removed before the check was presented?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 88,
            ],
            [
                'question' => 'Did the check accurately reflect the items ordered?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 88,
            ],
            [
                'question' => 'Was the check time (within 10 minutes) and date accurate?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 88,
            ],
            [
                'question' => '	Bill presented in folder with a pen?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 88,
            ],
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 88,
            ],
            ///// Facilities form
            [
                'question' => "Floors/carpeting kept clean and free of fallen food and debris, swept as needed; free of accumulated dirt and dust?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 89,
            ],
            [
                'question' => "	Floors/carpeting in good repair free of excessive wear, tears, scarring, dings or other damage?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 89,
            ],
            [
                'question' => "Walls, wall coverings, decor items clean free of dust, spills, heavy soil and damage?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 89,
            ],
            [
                'question' => "	Dcor items clean, free of dust and not damaged or worn?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 89,
            ],
            [
                'question' => "Ceilings, ceiling vents clean, free of soil, dust, dirt or stains and not damaged?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 89,
            ],
            [
                'question' => "Ceiling fans clean, free of rust, dust and dirt?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 89,
            ],
            [
                'question' => "Ceiling fans on and in sync, all working properly free of wobbling?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 89,
            ],
            [
                'question' => "Windows clean free of spotting, streaks and smudges?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 89,
            ],
            [
                'question' => "Plants and flowers clean, healthy, containers clean and in good repair?",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 89,
            ],
            [
                'question' => "Side stations and visible service stations kept clean, neat, organized?",
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 89,
            ],
            [
                'question' => "Side stations and visible service station areas no overly worn or damaged?",
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 89,
            ],
            [
                'question' => "No noise and distraction from kitchen or side station (unless part of concept)?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 89,
            ],
            [
                'question' => "Merchandising display, poster, blackboards, table tents etc., clean, current, in good repair and effective?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 89,
            ],

            ///// Departure form
            [
                'question' => '	Was front door podium manned upon exit from the restaurant?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 90,
            ],
            [
                'question' => 'Did the hostess make eye contact with the guest as they departed the restaurant?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 90,
            ],
            [
                'question' => 'Did the host/hostess thank the guest asking them to return as they departed the restaurant?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 90,
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
