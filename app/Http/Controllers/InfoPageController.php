<?php

namespace App\Http\Controllers;

use App\Models\InfoPage;
use Illuminate\Http\Request;

class InfoPageController extends Controller
{
    public function index() {
        $infopages = InfoPage::with('responsible')->get();
        return view('infopages.index', compact('infopages'));
    }

    public function show(InfoPage $infopage) {
        return view('infopages.show', compact('infopage'));
    }
}
