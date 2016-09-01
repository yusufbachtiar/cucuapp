<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class CucuPolicy
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

    public function destroy(Cucu $cucu /** Overtime $overtima */)
    {
        // return $istri-> id === $overtime->user_id;
        return $cucu;
    }
}
