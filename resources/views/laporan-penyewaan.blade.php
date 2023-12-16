<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
    <div class="flex flex-col justify-center items-center h-screen">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">ID Peenyewaan</th>
              <th scope="col" class="px-6 py-4">Merk Mobil</th>
              <th scope="col" class="px-6 py-4">Model Mobil</th>
              <th scope="col" class="px-6 py-4">Tahun Mobil</th>
              <th scope="col" class="px-6 py-4">Tanggal Sewa</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
              <td class="whitespace-nowrap px-6 py-4">Toyota</td>
              <td class="whitespace-nowrap px-6 py-4">Avanza</td>
              <td class="whitespace-nowrap px-6 py-4">2020</td>
              <td class="whitespace-nowrap px-6 py-4">11-12-2023</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </main>
    </div>
</body>
</html>