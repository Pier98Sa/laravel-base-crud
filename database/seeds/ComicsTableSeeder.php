<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $fumetto = new Comic();

            $fumetto-> title = $comic['title'];
            $fumetto-> description = $comic['description'];
            $fumetto-> thumb = $comic['thumb'];
            $fumetto-> price = $comic['price'];
            $fumetto-> series = $comic['series'];
            $fumetto-> sale_date = $comic['sale_date'];
            $fumetto-> type = $comic['type'];
            $fumetto->save();
        }
    }
}
