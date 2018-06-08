<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function showPage(Request $request)
    {
        if($request->path() !== "/") {
            try {
                return view($request->path());
            } catch (\Exception $e) {
                return abort('404', 'Il y a eu une erreur');
            }
        } else {
            return view('home');
        }
    }
}