<?php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class WishTableSeeder extends Seeder
{
    public function run()
    {
        Wish::create([
            'text' => 'I wish things were different.'
        ]);
    }
}
