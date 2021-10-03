<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var User */
        $user = User::factory()->create([
            'email' => 'test@example.org',
        ]);

        // create gmo_members for each site
        $user->gmo_sites()->sync([
            1 => ['gmo_member_id' => Str::random(6)],
            2 => ['gmo_member_id' => Str::random(6)],
        ]);
    }
}
