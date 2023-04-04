<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'no_urut'=>'216252728',
            'nama'=> 'Lee Haechan',
            'alamat'=> '23',
            'tanggal_lahir'=>'12',
            'bb_lahir'=>'2',
            'tb_lahir'=>'5',
        ]];
        // [
        //     'Nim'=>'216252729',
        //     'Nama'=> 'Hwang Renjun',
        //     'Kelas'=> '23',
        //     'Jurusan'=>'Kesenian',
        //     'No_Handphone'=>'08213173627'
        // ],
        // [
        //     'Nim'=>'216252725',
        //     'Nama'=> 'Na Jaemin',
        //     'Kelas'=> '22',
        //     'Jurusan'=>'Kedokteran',
        //     'No_Handphone'=>'08976282692'
        // ]];
        DB::table('posyandus')->insert($data);
    }
}
