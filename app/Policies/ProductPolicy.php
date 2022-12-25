<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-products')->exists();
    }

    public function view(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'view-products')->exists();
    }

    public function create(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'create-products')->exists();
    }

    public function update(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'update-products')->exists();
    }

    public function delete(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'delete-products')->exists();
    }
}
