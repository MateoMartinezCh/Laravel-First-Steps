<?php

namespace Database\Seeders;

use App\Models\Corto;
use App\Models\Director;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CortosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directores = Director::get();
        $directores->each(function ($director) {
            Corto::factory()->count(2)->create([
                'director_id' => $director->id,
                'user_id' => User::first()->id
            ]);
        });
    }
}
