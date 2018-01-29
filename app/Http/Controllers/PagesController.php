<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Blog Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the views that don't have any logic.
    |
    */

    public function home()
    {
        return view('pages.home');
    }

    public function coaches()
    {
        return view('pages.coaches');
    }

    public function gym()
    {
        return view('pages.gym');
    }     
}
