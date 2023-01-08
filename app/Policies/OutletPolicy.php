<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Auth\Access\HandlesAuthorization;

class OutletPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the outlet can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list outlets');
    }

    /**
     * Determine whether the outlet can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function view(User $user, Outlet $model)
    {
        return $user->hasPermissionTo('view outlets');
    }

    /**
     * Determine whether the outlet can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create outlets');
    }

    /**
     * Determine whether the outlet can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function update(User $user, Outlet $model)
    {
        return $user->hasPermissionTo('update outlets');
    }

    /**
     * Determine whether the outlet can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function delete(User $user, Outlet $model)
    {
        return $user->hasPermissionTo('delete outlets');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete outlets');
    }

    /**
     * Determine whether the outlet can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function restore(User $user, Outlet $model)
    {
        return false;
    }

    /**
     * Determine whether the outlet can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Outlet  $model
     * @return mixed
     */
    public function forceDelete(User $user, Outlet $model)
    {
        return false;
    }
}
