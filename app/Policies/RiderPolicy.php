<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Rider;
use Illuminate\Auth\Access\HandlesAuthorization;

class RiderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the rider can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list riders');
    }

    /**
     * Determine whether the rider can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function view(User $user, Rider $model)
    {
        return $user->hasPermissionTo('view riders');
    }

    /**
     * Determine whether the rider can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create riders');
    }

    /**
     * Determine whether the rider can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function update(User $user, Rider $model)
    {
        return $user->hasPermissionTo('update riders');
    }

    /**
     * Determine whether the rider can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function delete(User $user, Rider $model)
    {
        return $user->hasPermissionTo('delete riders');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete riders');
    }

    /**
     * Determine whether the rider can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function restore(User $user, Rider $model)
    {
        return false;
    }

    /**
     * Determine whether the rider can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rider  $model
     * @return mixed
     */
    public function forceDelete(User $user, Rider $model)
    {
        return false;
    }
}
