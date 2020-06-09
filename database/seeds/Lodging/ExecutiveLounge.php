<?php

use Illuminate\Database\Seeder;

class ExecutiveLounge extends Seeder
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
                'question' => "Club floor room amenities notably upgraded from the hotel's typical amenity package?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 34,
            ],
            [
                'question' => 'Lounge hours of operation posted and consistently adhered to, opens on time?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 34,
            ],
            [
                'question' => 'Lounge furniture offers an inviting, clean, comfortable atmosphere, televisions all work properly, comfortable lighting and temperature conditions during all visits?',
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 34,
            ],
            [
                'question' => 'Lounge offers a range of non-alcoholic beverages, bottled water and snacks during all hours between meal presentation periods?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 34,
            ],
            [
                'question' => 'Televisions on and working and reading materials available during all hours between meal presentations?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 34,
            ],
            [
                'question' => "Complimentary work stations available and functioning?",
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 34,
            ],
            [
                'question' => 'Complimentary internet access available, strong signal available?',
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 34,
            ],
            [
                'question' => 'Club/Concierge/guest Services personnel, host/hostesses, in uniforms that are neat, clean, appropriate, recently ironed and wearing nametags, if applicable?',
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 34,
            ],
            [
                'question' => 'Breaks away from tasks to Club/Concierge level personnel break away from tasks to quickly seek out and recognize arriving guests within 5 minutes, extending greetings first in a warm and welcoming manner, with a smile or other pleasant facial expression?',
                'possible_point' => 4,
                'question_no' => 9,
                'category_id' => 34,
            ],
            [
                'question' => 'Club/Concierge personnel actively attempt to learn about the guests, obtain the guest name, seeks levels of commonality attempting to connect with the consultant/guest emotions and uses the guest name going forward during interactions in the lounge?',
                'possible_point' => 4,
                'question_no' => 10,
                'category_id' => 34,
            ],
            [
                'question' => 'Concierge available, knowledgeable of area capable of assisting in booking appointments, reservations, and directing guest to appropriate location of area businesses to meet needs?',
                'possible_point' => 4,
                'question_no' => 11,
                'category_id' => 34,
            ],
            [
                'question' => 'Club/Concierge personnel always seek some commonality to personalize the service to the guest individualizing and separating the guest from other guests (could be following up on a service performed in previous interactions, identifying a food or beverage preference, compliment on an item, article of clothing or other characteristics to speak about)?',
                'possible_point' => 4,
                'question_no' => 12,
                'category_id' => 34,
            ],
            [
                'question' => 'Employee extends service, assistance options, beyond current need to establish and anticipate consultant/guest future needs and preferences and offering services toward those unexpressed needs?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 34,
            ],
            [
                'question' => "All concierge and business services provided by Club Floor GSR's are pro-active in manner, equal in skill and knowledge to the main concierge and business center staff? (Not referred to business center)",
                'possible_point' => 2,
                'question_no' => 14,
                'category_id' => 34,
            ]

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
