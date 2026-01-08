<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Vechile;
use Illuminate\Auth\Access\HandlesAuthorization;

class VechilePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Vechile');
    }

    public function view(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('View:Vechile');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Vechile');
    }

    public function update(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('Update:Vechile');
    }

    public function delete(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('Delete:Vechile');
    }

    public function restore(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('Restore:Vechile');
    }

    public function forceDelete(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('ForceDelete:Vechile');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Vechile');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Vechile');
    }

    public function replicate(AuthUser $authUser, Vechile $vechile): bool
    {
        return $authUser->can('Replicate:Vechile');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Vechile');
    }

}