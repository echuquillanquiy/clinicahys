<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Work;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function applied(User $user, Work $work)
    {
        return $work->applicants->contains($user->id);
    }

    public function published(?User $user, $work){
        if ($work->status == 2){
            return true;
        }else {
            return false;
        }
    }

    public function publicated(User $user, Work $work)
    {
        if ($work->user_id == $user->id){
            return true;
        }else{
            return false;
        }
    }
}
