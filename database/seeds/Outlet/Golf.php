<?php

use Illuminate\Database\Seeder;

class Golf extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Tee Time form
            [
                'question' => 'Initial greeting is clear and audible, GSR speaks slowly and clearly, easily understood?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 157,
            ],
            [
                'question' => 'GSR identifies the golfing outlet reached?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 157,
            ],
            [
                'question' => 'Guest asked to be put on hold, hold no longer than 30 seconds?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 157,
            ], [
                'question' => 'No significant background noises during the call?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 157,
            ], [
                'question' => 'GSR speaks clearly identifying himself/herself?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 157,
            ], [
                'question' => 'Phone attendant courteous & knowledgeable, smiles through the phone lines with warmth in voice?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 157,
            ], [
                'question' => 'GSR ascertains date and day period guest prefers and offers available tee information quickly?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 157,
            ], [
                'question' => 'Should first preference be unavailable, pro shop employee offers a viable service/solution/opportunity to meet an anticipated need?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 157,
            ], [
                'question' => 'Employee takes tee time reservation (guest/member name, # of players)?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 157,
            ], [
                'question' => 'Employee must anticipate the needs of the resort guest and members?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 157,
            ], [
                'question' => 'Employee quotes correct rate and course information?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 157,
            ], [
                'question' => 'High end, name brand rental clubs available for guest use?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 157,
            ], [
                'question' => 'Rental golf shoes available?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 157,
            ], [
                'question' => 'Tee time information read back and verified with guest?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 157,
            ], [
                'question' => 'GSR personalizes service, using the guest name in conversation either through the caller identification system or immediately once the name is identified during the tee appointment process?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 157,
            ], [
                'question' => 'GSR insures that the caller has directions to the clubhouse and understands any transportation options to clubhouse?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 157,
            ], [
                'question' => 'Guest sincerely thanked for calling, guest name again used in parting salutations?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 157,
            ], [
                'question' => 'If tee times were made during the stay, written confirmation of tee times arrives to guest room within 2 hours of tee appointment being made?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 157,
            ], [
                'question' => 'If tee times were made prior to arrival at hotel/resort, was written confirmation of tee time provided at check in?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 157,
            ],
            ///// Facility form
            [
                'question' => 'Signage and directional signage offer clear instruction, are clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 158,
            ],
            [
                'question' => 'Landscaping near pro shop and parking areas well manicured and maintained, free of litter and debris?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 158,
            ],
            [
                'question' => 'Parking lot clean and free of paper trash, branches, brambles and other debris?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 158,
            ], [
                'question' => 'Parking lot surface in good condition, free of pot holes, parking lot striping in good conditions?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 158,
            ], [
                'question' => 'Driveways, curbs, and sidewalks clean and free of paper trash, cigarette butts, debris?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 158,
            ], [
                'question' => 'Driveways, curbs, and sidewalks in good condition, free of excessive damage, buckling, free of weeds, stains or other noticeable damage?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 158,
            ], [
                'question' => 'Planters in good condition and present?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 158,
            ], [
                'question' => 'Pro shop building facade/exterior clean?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 158,
            ], [
                'question' => 'Pro shop building facade/exterior in good repair?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 158,
            ], [
                'question' => 'Flags and other signage in good condition and repair?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 158,
            ], [
                'question' => 'All exterior trash receptacles neat, not overflowing, orderly in appearance?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 158,
            ], [
                'question' => 'Porte-cochere in good condition free of damage, stains, cobwebs, etc?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 158,
            ], [
                'question' => 'Porte-cochere and entry foyers well lit?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 158,
            ], [
                'question' => 'All building entrances attractively maintained, any matting and carpeting clean, recently vacuumed, free of debris, litter and heavy soil?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 158,
            ], [
                'question' => 'All building entrances attractively maintained, vestibules clean, neat and attractive?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 158,
            ], [
                'question' => 'All building entrances attractively maintained, cigarette urns neat and attractive?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 158,
            ], [
                'question' => 'All building entrances attractively maintained, available waste disposal units not full or overflowing, appropriate and attractive?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 158,
            ], [
                'question' => 'Entry doors and windows, free of dirt, streaking or smudges?',
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 158,
            ], [
                'question' => 'Entry doors in good condition and operating properly?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 158,
            ],
            ///// Arrival form
            [
                'question' => 'Bag attendant determines the purpose of the guest arrival, golf round, practice, visiting, etc?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 159,
            ],
            [
                'question' => 'Upon determining that consultant is an arriving golfer, determines course and tee time and welcomes consultant to course by name?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 159,
            ],
            [
                'question' => 'Bag attendant in uniform that includes nametag and identifies hotel/resort?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 159,
            ], [
                'question' => 'Bag attendant in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 159,
            ], [
                'question' => 'Bag attendant is well groomed?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 159,
            ], [
                'question' => 'If name is obtained by bag attendant, attendant uses the guest name during the remaining ensuing conversation a minimum of two more times?',
                'possible_point' => 5,
                'question_no' => 6,
                'category_id' => 159,
            ], [
                'question' => 'Bag handlers automatically assist all golfers with off load of equipment?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 159,
            ], [
                'question' => 'If bag handlers meet guests at cars in parking areas and cart service is provided by resort for course use, after loading occurs, bag handlers offer carts to guest use and handlers run back to staging areas?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 159,
            ], [
                'question' => 'If golfers, upon arrival to resort transfers of golf equipment are made by door personnel for storage at resort courses upon arrival at resort, transfer is executed properly?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 159,
            ], [
                'question' => 'If golfers, upon arrival to resort transfers of golf equipment are made by door personnel for storage at resort courses upon arrival at resort, golf bags are removed from carriers?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 159,
            ], [
                'question' => 'If golf equipment is stored at course facility prior to golfer\'s arrival, carts are pre-set for use 1 hour prior to any assigned tee times?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 159,
            ], [
                'question' => 'Bags and equipment not left unattended?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 159,
            ],
            ///// Pro Shop form
            [
                'question' => 'Pro shop temperature comfortable during all visits?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 160,
            ],
            [
                'question' => 'Pro shop areas adequately lit, all bulbs working even decorative fixtures?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 160,
            ],
            [
                'question' => 'Overall flooring free of debris and spills?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 160,
            ], [
                'question' => 'Any tiled flooring clean, free of soil, soil build up, dust?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 160,
            ], [
                'question' => 'Any tiled flooring in good condition, free of broken or cracked tiles, grout in good condition, tiles free of buckling?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 160,
            ], [
                'question' => 'Any carpeted flooring free of debris dirt, tracking and stains?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 160,
            ], [
                'question' => 'Any carpeted flooring pile uniform in color and vibrant, pile not worn or eroded, carpeting free of snags, tears, seam separation and other damage?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 160,
            ], [
                'question' => 'Any wood flooring clean, free of soil build up, wax build up in corners, dusty and dirt?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 160,
            ], [
                'question' => 'Any and all wood flooring in good condition, free of scarring, scratches, buckling, and appears to be recently polished and buffed to a high level of shine?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 160,
            ], [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 160,
            ], [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails and decor fixtures and artwork properly hung and adhering to the walls as well as being free of abrasions, scarring, scuffs and other damage?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 160,
            ], [
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 160,
            ], [
                'question' => 'Ceilings, crown moldings and ceiling venting in good repair free of rust, cracks, peeling, evident water damage, staining or damage of any other kind?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 160,
            ], [
                'question' => 'Doors, including door frames, escutcheons, hardware, and kick plate are in good condition free of tarnish, scarring, dings and other damage and operate as expected?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop windows clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop window sills free of dead bugs, soil, dust and or debris of any kind?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop window sills in good condition, if painted, not peeling, cracked, bubbling, gaskets adhering to windows properly?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop windows in good condition, no cracks or chipping noted to glass?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop window treatments, draperies, blinds and decorations clean, free of dust or stains?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop window treatments, draperies, blinds and decorations properly adhering to the wall, attractive and in good repair?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 160,
            ], [
                'question' => 'Lockers supplied are clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 160,
            ], [
                'question' => 'Locker room floors, ceiling and walls all clean and in good repair?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 160,
            ], [
                'question' => 'Restroom facilities clean, stocked and in good repair? Showers and shower stalls clean and mildew free?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 160,
            ], [
                'question' => 'Locker room/rest rooms free from odor?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 160,
            ], [
                'question' => 'Product displays, hanger displays and furniture neatly arranged, in good condition, provides attractive displays?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 160,
            ], [
                'question' => 'Product displays, hangar displays and furniture dust free?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 160,
            ], [
                'question' => 'Product neatly displayed, product folded or neatly and attractively hung and appealing?',
                'possible_point' => 2,
                'question_no' => 27,
                'category_id' => 160,
            ], [
                'question' => 'Posters and signs neat, relevant and timely?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 160,
            ], [
                'question' => 'Golf Shop provides upscale retail equipment lines (minimum drivers, putters, wedges)?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 160,
            ], [
                'question' => 'Golf Shop provides junior clothing and equipment lines?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 160,
            ], [
                'question' => 'Golf Shop provides good assortment of accessories? (balls, gloves, yardage books, etc?)',
                'possible_point' => 1,
                'question_no' => 31,
                'category_id' => 160,
            ], [
                'question' => 'Were graphic displays used to advertise products or services?',
                'possible_point' => 1,
                'question_no' => 32,
                'category_id' => 160,
            ], [
                'question' => 'Did advertising graphics catch your eye and present a clear sales message to you?',
                'possible_point' => 1,
                'question_no' => 33,
                'category_id' => 160,
            ], [
                'question' => 'Sale items prominently displayed and advertised?',
                'possible_point' => 1,
                'question_no' => 34,
                'category_id' => 160,
            ], [
                'question' => 'Were you greeted within 1 minutes of stepping into the store or department?',
                'possible_point' => 2,
                'question_no' => 35,
                'category_id' => 160,
            ], [
                'question' => 'Employees actively working the floor and approachable, not just standing behind the desk?',
                'possible_point' => 2,
                'question_no' => 36,
                'category_id' => 160,
            ], [
                'question' => 'While actively browsing pro shop, were consultants and other guests offered assistance within 5 minutes?',
                'possible_point' => 2,
                'question_no' => 37,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop staff in uniform that includes nametag?',
                'possible_point' => 1,
                'question_no' => 38,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop staff in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 39,
                'category_id' => 160,
            ], [
                'question' => 'Pro shop staff is well groomed?',
                'possible_point' => 1,
                'question_no' => 40,
                'category_id' => 160,
            ], [
                'question' => 'Did the sales associate ascertain the need of the customer and make suggestion or mention any of the advertised sales items to you?',
                'possible_point' => 2,
                'question_no' => 41,
                'category_id' => 160,
            ], [
                'question' => '	When you asked questions, did the sales associate appear knowledgeable about the product?',
                'possible_point' => 2,
                'question_no' => 42,
                'category_id' => 160,
            ], [
                'question' => 'Was eye contact maintained between the sales associates and yourself?',
                'possible_point' => 3,
                'question_no' => 43,
                'category_id' => 160,
            ], [
                'question' => 'Did the sales associate have a professional demeanor?',
                'possible_point' => 2,
                'question_no' => 44,
                'category_id' => 160,
            ], [
                'question' => 'Did the sales associates you came into contact with display enthusiasm and a sincere willingness to assist you?',
                'possible_point' => 1,
                'question_no' => 45,
                'category_id' => 160,
            ],
            ///// Check-In form
            [
                'question' => 'Pro shop counter area and all work stations clean, neat and tidy?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 161,
            ],
            [
                'question' => 'Pro shop area millwork, marble, granite, dcor items in good repair?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 161,
            ],
            [
                'question' => 'No guest waits longer than 2 minutes to complete check in, including wait time?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 161,
            ], [
                'question' => 'Pro shop personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 161,
            ], [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 161,
            ], [
                'question' => 'Uniform appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 161,
            ], [
                'question' => 'GSR wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 161,
            ], [
                'question' => 'Pro shop personnel anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 161,
            ], [
                'question' => 'GSR asks if the guest has played the course before?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 161,
            ], [
                'question' => 'Returning guests warmly welcomed back?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 161,
            ], [
                'question' => 'GSR confirms rate quoted?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 161,
            ], [
                'question' => 'GSR confirms the number of players?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 161,
            ], [
                'question' => 'GSR asks if rental clubs or shoes are needed?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 161,
            ], [
                'question' => 'Balls provided with all club rentals?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 161,
            ], [
                'question' => 'GSR anticipates guest need well making inquiries and offering 2 suggestions of accessories or amenities or service suggestions at check in that meet the guest need or preferences ( these could be as basic as offering additional balls, golf gloves, Deet, sunscreen in certain markets, the driving range opportunities, etc.)?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 161,
            ], [
                'question' => 'Payment or credit is discreetly established?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 161,
            ], [
                'question' => 'All fees and merchandise transactions recorded and rung in accurately, no sign of mishandling company funds?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 161,
            ], [
                'question' => 'Golfer escorted to staging area informed of amenities included with the round?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 161,
            ], [
                'question' => 'If escort is not offered, GSR correctly directs guest to next step in process at a minimum introducing the name of the starter to visit prior to round commencing?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 161,
            ], [
                'question' => "Pro shop personnel politely ask callers to hold while GSR's assist guests, or politely ask to call back?",
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 161,
            ], [
                'question' => 'Pro shop GSR provides a fond farewell (e.g. Enjoy your round) inclusive of use of guest name in parting comment?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 161,
            ], [
                'question' => 'Pro shop personnel offer guests complete attention during check in, always gracious and courteous?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 161,
            ],
            ///// Staging Area form
            [
                'question' => "Golfer's arrival well anticipated and golfer is met by staging attendant/starter who introduces amenities of the golf cart?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 162,
            ],
            [
                'question' => 'Staging attendant/starter offers use of practice facility?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 162,
            ],
            [
                'question' => 'Assigned golf cart clean, well maintained and operating properly?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 162,
            ], [
                'question' => 'Amenities available and offered? (Complimentary tees, divot repair tools, sunscreen etc.)',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 162,
            ], [
                'question' => 'Towels, tees, score card and pencil provided?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 162,
            ], [
                'question' => 'Clean sand with seeds and fertilizer provided to replace divots?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 162,
            ], [
                'question' => 'GPS or yardage/consultation books available?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger checks receipt of payment and verifies tee time and party name?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger introduces additional golfers being added to party?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger familiarizes guests with course layout?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger introduces and instructs golfers on GPS units, if available?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger familiarizes guests with yardage from the various tee boxes, inquires as to handicap and offers suggestion of appropriate tee box?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger reviews cart rules?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger familiarizes guests with location of any food and beverage locations and the restroom locations providing instruction on key or access code usage?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 162,
            ], [
                'question' => 'Starter/Ranger does a good job of informing golfers of expected rate of play and keeps flow of golfers moving off of tee?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 162,
            ],
            ///// Practice Area form
            [
                'question' => 'Driving range provided?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 163,
            ],
            [
                'question' => 'Driving distance to targeted areas provided on range?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 163,
            ],
            [
                'question' => 'Cleaning bucket and brush and/or towel for clubs provided?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 163,
            ], [
                'question' => 'Complimentary tees provided on driving range?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 163,
            ], [
                'question' => 'Practice balls name brand and of superior quality?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 163,
            ], [
                'question' => 'Practice balls provided in abundance, neat in presentation?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 163,
            ], [
                'question' => 'Assigned hitting areas provide adequate grass coverage?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 163,
            ], [
                'question' => 'Practice green provided?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 163,
            ], [
                'question' => 'Putting green surface healthy and in good condition?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 163,
            ], [
                'question' => "Green's undulations and cut similar to course conditions?",
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 163,
            ], [
                'question' => 'Practice bunker area provided?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 163,
            ], [
                'question' => '	Bunker sand clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 163,
            ], [
                'question' => 'Separate practice green provided for bunker practice?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 163,
            ],
            ///// Course Conditions form
            [
                'question' => 'Tee boxes adequately display hole configuration and yardage?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 164,
            ],
            [
                'question' => 'Tee boxes decorative?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 164,
            ],
            [
                'question' => 'Trash receptacles available at all tee boxes, not overflowing?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 164,
            ], [
                'question' => 'Ball washers provided at each tee box or on golf cart, clean and operating properly?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 164,
            ], [
                'question' => 'Any water stations provided stocked and kept attractive looking?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 164,
            ], [
                'question' => 'Tee boxes well maintained and green, grass cut daily, thick and plush, free of weeds and unrepaired divots, excess leaves blown off?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 164,
            ], [
                'question' => 'Fairways well maintained and green, grass cut daily, thick and plush, free of weeds, insect infestation, second and third cuts evident?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 164,
            ], [
                'question' => 'Fairways provide adequate yardage markers?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 164,
            ], [
                'question' => 'Cart paths well marked, clean, in good repair and free of obstacles?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 164,
            ], [
                'question' => 'Directional signage leading to tees well placed and clear?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 164,
            ], [
                'question' => 'Sand traps have clean sand, free of branches and leaves, regularly and recently raked?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 164,
            ], [
                'question' => 'Grass on greens well maintained, thick and free, cut daily, no brown patches of burnt grass, second and third cuts evident?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 164,
            ],
            ///// Course Services form
            [
                'question' => 'Visited by beverage cart minimum of 3 times in 18 holes?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 165,
            ],
            [
                'question' => 'Cart personnel in uniform that includes nametag?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 165,
            ],
            [
                'question' => 'Cart personnel in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 165,
            ],
            [
                'question' => 'Cart personnel is well groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 165,
            ],
            [
                'question' => 'Cart personnel smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/golfer as they approach the beverage cart (within 5 feet)?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 165,
            ],
            [
                'question' => 'Golf cart personnel always greet the guest first with an offer of assistance that is sincere in hospitality and warmth?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 165,
            ],
            [
                'question' => 'Beverage cart well stocked, good variety of food, snacks and beverages?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 165,
            ],
            [
                'question' => 'Golf accessories available on beverage cart?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 165,
            ],
            [
                'question' => 'Cart attendant demonstrates ability to handle unusual guest requests, providing consultant/guest with an attitude and effort of doing all it takes to fulfill guest requests or problems, or a plausible alternative assisting the guest positively is offered?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 165,
            ],
            [
                'question' => 'Pace of golf good, 18 holes in under 4 hours?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 165,
            ],
            [
                'question' => 'Ranger visible on course keeping pace of golf moving?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 165,
            ],


            ///// Departure form
            [
                'question' => 'Bag handlers well aware of arriving guests, greet guests shortly after leaving the 18th hole or at their cars in parking lots?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag attendant smiles or offers pleasant expression, makes good eye contact with guest?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag storage offered?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 166,
            ],
            [
                'question' => 'Shoe cleaning services offered?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag attendant in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag attendant is well groomed?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag handlers wipe off irons, recover clubs as necessary and if not stored load golf bags into appropriate vehicles?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 166,
            ],
            [
                'question' => 'If golfers, upon completion of the round request transfer of golf equipment to resort entrance for departure purposes, transfer is executed properly causing the guest no unnecessary delay?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 166,
            ],
            [
                'question' => 'If golfers, upon completion of the round request transfer of golf equipment to resort entrance for departure purposes, bags are automatically placed into travel carriers?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 166,
            ],
            [
                'question' => 'Bag attendant provides a fond farewell (e.g. Enjoy the rest of your stay) inclusive of use of guest name in parting comment?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 166,
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
