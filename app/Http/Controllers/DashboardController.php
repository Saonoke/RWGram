<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\KasDetailModel;
use App\Models\KaslogModel;
use App\Models\KasModel;
use App\Models\LaporanModel;
use App\Models\PendudukModel;
use App\Models\StatusHidupModel;
use App\Models\StatusNikahModel;
use App\Models\StatusTinggalModel;
use App\Models\UmkmModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index()
    {
        try {
            if (Auth::user()->user_id != 1) {
                return $this->rt();
            }
            $umkm = UmkmModel::selectRaw('count(umkm_id) as jumlah')->first()->jumlah;
            $hidup = StatusHidupModel::selectRaw('count(id_status_hidup )as jumlah')->first()->jumlah;
            $nikah = StatusNikahModel::selectRaw('count(id_status_nikah )as jumlah')->first()->jumlah;
            $tinggal = StatusTinggalModel::selectRaw('count(id_status_tinggal  )as jumlah')->first()->jumlah;
            $laporan = LaporanModel::selectRaw('count(laporan_id) as jumlah')->first()->jumlah;
            $penduduk = PendudukModel::selectRaw('count(penduduk_id)as jumlah')->first()->jumlah;
            $informasi = InformasiModel::where('upload', 1)->get();
            $pengajuan = $hidup + $tinggal + $nikah;
            $semua = array('umkm' => $umkm, 'penduduk' => $penduduk, 'pengajuan' => $pengajuan, 'laporan' => $laporan);

            $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('Month(tanggal_kas)')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')->whereRaw('kas.kartu_keluarga_id is null')->pluck('sum(jumlah_kas)')->toArray();
            // dd($data);
            $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')->whereRaw('kas.kartu_keluarga_id is null')->pluck('MONTHNAME(tanggal_kas)')->toArray();
            $kas = KasDetailModel::with('user')
                ->where('kartu_keluarga_id', null)
                ->get();
            $penduduk_laki = json_encode(PendudukModel::selectRaw('concat("RT 0",rt.nomor_rt)  as x,count(penduduk_id) as y')->Join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', '=', 'penduduk.kartu_keluarga_id')->join('rt', 'rt.rt_id', '=', 'kartu_keluarga.rt_id')->where('penduduk.jenis_kelamin', 'L')->groupBy('rt.nomor_rt')->get());
            $penduduk_perempuan = json_encode(PendudukModel::selectRaw('concat("RT 0",rt.nomor_rt)  as x,count(penduduk_id) as y')->Join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', '=', 'penduduk.kartu_keluarga_id')->join('rt', 'rt.rt_id', '=', 'kartu_keluarga.rt_id')->where('penduduk.jenis_kelamin', 'P')->groupBy('rt.nomor_rt')->get());
            $jumlah = 0;
            $data = array_map('intval', $data);
            foreach ($data as $key) {
                $jumlah += $key;
            }

        } catch (\Exception $e) {
            dd($e);
        }
        $active = 'beranda';

        return view('dashboard', compact('data', 'tgl', 'active', 'jumlah', 'penduduk_laki', 'penduduk_perempuan', 'semua', 'informasi'));
    }

    public function rt()
    {
        $informasi = InformasiModel::where('upload', 1)->get();

        $pengeluaran = intval(KaslogModel::selectRaw('sum(jumlah) as pengeluaran')->where('user_id', Auth::user()->user_id)->first()->pengeluaran);

        $auth = Auth::user()->user_id;
        switch ($auth) {
            case '1':
                # code...

                $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')->whereRaw('kas.kartu_keluarga_id is null')->pluck('sum(jumlah_kas)')->toArray();
                // dd($data);
                $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')->whereRaw('kas.kartu_keluarga_id is null')->pluck('MONTHNAME(tanggal_kas)')->toArray();
                $kas = KasDetailModel::with('user')
                    ->where('kartu_keluarga_id', null)
                    ->get();

                $jumlah = intval(KasModel::selectRaw('sum(jumlah_kas) as total')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')

                    ->whereRaw('kas.kartu_keluarga_id is null')->first()->total);
                // dd($jumlah);

                break;
            case '3':
                # code...
                $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 1')
                    ->pluck('sum(jumlah_kas)')
                    ->toArray();
                // dd($data);
                $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 1')
                    ->pluck('MONTHNAME(tanggal_kas)')
                    ->toArray();

                $kas = KasDetailModel::with('user')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->with('kartuKeluarga.penduduk', 'kartuKeluarga.kartuKeluarga')
                    ->whereRaw('kartu_keluarga.rt_id = 1')
                    ->get();
                $penduduk = PendudukModel::selectRaw("count(penduduk_id) as penduduk")->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'penduduk.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 1')->groupBy('jenis_kelamin')->pluck('penduduk')->toArray();

                // dd($penduduk);
                $jumlah = intval(KasModel::selectRaw('sum(jumlah_kas) as total')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 1')->first()->total);
                // dd($kas);
                break;
            case '5':
                # code...

                $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 2')
                    ->pluck('sum(jumlah_kas)')
                    ->toArray();
                // dd($data);
                $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id =2')
                    ->pluck('MONTHNAME(tanggal_kas)')
                    ->toArray();

                $penduduk = PendudukModel::selectRaw("count(penduduk_id) as penduduk")->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'penduduk.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 2')->groupBy('jenis_kelamin')->pluck('penduduk')->toArray();

                $kas = KasDetailModel::with('user')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->with('kartuKeluarga.penduduk', 'kartuKeluarga.kartuKeluarga')
                    ->whereRaw('kartu_keluarga.rt_id = 2')
                    ->get();

                $jumlah = intval(KasModel::selectRaw('sum(jumlah_kas) as total')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 2')->first()->total);

                break;
            case '6':
                # code...
                $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 3')
                    ->pluck('sum(jumlah_kas)')
                    ->toArray();
                // dd($data);
                $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 3')
                    ->pluck('MONTHNAME(tanggal_kas)')
                    ->toArray();

                $penduduk = PendudukModel::selectRaw("count(penduduk_id) as penduduk")->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'penduduk.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 3')->groupBy('jenis_kelamin')->pluck('penduduk')->toArray();

                $kas = KasDetailModel::with('user')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->with('kartuKeluarga.penduduk', 'kartuKeluarga.kartuKeluarga')
                    ->whereRaw('kartu_keluarga.rt_id = 3')
                    ->get();
                $jumlah = intval(KasModel::selectRaw('sum(jumlah_kas) as total')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 3')->first()->total);

                break;

            case '4':
                # code...

                $data = KasModel::selectRaw('sum(jumlah_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 4')
                    ->pluck('sum(jumlah_kas)')
                    ->toArray();
                // dd($data);
                $jumlah = intval(KasModel::selectRaw('sum(jumlah_kas) as total')->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 4')->first()->total);
                $tgl = KasModel::selectRaw('MONTHNAME(tanggal_kas)')->groupByRaw('MONTHNAME(tanggal_kas)')
                    ->join('kas', 'kas.id_kas', 'detail_kas.id_kas')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 4')
                    ->pluck('MONTHNAME(tanggal_kas)')
                    ->toArray();

                $penduduk = PendudukModel::selectRaw("count(penduduk_id) as penduduk")->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'penduduk.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 4')->groupBy('jenis_kelamin')->pluck('penduduk')->toArray();

                $kas = KasDetailModel::with('user')
                    ->with('kartuKeluarga.penduduk', 'kartuKeluarga.kartuKeluarga')
                    ->join('kartu_keluarga', 'kartu_keluarga.kartu_keluarga_id', 'kas.kartu_keluarga_id')
                    ->whereRaw('kartu_keluarga.rt_id = 4')
                    ->get();

                break;

            default:
                # code...
                break;
        }
        // $kk = KartuKeluargaModel::all();

        $data = array_map('intval', $data);
        // dd($penduduk);
        $active = 'beranda';

        return view('dashboardRT', compact('data', 'tgl', 'active', 'jumlah', 'penduduk', 'informasi'));
    }

    public function notif()
    {
        $umkm = UmkmModel::where('terbaca', 0)->with('penduduk')->get();
        $hidup = StatusHidupModel::where('terbaca', 0)->with('penduduk')->get();
        $nikah = StatusNikahModel::where('terbaca', 0)->with('penduduk')->get();
        $tinggal = StatusTinggalModel::where('terbaca', 0)->with('penduduk')->get();
        $laporan = LaporanModel::where('terbaca', 0)->with('penduduk')->get();
        $jumlah = count($umkm) + count($hidup) + count($nikah) + count($tinggal) + count($laporan);

        return view('component.notif', compact('umkm', 'hidup', 'nikah', 'tinggal', 'laporan', 'jumlah'));
    }
    public function notifcount()
    {
        $umkm = UmkmModel::where('terbaca', 0)->with('penduduk')->get();
        $hidup = StatusHidupModel::where('terbaca', 0)->with('penduduk')->get();
        $nikah = StatusNikahModel::where('terbaca', 0)->with('penduduk')->get();
        $tinggal = StatusTinggalModel::where('terbaca', 0)->with('penduduk')->get();
        $laporan = LaporanModel::where('terbaca', 0)->with('penduduk')->get();
        $jumlah = count($umkm) + count($hidup) + count($nikah) + count($tinggal) + count($laporan);

        return $jumlah;
    }
}
