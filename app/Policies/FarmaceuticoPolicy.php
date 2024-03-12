<?php

namespace App\Policies;

use App\Models\Farmaceutico;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FarmaceuticoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;    
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Farmaceutico $farmaceutico): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Farmaceutico $farmaceutico): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Farmaceutico $farmaceutico): bool
    {
        return true;
    }

    
    
}
