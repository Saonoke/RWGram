<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px" id='umkm1'  >
        <thead >
            <tr>
                <th >
                    No
                </th>
                <th >
                    Nama 
                </th>
                <th >
                   Tempat Lahir
                </th>
                <th >
                    Tanggal Lahir
                </th>
                <th >
                    Agama
                </th>
                <th >
                    Pekerjaan
                </th>
                <th >
                    Jenis Kelamin
                </th>
                <th >
                    Golongan Darah
                </th>
                
            </tr>
        </thead>
        <tbody id="body">
            
                @foreach ($data as $penduduk)
             <tr >
                <th scope="row" >
                    {{ $loop->index +1}}
                </th>
                <td >
                    {{$penduduk->nama_penduduk}}
                </td>
                <td >
                    {{$penduduk->tempat_lahir}}            
                </td>
                <td>
                    {{$penduduk->tanggal_lahir}}
                </td>
                <td >
                    {{$penduduk->agama}}            
                </td>
                <td >
                    {{$penduduk->pekerjaan}}            
                </td>
                <td >
                    {{$penduduk->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}            
                </td>
                <td >
                    {{$penduduk->golongan_darah }}            
                </td>    
                
                
             
            </td>   
            </tr>
            
            
                @endforeach
              
         
           
        </tbody>
    </table>
</body>
</html>