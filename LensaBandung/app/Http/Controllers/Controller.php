<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Pengaduan;
use App\Models\Komentar;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('welcome');
    }

    public function indexRiwayat()
    {
        $data = Pengaduan::all();
        return view('user.riwayat_pengaduan', compact('data'));
    }

    public function indexDetailPengaduan($id)
    {
        $data = Pengaduan::findorfail($id);
        $komentar = Komentar::where('id_pengaduan', $id)->get();
        return view('user.detail_pengaduan', compact('data', 'komentar'));
    }

    public function storeKritik(Request $request)
    {

        $kritik = new Kritik();
        $kritik->nama_pengguna = $request->name;
        $kritik->email = $request->email;
        $kritik->kritikatausaran = $request->message;
        $kritik->save();

        return redirect()->back()->with('success', 'Kritik dan Saran berhasil dikirim');
    }
}
