<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create('id_ID');

        for($i = 1;$i <= 50; $i++) {
            // insert data ke table pegawai
            DB::table('pegawai')->insert([
                'pegawai_nama' => $Faker->name,
                'pegawai_jabatan' => $Faker->jobTitle,
                'pegawai_umur' => $Faker->numberBetween(25,40),
                'pegawai_alamat' => $Faker->address
            // run : php artisan db:seed --Class:PegawaiSeeder
            ]);
        }

    }
}
