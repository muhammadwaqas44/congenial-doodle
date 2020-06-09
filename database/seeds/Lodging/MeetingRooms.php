<?php

use Illuminate\Database\Seeder;

class MeetingRooms extends Seeder
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
                'question' => "Overall flooring free of debris and spills, soil build up, dust?, any carpeted, tiled or wooden flooring areas are free of noticeable damage, erosion, fading or other damage?",
                'possible_point' => 4,
                'question_no' => 1,
                'category_id' => 45,
            ],
            [
                'question' => "Walls, inclusive of wall coverings, baseboards, chair rails, and dcor items clean, free of dust, hand prints, soil and spills of any kind and in good repair, any artwork or decorative wall coverings properly hung and adhering to the walls and walls/coverings are free of abrasions, scarring, scuffs and other damage?",
                'possible_point' => 4,
                'question_no' => 2,
                'category_id' => 45,
            ],
            [
                'question' => "Partition and partition walls clean and in good condition, working properly?",
                'possible_point' => 2,
                'question_no' => 3,
                'category_id' => 45,
            ],
            [
                'question' => "Ceilings, crown moldings and ceiling venting clean free of dust patterns, cobwebs, soil accumulation of any kind and in good repair free of rust, cracks, peeling, evident water damage, staining or damage of any other kind?",
                'possible_point' => 4,
                'question_no' => 4,
                'category_id' => 45,
            ],
            [
                'question' => 'Any hanging ceiling fixtures, fans and chandeliers free of dust build up, soil or debris and in good working order, ceiling fans in sync, all chandelier lighting on and in good working order?',
                'possible_point' => 2,
                'question_no' => 5,
                'category_id' => 45,
            ],
            [
                'question' => "Any service doors inspected are clean, paint uniform and vibrant in color, kick plates free of build up, soil, tarnish or other stains and in good repair free of damage such as nicks, dings, cracks or peeling?",
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 45,
            ],
            [
                'question' => "Meeting/ballroom/foyer windows and sills clean free of dead bugs, soil build up, debris, spotting, smudges and streaks?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 45,
            ],
            [
                'question' => "Meeting/ballroom/foyer windows and window sills in good condition, if painted, not peeling, cracked, bubbling, gaskets adhering to windows properly?",
                'possible_point' => 2,
                'question_no' => 8,
                'category_id' => 45,
            ],
            [
                'question' => "Meeting/ballroom/foyer treatments, draperies, blinds and decorations properly adhering to the wall, attractive and in good repair and clean and free of stains, dust?",
                'possible_point' => 2,
                'question_no' => 9,
                'category_id' => 45,
            ],
            [
                'question' => 'Ceiling and hanging light fixtures all on and working properly, no burned out bulbs all in good repair, free of cobwebs, dust and dirt, lamp shades in good condition?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 45,
            ],
            [
                'question' => 'Meeting room furniture functional all metal and wood surfaces are clean, fabric is in good condition free of soil build up, stains, snags, tears and frames not overly bent or damaged?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 45,
            ],
            [
                'question' => 'Meeting room furniture neatly arranged during functions? and stored, in good repair?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 45,
            ],
            [
                'question' => 'All tables in meeting rooms and foyers for functions neatly skirted and arranged?',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 45,
            ],
            [
                'question' => 'All tables set for functions include water and water glasses, set with logo paper and pens/pencils?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 45,
            ],
            [
                'question' => 'Guest registration and displays neat and professional?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 45,
            ],
            [
                'question' => 'No unattended working materials or AV equipment in rooms or hallways?',
                'possible_point' => 4,
                'question_no' => 16,
                'category_id' => 45,
            ],
            [
                'question' => 'All unoccupied meeting rooms locked when not in use?',
                'possible_point' => 4,
                'question_no' => 17,
                'category_id' => 45,
            ],
            [
                'question' => 'Atrium plants, flowers clean and healthy looking, containers clean and in good repair?',
                'possible_point' => 4,
                'question_no' => 18,
                'category_id' => 45,
            ],
            [
                'question' => 'Signage, directional signage and reader board current and clear, adequate, clean and in good repair?',
                'possible_point' => 4,
                'question_no' => 19,
                'category_id' => 45,
            ],
            [
                'question' => 'Temperature of meeting areas comfortable, air fresh, odor free?',
                'possible_point' => 4,
                'question_no' => 20,
                'category_id' => 45,
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
