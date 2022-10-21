<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Salary;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\Shedule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class StatesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =File::get("database/data/states.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $estado = new State();
         $estado->name = $obj->name;
         $estado->slug = Str::slug($obj->name);
         $estado->abbreviation = $obj->abbreviation;
         $estado->save();
        }

        $json =File::get("database/data/schedules.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $schedule = new Shedule();
         $schedule->name = $obj->name;
         $schedule->slug = Str::slug($obj->name);
         //var_dump(($obj->name));
         $schedule->save();
        }

        $sal=500;
        $i=0;
        $salario = new Salary();
            $salario->min_salary=1;
            $salario->max_salary=499;
            $salario->save();

        for ($i=0; $i < 15 ; $i++) {
            $salario = new Salary();
            $salario->min_salary=$sal;
            $salario->max_salary=$sal*1.5;
            $salario->save();
            $sal = $sal*1.5+1;
        }


        $json =File::get("database/data/categories.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $category = new Category();
         $category->name = $obj->name;
         $category->slug = Str::slug($obj->name);
         //var_dump(($obj->name));
         $category->save();
        }

    }
}
