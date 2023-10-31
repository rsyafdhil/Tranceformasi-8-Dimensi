 @extends('templates.default')

@section('content')

<!-- Main Hero -->

<div class="mt-20 mx-auto w-[90%] ring-2 ring-white dark:ring-0 h-fit rounded-[50px] lg:rounded-[50px] lg:rounded-tr-[250px] bg-primary lg:bg-[#FFEEFE] lg:dark:bg-slate-700 lg:flex">
    <div class="lg:w-1/2 h-max lg:bg-primary rounded-xl lg:rounded-tl-[50px] lg:rounded-bl-[50px]">
        <h1 class="font-bold text-center lg:text-left text-secondary lg:ml-12 pt-8 text-3xl md:text-4xl mx-4">DELAPAN DIMENSI <br> KEPEMIMPINAN</h1>
        <h1 class="mx-4 lg:mx-12 text-center lg:text-left text-sm mt-4 text-bgcolor">
            Dalam asessment ini, Anda akan mengeksplorasi tiga area utama, yaitu :
        </h1>
        <h1 class="mx-4 lg:mx-12 text-sm mt-4 text-bgcolor">
            1. Dimensi kepemimpinan dominan<br>
            2. Pendorong psikologis, motiasi, dan "titik buta" khas gaya kepemimpinan <br>
            3. Apa yang paling penting dalam pengembangan kepemimpinan Anda saat ini dan yang akan datang
        </h1>
        <h1 class="mx-4 text-xl lg:text-2xl text-center mt-8 text-bgcolor">Mulai ekplorasi, klik tombol dibawah ini</h1>
        <div class="mt-4 pb-8" id="mulai">
            <a href="#mulai" class="block w-fit mx-auto">            
                <img src="dist/ArrowDown1.png" alt="" width="75" height="75" class="mx-auto">
            </a>
        </div>
    </div>
    <div class="max-lg:hidden lg:w-1/2 h-full">
        <img src="dist/body1image.png" alt="" width="500" height="500" class="mx-auto">
    </div>
</div>

<!-- Start Hero -->

<div class="mt-8 lg:mt-8 w-[90%] border-2 border-transparent h-fit bg-primary rounded-[50px] lg:rounded-[50px] mx-auto">
    <h1 class="text-xl lg:text-4xl text-center lg:text-left font-semibold mx-4 lg:ml-12 mt-8 lg:mt-12 text-bgcolor">
        Luangkan waktu 15 menit saja! <br>
        Yuk langsung klik tombol mulai di bawah ini!
    </h1>
    <h1 class="text-xs lg:text-lg text-center lg:text-left mx-4 lg:ml-12 mt-2 text-bgcolor italic font-light">
        *Gunakan kode akses yang sudah anda terima dari admin
    </h1>
    <div class="group w-fit mx-auto">
        <div class="hidden md:block mx-auto w-fit h-fit">
            <img src="dist/play.png" alt="" class="w-[60px] mx-auto mt-8 lg:mt-12 transition ease-in-out delay-150 duration-300 group-hover:hidden">
            <button class="hidden transition ease-in-out delay-150 duration-300 group-hover:block mx-auto text-3xl text-center rounded-full font-bold mt-8 lg:mt-12 text-primary bg-secondary py-3 px-10" onclick="kodeAkses()">
            <span onclick="kodeAkses()">Mulai</span>
            </button>
        </div>
        <button class="md:hidden mx-auto text-3xl text-center text-montserrat rounded-full font-bold mt-8 text-primary bg-secondary py-3 px-10" onclick="kodeAkses()">
            <span>Mulai</span>
        </button>
    </div>
    <h1 class="text-md font-light italic text-bgcolor text-center mt-8 lg:mt-12 mb-8">
        Sudah mengerjakan? Lihat hasilnya <span class="underline cursor-pointer hover:text-sky-500 max-md:text-sky-400">disini!</span>
    </h1>
</div>

<!-- Dimensi Anda Hero -->

@if(optional($user->jawabans()->latest()->first())->progress == 'selesai')

<div class="mt-8 lg:mt-8 w-[90%] border-2 border-transparent h-fit bg-primary rounded-[50px] lg:rounded-[50px] mx-auto">
    <h1 class="text-xl lg:text-3xl text-center mx-4 mt-4 mb-2 lg:mb-4 text-bgcolor">
        Selamat! Dimensi Kepemimpinan Anda Adalah :
    </h1>
    <hr class="w-3/4 mx-auto">
    <div class="flex w-fit mx-auto mt-4">
        <h1 class="text-4xl lg:text-6xl mx-4 mt-8 md:mt-20 lg:mt-12 font-bold md:font-black text-bgcolor text-center">
            Baik Hati dan <br> Tidak Sombong
        </h1>
        <img src="/dist/baikhati.png" alt="baikhati" class="h-32 md:h-56 w-auto">
    </div>
    <h1 class="mx-4 mt-8 lg:mt-4 font-light text-center text-bgcolor italic">
        *Untuk mengetahui detail lebih lanjut, silahkan unduh file di bawah ini
    </h1>
    <button class="mt-2 mb-8 mx-auto block border-2 rounded-full border-secondary text-secondary hover:bg-secondary hover:border-transparent hover:text-primary py-3 px-10">Unduh Hasil Tes</button>
</div>
<!-- Empty Hero -->

@else

<div class="mt-8 lg:mt-8 w-[90%] border-2 border-transparent h-fit bg-primary rounded-[50px] text-bgcolor mx-auto">
    <h1 class="mt-8 mb-4 mx-4 text-lg md:text-2xl lg:text-2xl text-bgcolor text-center font-bold">
        WAH, TERNYATA KAMU BELUM MENGISI FORMNYA
        <br>
        Klik <span class="font-bold underline cursor-pointer"><a href="#mulai">DISINI</a></span> untuk segera mengisi
    </h1>
    <hr class="w-3/4 mx-auto">
    <div class="w-[350px] lg:w-[450px] h-[350px] lg:h-[450px] mx-auto justify-center items-center rounded-full bg-bgcolor dark:bg-slate-800 my-4 lg:my-6">
        <img src="/dist/kosong.png" alt="" class="mx-auto py-[4.5rem] w-[200px] lg:w-[300px]">
    </div>
</div>

@endif

<!-- overlayKodeAkses -->

<div id="kodeAkses" class="top-1/4 left-1 md:left-1/4 w-[98vw] md:w-1/2 h-fit rounded-xl md:rounded-3xl bg-white dark:bg-slate-800 dark:border-2 dark:border-white z-30 flex">
    <div class="w-full flex bg-primary mb-5 drop-shadow-2xl z-40 top-0 rounded-t-xl md:rounded-t-3xl items-center">
        <h1 class="py-3 pl-5 text-secondary text-xl">Delapan Dimensi Kepemimpinan</h1>
    </div>
    <h1 class="text-black dark:text-bgcolor text-2xl ml-12 mb-3 z-40 font-black">Masukkan Kode Akses</h1>
    <form action="{{ route('user.form.store') }}" method="POST">
        @csrf
        <label for="">
            <input name="kode-akses" type="text" placeholder="Massukan Kode Akses (6 Huruf/Angka)" class="mb-2 pl-2 rounded-sm border-2 border-slate-400 ring-slate-400 ml-12 w-3/4 text-black focus:placeholder:text-transparent" onkeyup="
            var start = this.selectionStart;
            var end = this.selectionEnd;
            this.value = this.value.toUpperCase();
            this.setSelectionRange(start, end);" pattern=".{6,6}" maxlength="6" required>
        </label>
        <h1 class="ml-12 italic text-slate-500 dark:text-bgcolor text-sm mb-2">29 Juni - 4 September, 2023</h1>
        <h1 class="ml-12 italic text-black dark:text-bgcolor text-sm mb-12 hover:text-blue-400 cursor-pointer underline block w-fit">Tidak memilki kode akses?</h1>
        <button class="flex w-fit h-8 border-2 border-slate-300 rounded-full mx-auto mb-8 items-center justify-center">
            <h1 class="dark:text-bgcolor text-center text-md ml-4 mr-3 italic">Lanjutkan</h1>
            <img src="/dist/lanjutkan.png" alt="" class="dark:hidden mr-2 h-5 w-5">
            <img src="/dist/ArrowDown1.png" alt="" class="hidden dark:block -rotate-90 mr-2 h-5 w-5">
        </button> 
    </form>
</div>

@endsection
