<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
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

<<<<<<< HEAD
    public function kritik()
    {
        $kritik = Kritik::all();
        return view('admin.kritik', compact('kritik'));
    }
    
=======
    public function profile()
    {
        $data = walikota::findorfail(1);
        return view('admin.users-profile', compact('data'));
    }
>>>>>>> 6e8c90a13ff1f3699bf839226dcbc3f91ff793b3
}
