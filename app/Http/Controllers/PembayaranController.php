<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketTour;

class PembayaranController extends Controller
{
    public function showAdminPembayaran() {
        $paket_tour = PaketTour::all();
        return view('admin/pembayaran', compact('paket_tour'));
    }
}
