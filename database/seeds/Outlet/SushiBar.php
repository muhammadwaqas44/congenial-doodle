<?php

use Illuminate\Database\Seeder;

class SushiBar extends Seeder
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
                'question' => 'Current menu on display at entrance?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 175,
            ],
            [
                'question' => ' Sushi Bar lighting set to a level appropriate for the time of day?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 175,
            ],
            [
                'question' => 'All lighting including decorative lighting on and working?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 175,
            ],
            [
                'question' => 'Music on, appropriate to venue, volume appropriate to level of business?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 175,
            ],
            [
                'question' => 'Music appropriate to venue?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 175,
            ],
            [
                'question' => 'Flooring/Carpeting clean, free of heavy soil, stains or debris?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 175,
            ],
            [
                'question' => 'Sushi bar and any surrounding tables neat in appearance, uniformly set up for service, attractive',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 175,
            ],
            [
                'question' => 'Sushi bar seating neatly aligned upon arrival?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 175,
            ],
            [
                'question' => 'Seats, bar and tables in good condition, wiped clean, free of noticeable damage, stains to cushioning, scarring, rips, tears, or excessive wear?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 175,
            ],
            [
                'question' => 'Sushi Bar surface, clean, free of food debris, beverage rings, stickiness, excessive empty glassware and soiled plates and paper debris?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 175,
            ],
            [
                'question' => 'Place settings pre-set at Sushi Bar and tables, attractive, uniform, chopsticks, soy bowls, plates, any glassware clean and in good condition?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 175,
            ],
            [
                'question' => 'Temperature of the bar/Lounge comfortable, not too hot, not too cold?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 175,
            ],
            [
                'question' => 'Air quality of the bar/lounge comfortable, free of excessive smoke and other foul odors?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 175,
            ],
            ///// Initial Service form
            [
                'question' => 'Sushi Chef and servers in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 176,
            ],
            [
                'question' => ' Staff all wearing nametags?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 176,
            ],
            [
                'question' => 'Consultant recognized quickly and/or greeted by a server within 3 minutes of being seated?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 176,
            ],
            [
                'question' => 'Sushi Bar set with clean menus offering a variety of Sushi, Sahimi, Hand Rolls etc. Specialty cocktails listed as well as a variety of Japanese Beer and Sake?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 176,
            ],
            [
                'question' => 'If ordering cocktails, were better, more expensive brand preferences of liquor solicited or offered for highballs?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 176,
            ],
            [
                'question' => 'If ordering beer products, were local brands and better, more expensive brands promoted?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 176,
            ],
            [
                'question' => ' If ordering wine, were higher priced, premium wine offerings promoted effectively?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 176,
            ],
            [
                'question' => 'Appropriate glassware utilized and provided reflecting Saki, highballs, wine varieties, and beers ordered? (i.e.: rocks/highball glassware available, chilled pilsners or mugs offered for beers served, different red and white wine glasses served)?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 176,
            ],
            [
                'question' => 'Were drinks served within 3 minutes from the time the order was taken?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 176,
            ],
            [
                'question' => 'If a tab is suggested, is it being secured with a credit card or room number?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 176,
            ],
            [
                'question' => 'If tab is requested, tab is placed on table in front of the consultant?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 176,
            ],
            [
                'question' => 'Clean bevnaps or coasters used?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 176,
            ],
            [
                'question' => 'Was the server knowledegable about the various menu items and able to make recommendations? If guest is given the option of filling out a form/menu is a pencil provided?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 176,
            ],
            ///// Beverage Service form
            [
                'question' => 'Server regularly suggests or refills another beverage when drink full, or within 2 minutes of being empty?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 177,
            ],
            [
                'question' => 'All drinks served with quality appearances?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 177,
            ],
            ///// Food Service form
            [
                'question' => 'Sushi ordered arrive in under 15 minutes, full entrees/other food items in under 2 minutes from the time ordered?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 178,
            ],
            [
                'question' => 'Was each setting set with a clean linen napkin, Chopstix, Soy Bowl and side dish. Standard and Low Sodium Soy Sauce presented?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 178,
            ],
            [
                'question' => 'When sushi arrived, were thel items identified and arrive as ordered? Were specialty rolls prepared as listed on the menu?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 178,
            ],
            [
                'question' => 'When sushi arrived, did all the items arrive have appealing presentations? Was wasabi and pickled ginger provided?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 178,
            ],
            [
                'question' => 'When sushi arrived, were items served to appropriate temperature and offer good flavor?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 178,
            ],
            [
                'question' => 'Follow up service offered after food delivery to insure satisfaction and all needs were met?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 178,
            ],
            [
                'question' => 'Additional sushi rolls actively offered?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 178,
            ],
            [
                'question' => 'Separate dessert menu offered and/or employee offered a verbal list of available desserts?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 178,
            ],
            [
                'question' => 'Coffee/cappuccino/espresso and/or after dinner cordials suggested?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 178,
            ],
            ///// Ongoing Service form
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 179,
            ],
            [
                'question' => ' Vacated tables quickly cleared and reset, tables reset uniformly to standard expected?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 179,
            ],
            [
                'question' => 'Did the server do a good job of table maintenance removing empty glassware and paper debris?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 179,
            ],
            [
                'question' => 'Sushi Bar promptly cleared and cleaned when guests depart?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 179,
            ],
            [
                'question' => 'Sushi Bar chairs re-aligned after guests depart?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 179,
            ],
            [
                'question' => 'Glassware clean, free of soap buildup, lipstick, fruit debris?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 179,
            ],
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 179,
            ],
            [
                'question' => 'Were you bid farewell as you departed the bar by at least one of the bartenders or service staff?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 179,
            ],
            [
                'question' => 'During the course of this visit, did any employee that you came into contact with suggest a promotion or special that would bring you back to this establishment at another time?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 179,
            ],
            [
                'question' => 'Merchandising displays, posters, blackboards, table tents, etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 179,
            ],
///// Product Cash Control form
            [
                'question' => 'Did you see a manager at the3 Sushi Bar, on the floor, or actively interacting with staff and guests during your visit?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 180,
            ],
            [
                'question' => 'In tab transactions, server regularly records ongoing sales to the tab?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 180,
            ],
            [
                'question' => 'Bill presented within 1 minute of its request in folder with pen?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 180,
            ],
            [
                'question' => 'In tab transactions, tabs are always placed before the guest prior to payment being accepted?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 180,
            ],
            [
                'question' => 'Check accurately reflects items ordered and properly charged for?',
                'possible_point' => 6,
                'question_no' => 5,
                'category_id' => 180,
            ],
            [
                'question' => 'If charged, bill posted correctly to room?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 180,
            ],
///// Security form
            [
                'question' => ' Guests of questionable age asked for documented proof of age?',
                'possible_point' => 6,
                'question_no' => 1,
                'category_id' => 181,
            ],
            [
                'question' => 'No intoxicated patrons leaving the establishment, and attempting to drive?',
                'possible_point' => 6,
                'question_no' => 2,
                'category_id' => 181,
            ],
            [
                'question' => ' When you visited the restrooms, were they clean, in good repair and well stocked?',
                'possible_point' => 10,
                'question_no' => 3,
                'category_id' => 181,
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
