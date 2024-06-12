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


 
    <div class="justify-self-center h-[500px] col-span-1 carousel w-full  xl:w-full">
        <h1 class=" font-semibold mb-5  text-2xl text-black" >Pengumuman</h1>
        <div id="default-carousel" class="relative h-full w-full " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full  overflow-hidden rounded-lg ">
          @foreach ($informasi as $item)
            <!-- Item 1 -->
            
           <div class="hidden h-full duration-700 ease-in-out" data-carousel-item>
             <div class="absolute font-main  w-full z-50 h-full">
               <div class=" mx-auto flex flex-col justify-end   max-w-7xl px-2 sm:px-6 lg:px-8 py-14 w-full h-full">
                   <h2 class="text-white text-md " >Sistem Informasi RW 06 - Kalirejo </h2>
                   <h1 class=" text-md hidden md:flex font-bold text-white w-3/4" >{{$item->deskripsi_informasi}} </h1>
                   <h1 class=" text-md block md:hidden font-bold text-white w-3/4" >{{$item->judul}} </h1>
                   
                  
           </div>
         </div>
         <div class="bg-gradient-to-t from-[#0096FF] opacity-50  to-transparent to-70%   z-40 absolute w-full h-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"></div>
               <img src="{{$item->foto_informasi == null ? 'https://res.cloudinary.com/dtzlizlrs/image/upload/v1716897949/e7dulpy8h3y86sspr8o5.jpg' : $item->foto_informasi}}" class="absolute block  w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
           </div>
           
           
          @endforeach
                <!-- Item 2 -->
                
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($informasi as $item)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                @endforeach
               
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>
      


 <div  class="flex w-full pt-14 flex-wrap md:flex-nowrap gap-3">
    {{-- Jumlah Penduduk --}}
    <div class="w-full flex-grow">
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



            </div>

            <div  id="pie-chart"></div>
            </div>
        </div>

    
    {{-- kas --}}
    <div class="w-full flex-grow">
        <h1 class=" text-2xl font-semibold mb-5 text-black">Kas</h1>
        <div class="w-full  bg-white rounded-lg shadow dark:bg-gray-800">

            <div class="flex justify-between flex-wrap p-4 md:p-6 pb-0 md:pb-0">
                <div class="flex w-full flex-wrap justify-between gap-2">
                    <div class="flex flex-wrap gap-3" x-data="{ active: 'pemasukan' }">
                        <button @click="active = 'pemasukan'" data="pemasukan"
                            class="tab flex items-center justify-center gap-2 border text-sm border-neutral-06 text-neutral-06 font-semibold py-2 px-3 rounded-full hover:bg-blue-main hover:text-white focus:bg-[#CCEAFF] focus:text-dodger-blue-800 focus:border-dodger-blue-800 focus:outline-none"
                            autofocus>
                            <div :class="active == 'pemasukan' ? 'p-[2px] rounded-full border-2 border-blue-main' : 'p-[2px] rounded-full border-2 border-neutral-06'">
                                <div
                                    :class="active == 'pemasukan' ? 'p-1 rounded-full bg-blue-main' :
                                        'p-1 rounded-full bg-white'">
                                </div>
                            </div> Pemasukan
                        </button>
                        <button @click="active = 'pengeluaran'" data="pengeluaran"
                            class="tab flex items-center justify-center gap-2 border text-sm border-neutral-06 text-neutral-06 font-semibold py-2 px-3 rounded-full hover:bg-blue-main hover:text-white focus:bg-[#CCEAFF] focus:text-dodger-blue-800 focus:border-dodger-blue-800 focus:outline-none"
                            autofocus>
                            <div :class="active == 'pengeluaran' ? 'p-[2px] rounded-full border-2 border-blue-main' : 'p-[2px] rounded-full border-2 border-neutral-06'">
                                <div
                                    :class="active == 'pengeluaran' ? 'p-1 rounded-full bg-blue-main' :
                                        'p-1 rounded-full bg-white'">
                                </div>
                            </div> Pengeluaran
                        </button>
                    </div>

                    <div class="h-full">
                        <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown1" data-dropdown-ignore-click-outside-class="datepicker" type="button"  class="px-5 py-3 inline-flex items-center text-sm font-medium text-neutral-10 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-main focus:z-10  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tanggal <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg>
                        </button>
                        <div id="dateRangeDropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                           
                              <form id="pendudukByKas" data="pemasukan" onsubmit="submitFormKas(event)"  class="p-4 md:p-5 text-left">
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


        var tgl = "{{ json_encode($tgl) }}"


        tgl = tgl.replace(/&quot;/g, '"');


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

 const submitFormKas=(event)=>{
  event.preventDefault()
  let tipe =document.getElementById('pendudukByKas').getAttribute('data');
 
  $.ajax({
    method:"POST",
    // headers:{
    //     'x-csrf-token': '{{csrf_token()}}',
    // },
  
    url:"{{url('data/')}}"+'/'+tipe+'/tanggal',
    data : $('#pendudukByKas').serialize(),
    beforeSend: function() {
                        $("#loading-image").show();
                    },
    success:function(data){
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
    error:function(response){
        alert(reponse);
        $("#loading-image").hide();
    }

  })

}



        $('.tab').click(function(index) {
            let tipe =document.getElementById('pendudukByKas').setAttribute('data',index.currentTarget.getAttribute('data'));
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
    series:JSON.parse("{{json_encode($penduduk)}}"),
    colors: ["#55B9FF", "#AADCFF"],
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    stroke: {
      colors: ["white"],
      lineCap: "",
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
    labels: ["Laki-laki", "Perempuan"],
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




if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), options1);
  chart.render();
}
    </script>
@endpush
