<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::truncate();

        $json = File::get("database/data/weeks.json");
        $weeks = json_decode($json);

        foreach($weeks as $key => $value){
            Week::create([
                "title" => $value->title,
                "link" => $value->link,
                "image" => $value->image,
                "trimester" => $value->trimester
            ]);
        }
    }
}
