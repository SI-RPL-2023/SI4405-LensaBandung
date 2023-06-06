<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Pengaduan;
use App\Models\Komentar;
use App\Models\Kritik;
use App\Models\ProfileKota;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $pengaduan = Pengaduan::all();
        $pengaduanCount = $pengaduan->count();
        $diproses = Pengaduan::where('status', 'diproses')->get();
        $accepted = Pengaduan::where('status', 'Accepted')->get();
        $acceptedCount = $accepted->count();
        $denied = Pengaduan::where('status', 'Denied')->get();
        $deniedCount = $denied->count();
        $diprosesCount = $diproses->count() + $acceptedCount + $deniedCount;
        return view('welcome', compact('pengaduanCount', 'diprosesCount', 'acceptedCount', 'deniedCount'));
    }

    public function indexRiwayat()
    {
        $data = Pengaduan::all()->where('status', '==', "Accepted");
        return view('user.riwayat_pengaduan', compact('data'));
    }

    public function indexDetailPengaduan($id)
    {
        $data = Pengaduan::findorfail($id);
        $komentar = Komentar::where('id_pengaduan', $id)->get();
        return view('user.detail_pengaduan', compact('data', 'komentar'));
    }

    public function profilKota()
    {
        $data = ProfileKota::all()->where('id', 1);
        return view('user.profil_kota', compact('data'));
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

    public function kontak()
    {
        return view('user.kontak_penting');
    }

}
