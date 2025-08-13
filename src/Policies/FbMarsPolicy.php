<?php

namespace Mortezamasumi\FbMars\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Mortezamasumi\FbMars\Models\FbMars;

class FbMarsPolicy
{
    use HandlesAuthorization;

    public function viewAny($user): bool
    {
        return $user->can('view_any_fb::mars');
    }

    public function view($user, FbMars $fbMars): bool
    {
        return $user->can('view_fb::mars');
    }

    public function create($user): bool
    {
        return $user->can('create_fb::mars');
    }

    public function update($user, FbMars $fbMars): bool
    {
        return $user->can('{{ Update }}');
    }

    public function delete($user, FbMars $fbMars): bool
    {
        return $user->can('delete_fb::mars');
    }

    public function deleteAny($user): bool
    {
        return $user->can('{{ DeleteAny }}');
    }

    public function forceDelete($user, FbMars $fbMars): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    public function forceDeleteAny($user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    public function restore($user, FbMars $fbMars): bool
    {
        return $user->can('{{ Restore }}');
    }

    public function restoreAny($user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    public function replicate($user, FbMars $fbMars): bool
    {
        return $user->can('{{ Replicate }}');
    }

    public function reorder($user): bool
    {
        return $user->can('{{ Reorder }}');
    }
}
