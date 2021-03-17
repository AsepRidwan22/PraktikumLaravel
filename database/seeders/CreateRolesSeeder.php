<?php

namespace Database\Seeders;

use App\Models\Roles;

use Illuminate\Database\Seeder;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => '1',
                'name' => 'isAdmin'
            ],
            [
                'id' => '2',
                'name' => 'isAdmin'
            ]
        ];
        foreach ($user as $key => $value) {
            Roles::create($value);
        }
    }
}
