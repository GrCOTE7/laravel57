<?php
namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\ {User, Image};

class ImagePolicy
{
    use HandlesAuthorization;
    public function before(User $user)
    {
        if ($user->admin) {
            return true;
        }
    }
    public function manage(User $user, Image $image)
    {
        return $user->id === $image->user_id;
    }
}
