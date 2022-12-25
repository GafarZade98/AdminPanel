<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-categories')->exists();
    }

    public function view(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'view-categories')->exists();
    }

    public function create(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'create-categories')->exists();
    }

    public function update(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'update-categories')->exists();
    }

    public function delete(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'delete-categories')->exists();
    }
}
