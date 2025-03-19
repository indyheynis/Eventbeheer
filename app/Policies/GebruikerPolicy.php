<?php

namespace App\Policies;

use App\Models\User;

class GebruikerPolicy
{
    /**
     * Create a new policy instance.
     */
    // public function __construct()
    // {
       
    // }

    public function viewAny(User $user)
    {
        return in_array($user->role, ['manager', 'employee']);
    }

    // public function edit(User $user)
    // {
    //     return in_array($user->role, ['manager', 'employee']);
    // }

    // public function delete(User $user)
    // {
    //     return in_array($user->role, ['manager', 'employee']);
    // }
}
