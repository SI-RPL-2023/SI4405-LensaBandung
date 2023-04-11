<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function indexPengaduan()
    {
        return view('user.pengaduan');
    }

    public function storePengaduan(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required'],
        //     'phone' => ['required'],
        //     'address' => ['required'],
        //     'nominal' => ['required', 'integer'],
        //     'receipt' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('foto_pengaduan'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        Pengaduan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'kategori' => $request->kategori,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'detail_kejadian' => $request->detail_kejadian,
            'foto'=> $final,
            'status' => 'Belum diaccept admin',
        ]);

        return redirect()->route('home');
    }


    public function storeKomentar(Request $request, $id)
    {
        $user= Auth::user();
        Komentar::create([
            'id_pengaduan' => $id,
            'nama_komentator' => $user->name,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('detailPengaduan', $id);
    }



}
