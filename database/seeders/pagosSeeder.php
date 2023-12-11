<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagos')->insert([
            [
                "servicio_id"=>2,
                "user_id"=>1,
                "collection_id"=>"1316219068",
                "collection_status"=>"approved",
                "merchant_order_id"=>"13947277505",
                "payment_type"=>"credit_card",
                "preference_id"=>"344312195-d3c9b95d-83e9-4217-92fa-0932c6a6a103",
                "site_id"=>"MLA",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>2,
                "user_id"=>3,
                "collection_id"=>"1316219068",
                "collection_status"=>"approved",
                "merchant_order_id"=>"13947277505",
                "payment_type"=>"credit_card",
                "preference_id"=>"344312195-d3c9b95d-83e9-4217-92fa-0932c6a6a103",
                "site_id"=>"MLA",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>2,
                "user_id"=>4,
                "collection_id"=>"1316219068",
                "collection_status"=>"approved",
                "merchant_order_id"=>"13947277505",
                "payment_type"=>"credit_card",
                "preference_id"=>"344312195-d3c9b95d-83e9-4217-92fa-0932c6a6a103",
                "site_id"=>"MLA",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>2,
                "user_id"=>2,
                "collection_id"=>"1316219068",
                "collection_status"=>"approved",
                "merchant_order_id"=>"13947277505",
                "payment_type"=>"credit_card",
                "preference_id"=>"344312195-d3c9b95d-83e9-4217-92fa-0932c6a6a103",
                "site_id"=>"MLA",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}
