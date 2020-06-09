<?php

use Illuminate\Database\Seeder;

class Valet extends Seeder
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
                'question' => 'Guest greeted within 30 seconds of arrival with valet/doorman opening the door for the guest, ladies given priority?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 3,
            ],
            [
                'question' => '	Valet parking attendant determines the purpose of the guest arrival, overnight stay, meeting, visiting, etc?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 3,
            ],
            [
                'question' => 'Upon determining that consultant is arriving guest, welcomes consultant to hotel/resort by name?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 3,
            ],
            [
                'question' => 'Valet/parking attendant reflect high personal standard, are all well-groomed, uniforms that are neat, clean and appropriate including nametags (if applicable). Staff behavior always professional and attentive, no hands in pockets, slouching, leaning or folded arms, behavior is not hectic or chaotic??',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 3,
            ],
            [
                'question' => 'Valet/parking attendant smiles or offers pleasant expression, makes and maintains good eye contact with guest?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 3,
            ],
            [
                'question' => 'Valet automatically offers valet parking services as well as assistance with luggage?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 3,
            ],
            [
                'question' => 'Name obtained by valet, valet uses the guest name during the remaining ensuing conversation a minimum of two more times?',
                'possible_point' => 5,
                'question_no' => 7,
                'category_id' => 3,
            ],
            [
                'question' => 'Returning guests recognized as returning guests and welcomed back to the hotel/resort by name?',
                'possible_point' => 5,
                'question_no' => 8,
                'category_id' => 3,
            ],
            [
                'question' => 'Guest informed of any charges for valet parking in advance?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 3,
            ],
            [
                'question' => 'Guest given a claim check and given clear instructions for reclaiming car for use?',
                'possible_point' => 2,
                'question_no' => 10,
                'category_id' => 3,
            ],
            [
                'question' => "Valet/Parking attendant continues to insure personalized service, seguing, if applicable with a proper introduction to the doorperson that will continue to assist in the arrival process, stressing both the guest name and the hotel representative's name, or offering direction to the next point in check in service?",
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 3,
            ],
            [
                'question' => 'Curbside/ Portico Cochere area kept neat and clean all subsequent visits?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 3,
            ],
            [
                'question' => 'Service is efficient and quick, if vehicle requested from the guestroom, vehicle has been brought up and is ready for guest when they arrive at the hotel/resort entrance? If vehicle is requested at entrance, is brought up within 5 minutes of request?',
                'possible_point' => 5,
                'question_no' => 13,
                'category_id' => 3,
            ],
            [
                'question' => 'Service is attentive, car returned with radio and seats in same position, seats dried during inclement weather, windshields cleared of snow and ice, temperature controls automatically set for guest comfort?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 3,
            ],
            [
                'question' => 'Vehicle is properly secured, claim stubs or guest names regularly reconciled before the guest vehicle is turned over, any valuables, jewelry or money left in vehicle is intact and remains untouched?',
                'possible_point' => 6,
                'question_no' => 15,
                'category_id' => 3,
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
