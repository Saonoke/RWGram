@extends('dashboard.template')

@section('content')
    @push('css')
        <style>
            input:focus {
                outline: none !important;
                outline-width: 0 !important;
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }
        </style>
    @endpush


    @if (isset($report))
        <div class="flex w-full justify-start bg-white py-3 px-3 items-center flex-wrap gap-3 sm:justify-around rounded-xl">

            <div class="flex ">
                <div class="py-3 pl-3 ">

                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Menunggu</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"> <i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i>
                        {{ isset($report['menunggu']) ? $report['menunggu'] : '0' }}</h1>
                </div>
            </div>

            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Selesai</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-green-400"></i>
                        {{ isset($report['selesai']) ? $report['selesai'] : '0' }}</h1>
                </div>
            </div>

            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Proses</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-blue-600"></i>
                        {{ isset($report['proses']) ? $report['proses'] : '0' }}</h1>
                </div>
            </div>
            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Ditolak</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-red-600"></i>
                        {{ isset($report['ditolak']) ? $report['ditolak'] : '0' }}</h1>
                </div>
            </div>

        </div>
    @endif

    <div
        class="text-sm px-5 overflow-x-auto py-5 font-medium text-center rounded-xl w-full bg-white  text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">

        <div class="flex flex-row-reverse flex-wrap w-full mt-6 items-center">
            <div class="filter flex space-x-4">
                <div x-cloak x-data="{ open: false }" class="relative ">
                    <button @click="open= !open"
                        class="px-4 hover:bg-neutral-03 hover:border-neutral-03 items-center py-2.5 w-fit  md:min-w-fit md:w-full h-full  border border-neutral-04 rounded-full">
                        <div class="flex min-w-fit md:min-w-[120px] justify-around gap-4 items-center text-neutral-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#1B1B1B"
                                    d="M22 7.25h-6c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h6c.41 0 .75.34.75.75s-.34.75-.75.75Zm-16 0H2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h4c.41 0 .75.34.75.75s-.34.75-.75.75Z" />
                                <path fill="#1B1B1B"
                                    d="M10 10.75A4.26 4.26 0 0 1 5.75 6.5 4.26 4.26 0 0 1 10 2.25a4.26 4.26 0 0 1 4.25 4.25A4.26 4.26 0 0 1 10 10.75Zm0-7c-1.52 0-2.75 1.23-2.75 2.75S8.48 9.25 10 9.25s2.75-1.23 2.75-2.75S11.52 3.75 10 3.75Zm12 14.5h-4c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h4c.41 0 .75.34.75.75s-.34.75-.75.75Zm-14 0H2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h6c.41 0 .75.34.75.75s-.34.75-.75.75Z" />
                                <path fill="#1B1B1B"
                                    d="M14 21.75a4.26 4.26 0 0 1-4.25-4.25A4.26 4.26 0 0 1 14 13.25a4.26 4.26 0 0 1 4.25 4.25A4.26 4.26 0 0 1 14 21.75Zm0-7c-1.52 0-2.75 1.23-2.75 2.75s1.23 2.75 2.75 2.75 2.75-1.23 2.75-2.75-1.23-2.75-2.75-2.75Z" />
                            </svg>
                            <p class="hidden md:block font-semibold" id="sort">- Semua -</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                viewBox="0 0 16 16">
                                <path stroke="#1B1B1B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-width="1.5" d="m13.28 5.967-4.347 4.346a1.324 1.324 0 0 1-1.866 0L2.72 5.967" />
                            </svg>
                        </div>
                    </button>
                    <div class="absolute mt-3 left-1/2 -translate-x-1/2 py-2 z-30 text-neutral-10 font-semibold text-md bg-white drop-shadow-card w-[200px] md:w-full rounded-lg"
                        x-show="open" @click.outside="open=false">
                        <ul>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort"
                                    data="Selesai">Selesai</button></li>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort "
                                    data="Ditolak">Ditolak</button></li>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort"
                                    data="Menunggu">Menunggu</button></li>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort"
                                    data="Proses">Proses</button></li>

                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#1B1B1B"
                                d="M11.5 21.75c-5.65 0-10.25-4.6-10.25-10.25S5.85 1.25 11.5 1.25s10.25 4.6 10.25 10.25-4.6 10.25-10.25 10.25Zm0-19c-4.83 0-8.75 3.93-8.75 8.75s3.92 8.75 8.75 8.75 8.75-3.93 8.75-8.75-3.92-8.75-8.75-8.75Zm10.5 20c-.19 0-.38-.07-.53-.22l-2-2a.754.754 0 0 1 0-1.06c.29-.29.77-.29 1.06 0l2 2c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22Z" />
                        </svg>
                    </div>
                    <input name="search" id="search" value="{{ request('search') }}"
                        class="pl-12 block w-full py-3 text-sm text-neutral-10 border border-neutral-04 rounded-full bg-white placeholder:text-neutral-06 placeholder:font-medium focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari pengaduan" required />
                </div>
            </div>
        </div>

        <div class=" mt-5 overflow-x-auto shadow-md sm:rounded-lg ">
            <table id='umkm' class="w-full text-base text-left rtl:text-right  text-neutral-10 dark:text-gray-400">
                <thead class="text-sm font-bold text-neutral-07 bg-neutral-02 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pengaju
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody id="body">

                    @foreach ($data as $umkm)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 whitespace-nowrap dark:text-white">
                                {{ $loop->index + 1 }}
                            </th>

                            <td class="px-6 py-4">
                                {{ $umkm->penduduk->nama_penduduk }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $umkm->tanggal_laporan }}
                            </td>
                            <td class="px-6 py-4  "
                                style="  white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    max-width: 150px; ">


                        {{$umkm->deskripsi_laporan}}
                    </td>
              
                    <td class="px-6 py-4">
                        <div x-cloak x-data="{ open: false }" class="">
                            @php($class = array('menunggu'=>'bg-[#FBF4CF]  w-[150px]  text-[#E9C90E] border border-yellow-100 px-3 py-2 rounded-full font-bold hover:border hover:border-yellow-400',
                                                 'selesai'=>'bg-green-100 text-green-400 w-[150px]  border border-green-100 px-3 py-2 rounded-full font-bold hover:border hover:border-green-400',
                                                 'proses'=>'bg-blue-100 text-blue-main  w-[150px] border border-blue-100 px-3 py-2 rounded-full font-bold hover:border hover:border-blue-400',
                                                 'ditolak'=>'bg-red-100 text-red-400 w-[150px]  border border-red-100 px-3 py-2 rounded-full font-bold hover:border hover:border-red-400'))
                            <button  {{$umkm->status_laporan == 'selesai' ? 'disabled':''}} {{$umkm->status_laporan == 'ditolak' ? 'disabled':''}} @click="open = ! open" class="{{$class[$umkm->status_laporan]}}" >{{$umkm->status_laporan}} <i class="fa-solid fa-chevron-down"></i></button>
                          
                            <div x-show="open" @click.outside="open = false" class="flex flex-col items-center gap-3 mt-1 py-2 w-[200px] inset-0 drop-shadow-card rounded-xl bg-white" \>
                                               
               
                               
                                <button  onclick="showModal({{$umkm->laporan_id}})" class=" bg-green-100 text-green-400 w-[150px]  border border-green-100 px-3 py-2 rounded-full font-bold hover:border hover:border-green-400" >Selesai</button>
                                    
                      <form class="{{$umkm->status_laporan == 'proses' ? 'hidden': ''}}" action="{{url('konfirmasi/pengaduan/'.$umkm->laporan_id)}}" method="POST">
                        @csrf
                        @method('PUT')
                             
                            <input type="hidden" name="status_laporan" value="proses">
                        <button type="submit"  class=" bg-blue-100 text-blue-main  w-[150px] border border-blue-100 px-3 py-2 rounded-full font-bold hover:border hover:border-blue-400" >Proses</button>
                      </form>
                                    
                                <button  onclick="showModal({{$umkm->laporan_id}},'Ditolak')" class=" bg-red-100 text-red-400 w-[150px]  border border-red-100 px-3 py-2 rounded-full font-bold hover:border hover:border-red-400" >Ditolak</button>
                               
                            </div>
                        </div>


                            <td class="px-6 py-4 font-bold text-sm">
                                <div x-cloak x-data="{ open: false }" class="">
                                    @php($class = ['menunggu' => 'bg-[#FBF4CF] text-[#E9C90E] flex items-center border border-yellow-100 px-4 py-2 rounded-full  hover:border hover:border-yellow-400', 'selesai' => 'bg-green-100 text-green-400 flex items-center border border-green-100 px-4 py-2 rounded-full  hover:border hover:border-green-400', 'proses' => 'bg-blue-100 text-blue-main flex items-center border border-blue-100 px-4 py-2 rounded-full  hover:border hover:border-blue-400', 'ditolak' => 'bg-red-100 text-red-400 flex items-center border border-red-100 px-4 py-2 rounded-full  hover:border hover:border-red-400'])
                                    <button @click="open = ! open"
                                        class="{{ $class[$umkm->status_laporan] }}">{{ $umkm->status_laporan }} <i
                                            class="fa-solid fa-chevron-down ml-2"></i></button>

                                    <div x-show="open" @click.outside="open = false"
                                        class="flex flex-col items-center gap-3 mt-4 py-2 w-[200px] inset-0 drop-shadow-card rounded-xl bg-white">

                                        <form action="{{ url('konfirmasi/pengaduan/' . $umkm->laporan_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="status_laporan" value="Menunggu">
                                            <button type="submit"
                                                class=" bg-[#FBF4CF] text-[#E9C90E] w-[150px]  border border-yellow-100 px-3 py-2 rounded-full font-bold hover:border hover:border-yellow-400">Menunggu
                                                </i></button>

                                        </form>

                                        <button onclick="showModal({{ $umkm->laporan_id }})"
                                            class=" bg-green-100 text-green-400 w-[150px]  border border-green-100 px-3 py-2 rounded-full font-bold hover:border hover:border-green-400">Selesai</button>

                                        <form action="{{ url('konfirmasi/pengaduan/' . $umkm->laporan_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="status_laporan" value="proses">
                                            <button type="submit"
                                                class=" bg-blue-100 text-blue-main  w-[150px] border border-blue-100 px-3 py-2 rounded-full font-bold hover:border hover:border-blue-400">Proses</button>
                                        </form>

                                        <button onclick="showModal({{ $umkm->laporan_id }},'Ditolak')"
                                            class=" bg-red-100 text-red-400 w-[150px]  border border-red-100 px-3 py-2 rounded-full font-bold hover:border hover:border-red-400">Ditolak</button>

                                    </div>
                                </div>


                        <div x-data= "{open:false}">

                            <button @click="open=true" type="submit" class="hover:border-none  hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  "><svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path  stroke="#EE0B0B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 5.98c-3.33-.33-6.68-.5-10.02-.5-1.98 0-3.96.1-5.94.3L3 5.98m5.5-1.01.22-1.31C8.88 2.71 9 2 10.69 2h2.62c1.69 0 1.82.75 1.97 1.67l.22 1.3m3.35 4.17-.65 10.07C18.09 20.78 18 22 15.21 22H8.79C6 22 5.91 20.78 5.8 19.21L5.15 9.14m5.18 7.36h3.33m-4.16-4h5"/>
                              </svg>
                            </button>
                            <div x-show="open"  class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div @click.outside="open = false" class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  p-4 bg-white z-50">
                                    <h1 class="text-xl mb-5">Apakah anda yakin ingin menghapus pengaduan ini ?</h1>
                                   <div class="flex w-full space-x-7 justify-center">
                                    <button @click="open= false" class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white  px-5 py-2 text-base font-medium rounded-full">Batal</button>
                                    <form action="{{url('/delete/laporan/'.$umkm->laporan_id)}}" onsubmit="return alert('are You sure ?')" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800   px-5 py-2 text-base font-medium rounded-full">Konfirmasi</button>
                                    </form>
                    
                                   </div>
        
                                </div>
                                <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> 
                            </div>
        
                        </div>
                    </td>
                    <td>
                        {{-- modal --}}
                        <div id="modal-{{$umkm->laporan_id}}"  class="hidden modal transition duration-150 ease-in-out overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div  class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  px-4 py-6 bg-white z-50">
                                <h1 class="text-lg mb-5 text-black">Apakah Anda ingin mengkonfirmasi pengaduan ini ?</h1>
                            <div class="flex w-full space-x-7 justify-center">
                                
                                            <button onclick="closeModal({{$umkm->laporan_id}})" x-bind='SomeButton' class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white  px-5 py-2 text-base font-medium rounded-full" type="button">
                                            Kembali

                                            </button>

                                            <form action="{{ url('konfirmasi/pengaduan/' . $umkm->laporan_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status_laporan" value="selesai">

                                                <button
                                                    class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800 px-5 py-2 text-base font-bold rounded-full">Konfirmasi</button>
                                            </form>

                                        </div>

                                    </div>
                                    <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
                                </div>
                                <div id="modal-ditolak-{{ $umkm->laporan_id }}"
                                    class="modal hidden overflow-y-auto overflow-x-hidden fixed  z-40  justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">

                                    <div
                                        class="absolute text-left w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  px-4 py-6 bg-white z-50">
                                        <h1 class="text-black text-xl mb-3">Pesan</h1>
                                        <form action="{{ url('/konfirmasi/pengaduan/ ' . $umkm->laporan_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status_laporan" value="ditolak">

                                            <div class="col-span-2">

                                                <textarea required id="description" rows="4" name="pesan"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Tulis Pesan Disini ..."></textarea>
                                            </div>
                                            <div class="flex w-full justify-center space-x-5">
                                                <button onclick="closeModal('ditolak-'+{{ $umkm->laporan_id }})"
                                                    type="button"
                                                    class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white mt-3 px-5 py-2 text-base font-medium rounded-full">
                                                    Batal
                                                </button>
                                                <button type="submit"
                                                    class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800  mt-3 px-5 py-2 text-base font-medium rounded-full">Konfirmasi</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>

                                </div>
        </div>
        </td>
        </tr>
        @endforeach



        </tbody>
        </table>

    </div>

    <nav aria-label="page navigation example" class="page mt-5 text-right">
        <ul class="inline-flex -space-x-px text-sm">
            <li>
                <button {{ $data->previousPageUrl() ? '' : 'disabled' }}
                    onclick="page(event,'{{ $data->previousPageUrl() }}')"
                    class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i
                        class="fa-solid fa-chevron-left"></i></button>
            </li>
            <li>
                <a href="#"
                    class=" flex items-center justify-center px-3 h-8 bg-blue-main leading-tight  text-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $data->currentPage() }}</a>
            </li>

            <li>
                <button {{ $data->nextPageUrl() ? '' : 'disabled' }} onclick="page(event,'{{ $data->nextPageUrl() }}')"
                    class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i
                        class="fa-solid fa-chevron-right"></i></button>
            </li>
        </ul>
    </nav>
    </div>
    </div>


    </div>
@endsection

@push('js')
    <script>
        const showModal = (id, status = 'diterima') => {
            if (status === 'diterima') {
                let modal = document.getElementById('modal-' + id)
                modal.classList.remove('hidden');
            } else {
                let modal = document.getElementById('modal-ditolak-' + id)
                modal.classList.remove('hidden');
            }
        }



        function page(event, link) {

            event.preventDefault()
            $.ajax({
                url: link,
                beforeSend: function() {
                    $("#loading-image").show();
                },
                success: function(data) {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, 'text/html');
                    const table = doc.getElementById('umkm');
                    const page = doc.querySelector('.page');
                    $('#umkm').html(table);
                    $('.page').html(page);
                    $("#loading-image").hide();
                }

            })
        }


        const openModal = (id) => {
            document.getElementById('modal-' + id).classList.remove('hidden');
        }


        const closeModal = (id) => {
            document.querySelector('#modal-' + id).classList.add('hidden');
        }




        document.addEventListener('alpine:init', () => {
            Alpine.bind('SomeButton', () => ({
                type: 'button',

                '@click'() {
                    this.open = false

                },

                ':disabled'() {
                    return this.shouldDisable
                },
            }))
        })

        $(document).ready(function() {



                $('#search').change(function () {
                    let data = ($(this).val())
                    if(data == null || data == ""){
                        data='kosong';
                    }
                    $.ajax({
                        url: "{{url('search/pengaduan')}}"+'/'+data,
                        type: "GET",
                        beforeSend: function() {
              $("#loading-image").show();
           },
           error:function(response){
            $("#loading-image").hide();
            $('#umkm').html("<p class='text-black text-center text-xl'>Data Tidak Ditemukan </p>");
           }


                    }).done(function (data) {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(data, 'text/html');
                        const table = doc.getElementById('umkm');
                            $('#umkm').html(table);
                            $("#loading-image").hide();
                    })

                })

            })


            $('.sort').click(function(index) {


                    $.ajax({
                        url: "{{url('dashboard/pengaduan')}}"+'/'+index.currentTarget.getAttribute('data'),
                        method:"GET",
                        beforeSend: function() {
              $("#loading-image").show();
           },
                        success: function (data) {

                        const parser = new DOMParser();
                        const doc = parser.parseFromString(data, 'text/html');
                        const table = doc.getElementById('umkm');
                        const page = doc.querySelector('.page');
                        $('#umkm').html(table);
                        $('.page').html(page);
                        $("#sort").html(index.currentTarget.getAttribute('data'));
                        $("#loading-image").hide();
                    }

                })
            })

        })
    </script>
@endpush
