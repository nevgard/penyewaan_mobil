<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
 <div class="h-screen w-full flex">
 <aside class="flex flex-col p-6 w-1/4 shadow-lg"> 
        <h1 class="font-bold text-3xl">Dashboard</h1>  
        <nav>
            <ul>
                <li class="mb-2 mt-4"  >
                    <a href="/daftar-mobil" class=" hover:underline">Daftar Mobil</a>
                </li>
                <li class="mb-2 mt-4">
                    <a href="/laporan-penyewaan" class=" hover:underline">Laporan Penyewaan</a>
                </li>
                <li class="mb-2 mt-4 ">
                    <a href="/penyewaan-mobil" class=" hover:underline">Sewa Mobil</a>
                </li>


            </ul>
        </nav>
    </aside>

    <main class="w-3/4 p-4">
        <!-- Main Content Goes Here -->
        <h1>Daftar Mobil</h1>

    </main>
 </div>

</body>
</html>