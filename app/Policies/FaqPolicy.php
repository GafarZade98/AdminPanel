<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'viewAny-faqs')->exists();
    }

    public function view(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'view-faqs')->exists();
    }

    public function create(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'create-faqs')->exists();
    }

    public function update(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'update-faqs')->exists();
    }

    public function delete(User $user)
    {
        return $user->getRelationValue('role')->permissions()->where('name', 'delete-faqs')->exists();
    }
}
