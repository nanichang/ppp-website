<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lga;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function board() {
        return view('pages.board');
    }

    public function management() {
        return view('pages.management');
    }

    public function discover() {
        $lgas = Lga::with('lga_data')->get();
        return view('pages.discover', compact('lgas'));
    }

    public function project() {
        return view('pages.project');
    }

    public function publications() {
        return view('pages.publications');
    }

    public function contact() {
        return view('pages.contact');
    }
}
