<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;


class MahasiswaController extends Controller
{
    public function dashboard(){
        // return view('dashboard');

        $data= Mahasiswa::all();
        // return view('datamhs', compact('data'));
        return view('dashboard', [
            'data' => $data
        ]);    }

    public function index(){
        $data= Mahasiswa::all();
        return view('datamhs', compact('data'));
        // return view('dashboard', [
        //     'data' => $data
        // ]);
    }
    public function tambahdata(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        $data = Mahasiswa::create($request->all());

        if($request->hasFile('uploadfile')){
            $request->file('uploadfile')->move('upload-file/', $request->file('uploadfile')->getClientOriginalName());
            $data->uploadfile = $request->file('uploadfile')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
    }
    public function tampildataid($id){
        $data = Mahasiswa::find($id);
        // dd($data);
        return view('tampildata', compact('data'));

    }
    public function updatedata( Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data berhasil diubah');

    }
    public function deletedata($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');

    }

    public function exportpdf(){
        $data = Mahasiswa::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('datamhs-pdf');
        return $pdf->Download('datamhs.pdf');
    }
}
