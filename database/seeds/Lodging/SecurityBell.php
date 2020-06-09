<?php

use Illuminate\Database\Seeder;

class SecurityBell extends Seeder
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
                'question' => "Luggage not left unattended in hotel lobby?",
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 28,
            ],
            [
                'question' => "Claim stubs issued for all stored luggage?",
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 28,
            ],
            [
                'question' => "Claim stubs checked and reconciled to stored luggage before turning luggage over to guest?",
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 28,
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
