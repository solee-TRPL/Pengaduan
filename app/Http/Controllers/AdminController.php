<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        $all = Complaint::count();
        $pending = Complaint::where('status', 'pending')->count();
        $proses = Complaint::where('status', 'proses')->count();
        $selesai = Complaint::where('status', 'selesai')->count();
        return view('dashboard.index', [
            'all' => $all,
            'pending' => $pending,
            'process' => $proses,
            'done' => $selesai
        ]);
    }

    function allComplaints() {
        $data = Complaint::with('user')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
    function allPendingComplaints() {
        $data = Complaint::where('status','pending')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
    function allProcessComplaints() {
        $data = Complaint::where('status','proses')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
    function allSuccessComplaints() {
        $data = Complaint::where('status','selesai')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }

    function showComplaint($id) {
        $data = Complaint::findOrFail($id);
        return view('admin.complaints.detail-complaint', [
            'data' => $data
        ]);
    }

    function storeResponse(Request $request) {
        $request->validate([
            'response' => 'required|string'
        ]);

        // $imagePath = null;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('public/responses_complaint');
        // }
        // feature image for response complaint coming soon
        $response = new ComplaintResponse;
        $response->complaint_id = $request->complaint_id;
        $response->admin_id = Auth::user()->id;
        // $response->image = $imagePath ? basename($imagePath) : null;
        $response->response = $request->input('response');
        $response->save();

        $complaint = Complaint::findOrFail($request->complaint_id);

        if ($complaint->status == 'pending') {
            $complaint->status = 'proses';
        } elseif ($complaint->status == 'proses'){
            $complaint->status = 'selesai';
        }
        $complaint->save();

        return redirect()->back()->with('msg', 'Tanggapan berhasil di kirimkan dan di perbarui!');
    }
}