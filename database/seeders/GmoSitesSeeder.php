<?php

namespace Database\Seeders;

use App\Models\GmoSite;
use Illuminate\Database\Seeder;

class GmoSitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GmoSite::factory()->create([
            'gmo_site_id' => config('gmo.test_site_ids')[0],
            'gmo_site_pass' => config('gmo.test_site_passwords')[0],
        ]);

        GmoSite::factory()->create([
            'gmo_site_id' => config('gmo.test_site_ids')[1],
            'gmo_site_pass' => config('gmo.test_site_passwords')[1],
        ]);
    }
}
