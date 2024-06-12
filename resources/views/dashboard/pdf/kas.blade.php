        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <h1>Data Kas</h1>
            <table border="1" id='umkm' class="w-full text-sm text-left rtl:text-right  text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-neutral-03 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sumber
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Feb
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mar
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Apr
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Mei
                    </th>
                    <th scope="col" class="px-6 py-3">
                     Jun
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Jul
                    </th>
                    <th scope="col" class="px-6 py-3">
                  Ags
                     </th>
                    <th scope="col" class="px-6 py-3">
                     Sep
                           </th>
                     <th scope="col" class="px-6 py-3">
                       Okt
                     </th>
                     <th scope="col" class="px-6 py-3">
                       Nov
                     </th>
                     <th scope="col" class="px-6 py-3">
                       Des
                     
                    </tr>
                </thead>
                <tbody id="body">
                    
                        @foreach ($data as $item)
                          
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                  {{$loop->index +1 }}
                                </th>
                                <td class="px-6 py-4">
                               @if($item->user != null)
                               {{$item->user->nama_user}}
                               @else
                                   {{$item->kartuKeluarga->penduduk->nama_penduduk}}
                               @endif
                               {{-- {{$item}} --}}
                                </td>
                               
                                <td scope="col" class="px-6 py-3">
                                  <p> {{$item->Januari ? 'lunas':'Belum lunas'}}</p>
                                 
                              </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->Februari  ? 'lunas':'Belum lunas'}}</p>
                              </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->Maret  ? 'lunas':'Belum lunas'}}</p> 
                              </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->April  ? 'lunas':'Belum lunas'}}</p>
                            </td>
                            <td scope="col" class="px-6 py-3">
                              <p> {{$item->Mei  ? 'lunas':'Belum lunas'}}</p> 
                          </td>
                          <td scope="col" class="px-6 py-3">
                            <p> {{$item->Juni  ? 'lunas':'Belum lunas'}}</p> 
                                  </td>
                                  <td scope="col" class="px-6 py-3">
                                    <p> {{$item->Juli  ? 'lunas':'Belum lunas'}}</p> 
                                </td>
                                <td scope="col" class="px-6 py-3">
                                  <p> {{$item->Agustus  ? 'lunas':'Belum lunas'}}</p> 
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->September  ? 'lunas':'Belum lunas'}}</p>
                              </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->Oktober  ? 'lunas':'Belum lunas'}}</p>                  
                                   </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->November  ? 'lunas':'Belum lunas'}}</p>
                              </td>
                              <td scope="col" class="px-6 py-3">
                                <p> {{$item->Desember  ? 'lunas':'Belum lunas'}}</p>
                              </td>
                            </tr>
                            @endforeach
                            </tbody>

        </body>
        </html>