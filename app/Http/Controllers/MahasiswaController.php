<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', [
            'title' => 'Tabel Mahasiswa',
            'mahasiswas' => $mahasiswas
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nrp' => 'required',
            'nama' => 'required',
            'gpa' => 'required|decimal:0,2',
            'semester' => 'required|numeric'
        ]);
        $newMahasiswa = Mahasiswa::create($data);

        // redirect(route('mahasiswa')); masih kena POST
        return redirect(route('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $data = $request->validate([
            'nrp' => 'required',
            'nama' => 'required',
            'gpa' => 'required|decimal:0,2',
            'semester' => 'required|numeric'
        ]);

        $mahasiswa->update($data);

        return response()->json(['success' => true]);
    }

    public function delete($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return response()->json(['success' => true]);
    }
}
