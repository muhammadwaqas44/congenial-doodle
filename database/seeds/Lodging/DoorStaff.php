<?php

use Illuminate\Database\Seeder;

class DoorStaff extends Seeder
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
                'question' => 'Door personnel seen regularly assisting valet personnel and opens car door for arriving hotel guests?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 4,
            ],
            [
                'question' => 'Door personnel reflect high personal standard, are all well-groomed, uniforms that are neat, clean and appropriate including nametags (if applicable). Staff behavior always professional and attentive, no hands in pockets, slouching, leaning or folded arms, behavior is not hectic or chaotic?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 4,
            ],
            [
                'question' => 'Door person smiles or offers pleasant expression, makes good eye contact with guest, greets and welcomes or welcomes back the guest pleasantly always using proper verbiage?',
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 4,
            ],
            [
                'question' => 'Did the doorperson actively attempt to obtain the guest name either by introduction by the valet, throughout self introduction or reviewing luggage tags to obtain the guest name and use the guest name during the ensuing conversation a minimum of 2 times to further personalize the service to the highest possible level?',
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 4,
            ],
            [
                'question' => 'Valet Parking/Door Attendant anticipates a need of the guest by listening to their conversation and looking for potential unexpressed wishes and needs (e.g. asks and confirms which luggage is to be removed from vehicle, removing car seat, storing golf bags) continually providing attentive service offering services such as umbrella service in inclement weather, steps from vans, footing assistance in slick conditions and offers to assist the arriving guest with hand-carried items?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 4,
            ],
            [
                'question' => 'All requested items, luggage, golf clubs, skis, etc., to be removed and or delivered properly executed, belongings are unpacked (such as skis, golf clubs etc) and properly delivered and prepared for the guest use after arrival?',
                'possible_point' => 2,
                'question_no' => 6,
                'category_id' => 4,
            ],
            [
                'question' => "When applicable, valet/door attendant provides an escort to the reception desk for check, makes a proper, personalized introduction to the front desk GSR that will continue to assist in the arrival process, stressing both the guest name and the hotel representative's name?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 4,
            ],
            [
                'question' => 'If guest luggage is out of the line of sight of the guest, valet parking/door attendant provides a luggage ticket and explains the luggage delivery process if the door person and the luggage does not accompany the consultant the hotel/resort?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 4,
            ],
            [
                'question' => 'Valet Parking/Door Attendant offers additional assistance before leaving the guest and provides a fond farewell (e.g. Enjoy your stay) inclusive of use of guest name in parting comment?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 4,
            ],
            [
                'question' => 'Door personnel performance and posture is always professional and attentive, no hands in pockets, slouching, leaning, or folded arms, behavior is always professional, not hectic or chaotic? Posture during the process of opening of doors is always professional and gracious, do not resort to utilizing body parts, heels, backs, bottoms to hold door for guests?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 4,
            ],
            [
                'question' => 'Door personnel immediately break off any conversations with other employees as guests approach area, actively open doors for arriving and departing guests and consistently make good eye contact with guests, concentrates fully on the guest expressed and unexpressed needs, often seen smiling and offering pleasant expressions to both guests arriving and departing from the property?',
                'possible_point' => 4,
                'question_no' => 11,
                'category_id' => 4,
            ],
            [
                'question' => 'Door and valet personnel do a good job of keeping entry area organized, driveway traffic flowing smoothly?',
                'possible_point' => 2,
                'question_no' => 12,
                'category_id' => 4,
            ],
            [
                'question' => 'Door personnel knowledgeable of current events in area and helpful with directions to nearby attractions and locations? Written directions available on request?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 4,
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
