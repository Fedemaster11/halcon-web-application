<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customer_number' => 'CUST-001',
                'name' => 'Constructora del Norte',
                'fiscal_data' => 'RFC: CDN010101AA1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_number' => 'CUST-002',
                'name' => 'Materiales Chihuahua',
                'fiscal_data' => 'RFC: MCH020202BB2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_number' => 'CUST-003',
                'name' => 'Obras del Centro',
                'fiscal_data' => 'RFC: ODC030303CC3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_number' => 'CUST-004',
                'name' => 'Proyectos del Desierto',
                'fiscal_data' => 'RFC: PDD040404DD4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_number' => 'CUST-005',
                'name' => 'Construcciones Halcon',
                'fiscal_data' => 'RFC: CHA050505EE5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}