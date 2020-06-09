<?php

use Illuminate\Database\Seeder;

class CheckIn extends Seeder
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
                'question' => 'At least one clerk is visible at desk at all times?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 5,
            ],
            [
                'question' => 'Priority service or a separate Express Checking area offered and available for loyalty program and preferred guests when volume dictates?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 5,
            ],
            [
                'question' => 'No guest waits longer than 5 minutes to complete check in, including wait time?',
                'possible_point' => 6,
                'question_no' => 3,
                'category_id' => 5,
            ],
            [
                'question' => 'GSR smiles or offers a pleasant facial expression and makes initial good eye contact with the consultant/guest as they approach reception desk (within 5 feet of the desk) always greeting guest first with sincerity and warmth?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 5,
            ],
            [
                'question' => 'Front Office personnel professional and attentive, no hands in pockets, slouching, leaning, or folded arms, in clean, pressed neat uniform of good condition, wearing a nametag that identifies the hotel property?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 5,
            ],
            [
                'question' => 'Once guest is identified, GSR personalizes service to the highest level, asks is guest is returning guest and warmly welcomes the guest back, continually engaging in polite conversation attempts to connect with the guest emotion and utilizes guest name a minimum of 3 times during the ensuing conversation and check in process?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 5,
            ],
            [
                'question' => 'Front Desk agent anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs, always offering full attention?',
                'possible_point' => 4,
                'question_no' => 7,
                'category_id' => 5,
            ],
            [
                'question' => 'During check in process, at a minimum GSR confirms spelling of guest name and address, confirms rate quoted, bed and room type, length of stay and departure date?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 5,
            ],
            [
                'question' => 'Agent confirms and verifies guest loyalty program or guest recognition system of software, VIP status and confirms any and all guest preferences and acts accordingly?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 5,
            ],
            [
                'question' => 'Guest asked for either ID (GOV), business card (CORP) or membership card (AAA) to verify special/coinciding room rate booked?',
                'possible_point' => 10,
                'question_no' => 10,
                'category_id' => 5,
            ],
            [
                'question' => 'Agent seeks some commonality to personalize the service to the guest individualizing and separating the guest from other guests (could be following up on a service performed in previous interactions, identifying a food or beverage preference, compliment on an item, article of clothing or other characteristics to speak about)?',
                'possible_point' => 2,
                'question_no' => 11,
                'category_id' => 5,
            ],
            [
                'question' => 'Agent anticipates guest need while making inquiries and offering 2 guest room amenity or service suggestions at check in that meet the guest need or preferences (these could be as basic as offering a wake up call, to making dinner reservations, reserving kids programs, promoting packaged business services to business travelers, quick press services to late arrivals, etc.)',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 5,
            ],
            [
                'question' => 'Written itinerary of all pre-set appointments at resort/hotel such as advance tee times, restaurant reservations or spa appointments offered and provided at checking?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 5,
            ],
            [
                'question' => 'Consultant/guest alerted to any messages or packages received by hotel/resort prior to consultant/guest arrival?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 5,
            ],
            [
                'question' => 'Payment or credit is discreetly established?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 5,
            ],
            [
                'question' => 'Guest questioned on number of keys needed, key packets quickly put together?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 5,
            ],
            [
                'question' => 'Room number and room information kept confidential, written on key packet only, not verbally offered?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 5,
            ],
            [
                'question' => "Credit cards and key packets placed purposefully back into the guest's hands, not slid back to the guest on top of the front desk counter?",
                'possible_point' => 2,
                'question_no' => 18,
                'category_id' => 5,
            ],
            [
                'question' => 'GSR offers/insures luggage assistance?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 5,
            ],
            [
                'question' => 'If bell service is unavailable or not suggested and used, or if resort maps are utilized, GSR mentions outlets and amenity locations and brief description of each?',
                'possible_point' => 3,
                'question_no' => 20,
                'category_id' => 5,
            ],
            [
                'question' => 'If accommodated in a club/concierge level floor room, GSR explains at check in the amenities associated with the elevated room status, hours of operation of the lounge, information on any complimentary presentations, enhanced services, etc?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 5,
            ],
            [
                'question' => 'Employee offers personal direction to the next level of service, escorting the guest seeking directions to a service or escorting and introducing the consultant/guest by name to any other staff member that will be assisting the consultant/guest with a need?',
                'possible_point' => 1,
                'question_no' => 22,
                'category_id' => 5,
            ],
            [
                'question' => 'Front Desk GSR provides a fond farewell (e.g. Enjoy your stay) inclusive of use of guest name in parting comment?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 5,
            ],
            [
                'question' => "Employee demonstrates true, caring interest in the guest's satisfaction?",
                'possible_point' => 1,
                'question_no' => 24,
                'category_id' => 5,
            ],
            [
                'question' => 'Employee offers additional services before ending conversation/interaction?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 5,
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
