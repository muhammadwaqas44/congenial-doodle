<?php

use Illuminate\Database\Seeder;

class GuestRoom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            [
                'question' => 'Room provided meets requirements asked for at the time reservation was made?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 7,
            ],
            [
                'question' => 'Room temperature comfortable upon entry?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 7,
            ],
            [
                'question' => 'Room free of odor and fresh smelling?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 7,
            ],
            [
                'question' => 'Entry light switch works to prevent guests from entering a dark room?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 7,
            ],
            [
                'question' => 'Temperature control unit effective in changing temperature/humidity conditions?',
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 7,
            ],
            [
                'question' => 'Door comes with two lock system, door closes and latches automatically, locks in good working condition and working properly?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 7,
            ],
            [
                'question' => 'Door is clean, free of nicks, dings, cracks, peeling, paint uniform and vibrant in color, kick plates free of build up, soil, tarnish or other stains?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 7,
            ],
            [
                'question' => 'Door number signage attractive, clean and in good repair? Doorbell or door knocker in good working order?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 7,
            ],
            [
                'question' => 'Door frame is in good repair, free of scratches and marks, door is clean, paint is uniform and vibrant?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 7,
            ],
            [
                'question' => 'One way viewer present, unobstructed and a 5 foot height for standard room?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 7,
            ],
            [
                'question' => 'Paper or electronic "Do not disturb" signs and signals present for use and in good condition and working order?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 7,
            ],
            [
                'question' => 'Fire evacuation route prominently placed in guestroom, normally on backside of entry door?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 7,
            ],
            [
                'question' => 'State Liability Laws and Maximum Room rated posted prominently in guestroom?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 7,
            ],
            [
                'question' => 'Balcony doors and accessible windows locked upon entry?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 7,
            ],
            [
                'question' => 'Windows in good condition free of chips and cracks, clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 7,
            ],
            [
                'question' => 'Window sills and/or door tracking in good condition, paint attractive not peeling, sills and tracking free of dead bugs, soil, dust and or debris of any kind?',
                'possible_point' => 2,
                'question_no' => 16,
                'category_id' => 7,
            ],
            [
                'question' => 'Windows/sliding glass doors open easily and smoothly for the guest?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 7,
            ],
            [
                'question' => 'Window treatments, draperies, blinds and decorations properly adhering to the wall, attractive and in good repair free of rips, tears, damage, dust, dirt or stains?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 7,
            ],
            [
                'question' => 'Draperies/blinds open and close with ease?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 7,
            ],
            [
                'question' => 'Any tiled or wood flooring clean, recently swept and mopped, free of soil, water trails or spotting, detergent or wax build up, dust?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 7,
            ],
            [
                'question' => 'Any tiled/wood flooring in good condition, free of broken, buckling or cracked wooden planks or tiles, grout in good condition, tiles free of buckling wood?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 7,
            ],
            [
                'question' => 'Any area rugs and or carpeted flooring free of debris, threads, soil, heavy soil, tracking and stains?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 7,
            ],
            [
                'question' => 'Any area rugs and or carpeted flooring pile color vibrant, pile not worn or eroded, carpeting free of snags, tears, seam separation and other damage?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 7,
            ],
            [
                'question' => 'Crown molding used?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 7,
            ],
            [
                'question' => 'Ceilings, crown moldings, and ceiling venting in good repair free of rust, cracks, peeling, evident water damage, free of dust, dust patterns, mold growth, cobwebs, soil accumulation of any kind?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 7,
            ],
            [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 7,
            ],
            [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers in good working order, ceiling fans in sync, all chandelier lighting on and in good working order?',
                'possible_point' => 1,
                'question_no' => 27,
                'category_id' => 7,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind?',
                'possible_point' => 2,
                'question_no' => 28,
                'category_id' => 7,
            ],
            [
                'question' => 'Walls, inclusive of wall coverings, and chair rails in good repair, properly hung and adhering to the walls as well as being free of abrasions, scarring, dings, scuffs and other damage?',
                'possible_point' => 2,
                'question_no' => 29,
                'category_id' => 7,
            ],
            [
                'question' => 'Wooden baseboards used?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 7,
            ],
            [
                'question' => 'Baseboards of walls in good repair, properly affixed, free of abrasions, scarring, scuffs, dirt, dust, excessive dings and other damage?',
                'possible_point' => 2,
                'question_no' => 31,
                'category_id' => 7,
            ],
            [
                'question' => 'Wall venting in good repair, not bent, if painted, paint uniform and attractive, not chipping or bubbling, wall vents clean, free of dust, mold, soil accumulations?',
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 7,
            ],
            [
                'question' => 'Enhanced art work and wall decorations evident?',
                'possible_point' => 1,
                'question_no' => 33,
                'category_id' => 7,
            ],
            [
                'question' => 'Wall decorative items and artwork provided are appealing and clean, all ledges free of dust and grime?',
                'possible_point' => 3,
                'question_no' => 34,
                'category_id' => 7,
            ],
            [
                'question' => 'Beds well made up, bedspreads/comforters current in style, of superior quality, luxurious and offering an inviting, neat initial impression that is positive?',
                'possible_point' => 2,
                'question_no' => 35,
                'category_id' => 7,
            ],
            [
                'question' => 'Bedspread/comforters clean and free of soil build or stains, in very good condition, vibrantly bright and not faded, free of snags, dangling errant threads, rips, tears, running fibers, etc?',
                'possible_point' => 3,
                'question_no' => 36,
                'category_id' => 7,
            ],
            [
                'question' => 'Throw/decorative pillows available, are clean and in good condition free of evident damage or soil, match decor and represent luxurious style and comfort?',
                'possible_point' => 1,
                'question_no' => 37,
                'category_id' => 7,
            ],
            [
                'question' => 'Bed skirting clean and free of any soil or staining, decoratively appealing and in good condition, vibrant and bright in color, not faded, free of any snags, dangling errant threads, rips, tears, running fibers, etc?',
                'possible_point' => 1,
                'question_no' => 38,
                'category_id' => 7,
            ],
            [
                'question' => 'Bed headboard clean and in good repair, if wood free of excessive dust, peeling, chipping, dings, scarring, if fabric free of fading, rips, tears, errant threading, running fibers, soil or stains?',
                'possible_point' => 2,
                'question_no' => 39,
                'category_id' => 7,
            ],
            [
                'question' => 'Bed footboards and finials clean, dust free, stain free, in good repair free of visible damage peeling, chipping, dings, scarring or other damage?',
                'possible_point' => 1,
                'question_no' => 40,
                'category_id' => 7,
            ],
            [
                'question' => 'Bed framing secure and stable?',
                'possible_point' => 1,
                'question_no' => 41,
                'category_id' => 7,
            ],
            [
                'question' => "All mattresses firm, not visibly sagging and offer a comfortable night's sleep?",
                'possible_point' => 5,
                'question_no' => 42,
                'category_id' => 7,
            ],
            [
                'question' => "	Linens and blankets of superior quality, clean and in good condition, free of soil, hair, stains, rips, snags or tears and properly fitted to the bed?",
                'possible_point' => 3,
                'question_no' => 43,
                'category_id' => 7,
            ],
            [
                'question' => 'Sleeping pillows fit bed properly, in good condition, uniform in size and shape, odorless, very comfortable providing a peaceful night\'s rest?',
                'possible_point' => 3,
                'question_no' => 44,
                'category_id' => 7,
            ],
            [
                'question' => 'Dresser/desk mirror provided clean and in good condition, free of smudges and streaks, ledges free of dust, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?',
                'possible_point' => 2,
                'question_no' => 45,
                'category_id' => 7,
            ],
            [
                'question' => 'Full length mirror provided clean and in good condition, free of smudges and streaks, ledges free of dust, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?',
                'possible_point' => 1,
                'question_no' => 46,
                'category_id' => 7,
            ],
            [
                'question' => 'Televisions plasma or LCD technology? Televisions 42" diagonal or larger?',
                'possible_point' => 5,
                'question_no' => 47,
                'category_id' => 7,
            ],
            [
                'question' => 'Television reception and picture clear functions as expected, channel options generous and varied?',
                'possible_point' => 2,
                'question_no' => 48,
                'category_id' => 7,
            ],
            [
                'question' => 'Television screen clean and free of detergent residue and streaks, free of dust and dirt?',
                'possible_point' => 1,
                'question_no' => 49,
                'category_id' => 7,
            ],
            [
                'question' => 'Pay per view movies and/or adult movie features available and capable of being disabled to prevent children from accessing without parental consent? Appropriate instructions provided for use and equipment?',
                'possible_point' => 1,
                'question_no' => 50,
                'category_id' => 7,
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
