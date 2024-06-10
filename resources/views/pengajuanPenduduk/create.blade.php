@extends('layouts.template')

@section('content')
        <header class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-left">
                <div class="flex items-center mb-4">
                    <a href="{{ route('pengajuan.penduduk.request') }}" class="text-blue-main hover:text-blue-main mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5M12 5l-7 7 7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('pengajuan.penduduk.index') }}">
                        <span class="text-blue-main text-md hover:text-blue-main">Permohonan Pengajuan Penduduk</span>
                    </a>
                </div>
                <h1 class="text-3xl font-bold tracking-tight text-neutral-10">Form Permohonan Pengajuan Penduduk</h1>
                <p class="mt-2 text-base leading-6 text-neutral-10 max-w-xl">Silakan mengisi form permohonan pengajuan penduduk dengan benar, ya!</p>
            </div>
        </header>
        <div class="container mx-auto">
            @if ($message = Session::get('error'))
                <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mx-auto w-2/3" role="alert">
                    <strong class="font-bold">Ops!</strong>
                    <span class="block sm:inline">{{ $message }}</span>
                    <!-- Tombol Close -->
                    <span id="close-btn" class="absolute top-0 right-0 px-2 py-1 cursor-pointer">&times;</span>
                </div>
            @endif
        </div>
        <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <div class="max-w-7xl mx-auto card p-8 mb-12" style="box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <form action="{{ route('pengajuan.penduduk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-4">
                        <label for="NKK_pengaju" class="block text-sm font-medium leading-6 text-neutral-10">NKK Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="NKK_pengaju" name="NKK_pengaju" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Nomor Induk Keluarga Anda" value="{{ old('NKK_pengaju') }}">
                            @error('NKK_pengaju')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="rt" class="block text-sm font-medium leading-6 text-neutral-10">RT Anda</label>
                        <div class="mt-1 mb-4">
                            <select id="rt" name="rt" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Pilih RT Anda</option>
                                <option value="1" {{ old('rt') == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rt') == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rt') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rt') == '4' ? 'selected' : '' }}>4</option>
                            </select>
                            @error('rt')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="NIK_pengaju" class="block text-sm font-medium leading-6 text-neutral-10">NIK Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="NIK_pengaju" name="NIK_pengaju" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Nomor Induk Anda" value="{{ old('NIK_pengaju') }}">
                            @error('NIK_pengaju')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="no_telpon" class="block text-sm font-medium leading-6 text-neutral-10">Nomer Telepon</label>
                        <div class="mt-1 mb-4">
                            <input id="no_telpon" name="no_telpon" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Nomor Telpon Anda" value="{{ old('NIK_pengaju') }}">
                            @error('no_telpon')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="nama_penduduk" class="block text-sm font-medium leading-6 text-neutral-10">Nama Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="nama_penduduk" name="nama_penduduk" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Anda" value="{{ old('nama_penduduk') }}">
                            @error('nama_penduduk')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="tanggal_lahir" class="block text-sm font-medium leading-6 text-neutral-10">Tanggal Lahir Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="tanggal_lahir" name="tanggal_lahir" type="date" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="MasukkanTanggal Lahir Anda" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                   

                    <div class="sm:col-span-4">
                        <label for="alamat" class="block text-sm font-medium leading-6 text-neutral-10">Alamat Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="alamat" name="alamat" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}">
                            @error('alamat')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="status_perkawinan" class="block text-sm font-medium leading-6 text-neutral-10">Status Perkawinan</label>
                        <div class="mt-1 mb-4">
                            <select id="status_perkawinan" name="status_perkawinan" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Pilih Status Perkawinan</option>
                                <option value="kawin" {{ old('status_perkawinan') == 'kawin' ? 'selected' : '' }}>Kawin</option>
                                <option value="belum kawin" {{ old('status_perkawinan') == 'belum kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                <option value="cerai hidup" {{ old('status_perkawinan') == 'cerai hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                <option value="cerai mati" {{ old('status_perkawinan') == 'cerai mati' ? 'selected' : '' }}>Cerai Mati</option>
                            </select>
                            @error('status_perkawinan')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="sm:col-span-4">
                        <label for="kelamin" class="block text-sm font-medium leading-6 text-neutral-10">Jenis Kelamin</label>
                        <div class="kelamin mt-2 mb-4">
                            <div class="flex items-center">
                                <input type="radio" id="laki" name="kelamin" value="l" class="form-radio h-4 w-4 text-blue-600 border-blue-main">
                                <label for="l" class="ml-3 text-gray-700">Laki-laki</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="perempuan" name="kelamin" value="p" class="form-radio h-4 w-4 text-blue-600 border-blue-main">
                                <label for="p" class="ml-3 text-gray-700">Perempuan</label>
                            </div>
                        </div>
                        @error('kelamin')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="tempat_lahir" class="block text-sm font-medium leading-6 text-neutral-10">Tempat Lahir Anda</label>
                        <div class="mt-1 mb-4">
                            <input id="tempat_lahir" name="tempat_lahir" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Masukkan Tempat Lahir Anda" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="agama" class="block text-sm font-medium leading-6 text-neutral-10">Agama Anda</label>
                        <div class="mt-1 mb-4">
                            <select id="agama" name="agama" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Pilih Agama Anda</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @error('agama')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="pekerjaan" class="block text-sm font-medium leading-6 text-neutral-10">Pekerjaan Anda</label>
                        <div class="mt-1 mb-4">
                            <select id="pekerjaan" name="pekerjaan" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Pilih Pekerjaan Anda</option>
                                <option value="PNS" {{ old('pekerjaan') == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="TNI" {{ old('pekerjaan') == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="Polri" {{ old('pekerjaan') == 'Polri' ? 'selected' : '' }}>Polri</option>
                                <option value="Karyawan Swasta" {{ old('pekerjaan') == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
                                <option value="Wiraswasta" {{ old('pekerjaan') == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                <option value="Mahasiswa" {{ old('pekerjaan') == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                <option value="Petani" {{ old('pekerjaan') == 'Petani' ? 'selected' : '' }}>Petani</option>
                                <option value="Nelayan" {{ old('pekerjaan') == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                                <option value="Pensiunan" {{ old('pekerjaan') == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
                                <option value="Ibu Rumah Tangga" {{ old('pekerjaan') == 'Ibu Rumah Tangga' ? 'selected' : '' }}>Ibu Rumah Tangga</option>
                                <option value="Tidak Bekerja" {{ old('pekerjaan') == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                                <option value="Lainnya" {{ old('pekerjaan') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                <option value="Pedagang" {{ old('pekerjaan') == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                <option value="Buruh" {{ old('pekerjaan') == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Sopir" {{ old('pekerjaan') == 'Sopir' ? 'selected' : '' }}>Sopir</option>
                                <option value="Satpam" {{ old('pekerjaan') == 'Satpam' ? 'selected' : '' }}>Satpam</option>
                                <option value="Tukang" {{ old('pekerjaan') == 'Tukang' ? 'selected' : '' }}>Tukang</option>
                                <option value="Seniman" {{ old('pekerjaan') == 'Seniman' ? 'selected' : '' }}>Seniman</option>
                                <option value="Penyiar" {{ old('pekerjaan') == 'Penyiar' ? 'selected' : '' }}>Penyiar</option>
                                <option value="Pengusaha" {{ old('pekerjaan') == 'Pengusaha' ? 'selected' : '' }}>Pengusaha</option>
                                <option value="Dosen" {{ old('pekerjaan') == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                                <option value="Guru" {{ old('pekerjaan') == 'Guru' ? 'selected' : '' }}>Guru</option>
                                <option value="Pengacara" {{ old('pekerjaan') == 'Pengacara' ? 'selected' : '' }}>Pengacara</option>
                                <option value="Dokter" {{ old('pekerjaan') == 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                <option value="Apoteker" {{ old('pekerjaan') == 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                                <option value="Perawat" {{ old('pekerjaan') == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                <option value="Penyiar Radio" {{ old('pekerjaan') == 'Penyiar Radio' ? 'selected' : '' }}>Penyiar Radio</option>
                                <option value="Penulis" {{ old('pekerjaan') == 'Penulis' ? 'selected' : '' }}>Penulis</option>
                                <option value="Jurnalis" {{ old('pekerjaan') == 'Jurnalis' ? 'selected' : '' }}>Jurnalis</option>
                            </select>
                            @error('pekerjaan')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="tinggal" class="block text-sm font-medium leading-6 text-neutral-10"> Status Tinggal</label>
                        <div class="tinggal mt-2 mb-4">
                            <div class="flex items-center">
                                <input type="radio" id="tinggal" name="tinggal" value="Kontrak" class="form-radio h-4 w-4 text-blue-600 border-blue-main">
                                <label for="kontrak" class="ml-3 text-gray-700">Kontrak</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="tinggal" name="tinggal" value="tetap" class="form-radio h-4 w-4 text-blue-600 border-blue-main">
                                <label for="tetap" class="ml-3 text-gray-700">Tetap</label>
                            </div>
                        </div>
                        @error('tinggal')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="golongan_darah" class="block text-sm font-medium leading-6 text-neutral-10">Golongan Darah</label>
                        <div class="mt-1 mb-4">
                            <select id="golongan_darah" name="golongan_darah" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-3
                                text-neutral-10 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset
                                focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Pilih Golongan Darah Anda</option>
                                <option value="A" {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                                <option value="AB" {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                                <option value="O" {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                            </select>
                            @error('golongan_darah')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center mt-6">
                        <input id="agree" type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded-md" />
                        <label for="agree" class="ml-2 block text-sm text-neutral-10">
                            Apakah data Anda sudah benar?
                        </label>
                    </div>
                    <div
                        class="flex flex-col-reverse gap-4 sm:flex-row justify-center mt-12 space-y-4 sm:space-x-8 sm:space-y-0">
                        <button type="button"
                            class="text-blue-main hover:bg-[#CCEAFF] hover:text-blue-main hover:border-blue-main
                        border border-blue-main px-10 py-2 text-base font-medium rounded-full sm:px-20"
                            onclick="resetForm()">Batal</button>
                        <button type="submit" id="submitBtn" disabled
                            class="text-white bg-gray-400 px-10 py-2 text-base font-medium rounded-full sm:px-20">Kirim</button>
                    </div>
                </form>
            </div>
        </main>
        <script>
        

const errorMessage = $('#dzErrorMessage');
const placeHolder = $('#dzPlaceholder');


let closeBtn = document.getElementById('close-btn');
let agreeCheckbox = document.getElementById('agree');
let submitBtn = document.getElementById('submitBtn');

agreeCheckbox.addEventListener('change', function() {
    if (this.checked) {
        submitBtn.disabled = false;
        submitBtn.classList.remove('bg-gray-400');
        submitBtn.classList.add('bg-blue-main');
    } else {
        submitBtn.disabled = true;
        submitBtn.classList.remove('bg-blue-main');
        submitBtn.classList.add('bg-gray-400');
            }
    });

    function resetForm() {
    document.getElementById("NIK_pengaju").value = "";
    document.getElementById("NKK_pengaju").value = "";
    document.getElementById("no_telpon").value = "";
    document.getElementById("nama_penduduk").value = "";
    document.getElementById("tanggal_lahir").value = "";
    document.getElementById("tempat_lahir").value = "";
    document.getElementById("alamat").value = "";
    document.getElementById("rt").selectedIndex = 0;
    document.getElementById("agama").selectedIndex = 0;
    document.getElementById("pekerjaan").selectedIndex = 0;
    document.getElementById("golongan_darah").selectedIndex = 0;
    document.querySelector('input[name="status"]:checked').checked = false;
    document.querySelector('input[name="kelamin"]:checked').checked = false;
    document.querySelector('input[name="tinggal"]:checked').checked = false;
    document.getElementById('agree').checked = false; 

    var submitBtn = document.getElementById("submitBtn");
    submitBtn.disabled = true;
    submitBtn.classList.remove('bg-blue-main'); 
    submitBtn.classList.add('bg-gray-400'); 
    }

    function hideAlert() {
        let alert = document.getElementById('alert');
            if (alert) {
                alert.style.display = 'none';
         }
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
                hideAlert();
            });
        }
        setTimeout(hideAlert, 5000);

</script>

@endsection
