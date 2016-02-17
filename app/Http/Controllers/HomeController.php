<?php

namespace App\Http\Controllers;

use App\BeautyQueen;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @var BeautyQueen
     */
    private $beautyQueen;

    /**
     * @var User
     */
    private $user;

    /**
     * HomeController constructor.
     *
     * @param BeautyQueen $beautyQueen
     */
    public function __construct(BeautyQueen $beautyQueen, User $user)
    {
        $this->middleware('auth');
        $this->beautyQueen = $beautyQueen;
        $this->user = $user;
    }

    public function index()
    {
        $votes = Auth::user()->fetchAllVotesForUser();
        $queens = $this->beautyQueen->getAllQueens();

        return view('home', compact('queens', 'votes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['queens' => 'required|min:3|max:7']);

        $queenIds = $request->input('queens');

        Auth::user()->makeVote($queenIds);

        return redirect()->back()->with(['success' => 'Your vote is saved!']);
    }
}
