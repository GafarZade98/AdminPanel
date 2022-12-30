<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-partners')->exists();
    }

    public function view(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'view-partners')->exists();
    }

    public function create(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'create-partners')->exists();
    }

    public function update(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'update-partners')->exists();
    }

    public function delete(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'delete-partners')->exists();
    }
}
