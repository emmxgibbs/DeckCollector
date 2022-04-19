<?php

namespace App\Policies;

use App\Models\Card;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
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

    //users can view all cards
    public function viewAny(User $user) {
        return true;
    }

    //user can view the cards they own
    public function view(User $user, Card $card) {
        return $user->id == $card->user_id;
    }
}
