<?php

use Illuminate\Database\Seeder;

class PoolBeachBar extends Seeder
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
                'question' => 'Music on, volume appropriate to level of business?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 129,
            ],
            [
                'question' => 'Music appropriate to venue?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 129,
            ],
            [
                'question' => 'Flooring clean, free of heavy soil, stains or debris?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 129,
            ],
            [
                'question' => 'Deck or patio tables neat, uniformly set up for service, attractive?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 129,
            ],
            [
                'question' => 'Bar seating neatly aligned upon arrival and in good condition, free of noticeable damage, stains to cushioning, scarring, rips, tears, or excessive wear?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 129,
            ],
            [
                'question' => ' Bar surface, clean, free of food debris, beverage rings, stickiness, excessive empty glassware and soiled plates and paper debris?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 129,
            ],
            [
                'question' => ' Food menus prominently placed on the bar in areas of high visibility?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 129,
            ],
            [
                'question' => 'Back bar attractive, uncluttered, bottles neatly aligned?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 129,
            ],
            [
                'question' => 'Any temperature comforting devices such as fans and/or misting units working properly?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 129,
            ],
            [
                'question' => 'Fans in sync with one another?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 129,
            ],
            ///// Initial Service form
            [
                'question' => 'Bartenders/barbacks in uniforms that are neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 130,
            ],
            [
                'question' => 'Bartenders wearing nametags?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 130,
            ],
            [
                'question' => 'When the bartender/ came to take the order, did they first present or point out signature drink menus, wine listings and/or describe any of the bars or resorts signature drink specials or on going promotions available to guests?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 130,
            ],
            [
                'question' => 'Were better, more expensive brand preferences of liquor solicited or offered for highballs?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 130,
            ],
            [
                'question' => ' If ordering beer products, were local brands and better, more expensive brands promoted?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 130,
            ],
            [
                'question' => 'If ordering wine, were higher priced, premium wine offerings promoted effectively?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 130,
            ],
            [
                'question' => "Appropriate drink ware utilized and provided reflecting highballs, wine varietals, and beers ordered? (i.e.: rocks and highball glassware available, chilled pilsners or mugs offered for beers served, different red and white wine glasses served)?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 130,
            ],
            [
                'question' => 'Were drinks served within 1 minute at the bar after the order was taken?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 130,
            ],
            [
                'question' => 'Bartender immediately addresses the register to ring sale of consultant cocktail?',
                'possible_point' => 6,
                'question_no' => 9,
                'category_id' => 130,
            ],
            [
                'question' => 'If tab is requested, tab is placed on bar in front of the consultant?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 130,
            ],
            [
                'question' => 'If immediate payment is rendered, is preview of check offered and provided?',
                'possible_point' => 6,
                'question_no' => 11,
                'category_id' => 130,
            ],
            [
                'question' => 'If immediate payment is rendered, is proper change returned?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 130,
            ],
            [
                'question' => 'If immediate payment is rendered, is closed check receipt provided?',
                'possible_point' => 6,
                'question_no' => 13,
                'category_id' => 130,
            ],
            [
                'question' => 'Clean bevnaps or coasters used?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 130,
            ],
            ///// Beverage Service form
            [
                'question' => 'While taking the initial order, did the bartender provide a menu or actively suggest appetizers or food items to raise the check average?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 131,
            ],
            [
                'question' => 'Menus clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 131,
            ],
            [
                'question' => 'Beverages in the well call brand level or better?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 131,
            ],
            [
                'question' => 'Cocktails made consistently, garnished and presented in an appealing way?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 131,
            ],
            [
                'question' => 'Bartender regularly suggests or refills another beverage when drink full, or within 2 minutes of being empty?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 131,
            ],
            [
                'question' => 'All drinks served with quality appearances?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 131,
            ],

            [
                'question' => 'Bottles all equipped with pour spouts, spouts are uniform and similar all working properly?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 131,
            ],
            ///// Food Service form
            [
                'question' => 'Appetizers/food product ordered arrive in under 10 minutes, entrees/other food items in under 15 minutes from the time ordered?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 132,
            ],
            [
                'question' => ' Was bar present properly for food service with linens, flatware, appropriate condiments?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 132,
            ],
            [
                'question' => 'When food arrived, did all food arrive as ordered?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 132,
            ],
            [
                'question' => 'When food arrived, did all food arrive have appealing presentations?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 132,
            ],
            [
                'question' => ' Was food served to appropriate temperature and offer good flavor?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 132,
            ],
            [
                'question' => 'Follow up service offered after food delivery to insure satisfaction and all needs were met?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 132,
            ],
            ///// Ongoing Service form
            [
                'question' => ' Back bar area and bottle displays kept clean, neat and organized?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 133,
            ],
            [
                'question' => 'Sip sticks, straws, paper products neatly stocked and stored?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 133,
            ],
            [
                'question' => 'Garnishes fresh, appealing to the eye and appropriate?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 133,
            ],
            [
                'question' => 'Bar top promptly cleared and cleaned when guests depart?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 133,
            ],
            [
                'question' => 'Glassware clean, free of soap buildup, lipstick, fruit debris?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 133,
            ],
            [
                'question' => 'Glassware set ups free of dust, fruit flies?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 133,
            ],
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 133,
            ],
            [
                'question' => 'Were you bid farewell as you departed the bar by at least one of the bartenders or service staff?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 133,
            ],
            [
                'question' => 'During the course of this visit, did any employee that you came into contact with suggest a promotion or special that would bring you back to this establishment at another time?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 133,
            ],
            ///// Product Cash Control form
            [
                'question' => 'Did you see a manager behind the bar, on the floor, or actively interacting with staff and guests during your visit?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartender consistently and regularly uses jigger/shot class correctly, no drag pour to make all highballs?',
                'possible_point' => 10,
                'question_no' => 2,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartender consistently free pours correctly, pouring 1 1/4 oz per highball?',
                'possible_point' => 10,
                'question_no' => 3,
                'category_id' => 134,
            ],
            [
                'question' => 'Portion control tops working properly, bartenders tip bottles only once not re-tipping the bottle to dispense proper portion?',
                'possible_point' => 10,
                'question_no' => 4,
                'category_id' => 134,
            ],
            [
                'question' => 'In cash transactions, bartender immediately records sale before accepting payments?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 134,
            ],
            [
                'question' => 'In cash transactions, bartender addresses cash register and provides a check to guest to preview before accepting payment?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 134,
            ],
            [
                'question' => 'In cash transactions, cash is placed into cash drawer, proper change is returned?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 134,
            ],
            [
                'question' => 'In cash transactions, a closed check receipt accompanies change to the consultant/guest?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 134,
            ],
            [
                'question' => ' In tab transactions credit is properly established and tabs are secured with either a credit card or room number?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 134,
            ],
            [
                'question' => 'In tab transactions, bartender immediately records the sale to establish the tab?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 134,
            ],
            [
                'question' => 'In tab transactions, tabs are always placed before the guest prior to payment being accepted?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 134,
            ],
            [
                'question' => 'Check accurately reflects items ordered and properly charged for?',
                'possible_point' => 6,
                'question_no' => 12,
                'category_id' => 134,
            ],
            [
                'question' => 'If drinks are comped, bartender verbalizes comp, rings comp, and records comp on comp sheet or separate comp check?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartender never exchanges tip money with cash in drawer?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartender only opens drawer during transactions, or to make change for guests and servers?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartenders never serve more drinks than they account for by ringing in transactions whether cash, tabs, room accounts, or comps?',
                'possible_point' => 6,
                'question_no' => 16,
                'category_id' => 134,
            ],
            [
                'question' => 'Only bartenders observed behind the bar making drinks?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 134,
            ],
            [
                'question' => 'Bartenders/servers never observed drinking alcoholic beverages, eating, smoking, talking on cell phones or engaged in horseplay?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 134,
            ],

            ///// Well Cost Control form
            [
                'question' => 'In the service well, servers never call out drinks to the bartenders?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 135,
            ],
            [
                'question' => 'Bartender makes drinks according to register chits only or a system of bartender check verification of server checks is ongoing at the bar?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 135,
            ],
            [
                'question' => ' Servers in and out of the well quickly, drink orders fabricated in under one minute?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 135,
            ],
            [
                'question' => 'Servers predominantly on the floor interacting with guests, dont congregate in the service well?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 135,
            ],
            [
                'question' => 'Well chatter kept to a minimum?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 135,
            ],
            ///// Security form
            [
                'question' => 'Guests of questionable age asked for documented proof of age?',
                'possible_point' => 6,
                'question_no' => 1,
                'category_id' => 136,
            ],
            [
                'question' => 'No intoxicated patrons leaving the establishment, and attempting to drive?',
                'possible_point' => 6,
                'question_no' => 2,
                'category_id' => 136,
            ],
            [
                'question' => 'When you visited the restrooms, were they clean, in good repair and well stocked?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 136,
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
