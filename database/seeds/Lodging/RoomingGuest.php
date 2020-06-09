<?php

use Illuminate\Database\Seeder;

class RoomingGuest extends Seeder
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
                'question' => 'Luggage appears to be well secured during arrival process, all items are ticketed, if items are stored with the bell personnel, claim stubs issued to guests, claim stubs verified when items are delivered or presented?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell personnel are well groomed, in proper uniform of good condition that is neat, pressed, clean, and if applicable, includes nametag that identifies hotel/resort?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell person offers full attention, smiles or offers other pleasant expression, makes good eye contact with guest and uses proper verbiage while conversing with the consultant/other guests (e.g. My pleasure, yes, immediately, of course, etc?)?',
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 6,
            ],
            [
                'question' => 'If front desk personnel failed to make an at check in introduction, did the bell person actively attempt to obtain the guest name either by self introduction, inquiring themselves at the desk, or reviewing luggage tags and use the guest name during the ensuing conversation a minimum of 2 times to further personalize the service?',
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 6,
            ],
            [
                'question' => 'Employee seeks some commonality to personalize the service to the guest individualizing and separating the guest from other guests',
                'possible_point' => 5,
                'question_no' => 5,
                'category_id' => 6,
            ],
            [
                'question' => "If bell person does escort consultant/guest to guest room, bell personnel directs guest's attention to location of food and beverage outlets describing type of cuisine, concept and hours of operation in a conversational style?",
                'possible_point' => 5,
                'question_no' => 6,
                'category_id' => 6,
            ],
            [
                'question' => "If bell person does escort consultant/guest to guest room, bell personnel directs guest's attention to location of amenities such as golf or spa facilities, swimming pools, fitness centers, recreational activities and business services etc.?",
                'possible_point' => 5,
                'question_no' => 7,
                'category_id' => 6,
            ],
            [
                'question' => 'If bell person escorts the consultant/guest to the room, bell person demonstrates the working operation of the key?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 6,
            ],
            [
                'question' => 'If bell person escorts the consultant/guest, bell person opens door for guest, turns on entry light, and allows guest to proceed him into room?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 6,
            ],
            [
                'question' => 'If bell person cannot immediately accompany guest to room, delivers bags to room within 10 minutes of check in or calling for it?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 6,
            ],
            [
                'question' => 'If bell person cannot immediately accompany and escort guest to room, bell person still offers to familiarize the guest with the amenities of hotel/resort? Simply asking if the guest has stayed at the property or',
                'possible_point' => 5,
                'question_no' => 11,
                'category_id' => 6,
            ],
            [
                'question' => "Bell staff always uses door stop, not a piece of consultant's luggage while delivering luggage?",
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 6,
            ],
            [
                'question' => 'Whether bell person escorted consultant/guest to guestroom or not, bell person still points out location of emergency fire exits and equipment?',
                'possible_point' => 6,
                'question_no' => 13,
                'category_id' => 6,
            ],
            [
                'question' => 'Garment bag hung up, luggage set up on luggage rack?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 6,
            ],
            [
                'question' => '	Bell person verbally insures guest is happy with room accommodations and insures comfort with the room temperature then points out and demonstrates the temperature controls in the room for the guest.',
                'possible_point' => 2,
                'question_no' => 15,
                'category_id' => 6,
            ],
            [
                'question' => "Bell person picks up on guest cues and either offers or automatically provides familiarization with the guest room amenities, at a minimum, pointing out any technological conveniences that might cause guest confusion such as explaining bed-side panel controls, use of any master control switches, automated honor bars, as well as pointing out any in room amenities that aren't readily visible (coffee makers, in room safes, mini bar/honor bars ?",
                'possible_point' => 5,
                'question_no' => 16,
                'category_id' => 6,
            ],
            [
                'question' => 'If in room orientation is offered, bell personnel point outs in room servicing items such as available valet/laundry and shoe shining services, hours of in room dining, and points out guestroom literature?',
                'possible_point' => 5,
                'question_no' => 17,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell personnel anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs (if guest is traveling with children, offer to arrange for a crib or cots, if guest has a laptop, offers high speed internet services hotel offers, if guest is a golfer, offers to arrange a tee time, etc? Any expressed guest need or request taken care of at time of request and not passed on?',
                'possible_point' => 5,
                'question_no' => 18,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell person acquaints guest with vending areas and offers to obtain ice before departing?',
                'possible_point' => 1,
                'question_no' => 19,
                'category_id' => 6,
            ],
            [
                'question' => "Prior to departing, bell personnel highlight and espouse hotel/resort's branded",
                'possible_point' => 2,
                'question_no' => 20,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell person offers additional services before ending conversation/interaction?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell person provides a fond farewell (e.g. Enjoy your stay) inclusive of use of guest name in parting comment?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 6,
            ],
            [
                'question' => 'During calls, bell stand phone answered in 3 rings or less? Initial greeting is clear and audible, GSR speaks slowly and clearly, easily understood GSR answering identifies self?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 6,
            ],
            [
                'question' => 'Bell personnel utilize caller identification system effectively and greets guest by surname?',
                'possible_point' => 3,
                'question_no' => 24,
                'category_id' => 6,
            ],
            [
                'question' => 'When questioned, bell staff knowledgeable about hotel facilities, markets hotel F&B outlets first, but also knowledgeable of local restaurants and attractions?',
                'possible_point' => 2,
                'question_no' => 25,
                'category_id' => 6,
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
