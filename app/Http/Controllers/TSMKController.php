<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\TSmk;
use App\Models\walikelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class TSMKController extends Controller
{
    function show()
    {
        $siswa = TSmk::orderBy('created_at', 'asc')
        ->get();
        return view(('siswa'), compact('siswa'));
    }

    function form( Request $request)
    {
        
        $gedung = Gedung::orderBy('Gedung', 'asc')->get();
        $jurusan = Jurusan::orderBy('Jurusan', 'asc')->get();
        $kelas = Kelas::orderBy('Kelas', 'asc')->get();
        $walikelas = walikelas::orderBy('walikelas', 'asc')->get();
        return view('form', [
            'jurusan' => $jurusan, 'gedung' => $gedung, 'kelas' => $kelas, 'walikelas'=>$walikelas]);
    }
    
    function store(Request $request){
        $request->validate([
            // 'NISN' => 'required',
            'NamaSiswa' => 'required|string|max:50',
            'Kelas' => 'required',
            'walikelas' => 'required',
            'jurusan' => 'required',
            'gedung' => 'required'  
        ]);
            $tahunMasuk = date('Y');
            $randomDigits = mt_rand(1000, 9999);

            
            do {
                $nisn = $tahunMasuk . $randomDigits;
            } while (TSmk::where('NISN', $nisn)->exists());

        $input = $request->except('_token');
        $input['NISN'] = $nisn;

        $status = TSmk::insert($input); 
        if ($status) {
            return redirect('/siswa')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect('/siswa/form')->with('error', 'Data Gagal Ditambahkan');
        }
        

      
}

    function update(Request $request, $id)
    {   
        
        $request->validate([
            'NISN' => 'required',
            'NamaSiswa' => 'required|string|max:50',
            'Kelas' => 'required',
            'walikelas' => 'required',
            'jurusan' => 'required',
            'gedung' => 'required'
        ]);
        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = TSmk::where('id', $id)->update($input);

        if ($status) {
            return redirect('/siswa')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect('/siswa/edit')->with('error', 'Data Gagal Diubah');
        }
        
    }

    function edit(Request $request, $id){
        $siswa = TSmk::find($id);
        $gedung = Gedung::orderBy('Gedung', 'asc')->get();
        $jurusan = Jurusan::orderBy('Jurusan', 'asc')->get();
        $kelas = Kelas::orderBy('Kelas', 'asc')->get();
        $walikelas = walikelas::orderBy('WaliKelas', 'asc')->get();
        return view('form', ['siswa'=>$siswa, 'gedung' => $gedung, 'jurusan' => $jurusan, 'kelas' => $kelas, 'walikelas'=>$walikelas]);
    }

    function destroy(Request $request, $id)
    {
        $status = TSmk::where('id', $id)->delete();
        if ($status) {
            return redirect('/siswa')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('/siswa')->with('error', 'Data Gagal Dihapus');
        }
    }

    function home(){
        return view('homepage');
    }

   
}
