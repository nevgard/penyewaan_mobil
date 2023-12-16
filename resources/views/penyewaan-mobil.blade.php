<!-- resources/views/form-penyewaan.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex w-full h-screen">
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
    <div class="flex flex-col justify-center items-center h-screen">
 <h1 class="font-bold text-3xl">Form Penyewaan</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="flex flex-col shadow-lg p-10 mt-4 ">
    <form action="/form-penyewaan" method="POST">
        @csrf
        <div class="flex justify-between mt-3 items-center">
            <label for="merk">Merk Mobil:</label>
            <input type="text" name="merk" class="border-2 rounded-sm ms-3 p-2 " required>
        </div>
        <div class="flex justify-between mt-3 items-center">
            <label for="model">Model Mobil:</label>
            <input type="text" name="model" class="border-2 rounded-sm ms-3 p-2 " required>
        </div>
        <div class="flex justify-between mt-3 items-center">
            <label for="tahun">Tahun Mobil:</label>
            <input type="number" name="tahun" class="border-2 rounded-sm ms-3 p-2 " required>
        </div>
        <div class="flex justify-between mt-3 items-center">
            <button type="submit" class="bg-emerald-500 text-white p-2 mt-4 rounded-md">Sewa Mobil</button>
        </div>    

        

        

    </form>
    </div>

    
    <a href="/daftar-mobil" class="bg-red-500 text-white p-2 mt-4 rounded-md">Kembali ke Daftar Mobil</a>
 </div>

    </main>
    </div>

</body>
</html>
