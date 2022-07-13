<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('orders_loundry')->insert([
           [
               'code_order'          => 'LD001',
               'package_id'          => null,
               'total_price'         => '20.000',
               'user_name'           => 'User',
               'user_id'             => '2',
               'user_phone'          => '00987654321',
               'address'             => 'Semarang',
               'date_drop_laundry'   => date("Y-m-d H:i:s"),
               'date_take_laundry'   => date("Y-m-d H:i:s"),
               'date_finish_laundry' => date("Y-m-d H:i:s"),
               'status'              => 'Proses',
           ]
       ]);
    }
}


