<?php

use Illuminate\Database\Seeder;

class Bar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Service Overview form
            [
                'question' => 'Staffing levels appropriate for volume of business?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 121,
            ],
            [
                'question' => '	If bar is busy, bartender recognizes new arrivals at the bar quickly, within 1 minute of being seated or approaching the bar?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 121,
            ],
            [
                'question' => 'If bar is slow, bartender makes eye contact and offers soft facial features such as a smile at 10 feet?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 121,
            ],[
                'question' => 'If bar is slow, bartender offers a more formal, verbal greeting when the guest is within 5 feet of the bar, greeting is warm and sincere?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 121,
            ],[
                'question' => 'Bartender appearance neat and orderly, uniform clean and in good condition, if nametag is standard, name accurate, nametag worn?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 121,
            ],[
                'question' => 'If guest is not familiar with product, samples offered? Guests ordering wine by the glass, samples always offered before wine is poured?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 121,
            ],[
                'question' => 'Appropriate glassware utilized and provided reflecting highballs, wine, and beers ordered? (i.e.: rocks and highball glassware available, chilled pilsners or mugs offered for beers served, different red and white wine glasses served)?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 121,
            ],[
                'question' => 'Clean bevnaps or coasters used?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 121,
            ],[
                'question' => 'Returning guests and regular guests immediately recognized as such?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 121,
            ],[
                'question' => 'Menus, table tents and promotional materials clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 121,
            ],[
                'question' => 'Complimentary bar snacks served at the bar? Snacks fresh, presentation attractive and or unique?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 121,
            ],[
                'question' => 'As volume warrants, bartender engages guest in light conversation to make the guest feel at home, seeking commonality through ongoing conversation?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 121,
            ],[
                'question' => 'Were drinks served within 1 minute at the bar after the order was taken?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 121,
            ],[
                'question' => 'Bartenders anticipating guest future needs, offering additional beverage and food item suggestions, refilling snacks, water glasses, etc?',
                'possible_point' => 5,
                'question_no' => 14,
                'category_id' => 121,
            ],[
                'question' => 'Asked guest if they needed anything else before presenting check?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 121,
            ],[
                'question' => 'After bartender provided a check or a receipt, a warm and sincere closing provided, the guest invited back?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 121,
            ],[
                'question' => 'During interactions, bartender always focuses attention on guest making good contact during each encounter with the consultant and other guests?',
                'possible_point' => 4,
                'question_no' => 17,
                'category_id' => 121,
            ],[
                'question' => 'Did the bartender exude a sense of warmth and hospitality during each of the consultant and other guest interactions?',
                'possible_point' => 4,
                'question_no' => 18,
                'category_id' => 121,
            ],[
                'question' => 'Was the associate professional in all manners during the guest interaction?',
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 121,
            ],[
                'question' => 'Did the associate attempt to personalize the guest',
                'possible_point' => 4,
                'question_no' => 20,
                'category_id' => 121,
            ],[
                'question' => 'Bartender quick to clear and clean the bar areas as guests depart?',
                'possible_point' => 3,
                'question_no' => 21,
                'category_id' => 121,
            ],
            ///// Salesmanship form
            [
                'question' => 'When consultant and/or other guests ordered liquor drinks, were brand preferences offered when brands not specified?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 122,
            ],
            [
                'question' => 'If the consultant and/or other guests ordered beer products, were local brands and better, more expensive brands promoted?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 122,
            ],
            [
                'question' => 'If the consultant and/or other guests ordered wine, were higher priced, premium wine offerings promoted effectively?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 122,
            ],[
                'question' => 'Did the bartender actively suggest appetizers or food items if none were ordered?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 122,
            ],[
                'question' => 'Was the bartender knowledgeable and helpful with the menu?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 122,
            ],[
                'question' => 'Bartender regularly offers additional beverages when guest drinks are full, or within 2 minutes of being empty?',
                'possible_point' => 4,
                'question_no' => 6,
                'category_id' => 122,
            ],
            ///// Brand Standards form
            [
                'question' => "'Wines By The Glass' were available? (Bartender/server should show you the Wines by the Glass Menu)",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 123,
            ],
            [
                'question' => 'Beverages in the well call brand level or better?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 123,
            ],
            [
                'question' => 'Bar carries at least one regional craft style beer?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 123,
            ],  [
                'question' => 'Bar has developed it\'s own signature or specialty drinks?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 123,
            ],  [
                'question' => 'Cocktails made correctly, garnished and presented in an appealing way?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 123,
            ],
            ///// Food Service form
            [
                'question' => 'Food menus prominently placed in high visibility locations of the bar?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 124,
            ],
            [
                'question' => 'Appetizers/food product ordered arrive in under 10 minutes, entrees/other food items in under 15 minutes from the time ordered?',
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 124,
            ],
            [
                'question' => 'Was bar presented properly for food service with linens, flatware, appropriate condiments?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 124,
            ],[
                'question' => 'When food arrived, did all food arrive as ordered?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 124,
            ],[
                'question' => 'When food arrived, did all food arrive have appealing presentations?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 124,
            ],[
                'question' => 'When food arrived, was food served to appropriate temperature and offer good flavor?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 124,
            ],[
                'question' => 'Follow up service offered after food delivery to insure satisfaction and all needs were met?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 124,
            ],
            ///// Alcohol Liability form
            [
                'question' => 'No intoxicated patrons noted in the bar/lounge?',
                'possible_point' => 10,
                'question_no' => 1,
                'category_id' => 125,
            ],
            [
                'question' => 'Guests of questionable age asked for documented proof of age?',
                'possible_point' => 10,
                'question_no' => 2,
                'category_id' => 125,
            ],

            ///// Beverage Accountability form
            [
                'question' => 'Did you see a manager behind the bar, on the floor, or actively interacting with staff and guests during your visit?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 126,
            ],
            [
                'question' => 'Bottles all equipped with pour spouts, spouts are uniform and similar all working properly?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 126,
            ],
            [
                'question' => 'Bartender consistently and regularly uses jigger/shot glass correctly, no drag pour to make all highballs?',
                'possible_point' => 10,
                'question_no' => 3,
                'category_id' => 126,
            ],[
                'question' => 'Bartender consistently free pours correctly, pouring 1.25 oz per highball?',
                'possible_point' => 10,
                'question_no' => 4,
                'category_id' => 126,
            ],[
                'question' => 'Portion control tops working properly, bartenders tip bottles only once not retipping the bottle to dispense proper portion?',
                'possible_point' => 10,
                'question_no' => 5,
                'category_id' => 126,
            ],[
                'question' => 'Wines by the glass portioning evident?',
                'possible_point' => 4,
                'question_no' => 6,
                'category_id' => 126,
            ],[
                'question' => 'No incorrect drinks fabricated or excessive spillage not observed?',
                'possible_point' => 6,
                'question_no' => 7,
                'category_id' => 126,
            ],[
                'question' => 'Bartender addresses the register each time a beverage is served either to collect payment, begin or update an existing tab?',
                'possible_point' => 10,
                'question_no' => 8,
                'category_id' => 126,
            ],[
                'question' => 'For immediate cash payment transactions, bartender immediately records sale before/after accepting payments, no delays?',
                'possible_point' => 10,
                'question_no' => 9,
                'category_id' => 126,
            ],[
                'question' => 'For immediate cash payment transactions, bartender addresses cash register and provides a check to guest to preview before accepting cash as payment?',
                'possible_point' => 5,
                'question_no' => 10,
                'category_id' => 126,
            ],[
                'question' => 'For immediate cash payment transactions, after receiving cash, bartender addresses register and provides a closed check receipt after recording the transaction?',
                'possible_point' => 5,
                'question_no' => 11,
                'category_id' => 126,
            ],[
                'question' => 'In cash transactions, cash is placed into cash drawer, proper change is returned?',
                'possible_point' => 5,
                'question_no' => 12,
                'category_id' => 126,
            ],[
                'question' => 'In tab transactions credit is properly established and tabs are secured with either a credit card or room number?',
                'possible_point' => 5,
                'question_no' => 13,
                'category_id' => 126,
            ],[
                'question' => 'In tab transactions, tabs are always placed before the guest prior to payment being accepted?',
                'possible_point' => 10,
                'question_no' => 14,
                'category_id' => 126,
            ],[
                'question' => 'Guest check accurately reflects items ordered and price charged is the same as the menu pricing?',
                'possible_point' => 10,
                'question_no' => 15,
                'category_id' => 126,
            ],[
                'question' => 'Bartenders never serve more drinks than they account for by ringing in transactions whether cash, tabs, room accounts, or comps?',
                'possible_point' => 10,
                'question_no' => 16,
                'category_id' => 126,
            ],[
                'question' => 'If drinks are comped, bartender verbalizes comp, rings comp, and records comp on comp sheet or separate comp check?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 126,
            ],[
                'question' => 'Bartender never exchanges tip money with cash in drawer?',
                'possible_point' => 5,
                'question_no' => 18,
                'category_id' => 126,
            ],[
                'question' => 'Bartender only opens drawer during transactions, or to make change for guests and servers?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 126,
            ],[
                'question' => 'Only bartenders/authorized personnel observed behind the bar making drinks?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 126,
            ],[
                'question' => 'Bartenders/servers never observed drinking alcoholic beverages, eating, smoking, talking on cell phones or engaged in horseplay?',
                'possible_point' => 10,
                'question_no' => 21,
                'category_id' => 126,
            ],
            ///// Well Service form
            [
                'question' => 'In the service well, servers never call out drinks to the bartenders?',
                'possible_point' => 8,
                'question_no' => 1,
                'category_id' => 127,
            ],
            [
                'question' => 'Bartender makes drinks according to register chits only or a system of bartender check verification of server checks is ongoing at the bar?',
                'possible_point' => 10,
                'question_no' => 2,
                'category_id' => 127,
            ],
            [
                'question' => 'Servers in and out of the well quickly, drink orders fabricated in under one minute?',
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 127,
            ], [
                'question' => 'Servers predominantly on the floor interacting with guests, don',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 127,
            ], [
                'question' => 'All drinks served with quality appearances?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 127,
            ], [
                'question' => 'Well chatter kept to a minimum?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 127,
            ], [
                'question' => 'Well appearance standards high free of excessive wetness, empty glassware, clutter?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 127,
            ],
            ///// Facility form
            [
                'question' => 'Bar lighting all works, set to a level appropriate for the time of day?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 128,
            ],
            [
                'question' => 'Music on, volume appropriate to level of business?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 128,
            ],
            [
                'question' => 'Plasma or LCD televisions available for entertainment & on; sound muted if music is playing, programming appropriate to venue, picture clear?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 128,
            ],[
                'question' => 'Bar seating neatly aligned upon arrival?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 128,
            ],[
                'question' => 'Bar seating in good condition, free of noticeable damage, stains to cushioning, scarring, rips, tears, or excessive wear?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 128,
            ],[
                'question' => 'Bar surface, clean, free of food debris, beverage rings, stickiness, excessive empty glassware and soiled plates and paper debris?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 128,
            ],[
                'question' => 'Back bar clean, dust free, attractive, uncluttered, bottles neatly aligned and organized?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 128,
            ],[
                'question' => 'Back bar clean, mirrors streak free, dust free?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 128,
            ],[
                'question' => 'Bar supplies (garnishes, sip sticks, straws, paper products) neatly stocked and stored?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 128,
            ],[
                'question' => 'Bar top promptly cleared and cleaned when guests depart?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 128,
            ],[
                'question' => 'Glass storage areas and glassracks are clean, tidy, all glasses clean, free of soap buildup, lipstick, fruit debris?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 128,
            ],[
                'question' => 'Flooring clean, free of heavy soil, stains or debris?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 128,
            ],[
                'question' => 'Walls and wall coverings clean and in good condition, free of damage, dings, scarring and abrasions?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 128,
            ],[
                'question' => 'Ceiling and vents clean, free of cobwebs and debris?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 128,
            ],[
                'question' => 'Dcor items and fixtures in good condition, clean and free of dust?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 128,
            ],[
                'question' => 'Windows , sills, window dressings and any window treatments clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 128,
            ],[
                'question' => 'When you visited the restrooms, were they clean, in good repair and well stocked?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 128,
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
