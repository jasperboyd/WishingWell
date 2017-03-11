<?php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    public function run()
    {
        Quote::create([
            'text' => 'I wish things were different.'
        ]);
    }
}
