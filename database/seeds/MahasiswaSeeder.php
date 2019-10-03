<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) { 
            DB::table('tb_mahasiswa')->insert([
                'nim'=> $faker->numberBeetwen(12,10001),
                'nama'=> $faker->name, 
                'alamat' => $faker->address,
                'no_tlp' => $faker->unique()->randomNumber(123,1234123)

            ]);
        }
        
        // DB::table('tb_mahasiswa')->insert([
        //     'nim'=> '11321041',
        //     'nama'=> 'Lala',
        //     'alamat'=>'Jakarta',
        //     'no_tlp' => '082123728320'

        // ]);
    }
}
