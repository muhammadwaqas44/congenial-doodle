<?php

use Illuminate\Database\Seeder;

class DiningFine extends Seeder
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
                'question' => 'Entry neat, clean, free of debris, inviting?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 99,
            ],
            [
                'question' => 'Any food displays attractive, orderly and appealing?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 99,
            ],
            [
                'question' => 'Current menu on display at entrance?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 99,
            ], [
                'question' => 'If reservation was made, reservation information accurately relayed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 99,
            ], [
                'question' => "Maitre d' or at least one host/hostess is visible at desk at all times?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 99,
            ], [
                'question' => 'Personnel posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 99,
            ], [
                'question' => 'Maitre d\' or host/hostess smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach podium/desk (within 5 feet of the desk)?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 99,
            ], [
                'question' => 'Host/hostess personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 99,
            ], [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 99,
            ], [
                'question' => 'Uniforms appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 99,
            ], [
                'question' => 'GSRs wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 99,
            ], [
                'question' => 'GSRs welcomes guest with professionalism and warmth?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 99,
            ], [
                'question' => 'Returning visitors recognized as such, guest preferences are automatically accommodated?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 99,
            ], [
                'question' => 'Once guest is identified, Maitre d\' and/or host/hostess staff utilizes guest name during the ensuing conversation and check in process?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 99,
            ], [
                'question' => 'If applicable, assistance and storage of outer garments, packages and/or luggage offered?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 99,
            ], [
                'question' => "Maitre d'/Host/Hostess engages in genuinely warm conversation to connect to the consultant/guest emotions?",
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 99,
            ], [
                'question' => 'Reservations accommodated within 10 minutes of arrival?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 99,
            ], [
                'question' => 'Seating preference solicited and accommodated? (Smoking/non-smoking, indoor/outdoor seating, booth/table seating)',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 99,
            ], [
                'question' => 'If reservations seating cannot be immediately accommodated, Maitre d\'/host/hostess escorts consultant/guests to the bar/lounge offering and then taking a cocktail/beverage order, transitioning service accordingly?',
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 99,
            ], [
                'question' => "If applicable, Maitre d'/host/hostess approached guest in bar/lounge, by name informing guest that table is ready?",
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 99,
            ], [
                'question' => "Maitre d'/host/hostess escorts guest to table, never rushing or walking more than 5 feet in front of the guests?",
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 99,
            ], [
                'question' => 'Seating assistance provided automatically and chairs pulled out especially for ladies?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 99,
            ], [
                'question' => 'Napkin Service provided to all guests, ladies first?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 99,
            ], [
                'question' => 'Dark linens napkins automatically provided to all guests with dark garments on?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 99,
            ], [
                'question' => "Party host is determined and wine list is handed to the host, not placed on table by the Maitre d'/host/hostess?",
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 99,
            ], [
                'question' => 'A cocktail and or beverage order is immediately solicited by the Maitre d\'/host/hostess before departing?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 99,
            ], [
                'question' => 'Each guest handed clean menus by either Maitre d\'/host/hostess or Captain dependent on policy?',
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 99,
            ],
            ///// First Impression form
            [
                'question' => 'First impression of dining room favorable, tables uniformly set?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 100,
            ],
            [
                'question' => 'First impression of dining room favorable, floor clean?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 100,
            ],
            [
                'question' => 'First impression of dining room favorable, lighting set to comfortable levels?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 100,
            ], [
                'question' => 'First impression of dining room favorable, temperature of the room comfortable?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 100,
            ], [
                'question' => 'First impression of dining room favorable, live music available 40 of the 60 minutes per hour and appropriate in style and volume?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 100,
            ], [
                'question' => 'First impression of dining room favorable when live music is not played, recorded music on, appropriate in style and volume?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table properly set up for service, centerpieces uniform and complete?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table properly set up for service, condiments fully stocked?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table properly set up for service, proper number of place settings all complete and uniform?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table properly set up for service, table properly covered in linen of high quality, crisp and clean, and evenly spread?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 100,
            ], [
                'question' => 'Cloth napkins clean, color consistent, not worn, damaged or stained?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 100,
            ], [
                'question' => 'Glassware provided clean free of spotting, soap residue or food residue?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 100,
            ], [
                'question' => 'Flatware provided clean, of superior quality silver, not dented, tarnished or food debris evident?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table physically in good condition, sturdy, doesn't wobble?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 100,
            ], [
                'question' => "Consultant's table physically in good condition, free of scarring, wear and damage?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 100,
            ], [
                'question' => 'Chair seats/banquettes recently wiped, fabric clean and free of soil and staining?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 100,
            ], [
                'question' => 'Chair/banquette backing, seats, legs free of excessive soil, scarring, dings and damage?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 100,
            ],
            ///// Initial Service form
            [
                'question' => 'Guest greeted pleasantly or acknowledged by server and/or server assistant within 1 minute of Maitre d\'/host/hostess departure?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 101,
            ],
            [
                'question' => "Server's name was communicated?",
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 101,
            ],
            [
                'question' => 'Server is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 101,
            ], [
                'question' => 'Server uniform is clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 101,
            ], [
                'question' => 'Server smiles or makes a pleasant facial expression?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 101,
            ], [
                'question' => 'Server makes and holds good eye contact with the guest?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 101,
            ], [
                'question' => 'Server greets guest pleasantly and warmly by name?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 101,
            ], [
                'question' => 'Water poured for all guests, bottled water offered in lieu of tap water?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 101,
            ], [
                'question' => 'Minimum 2 still and 2 sparkling bottled water selections available?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 101,
            ], [
                'question' => 'While offering beverages, did server point out wine listing making active suggestions while doing so?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 101,
            ], [
                'question' => 'Did server suggest a cocktail or drink specials by name specifically?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 101,
            ], [
                'question' => 'Guest served beverages other than bottled wine within 3 minutes of order being taken?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 101,
            ], [
                'question' => 'Beverages served in appropriate glassware, clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 101,
            ], [
                'question' => 'Beverage order served correctly, on a tray, all glassware handled at the base or stem, no auctioning of beverages at table?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 101,
            ],
            ///// Wine Service form
            [
                'question' => 'Accredited Sommelier or Wine steward on duty and available?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 102,
            ],
            [
                'question' => 'When interest in wine expressed, did Sommelier or Wine Steward approach table, introduce themselves and offer assistance?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 102,
            ],
            [
                'question' => 'Wine listing offers good variety of vintages, types both well known and unique?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 102,
            ], [
                'question' => 'Wine listing offers a nice blend of high, medium and affordable wines of high quality?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 102,
            ], [
                'question' => 'Server knowledgeable of wine selections and bin items, capable of assisting in selection process, encouraging adventure?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 102,
            ], [
                'question' => 'Wine selection suggestions offered for all courses?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 102,
            ], [
                'question' => 'Proper glassware pre-set for wine ordered?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 102,
            ], [
                'question' => 'Requested wine and wine label presented to host?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 102,
            ], [
                'question' => 'Server demonstrates proper technique in opening wine, bottle away from guest, bottle foil cut at second lip of neck, rim wiped with clean towel, bottle never placed onto the table or body parts, no popping noise when cork is extracted from champagne?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 102,
            ], [
                'question' => 'Server demonstrates proper pouring of wine, cork to the host, cork remains intact for inspection by guest?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 102,
            ], [
                'question' => 'Sample of wine poured to the host insuring that label always faces the host?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 102,
            ], [
                'question' => 'Server demonstrates proper pouring of wine, filling wine glasses no more than 1/3, champagne flutes to within, 1/2',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 102,
            ], [
                'question' => "Server demonstrates proper pouring of the wine, insuring that label faces the guest and filling ladies glasses first, then gentlemen, then host's last?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 102,
            ], [
                'question' => 'Server demonstrates proper handling of wine, decanting wine properly if cork breaks or is overly aged, and as necessary, opening and allowing oxygenation of wine prior to pouring reds, placing white wine bottles into ice buckets?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 102,
            ], [
                'question' => 'Guest never initiates request for additional wine, servers attentively pour wine refilling to original levels and offering additional bottles as needed?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 102,
            ],
            ///// Order Taking form
            [
                'question' => 'Server did a good job of describing and suggesting evening specials, if any?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 103,
            ],
            [
                'question' => 'Server reviews menu with the guest, points out restaurant signature items, and recommending 2 items from different categories of the menu?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 103,
            ],
            [
                'question' => 'Server takes dinner order beginning with ladies first, then gentlemen?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 103,
            ],
            [
                'question' => "Server asks appropriate questions and makes active suggestions during the order taking process to ensure that the guest's complete needs and desires are met, including accompaniments and ala carte items to the meal?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 103,
            ],
            [
                'question' => 'Server knowledgeable on food items, able to answer questions on preparation techniques and ingredients correctly and with ease on menu items?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 103,
            ],
            [
                'question' => 'Did the server attempt to suggest specific appetizers or starters not already ordered to begin the meal and to increase the check?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 103,
            ],

            ///// Meal Service form
            [
                'question' => 'Breads served described by server or server assistant as they are delivered?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 104,
            ],
            [
                'question' => 'Breads fresh, flavorful?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 104,
            ],
            [
                'question' => 'Spreads for breads described as they are delivered?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 104,
            ], [
                'question' => 'Butter served at proper temperature, spreads fresh and flavorful?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 104,
            ], [
                'question' => 'Amuse offered prior to meal?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 104,
            ], [
                'question' => 'Flatware pre-set prior to delivery of Amuse?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 104,
            ], [
                'question' => 'Amuse explained and described by server as they are delivered?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 104,
            ], [
                'question' => 'Amuse unique, attractive in plate presentation, flavor?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 104,
            ], [
                'question' => 'Amuse plates removed within 3 minutes of all guests finishing?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 104,
            ], [
                'question' => 'Server inquires as to satisfaction with Amuse?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 104,
            ], [
                'question' => 'First course appetizers/soups/starters arrive comfortably paced, within 10 minutes of order being taken, or within 10 minutes of delivery of Amuse?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 104,
            ], [
                'question' => 'Appropriate flatware pre-set prior, not after delivery of starter courses?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 104,
            ], [
                'question' => 'Starter courses delivered to appropriate party, not auctioned off?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 104,
            ], [
                'question' => "All starter courses are presented from the guest's left, whenever possible, then explained and described by server as they are delivered?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 104,
            ], [
                'question' => 'All starter courses appealing, attractive in plate presentation?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 104,
            ], [
                'question' => 'Fresh ground pepper offered, as applicable?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 104,
            ], [
                'question' => 'First course appetizers/soups/salads served to the correct temperatures?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 104,
            ], [
                'question' => 'First course appetizers/soups/salads prepared as requested, offer nice flavor?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 104,
            ], [
                'question' => "First course appetizer/soup and salad plates removed from the guest's right, whenever possible, within 3 minutes of all guests finishing?",
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 104,
            ], [
                'question' => 'Server inquires as to satisfaction with first course within one minute of service?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 104,
            ], [
                'question' => 'Table is crumbed?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 104,
            ], [
                'question' => 'Sorbet or suitable palate cleanser served?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 104,
            ], [
                'question' => 'Flatware pre-set prior to delivery of sorbet?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 104,
            ], [
                'question' => 'Sorbet served from the left, if possible and explained and described by server as they are delivered?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 104,
            ], [
                'question' => 'Sorbet unique, attractive in plate presentation, good consistency and flavor?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 104,
            ], [
                'question' => 'Sorbet plates removed from the right, when possible, within 3 minutes of all guests finishing?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 104,
            ], [
                'question' => 'Entre delivery comfortably timed and paced, entrees arrive within 15 minutes of last course delivery?',
                'possible_point' => 3,
                'question_no' => 27,
                'category_id' => 104,
            ], [
                'question' => 'Entres delivered ladies first and to appropriate party, not auctioned off?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 104,
            ], [
                'question' => 'Entre presentation, preparation and cooking technique to guest specific request or as described on menu?',
                'possible_point' => 3,
                'question_no' => 29,
                'category_id' => 104,
            ], [
                'question' => 'Appropriate flatware pre-set prior, not after delivery of starter courses?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 104,
            ], [
                'question' => 'All entrees are presented from the left, when possible, then explained and described by server as they are delivered?',
                'possible_point' => 1,
                'question_no' => 31,
                'category_id' => 104,
            ], [
                'question' => 'If entrees are delivered covered, covers all removed at the same time?',
                'possible_point' => 1,
                'question_no' => 32,
                'category_id' => 104,
            ], [
                'question' => 'If wine was not ordered prior to meal, was appropriate wine selection suggestion offered to accompany entree?',
                'possible_point' => 1,
                'question_no' => 33,
                'category_id' => 104,
            ], [
                'question' => 'Entrees delivered appealing, attractive in plate presentation?',
                'possible_point' => 3,
                'question_no' => 34,
                'category_id' => 104,
            ], [
                'question' => 'Fresh ground pepper offered, as applicable?',
                'possible_point' => 1,
                'question_no' => 35,
                'category_id' => 104,
            ], [
                'question' => 'All entrees served to the correct temperatures?',
                'possible_point' => 2,
                'question_no' => 36,
                'category_id' => 104,
            ], [
                'question' => 'All entrees offer nice flavor?',
                'possible_point' => 2,
                'question_no' => 37,
                'category_id' => 104,
            ], [
                'question' => 'Appropriate condiments accompany the meal at delivery?',
                'possible_point' => 2,
                'question_no' => 38,
                'category_id' => 104,
            ], [
                'question' => 'Server inquires as to satisfaction with entrees within 2 minutes of delivery and while guests are still eating?',
                'possible_point' => 2,
                'question_no' => 39,
                'category_id' => 104,
            ], [
                'question' => 'Server regularly suggests or refills another beverage when drink full?',
                'possible_point' => 1,
                'question_no' => 40,
                'category_id' => 104,
            ], [
                'question' => 'Was service offered before being summoned? Did the server insure that the guest never had to initiate a request for anything within the scope of the server\'s control including normal table maintenance of keeping ashtrays clean, lighting cigarettes, replenishing bread and spreads, removal of plates and insuring the overall comfort of the guest?',
                'possible_point' => 3,
                'question_no' => 41,
                'category_id' => 104,
            ], [
                'question' => 'Should guest leave the table during service, napkin is neatly folded or exchanged and placed tabletop or on chair arm, offered seating assistance upon return?',
                'possible_point' => 1,
                'question_no' => 42,
                'category_id' => 104,
            ], [
                'question' => 'If guest leaves the table during meal service, plates with food are covered or stored in appropriate warmers until guest returns and then represented to the guest?',
                'possible_point' => 1,
                'question_no' => 43,
                'category_id' => 104,
            ], [
                'question' => "Entree plates removed from the guest's right within 3 minutes of all guests finishing?",
                'possible_point' => 1,
                'question_no' => 44,
                'category_id' => 104,
            ], [
                'question' => 'Table is crumbed?',
                'possible_point' => 1,
                'question_no' => 45,
                'category_id' => 104,
            ], [
                'question' => '	During meal service, guest name utilized at every possible juncture?',
                'possible_point' => 1,
                'question_no' => 46,
                'category_id' => 104,
            ],
            ///// Dessert Service form
            [
                'question' => 'After the meal, did the server suggest leftovers to go?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 105,
            ],
            [
                'question' => 'Dessert selections presented on a cart or tray attractively displayed and appealing?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 105,
            ],
            [
                'question' => 'Dessert cart/tray attractive, in good condition?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 105,
            ], [
                'question' => 'Separate dessert menu offered?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 105,
            ], [
                'question' => 'Dessert menu attractive and clean?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 105,
            ], [
                'question' => "Each dessert selection described in appealing detail?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 105,
            ], [
                'question' => "Coffee/cappuccino/espresso and/or after dinner cordials suggested?",
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 105,
            ], [
                'question' => 'If coffee drinks are ordered, coffee drinks are served prior to dessert being served?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 105,
            ], [
                'question' => 'If coffee is ordered, coffee set up precedes coffee service?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 105,
            ], [
                'question' => 'Desserts served within 5 minutes of order?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 105,
            ], [
                'question' => 'Desserts standing upright, offer decorative and unique presentations, have good flavor?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 105,
            ], [
                'question' => 'Coffee refilled as needed?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 105,
            ], [
                'question' => 'Bill presented within 1 minute of its request?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 105,
            ], [
                'question' => 'Bill presented in folder with a pen?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 105,
            ], [
                'question' => 'Bill presented with petit fours or other amenity?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 105,
            ], [
                'question' => 'Check accurately reflects all items ordered?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 105,
            ], [
                'question' => 'Check processed correctly to house account or credit card within 2 minutes of the guest placing payment onto the table?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 105,
            ], [
                'question' => 'If charged, bill posted correctly to room?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 105,
            ], [
                'question' => 'During the course of this visit, did any employee cross market other meal periods or outlets?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 105,
            ], [
                'question' => 'Server is knowledgeable about hotel/resort related information, including hours of operations of other outlets and recreation and business facilities?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 105,
            ], [
                'question' => 'Did the server thank the guest asking them to return as they departed the restaurant?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 105,
            ], [
                'question' => 'Did the server utilize the guest name in departing salutation?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 105,
            ],
            ///// Incidentals form
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 106,
            ],
            [
                'question' => 'All service staff members in full uniforms that are clean in good condition?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 106,
            ],
            [
                'question' => 'Staff behavior is not hectic or chaotic?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 106,
            ], [
                'question' => 'Staff does not eat, drink, smoke or chew gum within view of guests?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 106,
            ], [
                'question' => 'Staff posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 106,
            ], [
                'question' => 'Vacated tables quickly cleared and reset?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 106,
            ], [
                'question' => 'Tables reset uniformly to standard expected?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 106,
            ], [
                'question' => 'Management personnel visible during the meal period offering staff direction, performing guest service and interacting with guests regularly?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 106,
            ], [
                'question' => 'Tables remain uniformly set for service?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 106,
            ], [
                'question' => 'Room temperature, lighting conditions and music volume and type remain comfortable and day part appropriate?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 106,
            ], [
                'question' => 'Floors/carpeting kept clean and free of fallen food and debris?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 106,
            ], [
                'question' => 'Floors/carpeting clean, free of accumulated soil buildup, or stains?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 106,
            ], [
                'question' => 'Floors/carpeting in good repair free of excessive wear, tears, scarring, dings or other damage?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 106,
            ], [
                'question' => 'Walls, wall coverings, decor items clean free of dust, spills, heavy soil?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 106,
            ], [
                'question' => 'Walls, wall coverings in good repair free of dings, scratches, dents or other damage?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 106,
            ], [
                'question' => 'Dcor items clean, free of dust?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 106,
            ], [
                'question' => 'Dcor items not damaged or overly worn?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 106,
            ], [
                'question' => 'Ceilings, ceiling vents clean, free of soil, dust, dirt or stains?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 106,
            ], [
                'question' => 'Ceilings and ceiling vents in good condition free of rusting, dents, unsightly wear or plaster damage?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 106,
            ], [
                'question' => 'Ceiling fans clean, free of rust, dust and dirt?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 106,
            ], [
                'question' => 'Ceiling fans on and in sync, all working properly free of wobbling?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 106,
            ], [
                'question' => 'Windows clean free of spotting, streaks and smudges?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 106,
            ], [
                'question' => 'Window sills and frames clean free of dust, soil, food debris or spills and stains?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 106,
            ], [
                'question' => 'Windows, window dressings and draperies in good repair?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 106,
            ], [
                'question' => 'Plants and flowers clean, healthy, containers clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 106,
            ], [
                'question' => 'Side stations and visible service stations kept clean, neat, organized?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 106,
            ],
            [
                'question' => 'Side stations and visible service station areas no overly worn or damaged?',
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 106,
            ],
            [
                'question' => 'No noise and distraction from kitchen or side station (unless part of concept)?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 106,
            ],
            [
                'question' => 'Merchandising display, poster, blackboards, table tents etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 106,
            ],

            ///// Departure form
            [
                'question' => 'Was front door podium manned upon exit from the restaurant?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 107,
            ],
            [
                'question' => "Did the Maitre d'/host/hostess make eye contact with the guest as they depart the restaurant?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 107,
            ],
            [
                'question' => "Did the Maitre d'/host/hostess utilize the guest name in departing salutation?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 107,
            ],
            [
                'question' => "Did the Maitre d'/host/hostess thank the guest asking them to return as they departed the restaurant in a warm manner?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 107,
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
