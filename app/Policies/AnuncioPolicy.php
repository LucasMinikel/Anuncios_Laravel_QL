<?php

namespace App\Policies;

use App\Models\Anuncio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnuncioPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Anuncio $anuncio)
    {
        return  $user->id === $anuncio->user_id;
    }
}
