<table id='umkm' class="w-full text-base text-left rtl:text-right  text-neutral-10 dark:text-gray-400">
    <thead class="text-sm font-bold text-neutral-07 bg-neutral-02 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
                Nama
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal Lahir
            </th>

            <th scope="col" class="px-6 py-3">
                Tempat Lahir
            </th>
            <th scope="col" class="px-6 py-3">
                Jenis Kelamin
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

            @foreach ($data as $status)
         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 whitespace-nowrap dark:text-white">
                {{$loop->index + 1}}
            </th>
            <td class="px-6 py-4" style="text-transform: capitalize;">
                {{$status->nama_penduduk}}
            </td>
            <td class="px-6 py-4">
                {{$status->tanggal_lahir}}
            </td>
            <td class="px-6 py-4" style="text-transform: capitalize;">
                {{$status->tempat_lahir}}
            </td>

            <td class="px-6 py-4">
                {{$status->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}
            </td>

            <td class="px-6 py-4">
                <div class="px-2 py-2 w-[113px] {{$status->status_pengajuan=='diterima'? 'bg-[#CCF1E5]':'bg-[#FBF4CF]'}}  rounded-full flex items-center gap-2  justify-center">
                    <div class="w-2 h-2 {{$status->status_pengajuan=='diterima'? 'bg-green-400':'bg-yellow-300'}} rounded-full"></div>
                    <p class="text-sm font-bold {{$status->status_pengajuan=='diterima'? 'text-green-400':'text-yellow-300'}}">
                            {{ucfirst($status->status_pengajuan)}}
                    </p>
                 </div>
            </td>

        
            <td class="px-4 py-4 flex gap-2 ">

                <div x-data= "{open:false}">

                    <button @click="open= true"  class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800 px-5 py-2 text-base font-bold rounded-full disabled:bg-neutral-05" {{$status->status_pengajuan=='diterima'?"disabled ":""}}>Konfirmasi</button>

                    <div x-show="open"  class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div @click.outside="open = false" class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl p-4 bg-white z-50 text-neutral-10">
                            <h1 class="text-xl mb-8">Apakah anda yakin ingin mengkonfirmasi permohonan ini ?</h1>
                           <div class="flex w-full space-x-7 justify-center">
                            <button @click="open= false" class="text-blue-main border border-dodger-blue-800 hover:bg-blue-100 px-10 py-2 text-base font-bold rounded-full">Batal</button>
                           <form action="{{url('konfirmasi/penduduk/'.$status->pengajuan_penduduk_id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status_pengajuan" value="diterima">
                            <input type="hidden" name="id_penduduk" value="{{$status->pengajuan_penduduk_id}}">
                            <button type="submit" class="text-neutral-01 bg-blue-main hover:bg-dodger-blue-800 px-5 py-2 text-base font-bold rounded-full">Konfirmasi</button>
                           </form>
                           </div>

                        </div>
                        <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
                    </div>

                </div>
                <div x-data="{ open: false }">
                    <button @click="open = true"  class="hover:border-none  before:absolute text-blue-main bg-dodger-blue-50 hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  " type="button">
                        Detail
                      </button>

                      <!-- Main modal -->
                      <div  x-show="open"   tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">

                        <div  class="absolute w-full max-w-[920px] h-[80vh] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  p-4  z-50 ">
                              <!-- Modal content -->
                              <div @click.outside="open = false" class="relative bg-white w-full  rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                      <h3 class="text-lg font-bold text-neutral-10 dark:text-white">
                                        Detail Pengajuan Penduduk
                                      </h3>
                                      <button type="button" @click="open = false" class="absolute -top-5 -right-4 bg-blue-main   text-white border-2 border-white hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center ">
                                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                          </svg>
                                          <span class="sr-only">Close modal</span>
                                      </button>
                                  </div>
                                <!-- Modal body -->
                                  <form class="p-4 md:p-5">
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Nama Penduduk</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->nama_penduduk}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">NIK</label>
                                            <input readonly type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->NIK}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">NKK</label>
                                            <input readonly type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->NKK}}" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Tempat Lahir</label>
                                        <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->tempat_lahir}}" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Tanggal Lahir</label>
                                        <input readonly type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->tanggal_lahir}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Jenis Kelamin</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Golongan Darah</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->golongan_darah}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Alamat</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->alamat}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Agama</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->agama}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Pekerjaan</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->pekerjaan}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Status Tinggal</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->status_tinggal}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">Status Perkawinan</label>
                                            <input readonly type="text" name="name" id="name" style="text-transform: capitalize;" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->status_perkawinan}}" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-neutral-06 dark:text-white">No Telepon</label>
                                            <input readonly type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-neutral-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" value="{{$status->no_telepon}}" required="">
                                        </div>

                                    </div>

                                </form>
                              </div>
                          </div>
                          <div class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
                      </div>
                </div>

                <div x-data= "{open:false}">

                    <button @click="open = true" type="submit" class="hover:border-none  hover:bg-dodger-blue-100  px-8 py-2 text-base font-medium rounded-full  "><svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path  stroke="#EE0B0B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 5.98c-3.33-.33-6.68-.5-10.02-.5-1.98 0-3.96.1-5.94.3L3 5.98m5.5-1.01.22-1.31C8.88 2.71 9 2 10.69 2h2.62c1.69 0 1.82.75 1.97 1.67l.22 1.3m3.35 4.17-.65 10.07C18.09 20.78 18 22 15.21 22H8.79C6 22 5.91 20.78 5.8 19.21L5.15 9.14m5.18 7.36h3.33m-4.16-4h5"/>
                      </svg>
                    </button>
                    <div x-show="open"  class="overflow-y-auto overflow-x-hidden fixed  z-40 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div @click.outside="open = false" class="absolute text-center w-full max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-2xl  p-4 bg-white z-50">
                            <h1 class="text-xl mb-5">Apakah anda yakin ingin menghapus permohonan ini ?</h1>
                           <div class="flex w-full space-x-7 justify-center">
                            <button @click="open= false" class="text-blue-main border-2 border-dodger-blue-800  hover:bg-dodger-blue-800  hover:text-white  px-5 py-2 text-base font-medium rounded-full">Batal</button>
                            <form action="{{url('/delete/pengajuan/'.$status->pengajuan_penduduk_id)}}" onsubmit="return alert('are You sure ?')" method="post">
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

        </tr>
            @endforeach



    </tbody>
</table>


<nav aria-label="page navigation example" class="page mt-5 text-right" >
    <ul class="inline-flex -space-x-px text-sm">
      <li>
        <button {{$data->previousPageUrl()?'':'disabled'}} onclick="page(event,'{{$data->previousPageUrl()}}')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-left"></i></button>
      </li>
      <li>
        <a href="#" class=" flex items-center justify-center px-3 h-8 bg-blue-main leading-tight  text-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{$data->currentPage()}}</a>
      </li>

      <li>
        <button  {{$data->nextPageUrl()?'':'disabled'}}  onclick="page(event,'{{$data->nextPageUrl()}}')" class="pagination disabled:bg-neutral-04  flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-chevron-right"></i></button>
      </li>
    </ul>
  </nav>
