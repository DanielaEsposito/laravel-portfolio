<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tags=['Html', 'Css','Javascript','React','Bootstrap','Node','PhP','Laravel','Express','Typescript','Java','C#','C++','React Native','Angular',];
        foreach($tags as $tag){
            $newTag= new Tag();
            $newTag->name= $tag;
            $newTag->color= null;
            $newTag->save();
        }
    }
}
