<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardUserController extends Controller {
    public function index() {
        //todo
        $cardUser = [];
        return view('cardUser.index', compact('cardUser'));
    }
}