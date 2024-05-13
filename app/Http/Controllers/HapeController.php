<?php

namespace App\Http\Controllers;

use App\Models\Hape;
use Illuminate\Http\Request;

class HapeController extends Controller
{
    public function index(){
        $hape = Hape::all();
        return view('table', compact('hape'));
    }

    public function create(){
        return view('input');
    }

    public function store(Request $request){
        $hape = Hape::create($request->all());
        return redirect('table');
    }

    public function edit($id){
        $hape = Hape::find($id);
        return view('update.edit', compact('hape'));
    }

    public function update($id, Request $request){
        $hape = Hape::find($id);
        $hape -> update($request ->all());
        return redirect('table');
    }

    public function destroy($id, Request $request){
        $hape = Hape::find($id);
        $hape -> delete($request -> all());
        return redirect('table');
    }
}
