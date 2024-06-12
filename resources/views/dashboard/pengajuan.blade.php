@extends('dashboard.template')

@section('content')
    @if (isset($total))
        <div class="flex w-full justify-start bg-white py-3 px-3 items-center flex-wrap gap-3 sm:justify-around rounded-xl">

            <div class="flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">UMKM</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"> <i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i> {{ $total['umkm'] }}</h1>
                </div>
            </div>

            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Status Nikah</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i> {{ $total['nikah'] }}</h1>
                </div>
            </div>

            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Status Tinggal</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i> {{ $total['tinggal'] }}</h1>
                </div>
            </div>
            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Status Hidup</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i> {{ $total['hidup'] }}</h1>
                </div>
            </div>
            <div class=" flex ">
                <div class="py-3 pl-3 ">
                    <h1 class="text-base font-semibold mb-2 text-neutral-07">Pengajuan Penduduk</h1>
                    <h1 class="flex items-center gap-2 text-xl font-semibold text-neutral-10"><i
                            class="text-xs fa-solid fa-circle text-yellow-300"></i> {{ $total['penduduk'] }}</h1>
                </div>
            </div>

        </div>
    @endif


    <div
        class="text-sm px-5 overflow-x-hidden  py-5 font-semibold text-center rounded-xl w-full bg-white  text-neutral-06 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul x-data="{ active: 'umkm' }" class="flex overflow-x-auto pb-3 -mb-px">
            <li class="">
                <button @click="active = 'umkm'"
                    :class="active == 'umkm' ?
                        'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg  focus:text-blue-main focus:border-blue-main dark:hover:text-gray-300 w-[120px]' :
                        'tab inline-block w-[120px] p-4 border-b-2 rounded-t-lg hover:text-neutral-07 hover:border-neutral-06 dark:hover:text-neutral-06'"
                    data="umkm">UMKM</button>
            </li>
            <li class="">
                <button @click="active = 'nikah'" data="nikah"
                    :class="active == 'nikah' ?
                        'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg  focus:text-blue-main focus:border-blue-main dark:hover:text-neutral-06 w-[120px]' :
                        'tab w-[120px] inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-07 hover:border-neutral-06 dark:hover:text-neutral-06'"
                    data="umkm" aria-current="page">Status Nikah</button>
            </li>
            <li class="">
                <button @click="active = 'tinggal'" data="tinggal"
                    :class="active == 'tinggal' ?
                        'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg  focus:text-blue-main focus:border-blue-main dark:hover:text-neutral-06 w-[200px]' :
                        'tab w-[200px] inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-07 hover:border-neutral-06 dark:hover:text-neutral-06'"
                    data="umkm">Status Tempat Tinggal</button>
            </li>
            <li class="">
                <button @click="active = 'meninggal'" data="meninggal"
                    :class="active == 'meninggal' ?
                        'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg focus:text-blue-main focus:border-blue-main dark:hover:text-neutral-06 w-[150px]' :
                        'tab w-[150px] inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-07 hover:border-neutral-06 dark:hover:text-neutral-06'"
                    data="umkm">Status Meninggal</button>
            </li>
            <li class="">
                <button @click="active = 'penduduk'" data="penduduk"
                    :class="active == 'penduduk' ?
                        'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg focus:text-blue-main focus:border-blue-main dark:hover:text-neutral-06 w-[180px]' :
                        'tab w-[180px] inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-07 hover:border-neutral-06 dark:hover:text-neutral-06'"
                    data="umkm">Pengajuan Penduduk</button>

            </li>


        </ul>

        <div class="flex flex-row-reverse flex-wrap w-full mt-6 items-center">
            <div class="filter flex space-x-4">

                <div x-data="{ open: false }" class="relative ">
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
                                    data="Diterima">Diterima</button></li>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort "
                                    data="Ditolak">Ditolak</button></li>
                            <li><button @click="open= !open" class="hover:bg-neutral-03 px-5 py-2 w-full sort"
                                    data="Menunggu">Menunggu</button></li>

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
                    <input name="search" data="umkm" id="search" value="{{ request('search') }}"
                        class="pl-12 block w-full py-3 text-sm text-neutral-10 border border-neutral-04 rounded-full bg-white placeholder:text-neutral-06 placeholder:font-medium focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari permohonan" required />
                </div>
            </div>
        </div>

        <div class="relative  mt-5 overflow-x-auto shadow-md sm:rounded-lg ">
            <table id="umkm">
            </table>
        </div>
        <div class="page"></div>
    </div>

    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "{{ url('data/umkm') }}",
                beforeSend: function() {
                    $("#loading-image").show();
                },

            }).done(function(data) {

                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const table = doc.getElementById('umkm');
                const page = doc.querySelector('.Page');

                $('#umkm').html(table);
                $('.page').html(page);
                $("#loading-image").hide();

            })


            $('.tab').click(function(index) {

                $.ajax({
                    url: "{{ url('data') }}" + '/' + index.currentTarget.getAttribute('data'),
                    beforeSend: function() {
                        $("#loading-image").show();
                    },

                }).done(function(data) {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, 'text/html');
                    const table = doc.getElementById('umkm');
                    const page = doc.querySelector('.page');
                    document.getElementById('search').setAttribute('data', index.currentTarget
                        .getAttribute('data'))
                    $('#umkm').html(table);
                    $('.page').html(page);
                    $("#loading-image").hide();

                })


            })

            $('#search').keyup(function() {
                let data = ($(this).val())
                if (data == null || data == "") {
                    data = 'kosong';
                }



                $.ajax({
                    url: "{{ url('search') }}" + '/' + document.querySelector('#search')
                        .getAttribute('data') + '/' + data,
                    async: true,

                }).done(function(data) {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, 'text/html');
                    const table = doc.getElementById('umkm');
                    const page = doc.querySelector('.page');
                    $('#umkm').html(table);
                    $('.page').html(page);
                    $("#loading-image").hide();
                })

            })

            $('.sort').click(function(index) {

                $.ajax({
                    url: "{{ url('data') }}" + '/' + document.getElementById('search')
                        .getAttribute('data') + '/' + index.currentTarget.getAttribute('data'),
                    method: "GET",
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
                        $('#sort').html(index.currentTarget.getAttribute('data'));
                        $("#loading-image").hide();
                    }

                })
            })




        })

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
    </script>
@endpush
