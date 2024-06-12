@extends('dashboard.template')

@section('content')


<h1 class="text-xl font-bold text-black my-2">Data Penduduk</h1>
@if(Auth::user()->user_id == '1')
<div class="flex justify-between flex-wrap lg:flex-nowrap gap-3">
    {{-- chart --}}

    {{-- pie chart --}}
    <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between items-start w-full">
            <div class="flex-col items-center">
              <div class="flex items-center mb-1">
                  <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Statistik Penduduk</h5>
                 
            </div>
            {{-- <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown" data-dropdown-ignore-click-outside-class="datepicker" type="button" class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">31 Nov - 31 Dev <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <div id="dateRangeDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                <div class="p-3" aria-labelledby="dateRangeButton">
                  <div date-rangepicker datepicker-autohide class="flex items-center">
                      <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date">
                      </div>
                      <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                      <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End date">
                    </div>
                  </div>
                </div>
            </div> --}}
          </div>
          <div class="flex justify-end items-center">
            <button id="dropdownDefaultButton"
          data-dropdown-toggle="widgetDropdown"
        data-dropdown-placement="bottom" type="button" class="px-5 py-3 inline-flex items-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-main focus:z-10  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kriteria <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg></button>
            <div id="widgetDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="widgetDropdownButton">
                  <li>
                    <button  data="pekerjaan" class="stat flex items-center px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      Pekerjaan
                    </button>
                  </li>
                  <li>
                    <button data="tinggal" class="stat flex items-center px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Status Tinggal
                    </button>
                  </li>
                  <li>
                    <button data="kematian" class="stat flex items-center px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      Kematian
                    </button>
                  </li>
                  <li>
                    <button data="usia" class="stat flex items-center px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      Usia
                    </button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
        {{-- end pie chart --}}
    
     
      
        <!-- Line Chart -->
        <div class="py-6" id="pie-chart"></div>
      
       
      </div>
         {{-- bar chart --}}
         <div class="w-full">
             <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <h1 class=" font-semibold mb-5 text-black  text-2xl" >Jumlah Penduduk</h1>
              <div class="mb-3 w-full flex gap-5 justify-end">
                <div class="flex gap-1 flex-col">
                 <div class="flex  items-center w-full justify-between ">
                  <p>Laki-laki</p>
                  <div class="p-2 h-1 rounded-sm ml-2 bg-[#55B9FF]"></div>
                 </div>
                 <div class="flex items-center  w-full justify-between">
                  <p>Perempuan</p>
                 <div class="p-2 h-1 rounded-sm ml-2 bg-[#AADCFF]"></div>
                 </div>
                </div>
                <div class="h-full">
                  <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown" data-dropdown-ignore-click-outside-class="datepicker" type="button"  class="px-5 py-3 inline-flex items-center text-sm font-medium text-neutral-10 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-main focus:z-10  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tanggal <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
                </button>
                <div id="dateRangeDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                   
                      <form id="pendudukByMonth" onsubmit="submitForm(event)"  class="p-4 md:p-5 text-left">
                        @csrf
                        
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                            </div>
                            
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Akhir</label>
                                <input type="date" name="tanggal_akhir" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            
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
    
        {{-- end bar chart --}}
      
    
    {{-- end chart --}}
</div>
@endif
<div class="text-sm px-5 overflow-x-auto py-5 font-medium text-center rounded-xl w-full bg-white  text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
       
       
    <ul x-data="{active: 'umkm'}" class="{{Auth::user()->user_id == '1'?'flex overflow-x-auto -mb-px':'hidden'}}">
        <li class="">
            <button   @click="active = 'umkm'"  :class="active=='umkm' ?'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300':'tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'"   data="rw" >Semua RT</button>
        </li>
        <li class="">
            <button @click="active = 'nikah'"   :class="active=='nikah' ?'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300':'tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'"  data="1" aria-current="page">RT 01</button>
        </li>
        <li class="">
            <button @click="active = 'tinggal'"  :class="active=='tinggal' ?'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300':'tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'"  data="2">RT 02</button>
        </l px-3i>
        <li class="">
            <button @click="active = 'meninggal'"    :class="active=='meninggal' ?'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300':'tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'"  data="3">RT 03</button>
        </li>
        <li class="">
            <button @click="active = 'baru'"  :class="active=='baru' ?'tab text-blue-main border-b-2 border-blue-main  inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300':'tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'"  data="4">RT 04</button>
        </li>
    </ul>

    <hr>
      
    <div class="flex flex-wrap md:flex-nowrap mt-3 w-full gap-3 lg:gap-0  justify-between items-center">
        
        
        
          
          <!-- Main modal -->
          <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div  class="relative p-4  w-[900px] h-[80vh]">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center  justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Tambah Penduduk
                          </h3>
                          <button type="button" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <form action="{{url('/penduduk')}}" method="POST" class="p-4 md:p-5 text-left">
                        @csrf
                        @method('POST')
                          <div class="grid gap-4 mb-4 grid-cols-2">
                              <div class="col-span-2">
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NKK</label>
                                  <input type="text" name="NKK" id="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                              </div>
                              <div class="col-span-2 ">
                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                  <input type="text" name="NIK" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NIK" required="">
                              </div>
                              <div class="col-span-2 ">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="nama" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                            </div>
                            <div class="col-span-2 ">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input type="text" name="alamat" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                            </div>
                            <div class="col-span-2 ">
                                <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="L" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki - laki</label>
                                </div>
                               
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="P" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                </div>
                               
                            </div>
                           
                              
                         
                              <div class="col-span-2 ">
                                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
                                  <select id="category" name="golongan_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="AB">AB</option>
                                      <option value="O">O</option>
                                  </select>
                              </div>
                              
                              <div class="col-span-2 ">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT</label>
                                <select id="category"  name="rt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                </select>
                            </div>
                            
                            <div class="col-span-2 ">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                <select id="category" name="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                   
                                    {{-- <option value="konghucu">Konghucu</option> --}}
                                </select>
                            </div>

                            
                            <div class="col-span-2 ">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                                <select id="category" name="status_kawin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="kawin">Kawin</option>
                                    <option value="belum kawin" selected>Belum Kawin</option>
                                    <option value="cerai hidup" >Cerai Hidup</option>
                                    <option  value="cerai mati" >Cerai Mati</option>
                                    
                                    
                                </select>
                            </div>
                            <div class="col-span-2 ">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                <select id="category" name="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                  <option value="pns">PNS</option>
                                  <option value="tni">TNI</option>
                                  <option value="polri">Polri</option>
                                  <option value="karyawan_swasta">Karyawan Swasta</option>
                                  <option value="wiraswasta">Wiraswasta</option>
                                  <option value="mahasiswa">Mahasiswa</option>
                                  <option value="petani">Petani</option>
                                  <option value="nelayan">Nelayan</option>
                                  <option value="pensiunan">Pensiunan</option>
                                  <option value="ibu_rumah_tangga">Ibu Rumah Tangga</option>
                                  <option value="tidak_bekerja">Tidak Bekerja</option>
                                  <option value="pedagang">Pedagang</option>
                                  <option value="buruh">Buruh</option>
                                  <option value="sopir">Sopir</option>
                                  <option value="satpam">Satpam</option>
                                  <option value="tukang">Tukang</option>
                                  <option value="seniman">Seniman</option>
                                  <option value="penyiar">Penyiar</option>
                                  <option value="pengusaha">Pengusaha</option>
                                  <option value="dosen">Dosen</option>
                                  <option value="guru">Guru</option>
                                  <option value="pengacara">Pengacara</option>
                                  <option value="dokter">Dokter</option>
                                  <option value="apoteker">Apoteker</option>
                                  <option value="perawat">Perawat</option>
                                  <option value="penyiar_radio">Penyiar Radio</option>
                                  <option value="penulis">Penulis</option>
                                  <option value="jurnalis">Jurnalis</option>
                                  <option value="lainnya">Lainnya</option>
                              </select>
                            </div>

                            <div class="col-span-2 ">
                                <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Status Tinggal</label>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="tetap" name="status_tinggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tetap</label>
                                </div>
                               
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="kontrak" name="status_tinggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kontrak</label>
                                </div>
                               
                            </div>
                            <div class="col-span-2 ">
                                <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Status Meninggal</label>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="0" name="status_meninggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:te xt-gray-300">Hidup</label>
                                </div>
                               
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="1" name="status_meninggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Meninggal</label>
                                </div>
                               
                            </div>

                              
                          </div>
                          <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                              Simpan
                          </button>
                      </form>
                  </div>
              </div>
          </div> 
          
    
        <div class="filter flex space-x-2  w-full h-full items-center ">
           
            <div class="relative w-full md:w-1/2 h-full">
                <div class="absolute  inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input name="search"  id="search" data="umkm" value="{{ request('search') }}" class="search pl-8 py-3 block w-full  p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required />
            </div>

            <div  x-data="{open:false}" class="relative h-full" x-cloak >
                <button @click="open= !open" class=" px-3 hover:bg-blue-main hover:border-blue-main hover:text-white items-center  w-fit  md:min-w-fit md:w-full h-full py-3  border border-gray-300 rounded-full" ><div class="flex min-w-fit lg:min-w-[120px] justify-around items-center h-full"><i class="h-full fa-solid fa-sliders"></i> <p class="hidden lg:block" id="sort">-semua-</p> <i class="hidden lg:block fa fa-chevron-down"></i></div></button>
                <div class="absolute  left-1/2 -translate-x-1/2 w-min z-30 bg-white drop-shadow-card rounded-lg" x-show="open"  @click.outside="open=false" >
                   <ul>
                    <li><button @click="open= !open"  data="semua" value="Semua" class="sort hover:bg-blue-main hover:text-white py-2 w-[200px]" >Semua</button></li>
                    <li><button @click="open= !open"  data="L" value="Laki-laki" class="sort hover:bg-blue-main hover:text-white py-2 w-[200px]" >Laki-laki</button></li>
                    <li><button @click="open= !open"  data='P' value="Perempuan" class="sort hover:bg-blue-main hover:text-white py-2 w-[200px]">Perempuan</button></li>
                    
                    
                   </ul>
                </div>
            </div>
          
        </div>
        <div class="flex w-full space-x-1">
            <a href="{{url('penduduk/pdf')}}" type="button"   class="flex border w-full md:w-1/2 px-3 py-3  h-full  rounded-full justify-center space-x-2 items-center hover:text-white hover:bg-blue-main hover:border-blue-main "> 
                 <i class="fa-solid  fa-up-right-from-square"></i>
                      
                <p class="hidden sm:block md:hidden lg:block">Export PDF</p>
        </a>
            <div x-cloak x-data="{ open: false }" class="w-full md:w-1/2">
                
                <button @click="open= ! open" type="submit"   class="flex border w-full  px-3 py-3  h-full  rounded-full justify-center space-x-2 items-center hover:text-white hover:bg-blue-main hover:border-blue-main ">
    
                    <i class="fa-solid fa-file"></i>
                      
                    <p class="hidden  sm:block md:hidden lg:block">Import CSV</p>
                  </button>
               <!-- Main modal -->
               <div x-cloak x-show="open"   tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                              
                <div x-cloak  class="absolute w-full max-w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                      <!-- Modal content -->
                      <div @click.outside="open = false" class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Detail
                              </h3>
                              <button type="button" @click="open = false" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " >
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <!-- Modal body -->
                          <form class="p-4 md:p-5 text-left" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File :</label>
                                <input  type="file" name="file" accept=".csv"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                            </div>
                            <hr>
                           
                            <button  class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800 h-full mt-3  px-8 py-2 text-base font-medium rounded-full  " type="submit">
                                Tambah
                              </button>
                        </form>
                      </div>
                  </div>
                  <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> 
              </div> 
                
            </div>
           
         
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-neutral-01 w-full md:w-1/3 bg-blue-main hover:bg-dodger-blue-800    py-2 text-base font-medium rounded-full  " type="button">
                <p class="hidden  sm:block md:hidden lg:block">Tambah</p><p class="block  sm:hidden md:block lg:hidden">+</p>
              </button>
             
    
           </div>
    </div>        
    <div class="relative mt-5 overflow-x-auto shadow-md sm:rounded-lg ">
    
        <table id='umkm' class="w-full text-sm text-left rtl:text-right  text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-neutral-07 uppercase bg-neutral-02 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Lahir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Agama
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Aksi
                    </th>
                </tr>
            </thead>
            <tbody id="body">
                
                    @foreach ($data as $penduduk)
                 <tr class="bg-white border-b dark:bg-gray-800 text-black dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                        {{ $loop->index +1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{$penduduk->NIK}}
                    </td>
                    <td class="px-6 py-4" style="text-transform: capitalize;">
                        {{$penduduk->nama_penduduk}}
                    </td>
                    <td class="px-6 py-4">
                        {{$penduduk->tanggal_lahir}}
                    </td>
                    <td class="px-6 py-4">
                        {{$penduduk->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}
                    </td>
                    <td class="px-6 py-4" style="text-transform: capitalize;">
                        {{$penduduk->agama}}
                    </td>
                
                    <td class="px-6 py-4 flex gap-2 ">
                        <div x-cloak x-data="{ open: false }">
                            <button @click="open = true"  class="hover:border-none  before:absolute text-blue-main bg-dodger-blue-50 hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  " type="button">
                                Detail
                              </button>
                              
                              <!-- Main modal -->
                              <div  x-show="open"  x-transition tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                              
                                <div  class="absolute w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                                      <!-- Modal content -->
                                      <div @click.outside="open = false" class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                                          <!-- Modal header -->
                                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Detail
                                              </h3>
                                              <button type="button" @click="open = false" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " >
                                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                  </svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                          </div>
                                          <!-- Modal body -->
                                          <form class="p-4 md:p-5 text-left">
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NKK</label>
                                                    <input readonly type="text" name="name" id="name" value="{{$penduduk->kartuKeluarga->NKK}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                                </div>
                                                <div class="col-span-2 ">
                                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                                    <input readonly type="text" name="price" id="price" value="{{$penduduk->NIK}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NIK" required="">
                                                </div>
                                                <div class="col-span-2 ">
                                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                  <input readonly type="text" name="price" id="price" value="{{$penduduk->nama_penduduk}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                              </div>
                                              <div class="col-span-2 sm:col-span-1">
                                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                                  <input readonly type="text" name="price" id="price" value={{$penduduk->tempat_lahir}} style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                              </div>
                                              <div class="col-span-2 sm:col-span-1">
                                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                                  <input readonly type="date" name="price" id="price" value="{{$penduduk->tanggal_lahir}}"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                              </div>
                                              <div class="col-span-2 sm:col-span-1 ">
                                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                                  <input readonly type="text" name="price" id="price" value={{$penduduk->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}} class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                              </div>
                                            
                                                
                                           
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
                                                    <input readonly type="text" name="price" id="price" value={{$penduduk->golongan_darah}} style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                                </div>
                                                
                                                <div class="col-span-2 ">
                                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                                    <input readonly type="text" name="price" id="price" value="{{$penduduk->alamat}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                                </div>
                                                
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT</label>
                                                    <input readonly type="text" name="price" id="price" value={{$penduduk->kartuKeluarga->rt->nomor_rt}} class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                                </div>

                                              
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                                    <input readonly type="text" name="price" id="price" value={{$penduduk->agama}} style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                                </div>
                                              
                                         
                                         <div class="col-span-2 sm:col-span-1">
                                             <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                                             <input readonly type="text" name="price" id="price" value="{{$penduduk->status_perkawinan}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                         </div>
    
                                              <div class="col-span-2 sm:col-span-1 ">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                                <input readonly type="text" name="price" id="price" value="{{$penduduk->pekerjaan}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                            </div>
                  
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Tinggal</label>
                                                <input readonly type="text" name="price" id="price" value={{$penduduk->status_tinggal}} style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                            </div>
                                            
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Hidup</label>
                                                <input readonly type="text" name="price" id="price" value={{$penduduk->status_kematian == "0" ? 'Hidup' : 'Meninggal'}} class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                            </div>
                                             
                                            </div>
                                                <button onclick="openModal(id = {{$penduduk->penduduk_id}})" x-bind='SomeButton' class="hover:border-none  before:absolute text-blue-main bg-dodger-blue-50 hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  " type="button">
                                                    Edit
                                                  </button>
                                        </form>
                                      </div>
                                  </div>
                                  <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> 
                              </div> 
                             
                        </div>
                        <div x-data= "{open:false}">

                          <button @click="open=true" type="submit" class="hover:border-none  hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  "><svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path  stroke="#EE0B0B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 5.98c-3.33-.33-6.68-.5-10.02-.5-1.98 0-3.96.1-5.94.3L3 5.98m5.5-1.01.22-1.31C8.88 2.71 9 2 10.69 2h2.62c1.69 0 1.82.75 1.97 1.67l.22 1.3m3.35 4.17-.65 10.07C18.09 20.78 18 22 15.21 22H8.79C6 22 5.91 20.78 5.8 19.21L5.15 9.14m5.18 7.36h3.33m-4.16-4h5"/>
                          </svg>
                        </button>
                          <div x-show="open"  class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                              <div @click.outside="open = false" class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  p-4 bg-white z-50">
                                  <h1 class="text-xl mb-5">Apakah anda yakin ingin menghapus permohonan ini ?</h1>
                                 <div class="flex w-full space-x-7 justify-center">
                                  <button @click="open= false" class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white  px-5 py-2 text-base font-medium rounded-full">Batal</button>
                                  <form action="{{url('/penduduk/'.$penduduk->penduduk_id)}}" onsubmit="return alert('are You sure ?')" method="post">
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
                    <div id="modal-{{$penduduk->penduduk_id}}"  class="hidden" >

      
                        <!-- Main modal -->
                        <div      tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        
                          <div  class="absolute w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                                <!-- Modal content -->
                                <div  class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                          Detail
                                        </h3>
                                        <button type="button" onclick="closeModal(id = {{$penduduk->penduduk_id}})" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " >
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form  action="{{url('/penduduk/'.$penduduk->penduduk_id)}}" method="POST" class="p-4 md:p-5 text-left">
                                        @csrf
                                        @method('PUT')
                                      <div class="grid gap-4 mb-4 grid-cols-2">
                                          <div class="col-span-2">
                                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NKK</label>
                                              <input type="text" name="NKK" id="name" value="{{$penduduk->kartuKeluarga->NKK}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                          </div>
                                          <div class="col-span-2 ">
                                              <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                              <input type="text" name="NIK" id="price" value="{{$penduduk->NIK}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NIK" required="">
                                          </div>
                                          <div class="col-span-2 ">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                            <input type="text" name="nama" id="price" value="{{$penduduk->nama_penduduk}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                        </div>
                                        <div class="col-span-2 ">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                            <input type="text" name="alamat" id="price" value="{{$penduduk->alamat}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="price" value={{$penduduk->tempat_lahir}} class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" id="price" value="{{$penduduk->tanggal_lahir}}"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                        </div>
                                        <div class="col-span-2 ">
                                            <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->jenis_kelamin=='L'? 'checked':''}} type="radio" value="L" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki - laki</label>
                                            </div>
                                           
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->jenis_kelamin=='P'? 'checked':''}} type="radio" value="P" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                            </div>
                                           
                                        </div>
                                       
                                          
                                     
                                          <div class="col-span-2 ">
                                              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
                                              <select id="category" name="golongan_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                  <option {{$penduduk->golongan_darah=="a"?'selected':''}} value="a">A</option>
                                                  <option {{$penduduk->golongan_darah=="b"?'selected':''}}  value="b">B</option>
                                                  <option {{$penduduk->golongan_darah=="ab"?'selected':''}} value="ab">AB</option>
                                                  <option {{$penduduk->golongan_darah=="o"?'selected':''}} value="o">O</option>
                                              </select>
                                          </div>
                                          
                                          <div class="col-span-2 ">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT</label>
                                            <select id="category" name="rt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option {{$penduduk->kartuKeluarga->rt->nomor_rt=='1'?'selected':''}} value="1">01</option>
                                                <option {{$penduduk->kartuKeluarga->rt->nomor_rt=='2'?'selected':''}} value="2">02</option>
                                                <option {{$penduduk->kartuKeluarga->rt->nomor_rt=='3'?'selected':''}} value="3">03</option>
                                                <option {{$penduduk->kartuKeluarga->rt->nomor_rt=='4'?'selected':''}} value="4">04</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-span-2 ">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                            <select id="category" name="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option {{$penduduk->agama=='islam'?'selected':''}} value="islam">Islam</option>
                                                <option {{$penduduk->agama=='kristen'?'selected':''}} value="kristen">Kristen</option>
                                                <option {{$penduduk->agama=='katolik'?'selected':''}}  value="katolik">Katolik</option>
                                                <option {{$penduduk->agama=='hindu'?'selected':''}} value="hindu">Hindu</option>
                                               
                                                <option {{$penduduk->agama=='budha'?'selected':''}} value="budha">Budha</option>
                                            </select>
                                        </div>
                    
                                        <div class="col-span-2 ">
                                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                          <select id="category" name="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="pns">PNS</option>
                                            <option value="tni">TNI</option>
                                            <option value="polri">Polri</option>
                                            <option value="karyawan_swasta">Karyawan Swasta</option>
                                            <option value="wiraswasta">Wiraswasta</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                            <option value="petani">Petani</option>
                                            <option value="nelayan">Nelayan</option>
                                            <option value="pensiunan">Pensiunan</option>
                                            <option value="ibu_rumah_tangga">Ibu Rumah Tangga</option>
                                            <option value="tidak_bekerja">Tidak Bekerja</option>
                                            <option value="pedagang">Pedagang</option>
                                            <option value="buruh">Buruh</option>
                                            <option value="sopir">Sopir</option>
                                            <option value="satpam">Satpam</option>
                                            <option value="tukang">Tukang</option>
                                            <option value="seniman">Seniman</option>
                                            <option value="penyiar">Penyiar</option>
                                            <option value="pengusaha">Pengusaha</option>
                                            <option value="dosen">Dosen</option>
                                            <option value="guru">Guru</option>
                                            <option value="pengacara">Pengacara</option>
                                            <option value="dokter">Dokter</option>
                                            <option value="apoteker">Apoteker</option>
                                            <option value="perawat">Perawat</option>
                                            <option value="penyiar_radio">Penyiar Radio</option>
                                            <option value="penulis">Penulis</option>
                                            <option value="jurnalis">Jurnalis</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                      </div>
                    
                                        
                                        <div class="col-span-2 ">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                                            <select id="category" name="status_kawin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option {{$penduduk->status_perkawinan == 'kawin' ? 'selected':''}} value="kawin">Kawin</option>
                                                <option {{$penduduk->status_perkawinan == 'belum kawin' ? 'selected':''}} value="belum kawin" >Belum Kawin</option>
                                                <option {{$penduduk->status_perkawinan == 'cerai hidup' ? 'selected':''}} value="cerai hidup" >Cerai Hidup</option>
                                                <option {{$penduduk->status_perkawinan == 'cerai mati' ? 'selected':''}} value="cerai mati" >Cerai Mati</option>
                                                
                                            </select>
                                        </div>
                                        
                    
                                        <div class="col-span-2 ">
                                            <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Status Tinggal</label>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->status_tinggal == 'tetap' ? 'checked':''}}  type="radio" value="tetap" name="status_tinggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                               
                                                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tetap</label>
                                            </div>
                                           
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->status_tinggal == 'kontrak' ? 'checked':''}} type="radio" value="kontrak" name="status_tinggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="bordered-radio-1"  class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kontrak</label>
                                            </div>
                                           
                                        </div>
                                        <div class="col-span-2 ">
                                            <label for="price" class="block text-sm font-medium text-gray-900 dark:text-white">Status Meninggal</label>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->status_kematian == '0' ? 'checked':''}} type="radio" value="0" name="status_meninggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:te xt-gray-300">Hidup</label>
                                            </div>
                                           
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                                <input id="bordered-radio-1" {{$penduduk->status_kematian == '1' ? 'checked':''}} type="radio" value="1" name="status_meninggal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Meninggal</label>
                                            </div>
                                           
                                        </div>
                    
                                          
                                      </div>
                                   
                                          <button class="hover:border-none  before:absolute text-blue-main bg-dodger-blue-50 hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  " type="submit">
                                              simpan
                                            </button>
                    
                                          
                                    
                                  </form>
                                </div>
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
    
    <nav aria-label="page navigation example" class="page mt-5 text-right" >
        <ul class="inline-flex -space-x-px text-sm">
          <li>
            <button {{$data->previousPageUrl()?'':'disabled'}} onclick="page(event,'{{$data->previousPageUrl()}}','umkm','page')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-left"></i></button>
          </li>
          <li>
            <a href="#" class=" flex items-center justify-center px-3 h-8 bg-blue-main leading-tight  text-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{$data->currentPage()}}</a>
          </li>
         
          <li>
            <button  {{$data->nextPageUrl()?'':'disabled'}}  onclick="page(event,'{{$data->nextPageUrl()}}','umkm','page')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-right"></i></button>
          </li>
        </ul>
      </nav>
      
</div>
    

</div> 


   
</div>


{{-- kartu Keluarga --}}
<h1 class="text-xl font-bold text-black my-2 mb-4">Data Kartu Keluarga</h1>
<div class="text-sm px-5 overflow-x-auto py-5 font-medium text-center rounded-xl w-full bg-white  text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
       
       
  
  
      
    <div class="flex flex-wrap md:flex-nowrap gap-3 mt-3 w-full justify-between items-center">
        
        
        
          
          <!-- Main modal -->
          <div  id="crud-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div  class="relative p-4  w-[900px] h-[80vh]">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center  justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Create New Product
                          </h3>
                          <button type="button" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal-1">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <form action="{{url('/penduduk/kepalaKeluarga')}}" method="POST" class="p-4 md:p-5 text-left">
                        @csrf
                        @method('POST')
                          <div class="grid gap-4 mb-4 grid-cols-2">
                              <div class="col-span-2">
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NKK</label>
                                  <input type="text" name="NKK" id="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                              </div>
                              <div class="col-span-2 ">
                                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                  <input type="text" name="NIK" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NIK" required="">
                              </div>
                             
                              
                          </div>
                          <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                              Simpan
                          </button>
                      </form>
                  </div>
              </div>
          </div> 
          
    {{-- Kepala Keluarga  --}}

    <div class="filter flex space-x-2  w-full h-full items-center ">
           
        <div class="relative w-full md:w-1/2 h-full">
            <div class="absolute  inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input name="search"  id="search" data="umkm1" value="{{ request('search') }}" class="search pl-8 py-3 block w-full  p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required />
        </div>
      
    </div>

    </div>        
    <div class="relative mt-5 overflow-x-auto shadow-md sm:rounded-lg ">
    
        <table id='umkm1' class="w-full text-sm text-left rtl:text-right  text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-neutral-07 uppercase bg-neutral-02 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Telepon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kepala Keluarga
                   
                    <th scope="col" class="px-6 py-3">
                       Aksi
                    </th>
                </tr>
            </thead>
            <tbody id="body">
                
                    @foreach ($kartuKeluarga as $penduduk)
                 <tr class="bg-white border-b dark:bg-gray-800 text-black dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                        {{ $loop->index +1}}
                    </th>
                    <td class="px-6 py-4">
                        {{$penduduk->kartuKeluarga->rt_id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$penduduk->kartuKeluarga->no_telepon}}
                    </td>
                    <td class="px-6 py-4" style="text-transform: capitalize;">
                        {{$penduduk->Penduduk->nama_penduduk}}
                  
                
                    <td class="px-6 py-4 flex gap-2 ">
                        <div x-cloak x-data="{ open: false }">
                            <button onclick="fetchKK(event,{{$penduduk->kartu_keluarga_id}})"  @click="open = true"  class="hover:border-none  before:absolute text-blue-main bg-dodger-blue-50 hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  " type="button">
                                Detail
                              </button>
                              
                              <!-- Main modal -->
                              <div  x-show="open"  x-transition tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                              
                                <div  class="absolute w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                                      <!-- Modal content -->
                                      <div @click.outside="open = false" class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                                          <!-- Modal header -->
                                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Detail
                                              </h3>
                                              <button type="button" @click="open = false" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " >
                                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                  </svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                          </div>
                                          <!-- Modal body -->
                                          <form class="p-4 md:p-5 text-left">
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NKK</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->kartuKeluarga->NKK}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala Keluarga</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->Penduduk->nama_penduduk}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Telepon</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->kartuKeluarga->no_telepon}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pekerjaan</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->Penduduk->pekerjaan}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->Penduduk->status_perkawinan}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Tinggal</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->Penduduk->status_tinggal}}" style="text-transform: capitalize;" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kematian</label>
                                                <input readonly type="text" name="NKK" id="name" value="{{$penduduk->Penduduk->status_kematian  ? 'Mati':'Hidup'}}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NKK" required="">
                                            </div>
                                            
                                        </div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">List Keluarga</label>
                                      <table class="w-full p-4 md:p-5 text-left" id="keluarga"></table>
                                        </form>

                                      </div>
                                  </div>
                                  <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> 
                              </div> 
                             
                        </div>
                        <div x-cloak x-data="{ open: false }">
                            <button @click="open = true" type="submit" class="hover:border-none  hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full ml-4"><svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="#292D32" stroke-miterlimit="10" stroke-width="1.5" d="M21.97 18.33c0 .36-.08.73-.25 1.09-.17.36-.39.7-.68 1.02-.49.54-1.03.93-1.64 1.18-.6.25-1.25.38-1.95.38-1.02 0-2.11-.24-3.26-.73s-2.3-1.15-3.44-1.98a28.75 28.75 0 0 1-3.28-2.8 28.414 28.414 0 0 1-2.79-3.27c-.82-1.14-1.48-2.28-1.96-3.41C2.24 8.67 2 7.58 2 6.54c0-.68.12-1.33.36-1.93.24-.61.62-1.17 1.15-1.67C4.15 2.31 4.85 2 5.59 2c.28 0 .56.06.81.18.26.12.49.3.67.56l2.32 3.27c.18.25.31.48.4.7.09.21.14.42.14.61 0 .24-.07.48-.21.71-.13.23-.32.47-.56.71l-.76.79c-.11.11-.16.24-.16.4 0 .08.01.15.03.23.03.08.06.14.08.2.18.33.49.76.93 1.28.45.52.93 1.05 1.45 1.58.54.53 1.06 1.02 1.59 1.47.52.44.95.74 1.29.92.05.02.11.05.18.08.08.03.16.04.25.04.17 0 .3-.06.41-.17l.76-.75c.25-.25.49-.44.72-.56.23-.14.46-.21.71-.21.19 0 .39.04.61.13.22.09.45.22.7.39l3.31 2.35c.26.18.44.39.55.64.1.25.16.5.16.78Z"/>
                              </svg>
                            </button>
                              
                              <!-- Main modal -->
                              <div  x-show="open"  x-transition tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                              
                                <div  class="absolute w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                                      <!-- Modal content -->
                                      <div @click.outside="open = false" class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                                          <!-- Modal header -->
                                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Edit No Telepon
                                              </h3>
                                              <button type="button" @click="open = false" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " >
                                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                  </svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                          </div>
                                          <form class="p-4 md:p-5 text-left" action="{{ url('simpan/hp/'.$penduduk->kartu_keluarga_id) }}" method="POST">
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No HP</label>
                                                    <input 
                                                        type="text" 
                                                        name="hp" 
                                                        id="hp" 
                                                        value="{{ $penduduk->kartuKeluarga->no_telepon ?? '' }}" 
                                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                                        placeholder="No HP" 
                                                        required>
                                                </div>
                                                <div class="col-span-2">
                                                    <button 
                                                        type="submit" 
                                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Simpan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        
                                      </div>
                                  </div>
                                  <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> 
                              </div> 
                             
                        </div>
                        <div x-data= "{open:false}">

                          <button @click="open=true" type="submit" class="hover:border-none  hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  "><svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path  stroke="#EE0B0B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 5.98c-3.33-.33-6.68-.5-10.02-.5-1.98 0-3.96.1-5.94.3L3 5.98m5.5-1.01.22-1.31C8.88 2.71 9 2 10.69 2h2.62c1.69 0 1.82.75 1.97 1.67l.22 1.3m3.35 4.17-.65 10.07C18.09 20.78 18 22 15.21 22H8.79C6 22 5.91 20.78 5.8 19.21L5.15 9.14m5.18 7.36h3.33m-4.16-4h5"/>
                          </svg>
                        </button>
                          <div x-show="open"  class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                              <div @click.outside="open = false" class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  p-4 bg-white z-50">
                                  <h1 class="text-xl mb-5">Apakah anda yakin ingin mengkonfirmasi permohonan ini ?</h1>
                                 <div class="flex w-full space-x-7 justify-center">
                                  <button @click="open= false" class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white  px-5 py-2 text-base font-medium rounded-full">Batal</button>
                                  <form action="{{url('/penduduk/kepalaKeluarga/'.$penduduk->id_kepala_keluarga)}}" onsubmit="return alert('are You sure ?')" method="post">
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
                 
                </td>   
                </tr>
                
                
                    @endforeach
                  
             
               
            </tbody>
        </table>
    </div>
    
    <nav aria-label="page1 navigation example" class="page1 mt-5 text-right" >
        <ul class="inline-flex -space-x-px text-sm">
          <li>
            <button {{$kartuKeluarga->previousPageUrl()?'':'disabled'}} onclick="page(event,'{{$kartuKeluarga->previousPageUrl()}}','umkm1','page1')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-left"></i></button>
          </li>
          <li>
            <a href="#" class=" flex items-center justify-center px-3 h-8 bg-blue-main leading-tight  text-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{$kartuKeluarga->currentPage()}}</a>
          </li>
         
          <li>
            <button  {{$kartuKeluarga->nextPageUrl()?'':'disabled'}}  onclick="page(event,'{{$kartuKeluarga->nextPageUrl()}}','umkm1','page1')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-right"></i></button>
          </li>
        </ul>
      </nav>
      
</div>
    

</div> 


   
</div>
    
    

@endsection

@push('js')


@if(isset($penduduk_laki))
<script>
//============= chart =============
const getChartOptions = () => {
  return {
    series: JSON.parse('{{json_encode($umur_semua)}}'),
    colors: ["#91e5f6", "#84d2f6", "#59a5d8",'#386fa4','#133c55'],
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    plotOptions: {
      pie: {
        labels: {
          show: true,
        },
        size: "100%",
        dataLabels: {
          offset: -25
        }
      },
    },
    labels: ["Balita", "Anak-anak", "Remaja",'Dewasa','Lansia'],
    dataLabels: {
      enabled: true,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "%"
        },
        
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "%"
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
  chart.render();
}
// =========== End chart =============

// ============== bar chart ============
var penduduk = "{{ $penduduk_laki }}"
var penduduk1 = "{{ $penduduk_perempuan }}"
penduduk=penduduk.replace(/&quot;/g,'"');
penduduk1=penduduk1.replace(/&quot;/g,'"');
const options1 = {
  colors: ["#1A56DB", "#FDBA8C"],
  series: [
    {
      name: "Laki-laki",
      color: "#55B9FF",
      data:JSON.parse(penduduk),
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

if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("column-chart"), options1);
  chart.render();
}
// ============== end bar chart =============


// ============== chart options =============
$('.stat').click(function(event){
  console.log(this.getAttribute('data'));
  $.ajax({
    url:"{{url('penduduk/chart')}}"+'/'+this.getAttribute('data'),
    method:'GET',
    dataType:'json',
    beforeSend: function() {
                     $("#loading-image").show();
                  },
    success:function(response){
       let option=  getChartOptions();
       option.series = response.data;
       option.labels = response.label;
       document.getElementById("pie-chart").innerHTML=''; 
       const chart = new ApexCharts(document.getElementById("pie-chart"), option);
        chart.render();
        $("#loading-image").hide();
    },
    error:function(response){
      console.log(response)
    },    
  })

});

const submitForm=(event)=>{
  event.preventDefault()
  const formData = new FormData(event.target);
  const formProps = Object.fromEntries(formData);
  console.log(formProps);
        
  $.ajax({
    method:"POST",
    // headers:{
    //     'x-csrf-token': '{{csrf_token()}}',
    // },
    url:"{{url('data/penduduk/tanggal')}}",
    data : $('#pendudukByMonth').serialize(),
    beforeSend: function() {
                        $("#loading-image").show();
                    },
    success:function(data){
        console.log(data);
        penduduk = data.penduduk_laki.replace(/&quot;/g, '"');
        penduduk1 = data.penduduk_perempuan.replace(/&quot;/g, '"');
        options1.series[0].data=JSON.parse(penduduk);
        options1.series[1].data=JSON.parse(penduduk1);
           document.getElementById("column-chart").innerHTML = ''
        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options1);
            $("#loading-image").hide();
            chart.render();
        }
    },
    error:function(response){
        alert(reponse);
        $("#loading-image").hide();
    }

  })

}


// ============== end chart ================
                
</script>
@endif
<script>
const fetchKK= (event,id)=>{
  $.ajax({
    url:"{{url('penduduk/keluarga')}}"+'/'+id,
    method:"GET",
    beforeSend: function() {
                     $("#loading-image").show();
                  },
    success:function(response){
      // console.log(event.target.parentElement);
      event.target.parentElement.querySelector('#keluarga').innerHTML=response;
      $("#loading-image").hide();
    },
    error:function(response){
      event.target.parentElement.querySelector('#keluarga').innerHTML=response;
      $("#loading-image").hide();
    },
  })
}



const openModal = (id) => {
    document.getElementById('modal-'+id).classList.remove('hidden');
}

const closeModal = (id) => {
    document.getElementById('modal-'+id).classList.add('hidden');
}

function page(event,link,target,pagination) {
               event.preventDefault()
               $.ajax({
                               url: link,
                               beforeSend: function() {
                     $("#loading-image").show();
                  },
                  success:function(data){
                    
                   const parser = new DOMParser();
                               const doc = parser.parseFromString(data, 'text/html');    
                               const table = doc.getElementById(target);
                      
                               const page =doc.querySelector('.'+pagination);
                           
                                  $('#'+target).html(table);
                                  $('.'+pagination).html(page);
                               $("#loading-image").hide();
                  }
                               
                           })
              } 


document.addEventListener('alpine:init', () => {
        Alpine.bind('SomeButton', () => ({
            type: 'button',
 
            '@click'() {
                this.open=false
         
            },
 
            ':disabled'() {
                return this.shouldDisable
            },
        }))
    })


    $('.sort').click(function (index) {
        
          
            let    data = index.currentTarget.getAttribute('data')
            

      

                   $.ajax({
                       url: "{{url('penduduk/sort/')}}"+'/'+data,
                       method:"GET",
                       beforeSend: function() {
              $("#loading-image").show();
           },
                       success: function (data) {
                        $("#loading-image").hide();
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(data, 'text/html');    
                        const table = doc.getElementById('umkm');

                        
                           $('#umkm').html(table);
                           $('#sort').html( index.currentTarget.getAttribute('value'));
                       }
                       
                   })
               })

$(document).ready(function(){


    $('.tab').click(function(index){

        $.ajax({
            url:"{{url('penduduk/rt/')}}"+'/'+this.getAttribute('data'),
            method:'GET',
            dataType : 'html',
            beforeSend:function() {
              $("#loading-image").show();
           },
           success:function(data){
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');    
            const table = doc.getElementById('umkm');
            const table1 = doc.getElementById('umkm1');
            const page = doc.querySelector('.page');
            const page1 = doc.querySelector('.page1');
                        
            $('#umkm').html(table)   
            $('.page').html(page)   
            $('.page1').html(page1)   
            $('#umkm1').html(table1)   
        
            $("#loading-image").hide();
           },
           error:function(data){
            $("#loading-image").hide();
           }
        })
    })
    
    

    $('.search').change(function (index) {
                    let data = ($(this).val())
                    if(data == null || data == ""){
                        data='kosong';
                    }
                    
                    
                  
                    $.ajax({
                        url: "{{url('search/penduduk/type/')}}"+'/'+index.currentTarget.getAttribute('data')+'/'+data,
                        method:'GET',beforeSend: function() {
              $("#loading-image").show();
           },
           error:function(response){
            $('#'+index.currentTarget.getAttribute('data')).html('Data tidak ditemukan')
            $("#loading-image").hide();
           }
                        
                    }).done(function (data) {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(data, 'text/html');  
                      
                        const table = doc.getElementById(index.currentTarget.getAttribute('data'));
                        
                        $('#'+index.currentTarget.getAttribute('data')).html(table)   
                        $("#loading-image").hide();
                    })

                })
})
</script>

@endpush
