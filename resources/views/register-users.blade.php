<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="shadow-lg p-10">
            <h1 class="font-bold text-3xl  ">Daftar Akun</h1>
            <form action="/register-users" method="POST" class="mt-4" >
                @csrf
                <div  class="flex justify-between mt-3  items-center ">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="border-2 p-2 " required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                <label for="name">Alamat</label>
                <input type="text" name="alamat" class="border-2 p-2" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                <label for="name">Nomor Telp</label>
                <input type="text" name="telp" class="border-2 p-2 ms-3" required>
                </div>
                <div class="flex justify-between mt-3 items-center">  
                <label for="name">Nomor SIM</label>
                <input type="text" name="sim" class="border-2 p-2" required>
                </div>
                <div class="flex w-full justify-end mt-3 items-center">

                    <button class="bg-emerald-500 text-white p-2 mt-4 rounded-md">Daftar</button>

                </div>


        </div>
    </div>
</body>
</html>