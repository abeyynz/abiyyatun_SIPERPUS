<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookShelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //queybuilder
        DB::table("bookshelves")->insert([
            [
                "code"=> "RAK01",
                "name"=> "informatika",
            ],
            [
                "code"=> "RAK02",
                "name"=> "Sipil",
            ],
            [
                "code"=> "GTA03",
                "name"=> "FIlsafat",
            ]
        ]);

        // ORM
        Bookshelf::create([
            "code"=> "RAK03",
            "name"=> "Industri",
        ]);
    }
}
