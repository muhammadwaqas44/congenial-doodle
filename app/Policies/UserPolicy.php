<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $roles = $user->roles()->pluck('role_id')->toArray();
        $admin = in_array(1, $roles);
        if ($admin) {
            return true;
        } else {
            return false;
        }
    }

    public function viewConsultant(User $user)
    {
        $roles = $user->roles()->pluck('role_id')->toArray();
        $consultant = in_array(2, $roles);
        if ($consultant) {
            return true;
        } else {
            return false;
        }
    }

    public function viewEditor(User $user)
    {
        $roles = $user->roles()->pluck('role_id')->toArray();
        $editor = in_array(3, $roles);
        if ($editor) {
            return true;
        } else {
            return false;
        }
    }

    public function viewClient(User $user)
    {
        $roles = $user->roles()->pluck('role_id')->toArray();
        $client = in_array(4, $roles);
        if ($client) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
