@extends('dashboard.template')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    @if (Session::has('errors'))
        <div class="absolute bg-white drop-shadow-card top-0 left-1/2 -translate-x-1/2">
            <h1 class="text-red-500  text-bold">{{ $errors }}</h1>
        </div>
    @endif


    <div class=" grid-cols-1 xl:grid-cols-2 gap-10 grid">

        <div class=" h-full w-full   ">
            <h1 class=" font-semibold mb-3 text-xl text-neutral-10">Ringkasan</h1>
            <div class="h-full overflow-y-auto flex gap-2 flex-wrap lg:flex-nowrap w-full items-stretch justify-between">
                <div class="row-left flex-grow w-full md:w-1/2 flex gap-2 flex-col justify-around">
                    <div class="card bg-white rounded-xl px-3 py-10">
                        <div class="flex space-x-3 items-center">
                            <div class="icon bg-dodger-blue-100 px-3 py-3 rounded-xl">
                                <img class="w-6" src="{{ asset('asset/icon/bulk/people.svg') }}" alt="">
                            </div>
                            <h1 class="text-neutral-10 font-semibold">Jumlah Penduduk</h1>
                        </div>

                        <div class="flex w-full mt-10 justify-between  items-center ">
                            <h1 class="text-3xl font-semibold">{{ $semua['penduduk'] }}</h1>
                            <a href="{{ url('dashboard/penduduk') }}" class="hover:text-blue-main group">
                                <svg class="fill-current group-hover:text-blue-main text-neutral-10"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13 11.75c-.19 0-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l8.2-8.2c.29-.29.77-.29 1.06 0 .29.29.29.77 0 1.06l-8.2 8.2c-.15.15-.34.22-.53.22Z" />
                                    <path
                                        d="M22 7.55c-.41 0-.75-.34-.75-.75V2.75H17.2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75H22c.41 0 .75.34.75.75v4.8c0 .41-.34.75-.75.75Zm-7 15.2H9c-5.43 0-7.75-2.32-7.75-7.75V9c0-5.43 2.32-7.75 7.75-7.75h2c.41 0 .75.34.75.75s-.34.75-.75.75H9C4.39 2.75 2.75 4.39 2.75 9v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 5.43-2.32 7.75-7.75 7.75Z" />
                                </svg>
                            </a>
                        </div>


                    </div>
                    <div class="card bg-white  rounded-xl px-3 py-10">
                        <div class="flex space-x-3 items-center">
                            <div class="icon bg-dodger-blue-100 px-3 py-3 rounded-xl">
                                <img class="w-6" src="{{ asset('asset/icon/bulk/shop.svg') }}" alt="">

                            </div>
                            <h1 class="text-neutral-10 font-semibold">Jumlah UMKM</h1>
                        </div>

                        <div class="flex w-full mt-10 justify-between  items-center">
                            <h1 class="text-3xl font-semibold">{{ $semua['umkm'] }}</h1>
                            <a href="{{ url('umkm-penduduk/index') }}" class="hover:text-blue-main group">
                                <svg class="fill-current group-hover:text-blue-main text-neutral-10"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13 11.75c-.19 0-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l8.2-8.2c.29-.29.77-.29 1.06 0 .29.29.29.77 0 1.06l-8.2 8.2c-.15.15-.34.22-.53.22Z" />
                                    <path
                                        d="M22 7.55c-.41 0-.75-.34-.75-.75V2.75H17.2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75H22c.41 0 .75.34.75.75v4.8c0 .41-.34.75-.75.75Zm-7 15.2H9c-5.43 0-7.75-2.32-7.75-7.75V9c0-5.43 2.32-7.75 7.75-7.75h2c.41 0 .75.34.75.75s-.34.75-.75.75H9C4.39 2.75 2.75 4.39 2.75 9v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 5.43-2.32 7.75-7.75 7.75Z" />
                                </svg>
                            </a>
                        </div>


                    </div>
                </div>
                <div class="row-left flex-grow w-full md:w-1/2 flex gap-2 flex-col justify-around">
                    <div class="card bg-white rounded-xl px-3 py-10">
                        <div class="flex space-x-3 items-center">
                            <div class="icon bg-dodger-blue-100 px-3 py-3 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="#0096FF"
                                        d="M22 6.25v5.1c0 1.27-.42 2.34-1.17 3.08-.74.75-1.81 1.17-3.08 1.17v1.81c0 .68-.76 1.09-1.32.71l-.97-.64c.09-.31.13-.65.13-1.01V12.4c0-2.04-1.36-3.4-3.4-3.4H5.4c-.14 0-.27.01-.4.02V6.25C5 3.7 6.7 2 9.25 2h8.5C20.3 2 22 3.7 22 6.25Z"
                                        opacity=".4" />
                                    <path fill="#1B1B1B"
                                        d="M15.59 12.4v4.07c0 .36-.04.7-.13 1.01-.37 1.47-1.59 2.39-3.27 2.39H9.47l-3.02 2.01a.671.671 0 0 1-1.05-.56v-1.45c-1.02 0-1.87-.34-2.46-.93-.6-.6-.94-1.45-.94-2.47V12.4c0-1.9 1.18-3.21 3-3.38.13-.01.26-.02.4-.02h6.79c2.04 0 3.4 1.36 3.4 3.4Z" />
                                </svg>
                            </div>
                            <h1 class="text-neutral-10 font-semibold">Jumlah Pengaduan</h1>
                        </div>

                        <div class="flex w-full mt-10 justify-between  items-center">
                            <h1 class="text-3xl font-semibold">{{ $semua['laporan'] }}</h1>
                            <a href="{{ url('dashboard/pengaduan') }}" class="hover:text-blue-main group">
                                <svg class="fill-current group-hover:text-blue-main text-neutral-10"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13 11.75c-.19 0-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l8.2-8.2c.29-.29.77-.29 1.06 0 .29.29.29.77 0 1.06l-8.2 8.2c-.15.15-.34.22-.53.22Z" />
                                    <path
                                        d="M22 7.55c-.41 0-.75-.34-.75-.75V2.75H17.2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75H22c.41 0 .75.34.75.75v4.8c0 .41-.34.75-.75.75Zm-7 15.2H9c-5.43 0-7.75-2.32-7.75-7.75V9c0-5.43 2.32-7.75 7.75-7.75h2c.41 0 .75.34.75.75s-.34.75-.75.75H9C4.39 2.75 2.75 4.39 2.75 9v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 5.43-2.32 7.75-7.75 7.75Z" />
                                </svg>
                            </a>
                        </div>


                    </div>
                    <div class="card bg-white  rounded-xl px-3 py-10">
                        <div class="flex space-x-3 items-center">
                            <div class="icon bg-dodger-blue-100 px-3 py-3 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="#1B1B1B"
                                        d="M18.69 11.53c-.57-.15-1.24-.23-2.04-.23-1.11 0-1.52.27-2.09.7-.03.02-.06.05-.09.08l-.95 1.01c-.79.85-2.24.85-3.04 0l-.95-1a.382.382 0 0 0-.09-.09c-.58-.43-.99-.7-2.09-.7-.8 0-1.47.07-2.04.23-2.38.64-2.38 2.53-2.38 4.19v.93c0 2.51 0 5.35 5.35 5.35h7.44c3.55 0 5.35-1.8 5.35-5.35v-.93c0-1.66 0-3.55-2.38-4.19Z" />
                                    <path fill="#0096FF"
                                        d="M14.79 2H9.21C4.79 2 4.79 4.35 4.79 6.42v5.79c0 .22.1.42.27.55.17.13.4.18.61.12.45-.12 1.01-.18 1.68-.18.67 0 .81.08 1.21.38l.91.96a3.48 3.48 0 0 0 5.08 0l.91-.96c.4-.3.54-.38 1.21-.38.67 0 1.23.06 1.68.18.21.06.43.01.61-.12.17-.13.27-.34.27-.55V6.42C19.21 4.35 19.21 2 14.79 2Z"
                                        opacity=".4" />
                                    <path fill="#1B1B1B"
                                        d="M13.55 9.91h-3.1c-.39 0-.7-.31-.7-.7 0-.39.31-.7.7-.7h3.1c.39 0 .7.31.7.7 0 .38-.32.7-.7.7Zm.78-2.79H9.67c-.39 0-.7-.31-.7-.7 0-.39.31-.7.7-.7h4.65a.7.7 0 0 1 .01 1.4Z" />
                                </svg>

                            </div>
                            <h1 class="text-neutral-10 font-semibold">Jumlah Permohonan</h1>
                        </div>
                        <div class="flex w-full mt-10 justify-between  items-center">
                            <h1 class="text-3xl font-semibold">{{ $semua['pengajuan'] }}</h1>
                            <a href="{{ url('dashboard/pengajuan') }}" class="hover:text-blue-main group">
                                <svg class="fill-current group-hover:text-blue-main text-neutral-10"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13 11.75c-.19 0-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l8.2-8.2c.29-.29.77-.29 1.06 0 .29.29.29.77 0 1.06l-8.2 8.2c-.15.15-.34.22-.53.22Z" />
                                    <path
                                        d="M22 7.55c-.41 0-.75-.34-.75-.75V2.75H17.2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75H22c.41 0 .75.34.75.75v4.8c0 .41-.34.75-.75.75Zm-7 15.2H9c-5.43 0-7.75-2.32-7.75-7.75V9c0-5.43 2.32-7.75 7.75-7.75h2c.41 0 .75.34.75.75s-.34.75-.75.75H9C4.39 2.75 2.75 4.39 2.75 9v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 5.43-2.32 7.75-7.75 7.75Z" />
                                </svg>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="justify-self-center pb-5 h-[400px] md:min-h-full col-span-1 carousel w-full  xl:w-full">

            <h1 class=" font-semibold mb-5 text-xl text-neutral-10">Pengumuman</h1>
            <div id="default-carousel" class="relative h-full w-full " data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-full  overflow-hidden rounded-lg ">
                    @foreach ($informasi as $item)
                        <!-- Item 1 -->
                        <div class="hidden h-full duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute font-main  w-full z-50 h-full">
                                <div
                                    class=" mx-auto flex flex-col justify-end   max-w-7xl px-2 sm:px-6 lg:px-8 py-14 w-full h-full">
                                    <h2 class="text-white text-md ">Sistem Informasi RW 06 - Kalirejo </h2>

                                    <h1 class=" text-md block font-bold text-white w-3/4">{{ $item->judul }} </h1>


                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-t from-[#0096FF] opacity-50  to-transparent to-70%   z-40 absolute w-full h-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            </div>
                            <img src="{{ $item->foto_informasi == null ? 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1716897949/e7dulpy8h3y86sspr8o5.jpg' : $item->foto_informasi }}"
                                class="absolute block  w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    @endforeach
                    <!-- Item 2 -->

                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        @foreach ($informasi as $item)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                        @endforeach

                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

        </div>


        {{-- Jumlah Penduduk --}}

        <div class="pt-5 ">
            <h1 class=" font-semibold mb-5 text-black  text-2xl">Jumlah Penduduk</h1>

            <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="mb-3 w-full flex gap-5 justify-end">
                    <div class="flex gap-1 flex-col text-sm font-semibold text-neutral-10">
                        <div class="flex  items-center w-full justify-between ">
                            <p>Laki-laki</p>
                            <div class="p-2 h-1 rounded-md ml-2 bg-[#55B9FF]"></div>
                        </div>
                        <div class="flex items-center  w-full justify-between">
                            <p>Perempuan</p>
                            <div class="p-2 h-1 rounded-md ml-2 bg-[#AADCFF]"></div>
                        </div>
                    </div>

                    <div class="h-full">
                        <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                            data-dropdown-ignore-click-outside-class="datepicker" type="button"
                            class="px-5 py-3 inline-flex items-center text-sm font-semibold text-neutral-10 focus:outline-none bg-white rounded-full border border-neutral-04 hover:bg-neutral-03 focus:z-10  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tanggal
                            <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dateRangeDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg drop-shadow-card w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">

                            <form id="pendudukByMonth" onsubmit="submitForm(event)" class="p-4 md:p-5 text-left">
                                @csrf

                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                            Mulai</label>
                                        <input type="date" name="tanggal_mulai" id="price"
                                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Tempat Lahir" required="">
                                    </div>

                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                            Akhir</label>
                                        <input type="date" name="tanggal_akhir" id="price"
                                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Tempat Lahir" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                    Simpan
                                </button>

                            </form>

                        </div>

                    </div>


                </div>

                <div id="column-chart">

                </div>
            </div>

        </div>
        {{-- kas --}}
        <div class="pt-5">


            <h1 class=" text-xl font-semibold mb-5 text-neutral-10">Kas</h1>
            <div class="w-full  bg-white rounded-lg shadow dark:bg-gray-800">

                <div class="flex justify-between flex-wrap p-4 md:p-6 pb-0 md:pb-0">
                    <div class="flex w-full flex-wrap justify-between gap-2">
                        <div class="flex flex-wrap gap-3" x-data="{ active: 'pemasukan' }">
                            <button @click="active = 'pemasukan'" data="pemasukan"
                                class="tab flex items-center justify-center gap-2 border text-sm border-neutral-06 text-neutral-06 font-semibold py-2 px-3 rounded-full hover:bg-blue-main hover:text-white hover:border-blue-main group focus:bg-[#CCEAFF] focus:text-dodger-blue-800 focus:border-dodger-blue-800 focus:outline-none">
                                <div
                                    :class="active == 'pemasukan' ? 'p-[2px] rounded-full border-2 border-blue-main' :
                                        'p-[2px] rounded-full border-2 border-neutral-06 group-hover:border-white'">
                                    <div
                                        :class="active == 'pemasukan' ? 'p-1 rounded-full bg-blue-main' :
                                            'p-1 rounded-full bg-white'">
                                    </div>
                                </div> Pemasukan
                            </button>
                            <button @click="active = 'pengeluaran'" data="pengeluaran"
                                class="tab flex items-center justify-center gap-2 border text-sm border-neutral-06 text-neutral-06 font-semibold py-2 px-3 rounded-full hover:bg-blue-main hover:text-white hover:border-blue-main group focus:bg-[#CCEAFF] focus:text-dodger-blue-800 focus:border-dodger-blue-800 focus:outline-none">
                                <div
                                    :class="active == 'pengeluaran' ? 'p-[2px] rounded-full border-2 border-blue-main' :
                                        'p-[2px] rounded-full border-2 border-neutral-06 group-hover:border-white'">
                                    <div
                                        :class="active == 'pengeluaran' ? 'p-1 rounded-full bg-blue-main' :
                                            'p-1 rounded-full bg-white'">
                                    </div>
                                </div> Pengeluaran
                            </button>
                        </div>

                        <div class="h-full">
                            <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown1"
                                data-dropdown-ignore-click-outside-class="datepicker" type="button"
                                class="px-5 py-3 inline-flex items-center text-sm font-semibold text-neutral-10 focus:outline-none bg-white rounded-full border border-neutral-04 hover:bg-neutral-03 focus:z-10  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tanggal
                                <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="dateRangeDropdown1"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg drop-shadow-card w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">

                                <form id="pendudukByKas" data="pemasukan" onsubmit="submitFormKas(event)"
                                    class="p-4 md:p-5 text-left">
                                    @csrf

                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                                Mulai</label>
                                            <input type="date" name="tanggal_mulai" id="price"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Tempat Lahir" required="">
                                        </div>

                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                                Akhir</label>
                                            <input type="date" name="tanggal_akhir" id="price"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Tempat Lahir" required="">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                        Simpan
                                    </button>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>


                <div id="labels-chart" class="px-2.5"></div>

            </div>






        </div>








    </div>
@endsection

@push('js')
    <script>
        var data1 = JSON.parse("{{ json_encode($data) }}");
        data1.push(0);
        var penduduk = "{{ $penduduk_laki }}"
        var penduduk1 = "{{ $penduduk_perempuan }}"
        var tgl = "{{ json_encode($tgl) }}"


        tgl = tgl.replace(/&quot;/g, '"');
        penduduk = penduduk.replace(/&quot;/g, '"');
        penduduk1 = penduduk1.replace(/&quot;/g, '"');

        // start graph cart
        const options = {
            // set the labels option to true to show the labels on the X and Y axis
            xaxis: {
                show: true,
                categories: JSON.parse(tgl),
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: true,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    },
                    formatter: function(value) {
                        return 'Rp.' + value;
                    }
                }
            },
            series: [{
                    name: "Pemasukan",
                    data: data1,
                    color: "#55B9FF",
                }

            ],
            chart: {
                sparkline: {
                    enabled: false
                },
                height: "400px",
                width: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.8,
                    opacityTo: 0.2,
                    shade: "#1C64F2",
                    gradientToColors: ["#AADCFF"],
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 4,
            },
            legend: {
                show: false
            },
            grid: {
                show: true,
                strokeDashArray: 15,
            },
        }

        const submitFormKas = (event) => {
            event.preventDefault()
            let tipe = document.getElementById('pendudukByKas').getAttribute('data');

            $.ajax({
                method: "POST",
                // headers:{
                //     'x-csrf-token': '{{ csrf_token() }}',
                // },

                url: "{{ url('data/') }}" + '/' + tipe + '/tanggal',
                data: $('#pendudukByKas').serialize(),
                beforeSend: function() {
                    $("#loading-image").show();
                },
                success: function(data) {
                    console.log(data);
                    options.xaxis.categories = data.tgl
                    data.data.push(0);
                    options.series[0].data = data.data;
                    document.getElementById("labels-chart").innerHTML = ''
                    if (document.getElementById("labels-chart") && typeof ApexCharts !==
                        'undefined') {
                        const chart = new ApexCharts(document.getElementById("labels-chart"),
                            options);
                        $("#loading-image").hide();
                        chart.render();
                    }

                },
                error: function(response) {
                    alert(reponse);
                    $("#loading-image").hide();
                }

            })

        }



        $('.tab').click(function(index) {
            let tipe = document.getElementById('pendudukByKas').setAttribute('data', index.currentTarget
                .getAttribute('data'));
            if (index.currentTarget.getAttribute('data') == 'pengeluaran') {

                $.ajax({
                    url: "{{ url('data/chart') }}" + '/' + index.currentTarget.getAttribute('data'),
                    datatype: 'json',
                    beforeSend: function() {
                        $("#loading-image").show();
                    },
                    success: function(data) {
                        $("#loading-image").hide();
                        document.getElementById("labels-chart").innerHTML = ''
                        options.xaxis.categories = data.tgl
                        data.data.push(0);
                        options.series[0].data = data.data;
                        options.series[0].name = "Pengeluaran";

                        if (document.getElementById("labels-chart") && typeof ApexCharts !==
                            'undefined') {
                            const chart = new ApexCharts(document.getElementById("labels-chart"),
                                options);
                            chart.render();
                        }

                    }
                })
            } else {
                options.xaxis.categories = JSON.parse(tgl)

                options.series[0].data = data1;
                options.series[0].name = "Pemasukan";
                document.getElementById("labels-chart").innerHTML = ''
                if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {

                    const chart = new ApexCharts(document.getElementById("labels-chart"), options);
                    chart.render();
                }
            }







        })


        if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {

            document.getElementById("labels-chart").innerHTML = ''
            const chart = new ApexCharts(document.getElementById("labels-chart"), options);
            chart.render();
        }


        // end graph cart
        // bar chart

        const options1 = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                    name: "Laki-laki",
                    color: "#55B9FF",
                    data: JSON.parse(penduduk),
                },
                {
                    name: "Perempuan",
                    color: "#AADCFF",
                    data: JSON.parse(penduduk1),

                },
            ],
            chart: {
                stacked: true,
                type: "bar",
                height: "365px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -20
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: true,
            },
            fill: {
                opacity: 1,
            },
        }

        const submitForm = (event) => {
            event.preventDefault()
            const formData = new FormData(event.target);
            const formProps = Object.fromEntries(formData);
            console.log(formProps);

            $.ajax({
                method: "POST",
                // headers:{
                //     'x-csrf-token': '{{ csrf_token() }}',
                // },
                url: "{{ url('data/penduduk/tanggal') }}",
                data: $('#pendudukByMonth').serialize(),
                beforeSend: function() {
                    $("#loading-image").show();
                },
                success: function(data) {
                    console.log(data);
                    penduduk = data.penduduk_laki.replace(/&quot;/g, '"');
                    penduduk1 = data.penduduk_perempuan.replace(/&quot;/g, '"');
                    options1.series[0].data = JSON.parse(penduduk);
                    options1.series[1].data = JSON.parse(penduduk1);
                    document.getElementById("column-chart").innerHTML = ''
                    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                        const chart = new ApexCharts(document.getElementById("column-chart"), options1);
                        $("#loading-image").hide();
                        chart.render();
                    }
                },
                error: function(response) {
                    alert(reponse);
                    $("#loading-image").hide();
                }

            })

        }





        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options1);
            chart.render();
        }
    </script>
@endpush
