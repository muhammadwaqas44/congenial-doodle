<?php

use Illuminate\Database\Seeder;

class SecurityHousekeeping extends Seeder
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
                'question' => "Maids direct consultants to the front desk or security when they request access to guest room after claiming to be locked out?",
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 30,
            ],
            [
                'question' => "All marked money and jewelry left untouched?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 30,
            ],
            [
                'question' => "Guest room manifests secured, not visible to guests?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 30,
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
