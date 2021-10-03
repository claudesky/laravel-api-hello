<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->create([
            'gmo_site_id' => 1,
            'api_token' => 'testkey123',
            'gmo_shop_id' => config('gmo.test_shop_ids')[0],
            'gmo_shop_pass' => config('gmo.test_shop_passwords')[0],
        ]);

        Client::factory()->create([
            'gmo_site_id' => 2,
            'api_token' => 'testkey456',
            'gmo_shop_id' => config('gmo.test_shop_ids')[1],
            'gmo_shop_pass' => config('gmo.test_shop_passwords')[1],
        ]);
    }
}
