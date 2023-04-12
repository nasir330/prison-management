<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StafsController extends Controller
{
    public function index()
    {
        $stafs = User::all();
        //$stafs = User::whereNot('id',1)->paginate(10);
        return view('pages.stafs.index',['stafs' => $stafs]);
    }
}
