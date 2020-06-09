<?php

use Illuminate\Database\Seeder;

class Reservation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms= [
            [
                'question' => 'External calls consistently are answered within 3 rings by hotel operator who identifies self and hotel/resort contacted, and if necessary, location, transfer effectively made?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 1,
            ],
            [
                'question' => '	External calls consistently are answered within 3 rings by member of reservation staff when called directly who identifies self and hotel/resort contacted?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 1,
            ],
            [
                'question' => 'Reservation personnel always greet the guest with professionalism and warmth in their voice, with an offer of assistance that is sincere and hospitable?',
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 1,
            ],
            [
                'question' => 'Once the guest is identified, guest surname used in conversation comfortably thereafter to personalize the service?',
                'possible_point' => 5,
                'question_no' => 4,
                'category_id' => 1,
            ],
            [
                'question' => "Reservations GSRs ask questions to fully determine the guest's final objective without heavy prompting Seek objective - purpose of the stay, (group, recreational, transient) length of the stay, history of consultant/guest business with the hotel?",
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 1,
            ],
            [
                'question' => 'Reservation GSR takes the information from final objective to actively suggest a room type or package, always offering and suggesting amenities pertaining to higher rates first that meets the guest objective?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 1,
            ],
            [
                'question' => 'Other than groups, GSR never offers discounted rates or rate packages first?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 1,
            ],
            [
                'question' => "GSR's proactive and anticipate the complete requirements to make the experience a success? Ex: are tee times, spa appointments or dinner reservations offered, Is transportation assistance or directions to the hotel offered?",
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 1,
            ],
            [
                'question' => 'GSR demonstrates full knowledge of local attractions, hours of operation or hotel/resort services and amenities?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 1,
            ],
            [
                'question' => "Staff makes a good effort to respond fully to the request and follow through until the guest's expectations are met?",
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 1,
            ],
            [
                'question' => 'Packages if available are promoted effectively?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 1,
            ],
            [
                'question' => 'Guest information obtained, name, address, telephone number and credit card number to guarantee room charges?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 1,
            ],
            [
                'question' => '	Deposit/cancellation policy and procedures clearly outlined during call?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 1,
            ],
            [
                'question' => 'Reservation information read back and verified?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 1,
            ],
            [
                'question' => "Reservations GSR promotes hotel/resort's website or Smartphone App for further information?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 1,
            ],
            [
                'question' => '	At conclusion, reservations GSR seeks to provide additional service?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 1,
            ],
            [
                'question' => '	Reservations GSR offers a pleasant parting salutation, inclusive of the guest surname to leave a lasting impression with the guest of highly personalized service?',
                'possible_point' => 3,
                'question_no' => 17,
                'category_id' => 1,
            ],
            [
                'question' => 'Reservation confirmation received by consultant/guest per reservations GSR advisement, information accurate?',
                'possible_point' => 4,
                'question_no' => 18,
                'category_id' => 1,
            ],
            [
                'question' => 'Reservation details, packages, preferences executed by hotel properly?',
                'possible_point' => 4,
                'question_no' => 19,
                'category_id' => 1,
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
