<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jasa_pengiriman= [
            ['jasa_pengiriman' => 'JNT Ekonomi'],
            ['jasa_pengiriman' => 'JNT Regular'],
            ['jasa_pengiriman' => 'JNT Express'],
            ['jasa_pengiriman' => 'JNE Ekonomi'],
            ['jasa_pengiriman' => 'JNE Regular'],
            ['jasa_pengiriman' => 'JNE Kilat'],
            ['jasa_pengiriman' => 'Si Cepat Halu'],
        ];


        DB::table('jasa')->insert($jasa_pengiriman);


    }
}
