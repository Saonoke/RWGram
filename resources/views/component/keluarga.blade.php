

<div class="relative overflow-x-auto shadow-md  sm:rounded-xl">
    <table class="w-full text-sm text-left rounded-xl rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
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
                    Pekerjaan
                </th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->nama_penduduk}}
                </th>
                <td class="px-6 py-4">
                    {{$item->tanggal_lahir}}
                </td>
                <td class="px-6 py-4">
                    {{$item->jenis_kelamin == 'L'? 'Laki-laki':'Perempuan'}}
                </td>
                <td class="px-6 py-4">
                    {{$item->pekerjaan}}
                </td>
            
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>
