<?php

namespace App\Http\Controllers;

use App\Models\jenisKendaraan;
use Illuminate\Http\Request;

class JnsKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = jenisKendaraan::get();
        return view('jnsKendaraan.tampilJnsKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jnsKendaraan.tambahJnsKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk meniympan data ke database
        $data = new jenisKendaraan();
        $data->nm_jns_kendaraan = $request->nm_jns_kendaraan;
        $data->save();
        return redirect('jnskendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jenisKendaraan::where('id', '=', $id)->get();
        return view('jnsKendaraan.editJnsKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = jenisKendaraan::where('id', '=', $id);
        $data->update([
            'nm_jns_kendaraan' => $request->nm_jns_kendaraan
        ]);
        return redirect('jnskendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = jenisKendaraan::where('id', '=', $id);
        $data->delete();
        return redirect('jnskendaraan');
    }
}
