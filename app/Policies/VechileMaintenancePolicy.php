<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\VechileMaintenance;
use Illuminate\Auth\Access\HandlesAuthorization;

class VechileMaintenancePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:VechileMaintenance');
    }

    public function view(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('View:VechileMaintenance');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:VechileMaintenance');
    }

    public function update(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('Update:VechileMaintenance');
    }

    public function delete(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('Delete:VechileMaintenance');
    }

    public function restore(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('Restore:VechileMaintenance');
    }

    public function forceDelete(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('ForceDelete:VechileMaintenance');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:VechileMaintenance');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:VechileMaintenance');
    }

    public function replicate(AuthUser $authUser, VechileMaintenance $vechileMaintenance): bool
    {
        return $authUser->can('Replicate:VechileMaintenance');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:VechileMaintenance');
    }

}