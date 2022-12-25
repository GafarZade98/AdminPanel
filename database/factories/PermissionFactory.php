<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{

    public function definition()
    {
        // 'name' => ['view-user', 'viewAny-users', 'viewAll-users', 'create-users', 'update-users', 'delete-users']
        return [
            ['name' => 'view-users']
        ];
    }
}
