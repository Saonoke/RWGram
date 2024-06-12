<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\KasDetailModel;
use App\Models\KepalaKeluargaModel;
use App\Models\PendudukModel;
use App\Models\pengajuanPendudukModel;
use Illuminate\Http\Request;

class pengajuanPendudukController extends Controller
{
    //
    public function index(Request $request)
    {
        $metadata = (object) [
            'title' => 'Pengajuan Penduduk',
            'description' => 'Halaman Ubah Status Warga'
        ];

        $status = $request->query('status');

        $query = pengajuanPendudukModel::query();
        if ($request->has('search')) {
            $query->where('nama_penduduk', 'like', '%' . $request->search . '%')->get();
        }
        if ($status) {
            $query->where('status_pengajuan', $status);
        }

        $pengajuan = $query->paginate(5);

        return view('pengajuanPenduduk.index', compact('pengajuan'))->with(['metadata' => $metadata, 'activeMenu' => 'permohonan']);
    }
    public function create()
    {
        $metadata = (object) [
            'title' => 'Pengajuan Penduduk',
            'description' => 'Halaman Ubah Status Hidup Warga'
        ];
        return view('pengajuanPenduduk.create', ['activeMenu' => 'dataDiri', 'metadata' => $metadata]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'NKK_pengaju' => 'required|size:16',
            'NIK_pengaju' => 'required|size:16',
            'rt' => 'required',
            'no_telpon' => 'required',
            'nama_penduduk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelamin' => 'required',
            'golongan_darah' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'tinggal' => 'required',
        ]);

        $existingNIKPenduduk = PendudukModel::where('NIK', $request->NIK_pengaju)->first();
        if ($existingNIKPenduduk) {
            return redirect("/pengajuan-penduduk/create")->with(['error' => 'NIK Pengaju sudah ada dalam sistem.']);
        }

        pengajuanPendudukModel::create([
            'NKK' => $request->NKK_pengaju,
            'NIK' => $request->NIK_pengaju,
            'rt_id' => $request->rt,
            'no_telepon' => $request->no_telpon,
            'nama_penduduk' => $request->nama_penduduk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->kelamin,
            'golongan_darah' => $request->golongan_darah,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'status_perkawinan' => $request->status_perkawinan,
            'pekerjaan' => $request->pekerjaan,
            'status_tinggal' => $request->tinggal,
            'tanggal_laporan' => now(),
            'status_kematian' => 0,
        ]);
        return redirect("/data-penduduk/request")
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    public function pengajuan()
    {
        $data = pengajuanPendudukModel::paginate(5);
        return view('component.pengajuanPenduduk', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status_pengajuan' => 'required',
            'id_penduduk' => 'required'
        ]);

        try {
            $status = pengajuanPendudukModel::findOrFail($id);
            $status->status_pengajuan = $request->status_pengajuan;
            $status->save();
        } catch (\Exception $e) {
            dd($e);
        }

        return $this->storePenduduk($status);

    }

    public function sort($sort = 'menunggu')
    {
        $data = pengajuanPendudukModel::where('status_pengajuan', $sort)->paginate(5);

        return view('component.pengajuanPenduduk', ['data' => $data]);
    }

    public function find($value)
    {
        if ($value == 'kosong') {


            return $this->pengajuan();
        }
        try {
            $data = pengajuanPendudukModel::whereAny(['nama_penduduk', 'NIK'], 'like', '%' . $value . '%')->paginate(5);

            if (count($data) == 0) {
                return '<p class="text-center font-bold text-xl text-neutral-10" id="umkm">Data Tidak Ditemukan <p>';
            }
        } catch (\Exception $e) {
            dd($e);
        }

        return view('component.pengajuanPenduduk', ['data' => $data]);
    }

    public function storePenduduk(pengajuanPendudukModel $request)
    {



        $penduduk = PendudukModel::where('NIK', $request->NIK)->first();
        if ($penduduk != null) {

            return redirect('dashboard/pengajuan')->with('flash', ['error', 'Data sudah ada']);
        }

        $kk = KartuKeluargaModel::where('NKK', '=', $request->NKK)->first();

        if ($kk == null) {
            $kk = KartuKeluargaModel::create([
                'NKK' => $request->NKK,
                'rt_id' => $request->rt_id,
                'tanggal_kk' => now(),
                'no_telepon' => $request->no_telepon
            ]);


            try {
                $kas = KasDetailModel::create([
                    'kartu_keluarga_id' => $kk->kartu_keluarga_id,
                    'tahun' => date("Y"),
                ]);
            } catch (\Exception $e) {
                dd($e);
            }

        }


        try {
            $kk = KartuKeluargaModel::where('NKK', '=', $request->NKK)->firstOrFail();
            $data = PendudukModel::create([
                'kartu_keluarga_id' => $kk->kartu_keluarga_id,
                'NIK' => $request->NIK,
                'nama_penduduk' => $request->nama_penduduk,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'golongan_darah' => $request->golongan_darah,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'status_perkawinan' => $request->status_perkawinan,
                'pekerjaan' => $request->pekerjaan,
                'status_tinggal' => $request->status_tinggal,
                'status_kematian' => 0,

            ]);
            $kepalaKeluarga = KepalaKeluargaModel::where('kartu_keluarga_id', $kk->kartu_keluarga_id)->first();
            // dd($kepalaKeluarga);
            if ($kepalaKeluarga == null) {
                KepalaKeluargaModel::create([
                    'kartu_keluarga_id' => $kk->kartu_keluarga_id,
                    'penduduk_id' => $data->penduduk_id
                ]);
            }

        } catch (\Exception $e) {
            dd($e);
        }


        return redirect('/dashboard/pengajuan')->with('flash', ['success', 'Data berhasil ditambah']);
    }


    public function destroy($id)
    {
        try {
            $laporan = pengajuanPendudukModel::findOrFail($id)->delete();
            return redirect('dashboard/pengajuan')->with('flash', ['success', 'data berhasil dihapus']);
        } catch (\Exception $e) {
            dd($e);
        }
    }


}
