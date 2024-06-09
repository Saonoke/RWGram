<?php

namespace App\Http\Controllers;

use App\Models\PendudukModel;
use App\Models\StatusHidupModel;
use App\Models\StatusNikahModel;
use App\Models\StatusTinggalModel;
use Cloudinary\Api\Admin\AdminApi;
use Illuminate\Http\Request;
use App\Models\UmkmModel;
use GuzzleHttp\Client;




class UmkmController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index($sort = 'menunggu')
    {
        // $umkm = UmkmModel::where('status_pengajuan', $sort)->with('penduduk')->paginate(3);
        $umkm = UmkmModel::selectRaw('count(umkm_id) as jumlah')->where('status_pengajuan', 'Menunggu')->first()->jumlah;
        $hidup = StatusHidupModel::selectRaw('count(id_status_hidup) as jumlah')->where('status_pengajuan', 'Menunggu')->first()->jumlah;
        $nikah = StatusNikahModel::selectRaw('count(id_status_nikah) as jumlah')->where('status_pengajuan', 'Menunggu')->first()->jumlah;
        $tinggal = StatusTinggalModel::selectRaw('count(id_status_tinggal) as jumlah')->where('status_pengajuan', 'Menunggu')->first()->jumlah;

        $total = array('umkm' => $umkm, 'hidup' => $hidup, 'nikah' => $nikah, 'tinggal' => $tinggal);


        $active = 'pengajuan';
        UmkmModel::where('terbaca', '=', '0')->update([
            'terbaca' => 1
        ]);
        return view('dashboard.pengajuan', compact('active', 'total'));
    }

    public function sort($sort = 'menunggu')
    {
        $umkm = UmkmModel::where('status_pengajuan', $sort)->with('penduduk')->paginate(5);

        $active = 'pengajuan';
        return view('component.umkm', compact('umkm'));
    }


    public function pengajuan()
    {


        $umkm = UmkmModel::with('penduduk')->paginate(5);



        return view('component.umkm', compact('umkm'));
    }

    public function find($value)
    {

        if ($value == 'kosong') {
            $umkm = UmkmModel::with('penduduk')->paginate(5);

            return view('component.umkm', compact('umkm'));
        } else {

            $umkm = UmkmModel::whereAny(['nama_umkm'], 'like', '%' . $value . '%')->paginate(5);
        }
        return view('component.umkm', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function indexPenduduk(Request $request)
    {
        $query = UmkmModel::with('penduduk')->where('status_pengajuan', 'diterima');


        if ($request->has('search')) {
            $query->where('nama_umkm', 'like', '%' . $request->input('search') . '%');
        }

        $umkm = $query->get();

        $metadata = (object) [
            'title' => 'UMKM',
            'description' => 'UMKM untuk penduduk'
        ];

        return view('umkm.penduduk.index', [
            'umkm' => $umkm,
            'metadata' => $metadata,
            'activeMenu' => 'permohonan'
        ]);
    }


    public function create()
    {
        $metadata = (object) [
            'title' => 'UMKM',
            'description' => 'Daftar UMKM'
        ];

        return view('umkm.penduduk.create')->with(['activeMenu' => 'permohonan', 'metadata' => $metadata]);
    }

    /**
     * Store a newly created resource in storage.
     */



    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'NIK' => 'required',
            'nama_umkm' => 'required',
            'deskripsi_umkm' => 'required',
            'lokasi_umkm' => 'required',
            'no_whatsapp' => 'required',
            'link_medsos' => 'required',
            'nama_medsos' => 'required',
            'foto_umkm' => 'required',
            'asset_id' => 'required',
        ]);

        $penduduk = PendudukModel::where('NIK', $request->NIK)->where('isDelete', 0)->first();

        if ($penduduk) {
            UmkmModel::create([
                'penduduk_id' => $penduduk->penduduk_id,
                'nama_umkm' => $request->nama_umkm,
                'no_wa' => $request->no_whatsapp,
                'link_medsos' => $request->link_medsos,
                'nama_medsos' => $request->nama_medsos,
                'deskripsi_umkm' => $request->deskripsi_umkm,
                'lokasi_umkm' => $request->lokasi_umkm,
                'tanggal_umkm' => now(),
                'foto_umkm' => $request->foto_umkm,
                'asset_id' => $request->asset_id
            ]);





            return redirect()->route('umkm.penduduk.index')
                ->with('success', 'UMKM Berhasil Ditambah');
        } else {
            return redirect()->route('umkm.penduduk.create')
                ->with('error', 'NIK Anda belum terdaftar sebagai warga.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $umkm = UmkmModel::findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $umkm = UmkmModel::find($id);
        return view('umkm.edit', compact('umkm'));
    }

    public function loadImage($id)
    {
        $umkm = UmkmModel::select('foto_umkm')->findOrFail($id);

        $result = (array) (new AdminApi())->assetByAssetId($umkm->foto_umkm);
        return $result['secure_url'];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $umkm = UmkmModel::find($id);
        $umkm->status_pengajuan = $request->status_pengajuan;
        $umkm->save();
        return redirect('/dashboard/pengajuan')->with('flash', ['success', 'Data berhasil Dikonfirmasi']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $umkm = UmkmModel::findOrFail($id)->delete();
            return redirect('dashboard/pengajuan')->with('flash', ['success', 'data berhasil dihapus']);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
