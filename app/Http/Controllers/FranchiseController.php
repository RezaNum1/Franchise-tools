<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FranchiseController
{
    public function index(Request $request){
        return view('backend.owner-brand.franchise.index');
    }

    public function create(Request $request){
        return view('backend.owner-brand.franchise.create');
    }
}