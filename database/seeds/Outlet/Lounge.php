<?php

use Illuminate\Database\Seeder;

class Lounge extends Seeder
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
                'question' => 'Lounge lighting set to a level appropriate for the time of day?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 112,
            ],
            [
                'question' => 'All lighting including decorative lighting on and working?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 112,
            ],
            [
                'question' => 'Music on, volume appropriate to level of business?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 112,
            ],
            [
                'question' => ' Music appropriate to venue?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 112,
            ],
            [
                'question' => 'Plasma or LCD televisions available for entertainment, on?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 112,
            ],
            [
                'question' => 'Programming appropriate to venue?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 112,
            ],
            [
                'question' => 'Picture clear, easily viewed from most areas of the bar?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 112,
            ],
            [
                'question' => 'Flooring/Carpeting clean, free of heavy soil, stains or debris?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 112,
            ],
            [
                'question' => 'Lounge tables neat, uniformly set up for service, attractive?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 112,
            ],
            [
                'question' => 'Lounge seating neatly aligned to tables upon arrival?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 112,
            ],
            [
                'question' => 'Lounge seats in good condition, free of noticeable damage, stains to cushioning, scarring, rips, tears, or excessive wear?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 112,
            ],
            [
                'question' => 'Lounge table surface, clean, free of food debris, beverage rings, stickiness, excessive empty glassware and soiled plates and paper debris?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 112,
            ],
            [
                'question' => 'Temperature of the bar/Lounge comfortable, not too hot, not too cold?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 112,
            ],
            [
                'question' => ' Air quality of the bar/lounge comfortable, free of excessive smoke and other foul odors?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 112,
            ],
            ///// Initial Service form
            [
                'question' => 'Lounge servers in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 113,
            ],
            [
                'question' => 'Servers wearing nametags?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 113,
            ],
            [
                'question' => 'Consultant recognized quickly and/or greeted by a server within 3 minutes of being seated?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 113,
            ],
            [
                'question' => "When the server came to take the order, did they first present or point out signature drink menus, wine listings and/or describe any of the bar's or resort's signature drink specials or on going promotions available to guests?",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 113,
            ],
            [
                'question' => "Were better, more expensive brand preferences of liquor solicited or offered for highballs?",
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 113,
            ],
            [
                'question' => 'If ordering beer products, were local brands and better, more expensive brands promoted?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 113,
            ],
            [
                'question' => 'If ordering wine, were higher priced, premium wine offerings promoted effectively?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 113,
            ],
            [
                'question' => "Appropriate glassware utilized and provided reflecting highballs, wine varieties, and beers ordered? (i.e.: rocks/highball glassware available, chilled pilsners or mugs offered for beers served, different red and white wine glasses served)?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 113,
            ],
            [
                'question' => ' Were drinks served within 3 minutes from the time the order was taken?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 113,
            ],
            [
                'question' => 'If a tab is suggested, is it being secured with a credit card or room number?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 113,
            ],
            [
                'question' => ' If immediate payment is rendered, is preview of check offered and provided?',
                'possible_point' => 6,
                'question_no' => 11,
                'category_id' => 113,
            ],
            [
                'question' => 'If immediate payment is rendered, is proper change returned?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 113,
            ],
            [
                'question' => 'If immediate payment is rendered, is closed check receipt provided?',
                'possible_point' => 6,
                'question_no' => 13,
                'category_id' => 113,
            ],
            [
                'question' => 'Clean bevnaps or coasters used?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 113,
            ],
            [
                'question' => 'Did the server present bar snacks, such as popcorn, peanuts, etc to guests at the bar.?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 113,
            ],
            [
                'question' => 'Snacks nicely and uniquely presented?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 113,
            ],
            [
                'question' => 'Food Menus part of the table centerpiece and set up?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 113,
            ],
            [
                'question' => 'Menus clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 113,
            ],
            [
                'question' => 'While taking the initial order, did the bartender provide a menu or actively suggest appetizers or food items to raise the check average?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 113,
            ],
            ///// Beverage Service form
            [
                'question' => 'Server regularly suggests or refills another beverage when drink full, or within 2 minutes of being empty?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 114,
            ],
            [
                'question' => 'All drinks served with quality appearances?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 114,
            ],
            ///// Food Service form
            [
                'question' => 'Appetizers/food product ordered arrive in under 10 minutes, entrees/other food items in under 15 minutes from the time ordered?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 115,
            ],
            [
                'question' => 'Was table properly set up for food service with linens, flatware, appropriate condiments?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 115,
            ],
            [
                'question' => ' When food arrived, did all food arrive as ordered?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 115,
            ],
            [
                'question' => 'When food arrived, did all food arrive have appealing presentations?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 115,
            ],
            [
                'question' => 'When food arrived, was food served to appropriate temperature and offer good flavor?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 115,
            ],
            [
                'question' => 'Follow up service offered after food delivery to insure satisfaction and all needs were met?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 115,
            ],
            ///// Ongoing Service form
            [
                'question' => 'Did the server do a good job of table maintenance removing empty glassware and paper debris?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 116,
            ],
            [
                'question' => 'Lounge tables promptly cleared and cleaned when guests depart?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 116,
            ],
            [
                'question' => ' Lounge chairs re-aligned after guests depart?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 116,
            ],
            [
                'question' => 'Glassware clean, free of soap buildup, lipstick, fruit debris?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 116,
            ],
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 116,
            ],
            [
                'question' => 'Were you bid farewell as you departed the bar by at least one of the bartenders or service staff?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 116,
            ],
            [
                'question' => 'During the course of this visit, did any employee that you came into contact with suggest a promotion or special that would bring you back to this establishment at another time?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 116,
            ],
            [
                'question' => 'Merchandising displays, posters, blackboards, table tents, etc., clean, current, in good repair and effective?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 116,
            ],
            ///// Product Cash Control form
            [
                'question' => 'Did you see a manager behind the bar, on the floor, or actively interacting with staff and guests during your visit?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 117,
            ],
            [
                'question' => 'In cash transactions, server immediately records sale before accepting payments?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 117,
            ],
            [
                'question' => 'In cash transactions, server addresses cash register and provides a check to guest to preview before accepting payment?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 117,
            ],
            [
                'question' => 'In cash transactions, proper change is returned?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 117,
            ],
            [
                'question' => 'In cash transactions, a closed check receipt accompanies change to the consultant/guest?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 117,
            ],
            [
                'question' => 'In tab transactions, server regularly records ongoing sales to the tab?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 117,
            ],
            [
                'question' => 'In tab transactions, tabs are always placed before the guest prior to payment being accepted?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 117,
            ],
            [
                'question' => 'Check accurately reflects items ordered and properly charged for?',
                'possible_point' => 6,
                'question_no' => 8,
                'category_id' => 117,
            ],
            [
                'question' => 'If drinks are comped, server verbalizes comp, rings comp, and records comp on comp sheet or separate comp check?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 117,
            ],

            ///// Well Cost Control form
            [
                'question' => 'In the service well, servers never call out drinks to the bartenders?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 118,
            ],
            [
                'question' => 'Bartender makes drinks according to register chits only or a system of bartender check verification of server checks is ongoing at the bar?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 118,
            ],
            [
                'question' => 'Servers in and out of the well quickly, drink orders fabricated in under one minute?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 118,
            ],
            [
                'question' => "Servers predominantly on the floor interacting with guests, don't congregate in the service well?",
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 118,
            ],
            [
                'question' => "Well chatter kept to a minimum?",
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 118,
            ],
            ///// Lounge Service form
            [
                'question' => ' Lounge servers in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 119,
            ],
            [
                'question' => 'All lounge servers wearing nametags?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 119,
            ],
            [
                'question' => "Lounge servers greet arriving guests in under 3 minutes from the time they've been seated?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 119,
            ],
            [
                'question' => 'Servers make good eye contact, smiles at guests during interactions?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 119,
            ],
            [
                'question' => "Drink service times for other lounge guests under 4 minutes from the time the order is taken until delivery?",
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 119,
            ],
            [
                'question' => 'Snacks provided to all lounge guests by the time the first drink is served?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 119,
            ],
            [
                'question' => 'Lounge tables well maintained by service staff excessive glassware kept to a minimum?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 119,
            ],
            [
                'question' => 'Lounge tables well maintained quickly cleaned and reset by service staff within 4 minutes of guest departure?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 119,
            ],
            ///// Security form
            [
                'question' => 'Guests of questionable age asked for documented proof of age?',
                'possible_point' => 6,
                'question_no' => 1,
                'category_id' => 120,
            ],
            [
                'question' => 'No intoxicated patrons leaving the establishment, and attempting to drive?',
                'possible_point' => 6,
                'question_no' => 2,
                'category_id' => 120,
            ],
            [
                'question' => 'When you visited the restrooms, were they clean, in good repair and well stocked?',
                'possible_point' => 10,
                'question_no' => 3,
                'category_id' => 120,
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
