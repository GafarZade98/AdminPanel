<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
//        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-users')->exists();

    }

    public function view(User $user)
    {
//        return $user->getRelationValue('role')->permissions()->where('name', 'view-users')->exists();
        return true;

    }

    public function create(User $user)
    {
        return true;

//        return $user->getRelationValue('role')->permissions()->where('name', 'create-users')->exists();
    }

    public function update(User $user)
    {
        return true;

//        return $user->getRelationValue('role')->permissions()->where('name', 'update-users')->exists();
    }

    public function delete(User $user)
    {
        return true;

//        return $user->getRelationValue('role')->permissions()->where('name', 'delete-users')->exists();
    }
}
