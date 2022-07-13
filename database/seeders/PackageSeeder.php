<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('package')->insert([
            [
               'name'              => 'Express',
               'price'             => 'Rp.25.000',
               'description'       => 'Laundry akan dijamin cepat selesai dalam 4 jam (untuk 3-4kg)',
               'created_at'        => date("Y-m-d H:i:s"),
               'updated_at'        => date("Y-m-d H:i:s"),
            ],
            [
               'name'              => 'Dry Cleaning',
               'price'             => 'Rp.20.000',
               'description'       => 'Pelayanan dry clean ditambah setrika dan pewangi (untuk 1-2kg)',
               'created_at'        => date("Y-m-d H:i:s"),
               'updated_at'        => date("Y-m-d H:i:s"),
            ],
            [
               'name'              => 'Premium',
               'price'             => 'Rp.40.000',
               'description'       => 'Paket dengan layanan lengkap yang kami sediakan (untuk 5kg)',
               'created_at'        => date("Y-m-d H:i:s"),
               'updated_at'        => date("Y-m-d H:i:s"),
            ] 
         ]);
    }
}
