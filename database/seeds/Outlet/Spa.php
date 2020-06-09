<?php

use Illuminate\Database\Seeder;

class Spa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// Reservation form
            [
                'question' => 'Telephone is answered pleasantly in 3 rings or less?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 167,
            ],
            [
                'question' => 'Initial greeting is clear and audible?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 167,
            ],
            [
                'question' => 'GSR speaks slowly and clearly, easily understood?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 167,
            ], [
                'question' => 'Guest asked to be put on hold, hold no longer than 30 seconds?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 167,
            ], [
                'question' => 'No significant background noises during the call',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 167,
            ], [
                'question' => 'GSR speaks clearly identifying himself/herself?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 167,
            ], [
                'question' => 'GSR asks if caller is a guest of the resort or a local client?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 167,
            ], [
                'question' => 'GSR invites the caller into the conversation asking the type of treatment the caller is interested in?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 167,
            ], [
                'question' => "Once the caller has established an interest in the type of treatment; i.e. massage, GSR does a good job of anticipating need by asking appropriate questions about the guest's need from the treatment to ensure that the guest's complete needs and desires are met by the treatment?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 167,
            ], [
                'question' => '	GSR is knowledge of various spa services; their benefits and can offer alternatives and suggestions easily and readily based upon guest\'s expressed need from the visit (relaxation, therapy, beauty treatment)',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 167,
            ], [
                'question' => '	Signature treatments promoted effectively?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 167,
            ], [
                'question' => 'GSR attempts to suggest and package an additional treatment that would compliment the treatment desired?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 167,
            ], [
                'question' => 'GSR ascertains guest medical history ?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 167,
            ], [
                'question' => 'GSR solicits a gender preference of treatment professional?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 167,
            ], [
                'question' => 'Reservationist requests to book an appointment?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 167,
            ], [
                'question' => "GSR asks the guest if they've visited the spa before and are familiar with the spa location?",
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 167,
            ], [
                'question' => 'Cancellation and cost penalty carefully reviewed before call is terminated?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 167,
            ], [
                'question' => 'Spa policies, cancellation and arrival times properly and fully explained by the GSR?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 167,
            ], [
                'question' => 'Clothing requirements for the scheduled treatment reviewed, and policies reviewed for common areas and specialized treatments.',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 167,
            ], [
                'question' => 'Hotel/resort has procedures in place for providing for clean/pressed guest clothing after the treatment?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 167,
            ],[
                'question' => 'Spa has procedure in place regarding guest clothing, either offering complimentary totes, garment bags from the guest room or quick clean and press services while undergoing treatment and enjoying spa facilities?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 167,
            ],[
                'question' => 'Use of all spa facilities offered for use on day of treatment?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 167,
            ],[
                'question' => 'Guest thanked and wished a pleasant parting comment?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 167,
            ],[
                'question' => 'If reservation for spa treatments were made prior to arrival at hotel/resort, was written confirmation of appointment provided at check in?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 167,
            ],[
                'question' => 'Information about spa, spa treatment options and pricing readily available in the guestroom?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 167,
            ],[
                'question' => 'Information in guest room literature regarding spa facilities, spa amenities, services, operating times is accurate and informative?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 167,
            ],
            ///// Reception form
            [
                'question' => 'Lobby temperature comfortable during all visits?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 168,
            ],
            [
                'question' => 'Lobby area free of unpleasant odors?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 168,
            ],
            [
                'question' => 'Lobby area has soft music playing?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 168,
            ], [
                'question' => 'Overall flooring free of debris and spills, soil, or soil buildup?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 168,
            ], [
                'question' => 'Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 168,
            ], [
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 168,
            ], [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 168,
            ], [
                'question' => 'Lobby light fixtures, including table and floor lamps, all on and working properly, no burned out bulbs?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 168,
            ], [
                'question' => 'Spa windows clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 168,
            ], [
                'question' => 'Doors, including door frames, escutcheons, hardware, and kick plate are free of soil build up or stains?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 168,
            ], [
                'question' => 'Reception area furniture stylish, comfortable and current as well as decorative?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 168,
            ], [
                'question' => 'Reception desk area and all work stations clean, neat and tidy?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 168,
            ], [
                'question' => 'Reception desk area millwork, marble, granite, dcor items in good repair?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 168,
            ],
            ///// Arrival form
            [
                'question' => 'At least one clerk is visible at desk at all times?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 169,
            ],
            [
                'question' => 'Spa personnel posture is professional and attentive, no hands in pockets, slouching, leaning, or folded arms?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 169,
            ],
            [
                'question' => 'Guests greeted pleasantly within 30 seconds of arrival at spa?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 169,
            ], [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 169,
            ], [
                'question' => 'Uniform appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 169,
            ], [
                'question' => 'GSR wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 169,
            ], [
                'question' => 'GSR asks if the guest has visited the spa at the hotel/resort before?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 169,
            ], [
                'question' => 'Returning guests warmly welcomed back?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 169,
            ], [
                'question' => 'GSR confirms and offers explanation of the treatment and specifics of the treatment inclusive of time of treatment, length of treatment and gender of therapist?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 169,
            ], [
                'question' => 'Information provided by reception desk personnel at arrival adequate to guide through the treatment and amenities before and after the treatment?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 169,
            ], [
                'question' => 'GSR asks guest to sign in?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 169,
            ], [
                'question' => '	Spa personnel answers phone calls within 3 rings and identifies self and department reached?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 169,
            ], [
                'question' => 'Spa reception personnel politely ask callers to hold while GSRs assist guests, or politely ask to call back.',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 169,
            ], [
                'question' => 'Guests escorted to the appropriate locker facilities or appropriate alternative is offered?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 169,
            ], [
                'question' => 'Guests offered a tour of the facilities when being led to locker area?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 169,
            ], [
                'question' => 'Medical/health information sheet and disclaimer form filled out?',
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 169,
            ],
            ///// Locker Attendant form
            [
                'question' => 'Locker room personnel introduced to the guest, by name, by the front desk personnel?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 170,
            ],
            [
                'question' => 'Locker room personnel in uniform that includes nametag and identifies hotel/resort and or spa facility?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 170,
            ],
            [
                'question' => 'Locker room personnel in proper uniform that is neat, clean, appropriate, recently ironed?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 170,
            ], [
                'question' => 'Locker room personnel are well groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 170,
            ], [
                'question' => 'Robes or pullovers offered before treatments begin; if partial disrobing is required?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 170,
            ], [
                'question' => 'Robes are clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 170,
            ], [
                'question' => 'Slippers offered when barefoot walking is required?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 170,
            ], [
                'question' => 'Slippers are well fitted, clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 170,
            ], [
                'question' => 'Attendant is knowledgeable and helpful, reviews locker amenities and locking mechanisms?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 170,
            ], [
                'question' => 'Attendant is helpful, offers a tour of the locker and wet areas and location of any relaxation or treatment waiting areas?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 170,
            ], [
                'question' => 'Attendant offers insight into the working mechanisms of the wet areas, saunas, steam areas?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 170,
            ], [
                'question' => 'Attendant reviews areas that are clothing and clothing optional?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 170,
            ], [
                'question' => 'Attendant offers to set up wet areas or specialty showers for the consultant/guest?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 170,
            ],[
                'question' => 'Location of towels and towel bins pointed out?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 170,
            ],[
                'question' => 'Location of amenities and toiletries offered?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 170,
            ],[
                'question' => 'Additional amenities offered?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 170,
            ],[
                'question' => 'Attendant offers any information on quick clean or pressing of garments?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 170,
            ],[
                'question' => 'Attendant provides duties discreetly?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 170,
            ],[
                'question' => 'Towels well stocked, attractive in display, dirty towels removed on a regular basis?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 170,
            ],[
                'question' => 'All locker room /wet areas are clean, free of debris and soiled garments, and well maintained?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 170,
            ],[
                'question' => 'Locker attendant aware of guests and their needs, alerting guests to upcoming appointments, offering water and refreshments to guests relaxing in relaxation areas, greeting guests after treatments and offering services?',
                'possible_point' => 3,
                'question_no' => 21,
                'category_id' => 170,
            ],
            ///// Locker Facilities form
            [
                'question' => 'Spa areas are maintained at appropriate, comfortable temperatures between 72 and 76 degrees?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 171,
            ],
            [
                'question' => 'Locker/wet area smells fresh, area free of odor?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 171,
            ],
            [
                'question' => 'Lockers and seating adequate?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 171,
            ],[
                'question' => 'Lockers supplied in good condition, working properly?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 171,
            ],[
                'question' => 'Emergency phone or button available and convenient?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 171,
            ],[
                'question' => 'All lights on and working, adequate?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 171,
            ],[
                'question' => 'Doors are clean, paint uniform and vibrant in color, free of build up, soil, spills or other stains?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 171,
            ],[
                'question' => 'All signage and directional signage in good repair and appealing?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 171,
            ],[
                'question' => 'Any tiled flooring clean, recently swept free of paper debris?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 171,
            ],[
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 171,
            ],[
                'question' => 'Walls, inclusive of wall coverings, and chair rails in good repair, properly hung and adhering to the walls, free of bubbling or seam separation as well as being free of abrasions, scarring, dings, scuffs and other damage?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 171,
            ],[
                'question' => 'Baseboards of walls dust and hair free?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 171,
            ],[
                'question' => 'Wall decorative items and artwork (if applicable) provided appealing and clean all ledges free of dust and grime?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 171,
            ],[
                'question' => 'Ceilings, crown moldings, free of dust, dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 171,
            ],[
                'question' => 'Ceiling exhaust venting free of dust, mold and grime of any kind?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 171,
            ],[
                'question' => 'Ceiling exhaust venting in good condition, working properly affixed and free of rust, damage of any kind?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 171,
            ],[
                'question' => 'Vanity counter tops in dressing, bathroom areas made of marble or granite?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 171,
            ],[
                'question' => 'Counter tops and shelving clean, free of any, grime, rings, spotting, soap residue, staining, hairs, dust?',
                'possible_point' => 3,
                'question_no' => 18,
                'category_id' => 171,
            ],[
                'question' => 'Caulking around vanity brilliant white, continuous without gaps or holes?',
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 171,
            ],[
                'question' => 'Proper supplies are available, in all areas (i.e., toiletries, shampoos, hair dryers, etc.)',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 171,
            ],[
                'question' => 'Merchandise is clean and well packaged?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 171,
            ],[
                'question' => 'Sinks are clean and dry and free of hair, cosmetic residue, soap residue, spotting?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 171,
            ],[
                'question' => 'Sink fixtures of superior quality, are upscale in design and attractive and operates smoothly?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 171,
            ],[
                'question' => 'Sink fixtures polished and cleaned to the highest level of shine, free of any watermarks, streaking or soap residue?',
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 171,
            ],[
                'question' => 'Automated sink fixtures working properly?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 171,
            ],[
                'question' => 'Automated sink fixtures dispense water of comfortable temperature and flow?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 171,
            ],[
                'question' => 'Mirrors in good condition, silver backing vibrant, not spotted, free of dings, slivers, chips, scarring or other visible damage to styling?',
                'possible_point' => 2,
                'question_no' => 27,
                'category_id' => 171,
            ],[
                'question' => '	Mirrors clean, glass steak and smudge free?',
                'possible_point' => 2,
                'question_no' => 28,
                'category_id' => 171,
            ],[
                'question' => 'Soap dispensers are clean and in good condition and well stocked?',
                'possible_point' => 1,
                'question_no' => 29,
                'category_id' => 171,
            ],[
                'question' => 'Urinals free of odor, deodorizer tablets utilized?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 171,
            ],[
                'question' => 'Commode porcelain and seats clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 31,
                'category_id' => 171,
            ],[
                'question' => 'Commode seats firmly affixed to unit?',
                'possible_point' => 1,
                'question_no' => 32,
                'category_id' => 171,
            ],[
                'question' => 'Commodes function properly flushing quickly and quietly?',
                'possible_point' => 1,
                'question_no' => 33,
                'category_id' => 171,
            ],[
                'question' => 'Hooks on partition doors?',
                'possible_point' => 1,
                'question_no' => 34,
                'category_id' => 171,
            ],
 ///// Waiting Room form
            [
                'question' => 'Treatment waiting areas serene, offer calming, soothing ambiance in lighting?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 172,
            ],
            [
                'question' => 'Treatment waiting areas at comfortable temperature, between 72 and 75 degrees?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 172,
            ],
            [
                'question' => 'Relaxing music noted?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 172,
            ], [
                'question' => 'Treatment waiting areas offer complimentary fruit and beverages (minimum of bottled water, herbal teas and coffee provided) set up and well stocked?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 172,
            ], [
                'question' => '	Treatment waiting areas offer assortment of reading materials and spa promotional materials and information?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 172,
            ], [
                'question' => 'Comfortable seating provided current in style of superior quality, luxurious and inviting at first observation?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 172,
            ], [
                'question' => 'Fabric upholstery, chairs, loungers and sofas clean and free of heavy soil accumulation and in good repair?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 172,
            ], [
                'question' => 'Any accent tables clean, free of beverage rings, dust free?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 172,
            ], [
                'question' => 'Any windows clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 172,
            ], [
                'question' => 'Any tiled flooring clean, recently swept and mopped, free of soil, water trails or spotting, build up, dust?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 172,
            ], [
                'question' => 'Any area rugs and or carpeted flooring free of debris, threads, soil, heavy soil, tracking and stains?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 172,
            ], [
                'question' => 'Any wood flooring clean, free of soil build up, wax build up in corners, dusty and dirt?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 172,
            ], [
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust, dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 172,
            ], [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 172,
            ], [
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 172,
            ], [
                'question' => 'Walls, inclusive of wall coverings, and chair rails in good repair, properly hung and adhering to the walls as well as being free of abrasions, scarring, dings, scuffs and other damage?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 172,
            ], [
                'question' => 'Baseboards of walls free of dirt, soil, scuff markings and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 172,
            ], [
                'question' => 'Wall vents clean, free of dust, mold, soil accumulation?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 172,
            ], [
                'question' => 'Wall venting in good repair, not bent, if painted, paint uniform and attractive, not chipping bubbling?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 172,
            ], [
                'question' => 'Wall decorative items and artwork provided appealing and clean all ledges free of dust and grime?',
                'possible_point' => 1,
                'question_no' => 20,
                'category_id' => 172,
            ],
///// Treatment form
            [
                'question' => 'Treatments begin on schedule and last for full duration of time paid for?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 173,
            ],
            [
                'question' => 'Treatment personnel, speaks clearly when calling out the guest name and identifies themselves?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 173,
            ],
            [
                'question' => 'Treatment personnel smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 173,
            ], [
                'question' => 'Treatment personnel is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 173,
            ], [
                'question' => 'Uniform appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 173,
            ], [
                'question' => 'Therapist wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 173,
            ], [
                'question' => 'Guests escorted to the appropriate treatment room by therapist?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 173,
            ], [
                'question' => 'Treatment corridor clean, in good condition?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 173,
            ], [
                'question' => 'At the treatment room, therapist explains the treatment to be performed, educates the client on the benefits of the treatment?',
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 173,
            ], [
                'question' => 'Signature aspect, if any of treatments highlighted?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 173,
            ], [
                'question' => 'At the treatment room, therapist reviews briefly medical history and any issues of a personal nature regarding the treatment?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 173,
            ], [
                'question' => 'Choice of music offered?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 173,
            ],[
                'question' => 'Choice of oils used in massage offered?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 173,
            ],[
                'question' => 'Privacy period afforded during disrobing periods?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 173,
            ],[
                'question' => 'Door of treatment room clean free of soil build up, spotting, smudges and streaks?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 173,
            ],[
                'question' => 'Hooks provided for hanging robes and cover-ups?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 173,
            ],[
                'question' => 'Window treatments, draperies, blinds and decorations clean, free of dust or stains?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 173,
            ],[
                'question' => 'Window treatments, draperies, blinds in good condition?',
                'possible_point' => 1,
                'question_no' => 18,
                'category_id' => 173,
            ],[
                'question' => 'Any tiled flooring clean, recently swept and mopped, free of soil, water trails or spotting, build up, dust?',
                'possible_point' => 2,
                'question_no' => 19,
                'category_id' => 173,
            ],[
                'question' => 'Any carpeted flooring free of debris, threads, soil, heavy soil, tracking and stains?',
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 173,
            ],[
                'question' => 'Ceilings, crown moldings, and ceiling venting free of dust, dust patterns, cobwebs, soil accumulation of any kind?',
                'possible_point' => 1,
                'question_no' => 21,
                'category_id' => 173,
            ],[
                'question' => 'Walls, inclusive of wall coverings and chair rails free of dust, hand prints, soil, scuff markings and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 173,
            ],[
                'question' => 'Baseboards and walls free of dirt, soil, scuff markings and spills of any kind?',
                'possible_point' => 1,
                'question_no' => 23,
                'category_id' => 173,
            ],[
                'question' => 'Counter tops and shelving clean, free of any, grime, rings, spotting, soap residue, staining, hairs, dust?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 173,
            ],[
                'question' => 'Vanity countertops in good condition, free of splitting, cracks, or other visible damage?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 173,
            ],[
                'question' => 'Treatment table framing secure and stable?',
                'possible_point' => 1,
                'question_no' => 26,
                'category_id' => 173,
            ],[
                'question' => 'Linens and blankets properly fitted to bed; crisp, clean and free of soil and stains?',
                'possible_point' => 2,
                'question_no' => 27,
                'category_id' => 173,
            ],[
                'question' => 'Head rest properly affixed, comfortable?',
                'possible_point' => 1,
                'question_no' => 28,
                'category_id' => 173,
            ],[
                'question' => 'Table heated to a comfortable level?',
                'possible_point' => 2,
                'question_no' => 29,
                'category_id' => 173,
            ],[
                'question' => 'Therapist knocks 3 times repeating as necessary until a response is given to re-enter?',
                'possible_point' => 1,
                'question_no' => 30,
                'category_id' => 173,
            ],[
                'question' => 'Treatment personnel professional, courteous and informative?',
                'possible_point' => 2,
                'question_no' => 31,
                'category_id' => 173,
            ],[
                'question' => 'Personnel explain the treatment to be performed, educates the client on benefits of treatment and regularly inquires as to the comfort and need of the client?',
                'possible_point' => 2,
                'question_no' => 32,
                'category_id' => 173,
            ],[
                'question' => 'Treatment is professionally handled with high regard and consideration of the client\'s comfort and modesty?',
                'possible_point' => 3,
                'question_no' => 33,
                'category_id' => 173,
            ],[
                'question' => 'Therapist appears to be an expert in technique and methods?',
                'possible_point' => 3,
                'question_no' => 34,
                'category_id' => 173,
            ],[
                'question' => 'Treatment lasts the full duration?',
                'possible_point' => 2,
                'question_no' => 35,
                'category_id' => 173,
            ],[
                'question' => 'Water available and offered after treatments?',
                'possible_point' => 1,
                'question_no' => 36,
                'category_id' => 173,
            ],[
                'question' => 'Future health care/treatment issues discussed?',
                'possible_point' => 1,
                'question_no' => 37,
                'category_id' => 173,
            ],[
                'question' => 'Retail/spa products used as part of treatment promoted for purchase?',
                'possible_point' => 1,
                'question_no' => 38,
                'category_id' => 173,
            ],[
                'question' => 'Future treatments offered or scheduled?',
                'possible_point' => 1,
                'question_no' => 39,
                'category_id' => 173,
            ],[
                'question' => 'Client/guest is escorted back to the relaxation-waiting areas?',
                'possible_point' => 1,
                'question_no' => 40,
                'category_id' => 173,
            ],
///// Departure form
            [
                'question' => 'Reception desk attendant smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach reception desk (within 5 feet of the desk)?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 174,
            ],
            [
                'question' => 'Staff neatly groomed?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 174,
            ],
            [
                'question' => 'Uniform appropriate, pressed, neat and clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 174,
            ], [
                'question' => 'GSR wearing a nametag?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 174,
            ], [
                'question' => 'GSR inquires as to the satisfaction of the client/guest with the treatment?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 174,
            ], [
                'question' => 'If a complaint is voiced, is the matter immediately handled to the guest satisfaction or is a member of management immediately summoned?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 174,
            ], [
                'question' => 'GSR presents copy of final bill for guest review, fully explaining the charges and applicable gratuities?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 174,
            ], [
                'question' => 'Staff member automatically offers logoed envelope, folds and places closed out folio into envelope?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 174,
            ],[
                'question' => 'Retail items or unit attractively laid out, service offered with immediacy and enthusiasm?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 174,
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
