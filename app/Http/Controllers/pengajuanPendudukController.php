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

        $this->storePenduduk($status);

    }

    public function storePenduduk(pengajuanPendudukModel $request)
    {


        try {
            $penduduk = PendudukModel::where('NIK', $request->NIK)->firstOrFail();
            return redirect()->back()->with('flash', ['error', 'Data sudah ada']);
        } catch (\Exception $e) {

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

            $kk = KartuKeluargaModel::where('NKK', '=', $request->NKK)->first();

            try {
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
                if ($kepalaKeluarga == null) {
                    KepalaKeluargaModel::create([
                        'kartu_keluarga_id' => $kk->kartu_keluarga_id,
                        'penduduk_id' => $data->penduduk_id
                    ]);
                }

            } catch (\Exception $e) {
                dd($e);
            }


        }


        return redirect('/dashboard/pengajuan')->with('flash', ['success', 'Data berhasil ditambah']);
    }

}
