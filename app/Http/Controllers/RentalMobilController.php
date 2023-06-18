<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RentalMobil;

class RentalMobilController extends Controller
{
    public function showRentalMobil() {
        $rental_mobil = RentalMobil::all();
        return view('main.rental_mobil', compact('rental_mobil'));
    }

    public function showDetailRentalMobil(RentalMobil $rental_mobil)
    {
        return view('main.detail_rental_mobil', compact('rental_mobil'));
    }

    public function showAdminRentalMobil() {
        $rental_mobil = RentalMobil::all();
        return view('admin.rental_mobil', compact('rental_mobil'));
    }

    public function showTambahRentalMobil()
    {
        // $paket_tour = PaketTour::all();
        return view('admin.tambah_rental_mobil');
    }

    public function TambahRentalMobil(Request $request)
    {
        // $request['image'] = $request->file('image')->store('rental-mobil-image');
        // dd($request);
        $validate = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'konten' => 'required',
            'image' => 'required',
        ]);
        // $validate['deskripsi'] = $request->input('deskripsi');
        $validate['image'] = $request->file('image')->store('rental-mobil-image');
        $rental_mobil = new RentalMobil($validate);
        $rental_mobil->save();
        return redirect('/admin/rental-mobil');
    }

    public function showEditRentalMobil(RentalMobil $rental_mobil)
    {
        // $paket_tour = PaketTour::all();
        return view('admin.edit_rental_mobil', compact('rental_mobil'));
    }

    public function editRentalMobil(Request $request, RentalMobil $rental_mobil) {
        if ($request->file('image') != null) {
            $request['image'] = $request->file('image');
        } else {
            $request['image'] = $rental_mobil->image;
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
            $validate['image'] = $request->file('image')->store('rental-mobil-image');
        }
        // dd($validate);

        RentalMobil::where('id', $rental_mobil->id)->update($validate);
        return redirect('/admin/rental-mobil');
    }

    public function removeRentalMobil(RentalMobil $rental_mobil) {
        RentalMobil::where('id', $rental_mobil->id)->delete();
        return redirect('/admin/rental-mobil');
    }
}
