<?php

use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Carne','Vegano','Pesce','Vegetariano','Senza Glutine','Senza Lattosio',
        ];
        foreach ($tags as $name) {
            Tag::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);

            // metodo alternativo
            // $category = new Tag();
            // $category->name= $name;
            // $category->slug= Str::slug($name);

            // $tags->save();
            
        }
    }
}
