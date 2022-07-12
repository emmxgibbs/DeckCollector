<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardUserController extends Controller {
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'];
        $user = Auth::user()->cards;

        $userCards = $search
            ? $user->cards()->where('name', 'like', "%$search%")
            : $user->cards();

        $userCards = $userCards->orderBy('pokedex_number')->paginate(30);

        return view('my-cards.index', compact('userCards'));
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view('my-cards.show', compact('card'));
    }
}
