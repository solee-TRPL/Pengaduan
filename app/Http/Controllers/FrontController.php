<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    function semuaPengaduan(){
        $data = Complaint::all();
        return view('front.semua-pengaduan', [
            'data' => $data
        ]);
    }

    function semuaStatistik() {
        $all = Complaint::count();
        $pending = Complaint::where('status', 'pending')->count();
        $proses = Complaint::where('status', 'proses')->count();
        $selesai = Complaint::where('status', 'selesai')->count();

        return view('front.statistik', [
            'all' => $all,
            'pending' => $pending,
            'process' => $proses,
            'done' => $selesai
        ]);
    }

    function formPengaduan() {
        return view('front.form-pengaduan');
    }

    function storeComplaint(Request $request) {
        $this->validate( $request, [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'telp' => 'required|numeric|min:10',
            'email' =>'required|email|unique:users',
            'description' =>'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);   

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/complaints_pengguna');
        }

        $user = Auth::user();
        // dd($user);

        $complaint = new Complaint();
        $complaint->guest_name = $request->name;
        $complaint->guest_telp = $request->telp;
        $complaint->guest_email = $request->email;
        $complaint->description = $request->description;
        $complaint->image = $imagePath ? basename($imagePath) : null;
        $complaint->title = $request->title;
        $complaint->user_id = $user ? $user->id : null;

        $complaint->save();

        return redirect()->back()->with('msg', 'Pengaduan anda berhasil dikirimkan!');
    }

}