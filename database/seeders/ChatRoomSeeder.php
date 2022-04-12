<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr = [
            "Chat1",
            "Chat2",
            "Chat3",
            "Chat4",
            "Chat5",
            "Chat6",
            "Chat7",
            "Chat8",
            "Chat9",
            "Chat10",

        ];


        for ($i = 0; $i < count($arr); $i++) {

            DB::table('chat_rooms')->insert([
                'name' => $arr[$i],
            ]);
        }
    }
}
