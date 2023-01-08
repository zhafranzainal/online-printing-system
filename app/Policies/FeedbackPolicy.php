<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedbackPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the feedback can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list feedbacks');
    }

    /**
     * Determine whether the feedback can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function view(User $user, Feedback $model)
    {
        return $user->hasPermissionTo('view feedbacks');
    }

    /**
     * Determine whether the feedback can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create feedbacks');
    }

    /**
     * Determine whether the feedback can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function update(User $user, Feedback $model)
    {
        return $user->hasPermissionTo('update feedbacks');
    }

    /**
     * Determine whether the feedback can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function delete(User $user, Feedback $model)
    {
        return $user->hasPermissionTo('delete feedbacks');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete feedbacks');
    }

    /**
     * Determine whether the feedback can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function restore(User $user, Feedback $model)
    {
        return false;
    }

    /**
     * Determine whether the feedback can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Feedback  $model
     * @return mixed
     */
    public function forceDelete(User $user, Feedback $model)
    {
        return false;
    }
}
