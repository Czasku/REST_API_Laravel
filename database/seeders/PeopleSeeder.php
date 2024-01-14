<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    //use RefreshDatabase;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        People::factory()->count(200)->create();

        //php artisan migrate:refresh ->
        //Polecenie do wypelnienia bazy danych
        //php artisan db:seed --class=PeopleSeeder
    }
}
