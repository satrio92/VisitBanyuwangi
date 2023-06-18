<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketTour;

class PaketTourController extends Controller
{
    public function showPaketTour()
    {
        $paket_tour = PaketTour::all();
        return view('main.paket_tour', compact('paket_tour'));
    }

    public function showDetailPaketTour(PaketTour $paket_tour)
    {
        return view('main.detail_paket_tour', compact('paket_tour'));
    }
    
    public function showAdminPaketTour()
    {
        $paket_tour = PaketTour::all();
        return view('admin.paket_tour', compact('paket_tour'));
    }
    
    public function showTambahPaketTour()
    {
        // $paket_tour = PaketTour::all();
        return view('admin.tambah_paket_tour');
    }
    
    public function TambahPaketTour(Request $request)
    {
        $request['image'] = $request->file('image')->store('paket-tour-image');
        // dd($request);
        $validate = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'konten' => 'required',
            'image' => 'required',
        ]);
        $validate['deskripsi'] = $request->input('deskripsi');
        $validate['image'] = $request->file('image')->store('paket-tour-image');
        $paket_tour = new PaketTour($validate);
        $paket_tour->save();
        return redirect('/admin/paket-tour');
    }

    public function showEditPaketTour(PaketTour $paket_tour)
    {
        // dd($paket_tour);
        // $paket_tour = PaketTour::all();
        return view('admin.edit_paket_tour', compact('paket_tour'));
    }

    public function editPaketTour(Request $request, PaketTour $paket_tour) {
        // dd($request->file('image') == null);
        if ($request->file('image') != null) {
            $request['image'] = $request->file('image');
        } else {
            $request['image'] = $paket_tour->image;
        }
        // dd($request);
        $validate = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'konten' => 'required',
            'image' => 'required',
        ]);
        $validate['deskripsi'] = $request->input('deskripsi');
        if ($request->file('image') != null) {
            $validate['image'] = $request->file('image')->store('paket-tour-image');
        }
        // dd($validate);

        PaketTour::where('id', $paket_tour->id)->update($validate);
        return redirect('/admin/paket-tour');
    }

    public function removePaketTour(PaketTour $paket_tour) {
        PaketTour::where('id', $paket_tour->id)->delete();
        return redirect('/admin/paket-tour');
    }
}
