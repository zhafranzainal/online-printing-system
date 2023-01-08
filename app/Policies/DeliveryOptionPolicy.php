<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DeliveryOption;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryOptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the deliveryOption can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list deliveryoptions');
    }

    /**
     * Determine whether the deliveryOption can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function view(User $user, DeliveryOption $model)
    {
        return $user->hasPermissionTo('view deliveryoptions');
    }

    /**
     * Determine whether the deliveryOption can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create deliveryoptions');
    }

    /**
     * Determine whether the deliveryOption can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function update(User $user, DeliveryOption $model)
    {
        return $user->hasPermissionTo('update deliveryoptions');
    }

    /**
     * Determine whether the deliveryOption can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function delete(User $user, DeliveryOption $model)
    {
        return $user->hasPermissionTo('delete deliveryoptions');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete deliveryoptions');
    }

    /**
     * Determine whether the deliveryOption can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function restore(User $user, DeliveryOption $model)
    {
        return false;
    }

    /**
     * Determine whether the deliveryOption can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\DeliveryOption  $model
     * @return mixed
     */
    public function forceDelete(User $user, DeliveryOption $model)
    {
        return false;
    }
}
