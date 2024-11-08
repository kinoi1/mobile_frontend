<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
        <link rel="stylesheet" href="/assets/main.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
    <section class="bg-main pt-11 pb-14">
        <div class="container">
            <div class="row">
                <div class="flex flex-col px-4">
                    <div class="text-white" >
                        <span>Halo, Jeni</span>
                    </div>
                    <div> 
                        <span>apa kabar</span>
                    </div>
                    <div class="bg-white w-11/12 p-4 rounded-xl absolute top-28 shadow-lg">
                        <div class="flex flex-row gap-4">
                            <div class="flex flex-col">
                                <div class="text-slate-400">Saldo Tersedia</div>
                                <div class="text-sky-600"> Rp. 150. 000</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-slate-200 rounded-lg">
                                    <p class="text-sky-600 flex justify-center">1351</p>
                                </div>
                                <div class="text-slate-400"> Pekerjaan </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-slate-200 rounded-lg">
                                    <p class="text-sky-600 flex justify-center">Rp 500k</p>
                                </div>
                                <div class="text-slate-400">Penarikan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-16">
        <div class="container ml-4">
            <div class="w-11/12 bg-sky-600 rounded-lg">
                <div class="pl-2">
                    <div class="flex flex-col">
                        <p>Kini Notif Job Langsung di Whatsapp</p>
                        <p>Dapatkan notif pekerjaan secara real-time melalui channel resmi dari indobuzz,
                            Gabung sekarang juga biar ga kehabisan tiket.
                        </p>
                        <div>
                            Bergabung Sekarang
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-8">
        <div class="container mx-4">
            <div class="w-11/12 flex flex-row gap-1">
                <p class="w-6/12 mr-2">Pekerjaan aktif</p>
                <div class="bg-rose-500 text-white rounded-lg px-2 ml-8">
                    Segera Kerjakan!
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
