<?php

namespace App\Http\Controllers;

use App\Models\PendudukModel;
use App\Models\StatusHidupModel;
use Illuminate\Http\Request;

class StatusHidupController extends Controller
{
    public function index()
    {
        $metadata = (object) [
            'title' => 'Status Hidup',
            'description' => 'Halaman Ubah Status Warga'
        ];
    
        // Menggunakan pagination, dengan 10 item per halaman
        $hidup = StatusHidupModel::paginate(1);
    
        return view('statusHidup.index', compact('hidup'))->with(['metadata' => $metadata, 'activeMenu' => 'permohonan']);
    }
    

    public function create()
    {
        $metadata = (object) [
            'title' => 'Status Hidup',
            'description' => 'Halaman Ubah Status Hidup Warga'
        ];
        return view('statusHidup.create', ['activeMenu' => 'hidup', 'metadata' => $metadata]);
    }


    public function pengajuan()
    {
        $data = StatusHidupModel::with('Penduduk', 'PendudukM')->paginate(3);

        return view('component.statusHidup', ['data' => $data]);
    }

    public function find($value)
    {
        if ($value == 'kosong') {
            $data = StatusHidupModel::paginate(3);

            return view('component.statusHidup', ['data' => $data]);
        } else {

            $id = PendudukModel::select('penduduk_id')->whereAny(['nama_penduduk', 'NIK'], 'like', '%' . $value . '%')->first();

            $data = StatusHidupModel::whereAny(['penduduk_id', 'id_penduduk_meninggal'], $id->penduduk_id)->paginate(3);
        }

        return view('component.statusHidup', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK_pengaju' => 'required',
            'NIK_meninggal' => 'required',
            // 'foto_bukti' => 'required', // Uncomment if needed
        ]);

        $penduduk_pengaju = PendudukModel::where('NIK', $request->NIK_pengaju)->first();
        $penduduk_meninggal = PendudukModel::where('NIK', $request->NIK_meninggal)->first();

        if ($penduduk_pengaju && $penduduk_meninggal) {
            StatusHidupModel::create([
                'penduduk_id' => $penduduk_pengaju->penduduk_id,
                'id_penduduk_meninggal' => $penduduk_meninggal->penduduk_id,
            ]);

            return redirect()->route('hidup.penduduk.index')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            $error = !$penduduk_pengaju ? 'NIK Anda tidak ditemukan.' : 'NIK orang yang meninggal tidak ditemukan.';
            return redirect()->route('hidup.penduduk.create')->with('error', $error);
        }
    }

    public function edit(string $id)
    {
        $laporan = StatusHidupModel::find($id);
        return view('', compact(''));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status_pengajuan' => 'required'
        ]);


        StatusHidupModel::find($id)->update($request->all());
        return redirect('dashboard/pengajuan')->with('flash', ['success', 'Data berhasil dikonfirmasi']);
    }

    public function destroy(string $id)
    {
        $laporan = StatusHidupModel::findOrFail($id)->delete();
    }
    public function indexFind(Request $request)
    {
        $metadata = (object) [
            'title' => 'Status Meninggal',
            'description' => 'Halaman Ubah Status Warga'
        ];

        $search = $request->input('search');
        if (empty($search)) {
            $data = StatusHidupModel::paginate(5);
        } else {
            $data = StatusHidupModel::whereHas('penduduk', function($query) use ($search) {
                $query->where('nama_penduduk', 'like', '%' . $search . '%')
                      ->orWhere('NIK', 'like', '%' . $search . '%');
            })->paginate(3);
        }

        return view('statusHidup.index', ['hidup' => $data])->with(['metadata' => $metadata, 'activeMenu' => 'permohonan']);
    }
}
