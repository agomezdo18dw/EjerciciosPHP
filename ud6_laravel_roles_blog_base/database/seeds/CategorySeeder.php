<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/categoriesData.json");
        $data = json_decode($json);

        foreach ($data as $categorie) {
            $newc = new Category;
            $newc->id = $categorie->id;
            $newc->name = $categorie->name;
            $newc->save();
        }
    }
}
