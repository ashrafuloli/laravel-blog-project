<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{

    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        return view('frontend.pages.index');
    }
}
