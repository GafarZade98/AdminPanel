<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class SettingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-settings')->exists();
    }

    public function view(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'view-settings')->exists();
    }

    public function create(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'create-settings')->exists();
    }

    public function update(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'update-settings')->exists();
    }

    public function delete(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'delete-settings')->exists();
    }
}
