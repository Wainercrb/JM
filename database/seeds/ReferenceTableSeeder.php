<?php

use Illuminate\Database\Seeder;
use App\Models\Teeths;
use App\Models\Reference;

class ReferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teeth = Teeths::find(8);
        $reference = new Reference();
        $reference->date = '2018-04-21 04:01:07';
        $reference->patient = 'Wainer Rodriguez Bonilla';
        $reference->identificationCard = '504130864';
        $reference->birthDate = '2018-04-21';
        $reference->phone = '61250382';
        $reference->id_user = 74;
        $reference->referredAnalgesic = 'no';
        $reference->referredAntibioticesic= 'no';
        $reference->observations = '40';
        $reference->state = '10';
        $reference->save();
        $reference->teeths()->attach($teeth);




    }
}
