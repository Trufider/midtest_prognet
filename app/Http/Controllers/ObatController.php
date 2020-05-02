<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
    	$data_obat = \App\Obat::all();
    	return view ('obat.index',['data_obat' => $data_obat]);
    }
    public function create(Request $request){
    	\App\Obat::create($request -> all());
    	return redirect('/obat') -> with('success','Data berhasil disimpan!');
    }
    public function edit($id){
    	$obat = \App\Obat::find($id);
    	return view ('obat/edit',['obat' => $obat]);
    }
    public function update(Request $request,$id){
    	$obat = \App\Obat::find($id);
    	$obat->update($request->all());
    	return redirect('/obat') -> with('success','Data berhasil diperbarui!');
    }
    public function delete($id){
    	$obat = \App\Obat::find($id);
    	$obat -> delete();
    	return redirect('/obat') -> with('success','Data berhasil dihapus!');
    }
    public function search(Request $request){
    	$search = $request -> get('keyword');
    	$result = \App\Obat::where('nama_obat', "LIKE", "%" .$search. "%");
    	return view ('obat/result', compact('search','result'));
    }
}
