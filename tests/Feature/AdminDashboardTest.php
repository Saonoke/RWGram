<?php

namespace Tests\Feature;

use App\Models\PendudukModel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_useLogin_Success(): void
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_userLogin_Failed()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_pengajuan_index()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard/pengajuan');

        $response->assertStatus(200);
    }

    public function test_pengajuan_update()
    {
        $user = User::find(1);
        $data = [
            'status_laporan' => 'Selesai'
        ];

        $response = $this->actingAs($user)->put('/konfirmasi/pengaduan/1', $data);

        $response->assertStatus(302);
    }

    public function test_penduduk_index()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard/penduduk');

        $response->assertStatus(200);
    }

    public function test_penduduk_create()
    {
        $data = [
            'NKK' => '3326160107400474',
            'rt_id' => '1',
            'NIK' => '3326165507405574',
            'nama' => 'Budi Santoso',
            'tempat_lahir' => 'Lawang',
            'tanggal_lahir' => '1995-08-15',
            'jenis_kelamin' => 'P',
            'golongan_darah' => 'ab',
            'agama' => 'Islam',
            'alamat' => 'Samping Rumah Denny',
            'status_kawin' => 'belum kawin',
            'pekerjaan' => 'President',
            'status_tinggal' => 'tetap',
            'status_meninggal' => 0

        ];

        $response = $this->post('/penduduk', $data);

        $response->assertStatus(302);
    }

    public function test_bansosn_create()
    {
        $data = [
            'nomer_kk' => '3326160107400474',
            'nama_pengaju' => 'Budi Santoso',
            'c1' => 3100000,
            'c2' => 3,
            'c3' => 25,
            'c4' => 55,
            'c5' => 1,
            'c6' => 280,
            'depan_rumah' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598894/zjlapyio2sga3cwzssef.jpg',
            'kamar_tidur' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598894/zjlapyio2sga3cwzssef.jpg',
            'kamar_mandi' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598894/zjlapyio2sga3cwzssef.jpg',
            'ruang_tamu' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598894/zjlapyio2sga3cwzssef.jpg',
            'dapur' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598894/zjlapyio2sga3cwzssef.jpg',
        ];

        $response = $this->post('/bansos-penduduk/store', $data);

        $response->assertStatus(302);
    }

    public function test_persuratan_create()
    {
        $data = [
            'NIK' => '3326165507405574',
            'keterangan' => 'Suratan',
        ];
        $response = $this->post('/persuratan', $data);

        $response->assertStatus(302);
    }

    public function test_penduduk_delete()
    {
        $penduduk = PendudukModel::where('NIK', '3326165507405574')->first();
        $response = $this->delete('/penduduk/'.$penduduk->penduduk_id);

        $response->assertStatus(302);
    }

    public function test_bansosn_index()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard/bansos');

        $response->assertStatus(200);
    }

    public function test_kas_index()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard/kas');

        $response->assertStatus(200);
    }

    public function test_persuratan_index()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get('/dashboard/persuratan');

        $response->assertStatus(200);
    }

    public function test_pengumuman_index()
    {
        $user = User::find(2);

        $response = $this->actingAs($user)->get('/karangTaruna/pengumuman');

        $response->assertStatus(200);
    }

    // public function test_pengumuman_create()
    // {
    //     $user = User::find(2);

    //     $data = [
    //         'judul' => 'Uhuy',
    //         'deskripsi_informasi' => 'begitulah',
    //         'foto_informasi' => 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1717598966/fqg1pulna5oqamxhdksf.jpg',
    //         'lokasi_informasi' => 'Luawang, Rumah Deny',
    //         'tanggal_informasi' => '2024-08-15',
    //     ];

    //     $response = $this->actingAs($user)->post('/informasi', $data);

    //     $response->assertStatus(302);
    // }

}
