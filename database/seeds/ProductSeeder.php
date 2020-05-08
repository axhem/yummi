<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Neapolitan Pizza',
                'ingredients' => 'Features tomatoes, garlic, oregano, and extra virgin olive oil.',
                'quantity' => 50,
                'price' => 10,
                'image' => 'napoli.jpg',
                'description' => 'Neapolitan is the original pizza. This delicious pie dates all the way back to 18th century in Naples, Italy. During this time, the poorer citizens of this seaside city frequently purchased food that was cheap and could be eaten quickly. Luckily for them, Neapolitan pizza was affordable and readily available through numerous street vendors.',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Marinara',
                'ingredients' => 'Tomato sauce, garlic and basil',
                'quantity' => 50,
                'price' => 7,
                'image' => 'marinara.jpg',
                'description' => 'Marinara sauce is a tomato sauce usually made with tomatoes, garlic, herbs, and onions. It can include the addition of capers, olives, spices, and a dash of wine as possible ingredients in its many variations. ',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Quattro Stagioni',
                'ingredients' => 'Tomato sauce, mozzarella, mushrooms, ham, artichokes, olives, and oregano',
                'quantity' => 50,
                'price' => 12,
                'image' => '4formaggi.jpg',
                'description' => 'Pizza quattro stagioni is a variety of pizza in Italian cuisine that is prepared in four sections with diverse ingredients, with each section representing one season of the year. ',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Carbonara',
                'ingredients' => 'Tomato sauce, mozzarella, parmesan, eggs, and bacon',
                'quantity' => 50,
                'price' => 12,
                'image' => 'carbonnara_4.jpg',
                'description' => 'Carbonara is an Italian pasta dish from Rome made with egg, hard cheese, cured pork, and black pepper. The dish arrived at its modern form, with its current name, in the middle of the 20th century. ',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Pugliese',
                'ingredients' => 'Tomato sauce, mozzarella, oregano, and onions',
                'quantity' => 50,
                'price' => 12,
                'image' => 'pugliese.jpg',
                'description' => 'Pizza pugliese is a style of pizza in Italian cuisine prepared with tomato, onion, and mozzarella. ',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Frutti di Mare',
                'ingredients' => 'Tomato sauce and seafood',
                'quantity' => 50,
                'price' => 12,
                'image' => 'frutti-di-mare-pizza_6.jpg',
                'description' => 'Shellfish is a colloquial and fisheries term for exoskeleton-bearing aquatic invertebrates used as food, including various species of molluscs, crustaceans, and echinoderms. ',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Crudo',
                'ingredients' => 'Tomato sauce, mozzarella and Parma ham',
                'quantity' => 50,
                'price' => 11,
                'image' => 'cruddo_7.jpg',
                'description' => 'Prosciutto is an Italian dry-cured ham that is usually thinly sliced and served uncooked; this style is called prosciutto crudo in Italian (or simply crudo) and is distinguished from. ',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Quattro Formaggi',
                'ingredients' => 'Tomato sauce, mozzarella, parmesan, gorgonzola cheese, artichokes, and oregano',
                'quantity' => 50,
                'price' => 10,
                'image' => '4formaggi.jpg',
                'description' => 'Quattro formaggi is a variety of Italian pizza topped with a combination of four kinds of cheese, as the name suggests. Traditionally, the cheeses should be mozzarella and three other, local cheeses.',
            ),
        ));

    }
}
