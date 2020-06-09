<?php

use Illuminate\Database\Seeder;

class LunchBuffet extends Seeder
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
                'question' => 'Host/Hostess answered the phone by the third ring and in a warm and sincere manner?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 75,
            ],
            [
                'question' => 'Reservation information is repeated back to the customer and the call is finalized in a warm manner, using the customers name?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 75,
            ],
            [
                'question' => 'Host/hostesses in uniforms that are neat, clean, appropriate, recently ironed and if part of concept wearing a nametag with accurate name?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 75,
            ],
            [
                'question' => 'Host/Hostess is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 75,
            ],
            [
                'question' => 'When possible, at 10 feet of guest, host/hostess made eye contact and smiled or makes pleasant gesture?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 75,
            ],
            [
                'question' => 'When possible, at 5 feet, host/hostess greeted guest enthusiastically with a warm and sincere greeting?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 75,
            ],
            [
                'question' => 'Staff effeciently handling flow of guests entering restaurant; acknowledged other guests who are waiting to be seated?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 75,
            ],
            [
                'question' => 'Offers to store any bags and hang coats?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 75,
            ],
            [
                'question' => 'Asked guest for name, number of people in party, choice of seating preference (inside or outside dining, non-smoking/smoking, etc)?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 75,
            ],
            [
                'question' => 'Hostess uses guest name in conversation in a comfortable manner to personalize the service.',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 75,
            ],
            [
                'question' => 'Consultant/Guests escorted professionally to the table, host/hostess never rushing the guest, always walking within 5 feet of guest and asking them to watch their step if having to take stairs?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 75,
            ],
            [
                'question' => 'If there is a wait for tables, advised guests of time to wait and gave options; directed toward other revenue sources such as bar?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 75,
            ],
            [
                'question' => 'Maintained restaurant aisles; clear and free of extra chairs, tray jacks, etc. when seating customers and physically-challenged guests?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 75,
            ],
            [
                'question' => 'Knowledgeable of the Daily Schedule of Events, hotel facilities, and services for general guest questions?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 75,
            ],
            [
                'question' => 'Reading material automatically offered to single diners?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 75,
            ],
            [
                'question' => 'Pulled out the chair and assisted guest with seating?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 75,
            ],
            [
                'question' => 'Opened napkin and politely placed it in the guests lap?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 75,
            ],
            [
                'question' => "Menus (if applicable) Presented to the guest always open, not closed (when multiple guests are seated, menus were presented to ladies first and then to gentlemen) always placed in guests' hands not on table?",
                'possible_point' => 3,
                'question_no' => 18,
                'category_id' => 75,
            ],
            [
                'question' => '	Menus presented current and clean?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 75,
            ],
            [
                'question' => 'Informed the guest of their servers name and wished them a great meal?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 75,
            ],
            [
                'question' => 'Extra place setting(s) removed from table?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 75,
            ],
            [
                'question' => 'Helped guest with special needs such as wheelchair accessibility, child?',
                'possible_point' => 3,
                'question_no' => 22,
                'category_id' => 75,
            ],
            [
                'question' => 'Host/Hostess point out availability of the buffet and theme?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 75,
            ],

            ///// Atmosphere form
            [
                'question' => 'First impression of dining room favorable, tables uniformly set?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 76,
            ],
            [
                'question' => 'Dining room floor clean free of fallen food, soil accumulation or damage to flooring/carpeting?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 76,
            ],
            [
                'question' => 'Dining room lighting, temperature and music set to comfortable levels and appropriate for time of day?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 76,
            ],
            [
                'question' => "Consultant's table properly set up for service, centerpieces uniform and complete with condiments fully stocked?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 76,
            ],
            [
                'question' => "Consultant's table properly set up for service, table properly bussed, place settings complete and uniform?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 76,
            ],
            [
                'question' => 'Cloth napkins and table covers clean, color consistent, not worn, damaged or stained?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 76,
            ],
            [
                'question' => 'Glassware provided clean, free of spotting, soap residue or food residue?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 76,
            ],
            [
                'question' => 'Flatware provided clean, not dented or food debris evident?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 76,
            ],
            [
                'question' => "Consultant's table physically in good condition, sturdy, doesn't wobble, free of scarring, wear and damage?",
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 76,
            ],
            [
                'question' => 'Chair seats/banquettes recently wiped, fabric clean and free of soil and staining?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 76,
            ],
            [
                'question' => 'Chair/banquette backing, seats, legs free of excessive soil, scarring, dings and damage?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 76,
            ],
            ///// Initial Service form
            [
                'question' => 'Server received from host or manager and executed any pertinent information relating to guest special occasions, requests, or celebrations?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 77,
            ],
            [
                'question' => "Guests' greeted pleasantly with warmth and sincerity within 2 minutes of being seated?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 77,
            ],
            [
                'question' => 'At 5 feet of table approach, server greeted consultant/guest enthusiastically with a warm and sincere greeting?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 77,
            ],
            [
                'question' => 'Server & server assistants in uniforms that are neat, clean, appropriate, recently ironed and if part of concept wearing a nametag with accurate name?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 77,
            ],
            [
                'question' => 'Server offered beverage service making active suggestions based on meal period (coffee, juice, cocktail, soft drinks) as well as identify any beverages that were part of the buffet ?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 77,
            ],
            [
                'question' => 'Server used the guest name when interacting and during conversations?',
                'possible_point' => 4,
                'question_no' => 6,
                'category_id' => 77,
            ],
            [
                'question' => 'Before departing to place the drink orders, describes buffet, buffet theme, and any various action stations as well as advising the price?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 77,
            ],
            [
                'question' => 'Guest served beverages within 3 minutes, when delivering drink order, confirmed beverage orders when presenting to each guest?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 77,
            ],
            [
                'question' => 'Politely asked guests if they were ready to order their meal?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 77,
            ],
            [
                'question' => 'Offered to answer any questions on the buffet and demonstrated knowledge of the buffet items, informs guests of any ala carte items available from kitchen as part of the buffet?
                ',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 77,
            ],
            ///// Table Service form
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 78,
            ],
            [
                'question' => 'When delivering a la carte items, server advised guests when plates were hot?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 78,
            ],
            [
                'question' => 'Server checked back regularly with guest to ascertain enjoyment, Regularly asked guests if there was anything else they needed?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 78,
            ],
            [
                'question' => 'Server did a good job of removing soiled plates not allowing plates to stack or accumulate?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 78,
            ],
            [
                'question' => 'Appropriate cutlery is preset and/or replaced?, server uses proactive service when applicable for typical food items?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 78,
            ],
            [
                'question' => 'Server discreetly folds napkin for guest during each visit to the buffet?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 78,
            ],
            [
                'question' => 'Server suggests another beverage or refills beverage when drink full, or within 2 minutes of being empty?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 78,
            ],
            [
                'question' => 'Coffee service offered to guests enjoying desserts from buffet?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 78,
            ],
            [
                'question' => 'Staff behavior and body posturing always professional, does not eat, drink, smoke or chew gum within view of guests, staff behavior no hectic or chaotic?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 78,
            ],
            [
                'question' => 'Server is accessible, present and observant without hovering? Does not to interrupt guests conversations. Is present and unobtrusive when guests are in conversation?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 78,
            ],
            [
                'question' => 'Vacated tables quickly cleared and reset and uniformly set to standard?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 78,
            ],
            [
                'question' => 'Did the server and server assistants exude warmth and a true sense of hospitality during all guest interactions, ?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 78,
            ],
            [
                'question' => 'Management personnel visible during the meal period offering staff direction, performing guest service and interacting with guests regularly?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 78,
            ],
            ///// Buffet Service form
            [
                'question' => 'Ample, appropriate and clean dishware provided?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 79,
            ],
            [
                'question' => 'China, platters, plates not worn, chipped or damaged?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet items labeled, labels neat and attractive?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet table well decorated, table compliments food presentations and themes?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet table kept meticulously and surgically clean?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 79,
            ],
            [
                'question' => 'Serving utensils provided on buffet appropriate, clean and convenient?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 79,
            ],
            [
                'question' => 'Food areas around buffet safe, floors dry, sterno contained, etc.?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 79,
            ],
            [
                'question' => 'Food areas around buffet safe, floors dry, sterno contained, etc.?',
                'possible_point' => 5,
                'question_no' => 8,
                'category_id' => 79,
            ],
            [
                'question' => 'Hot items kept hot, cold items kept cold?',
                'possible_point' => 5,
                'question_no' => 9,
                'category_id' => 79,
            ],
            [
                'question' => 'Product flavorful and texture good?',
                'possible_point' => 5,
                'question_no' => 10,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet variety good, offering some regional or ethnic items, low fat items, signature and unique items?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet runner staff friendly, helpful and greeting guests and familiar with items?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 79,
            ],
            [
                'question' => 'Buffet traffic flow smooth, convenient, free of excessive delay?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 79,
            ],
            ///// À La Carte form
            [
                'question' => 'First impression of ala carte station favorable, station itself clean, organized and neat?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 80,
            ],
            [
                'question' => 'Food prep staff appearance neat, uniforms, shoes and aprons clean?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 80,
            ],
            [
                'question' => 'Food prep staff friendly, helpful and greeting guests?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 80,
            ],
            [
                'question' => 'Items prepared correctly and to guest preferences?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 80,
            ],
            [
                'question' => 'Special requests accommodated, whenever possible?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 80,
            ],
            [
                'question' => 'Items prepared attractively, pleasing to the eye?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 80,
            ],
            [
                'question' => 'All guests serviced within 3 minutes of arriving at ala carte station?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 80,
            ],
            [
                'question' => 'Guest offered the option of waiting for the item to be prepared or having it delivered to the guest table?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 80,
            ],
            [
                'question' => 'Food prep staff wearing latex gloves while handling raw / cooked food products?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 80,
            ],
            [
                'question' => 'Proper utensils used when portioning omelet ingredients?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 80,
            ],
            [
                'question' => 'All items are properly held at proper temperature for sanitary reasons?',
                'possible_point' => 5,
                'question_no' => 11,
                'category_id' => 80,
            ],

            ///// Facility form
            [
                'question' => 'Floors/carpeting kept clean and free of fallen food and debris, swept as needed; free of accumulated dirt and dust?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 81,
            ],
            [
                'question' => 'Floors/carpeting in good repair free of excessive wear, tears, scarring, dings or other damage?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 81,
            ],
            [
                'question' => 'Walls, wall coverings, decor items clean free of dust, spills, heavy soil and damage?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 81,
            ],
            [
                'question' => 'Dcor items clean, free of dust and not damaged or worn?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 81,
            ],
            [
                'question' => 'Ceilings, ceiling vents clean, free of soil, dust, dirt or stains and not damaged?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 81,
            ],
            [
                'question' => 'Ceiling fans clean, free of rust, dust and dirt?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 81,
            ],
            [
                'question' => 'Ceiling fans on and in sync, all working properly free of wobbling?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 81,
            ],
            [
                'question' => 'Windows clean free of spotting, streaks and smudges?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 81,
            ],
            [
                'question' => 'Plants and flowers clean, healthy, containers clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 81,
            ],
            [
                'question' => 'Side stations and visible service stations kept clean, neat, organized?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 81,
            ],
            [
                'question' => 'Side stations and visible service station areas no overly worn or damaged?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 81,
            ],
            [
                'question' => 'No noise and distraction from kitchen or side station (unless part of concept)?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 81,
            ],
            [
                'question' => 'Merchandising display, poster, blackboards, table tents etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 81,
            ],

            ///// Check form
            [
                'question' => 'Check was placed on the table within one minute of request?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 82,
            ],
            [
                'question' => 'Bill presented attractively either in a billfold or other unique manner with a pen?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 82,
            ],
            [
                'question' => 'Server uses guest name during check presentation to personalize the service?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 82,
            ],
            [
                'question' => 'Did the check accurately reflect the number and type of buffets ordered?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 82,
            ],
            [
                'question' => 'Was the check rung in within 10 minutes of the order being taken?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 82,
            ],
            [
                'question' => 'After presenting check, server promptly collected cash payment within 3 minutes time?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 82,
            ],
            [
                'question' => 'Server smiled and maintained eye contact while thanking and inviting back guests as they departed from the restaurant?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 82,
            ],
            [
                'question' => 'Server smiled and maintained eye contact while thanking and inviting back guests as they departed from the restaurant?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 82,
            ],

            ///// Departure form
            [
                'question' => 'Host/hostess provided a warm and sincere salutation with a smile and direct eye contact?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 83,
            ],
            [
                'question' => 'Was there a genuine sense warmth and of Hospitality during the guest interaction?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 83,
            ],
            [
                'question' => "Did the associate attempt to personalize the guest's experience by using their guest name?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 83,
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
