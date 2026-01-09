<?php

namespace App\Policies;

use App\Models\Tool;
use App\Models\User;

class ToolPolicy
{
    public function viewAny(User $user):bool
    {
        return true;
    }

    public function view(User $user, Tool $tool):bool
    {
        return true;
    }

    public function create(User $user):bool
    {
        return true;
    }

    public function update(User $user, Tool $tool):bool
    {
        return $user->hasPermissionTo('editar');
    }

    public function delete(User $user, Tool $tool):bool
    {
        return $user->hasPermissionTo('eliminar');
    }

    public function deleteAny(User $user):bool
    {
        return $user->hasPermissionTo('eliminar');
    }
}
