<?php

use Illuminate\Database\Seeder;

class DiningCasual extends Seeder
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
                'category_id' => 91,
            ],
            [
                'question' => 'Current menu on display at entrance?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 91,
            ],
            [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 91,
            ], [
                'question' => 'Uniforms appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 91,
            ], [
                'question' => 'Host/hostess staff wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 91,
            ], [
                'question' => 'Seating preference solicited and accommodated? (Smoking/non-smoking, indoor/outdoor seating, booth/table seating)',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 91,
            ], [
                'question' => 'If seating cannot be immediately accommodated, Host/hostess offers the suggestion of the bar and/or lounge?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 91,
            ], [
                'question' => 'Host/hostess escorts guest to table, never rushing or walking more than 5 feet in front of the guests?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 91,
            ], [
                'question' => 'Wine list offered?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 91,
            ], [
                'question' => 'Menus not dropped onto table, each guest handed clean menus by host/hostess?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 91,
            ], [
                'question' => 'Host/hostess removes additional place settings from table?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 91,
            ],
            ///// First Impression form
            [
                'question' => 'First impression of dining room favorable, tables uniformly set?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 92,
            ],
            [
                'question' => 'First impression of dining room favorable floor clean?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 92,
            ],
            [
                'question' => 'First impression of dining room favorable, lighting set to comfortable levels?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 92,
            ], [
                'question' => 'First impression of dining room favorable, temperature of the room comfortable?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 92,
            ], [
                'question' => 'First impression of dining room favorable, music available and at appropriate style and volume?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 92,
            ], [
                'question' => "Consultant's table properly set up for service, centerpieces uniform and complete?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 92,
            ], [
                'question' => "Consultant's table properly set up for service, condiments fully stocked?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 92,
            ], [
                'question' => 'Glassware provided clean free of spotting, soap residue or food residue?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 92,
            ], [
                'question' => 'Flatware provided clean, of good quality, not dented, tarnished or food debris evident?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 92,
            ], [
                'question' => "Consultant's table physically in good condition, sturdy, doesn't wobble and free of scarring?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 92,
            ], [
                'question' => 'Chair seats/banquettes recently wiped, fabric clean and free of soil and staining?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 92,
            ], [
                'question' => 'Chair/banquette backing, seats, legs free of excessive soil, scarring, dings and damage?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 92,
            ],
            ///// Initial Service form
            [
                'question' => 'Guest greeted pleasantly or acknowledged by server and/or server assistant within 2 minutes of being seated?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 93,
            ],
            [
                'question' => 'Server is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 93,
            ],
            [
                'question' => 'Server uniform is clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 93,
            ],
            [
                'question' => 'Server smiles or makes a pleasant facial expression?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 93,
            ],
            [
                'question' => 'Water poured for all guests, bottled water offered as a suggestion?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 93,
            ],
            [
                'question' => 'Server knowledgeable of the wine list and pairing suggestions on wines with menu items?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 93,
            ],
            [
                'question' => 'Did server suggest cocktails or wine prior to food service?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 93,
            ],
            [
                'question' => 'Guest served beverages other than bottled wine within 3 minutes of order being taken?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 93,
            ],
            [
                'question' => 'Beverages served in appropriate glassware, clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 93,
            ],
            [
                'question' => 'Beverage order served correctly, on a tray, all glassware handled at the base or stem, no auctioning of beverages at table?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 93,
            ],
            ///// Order Taking form
            [
                'question' => 'Server did a good job of describing and suggesting specials, if any?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 94,
            ],
            [
                'question' => "Server asks appropriate questions and makes active suggestions during the order taking process to ensure that the guest's complete needs and desires are met, including accompaniments and ala carte items to the meal?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 94,
            ],
            [
                'question' => 'Server knowledgeable on food items, able to answer questions on preparation techniques and ingredients correctly and with ease on menu items?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 94,
            ],
            [
                'question' => 'Did the server attempt to suggest specific appetizers or starters not already ordered to begin the meal and to increase the check?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 94,
            ],
            ///// Meal Service form
            [
                'question' => 'Breads served described by server or server assistant as they are delivered?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 95,
            ],
            [
                'question' => 'Breads fresh, flavorful?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 95,
            ],
            [
                'question' => 'Spreads for breads described as they are delivered?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 95,
            ], [
                'question' => 'Butter served at proper temperature, spreads fresh and flavorful?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 95,
            ], [
                'question' => 'First course appetizers/soups/starters arrive comfortably paced, within 10 minutes of order being taken, or within 10 minutes of delivery of Amuse?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 95,
            ], [
                'question' => 'Appropriate flatware pre-set prior, not after delivery of starter courses?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 95,
            ], [
                'question' => 'Starter courses delivered to appropriate party, not auctioned off?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 95,
            ], [
                'question' => 'All starter courses appealing, attractive in plate presentation?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 95,
            ], [
                'question' => 'First course appetizers/soups/salads served to the correct temperatures?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 95,
            ], [
                'question' => 'First course appetizers/soups/salads prepared as requested, offer nice flavor?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 95,
            ], [
                'question' => 'First course appetizer/soup and salad plates removed from the guest\'s right, whenever possible, within 3 minutes of all guests finishing?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 95,
            ], [
                'question' => 'Server inquires as to satisfaction with first course within one minute of service?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 95,
            ], [
                'question' => 'Entre delivery comfortably timed and paced, entrees arrive within 15 minutes of last course delivery?',
                'possible_point' => 3,
                'question_no' => 13,
                'category_id' => 95,
            ], [
                'question' => 'Entrees delivered ladies first and to appropriate party, not auctioned off?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 95,
            ], [
                'question' => 'Entre presentation, preparation and cooking technique to guest specific request or as described on menu?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 95,
            ], [
                'question' => 'Appropriate flatware pre-set prior, not after delivery of starter courses?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 95,
            ], [
                'question' => 'Entrees delivered appealing, attractive in plate presentation?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 95,
            ], [
                'question' => 'All entrees served to the correct temperatures?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 95,
            ], [
                'question' => 'All entrees offer nice flavor?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 95,
            ], [
                'question' => 'Appropriate condiments accompany the meal at delivery?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 95,
            ], [
                'question' => 'Server inquires as to satisfaction with entrees within 2 minutes of delivery and while guests are still eating?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 95,
            ], [
                'question' => 'Server regularly suggests or refills another beverage when drink full?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 95,
            ], [
                'question' => 'Entree plates removed from the guest\'s right within 5 minutes of all guests finishing?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 95,
            ],
            ///// Dessert Service form
            [
                'question' => 'After the meal, did the server suggest leftovers to go?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 96,
            ],
            [
                'question' => 'Separate dessert menu offered and/or employee offered a verbal list of available desserts?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 96,
            ],
            [
                'question' => 'Dessert menu attractive and clean?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 96,
            ],
            [
                'question' => 'Each dessert selection described in appealing detail?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 96,
            ],
            [
                'question' => 'Coffee/cappuccino/espresso and/or after dinner cordials suggested?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 96,
            ],
            [
                'question' => 'If coffee drinks are ordered, coffee drinks are served prior to dessert being served?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 96,
            ],
            [
                'question' => 'If coffee is ordered, coffee set up precedes coffee service?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 96,
            ],
            [
                'question' => 'Desserts served within 5 minutes of order?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 96,
            ],
            [
                'question' => 'Desserts standing upright, offer decorative and unique presentations, have good flavor?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 96,
            ],
            [
                'question' => 'Coffee refilled as needed?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 96,
            ],
            [
                'question' => 'Dessert plates removed from table prior to delivery of the check?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 96,
            ],
            [
                'question' => 'Bill presented within 1 minute of its request?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 96,
            ],
            [
                'question' => 'Bill presented in folder with a pen?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 96,
            ],
            [
                'question' => 'Check accurately reflects all items ordered?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 96,
            ],
            [
                'question' => 'Check processed correctly to house account or credit card within 2 minutes of the guest placing payment onto the table?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 96,
            ],
            [
                'question' => 'If charged, bill posted correctly to room?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 96,
            ],
            [
                'question' => 'During the course of this visit, did any employee cross market other meal periods or outlets?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 96,
            ],
            [
                'question' => 'Server is knowledgeable about hotel/resort related information, including hours of operations of other outlets and recreation and business facilities?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 96,
            ],

            ///// Incidentals form
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 97,
            ],
            [
                'question' => 'All service staff members in full uniforms that are clean in good condition?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 97,
            ],
            [
                'question' => 'Vacated tables quickly cleared and reset?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 97,
            ], [
                'question' => 'Tables reset uniformly to standard expected?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 97,
            ], [
                'question' => 'Management personnel visible during the meal period offering staff direction, performing guest service and interacting with guests regularly?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 97,
            ], [
                'question' => 'No noise and distraction from kitchen or side station (unless part of concept)?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 97,
            ], [
                'question' => 'Merchandising display, poster, blackboards, table tents etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 97,
            ],
            ///// Departure form
            [
                'question' => '	Host/hostess make eye contact with the guest as they depart the restaurant?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 98,
            ],
            [
                'question' => 'Did the Host/hostess thank the guest asking them to return as they departed the restaurant in a warm manner?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 98,
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
