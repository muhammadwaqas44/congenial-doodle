<?php

use Illuminate\Database\Seeder;

class BusinessServices extends Seeder
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
                'question' => "Hotel has current list of and is knowledgeable of local businesses that business travelers can obtain office supplies or equipment such as computer rental, printers, presentation items, etc.?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 46,
            ],
            [
                'question' => "Equipment and software in the business center technologically current and up to date? Work stations offer privacy are clean, neat and tidy?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 46,
            ],
            [
                'question' => "Other services available, transparencies, photocopying, computer printer, etc.?",
                'possible_point' => 4,
                'question_no' => 3,
                'category_id' => 46,
            ],
            [
                'question' => "Small office supplies complimentary and in generous supply? (erasers, pencils, pens, rulers, etc)",
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 46,
            ],
            [
                'question' => 'Charges properly posted to room account?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 46,
            ],
            [
                'question' => "Business center facilities available 24 hours/day, in some cases through the Front Office after hours?",
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 46,
            ],
            [
                'question' => "Guest/Consultant alerted within the hour to packages that arrive at property at check in or if already on property within one hour of the package's delivery to the hotel?",
                'possible_point' => 2,
                'question_no' => 7,
                'category_id' => 46,
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
