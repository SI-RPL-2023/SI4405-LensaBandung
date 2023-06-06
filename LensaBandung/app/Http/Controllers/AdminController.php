<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Kritik;
use App\Models\walikota;
use App\Models\ProfileKota;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        $pengaduanCount = $pengaduan->count();
        $accepted = Pengaduan::where('status', 'Accepted')->get();
        $acceptedCount = $accepted->count();
        $denied = Pengaduan::where('status', 'Denied')->get();
        $deniedCount = $denied->count();
        return view('admin.index', compact('pengaduanCount', 'acceptedCount', 'deniedCount'));
    }

    public function detail()
    {
        $data = Pengaduan::all();
        return view('admin.detailpengaduan', compact('data'));
    }

    public function accept($id)
    {
        $pengaduan = Pengaduan::findorfail($id);
        $pengaduan->update([
            'status' => "Accepted",
        ]);

        return redirect()->back()->with('info', 'Pengaduan berhasil diaccept');
    }

    public function denied($id)
    {
        
        $pengaduan = Pengaduan::findorfail($id);
        $pengaduan->update([
            'status' => "Denied",
        ]);

        return redirect()->back()->with('info', 'Pengaduan berhasil direject');
    }

    public function proses($id)
    {
        
        $pengaduan = Pengaduan::findorfail($id);
        $pengaduan->update([
            'status' => "diproses",
        ]);

        return redirect()->back();
    }


    public function delete($id)
    {
        
        $pengaduan = Pengaduan::findorfail($id);
        $pengaduan->delete();

        return redirect()->back()->with('info', 'Pengaduan berhasil dihapus');
    }

    public function kritik()
    {
        $kritik = Kritik::all();
        return view('admin.kritik', compact('kritik'));
    }

    public function profile()
    {
        $data = walikota::findorfail(1);
        return view('admin.users-profile', compact('data'));
    }

    public function updateProfile(Request $request)
    {
        $walikota = walikota::findorfail(1);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('foto_pengaduan'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;
        $walikota->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'kebangsaan' => $request->kebangsaan,
            'lahir' => $request->lahir,
            'awal_menjabat' => $request->awal_menjabat,
            'akhir_menjabat' => $request->akhir_menjabat,
            'tentang' => $request->tentang,
            'foto' => $final,
        ]);

        return redirect()->back()->with('info', 'Profil berhasil diupdate');
    }

    public function updateProfilePassword(Request $request)
    {
        $user = User::findorfail(1);
        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back()->with('info', 'Password berhasil diupdate');
    }

    public function pengguna()
    {
        $user = User::all()->where('role', 0);
        return view('admin.daftar-pengguna', compact('user'));
    }

    public function editProfileKota()
    {
        return view('admin.editprofilekota');
    }

    public function updateProfileKota(Request $request)
    {
        $profile = ProfileKota::findorfail(1);
        $profile->update([
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->back()->with('info', 'Profil berhasil diupdate');
    }
}
