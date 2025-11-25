<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!-- npx @tailwindcss/cli -i ./assets/input.css -o ./assets/output.css --watch -->

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Siswa</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/output.css'); ?>">
</head>
<body class="min-h-screen py-8 px-4">
     <div class="max-w-6xl mx-auto">
          <!-- Header -->
          <div class="mb-8">
               <h1 class="text-4xl font-bold text-gray-800 mb-2">Daftar Data Siswa</h1>
               <p class="text-gray-100 w-fit p-2 pl-3 pr-3 rounded-md bg-slate-700">Total siswa: <span class="font-bold text-blue-600"><?php echo count($dt); ?></span></p>
          </div>

          <!-- Table Container -->
          <div class="bg-white rounded-md overflow-hidden">
               <?php if (count($dt) > 0): ?>
                    <div class="overflow-x-auto">
                         <table class="w-full">
                              <thead>
                                   <tr class="bg-slate-700 text-white">
                                        <th class="p-2 text-left text-sm font-semibold">No</th>
                                        <th class="p-2 text-left text-sm font-semibold">NIM</th>
                                        <th class="p-2 text-left text-sm font-semibold">Nama</th>
                                        <th class="p-2 text-left text-sm font-semibold">Agama</th>
                                        <th class="p-2 text-left text-sm font-semibold">Alamat</th>
                                        <th class="p-2 text-left text-sm font-semibold">Asal Sekolah</th>
                                        <th class="p-2 text-center text-sm font-semibold">Aksi</th>
                                   </tr>
                              </thead>
                              <tbody class="divide-y divide-gray-200">
                                   <?php
                                   $no = 1;
                                   
                                   foreach ($dt as $d) {
                                   ?>
                                        <tr class="hover:bg-blue-50 transition-colors ease-in-out">
                                             <td class="p-2 text-sm text-gray-700 font-medium"><?php echo $no; ?></td>
                                             <td class="p-2 text-sm text-gray-700"><?php echo htmlspecialchars($d['nim']); ?></td>
                                             <td class="p-2 text-sm text-gray-700 font-semibold"><?php echo htmlspecialchars($d['nama']); ?></td>
                                             <td class="p-2 text-sm text-gray-700">
                                                  <span class="flex w-fit bg-cyan-100 text-cyan-800 px-3 py-1 rounded-md border-cyan-200 border text-xs font-medium">
                                                       <?php echo htmlspecialchars($d['agama']); ?>
                                                  </span>
                                             </td>
                                             <td class="p-2 text-sm text-gray-700"><?php echo htmlspecialchars($d['alamat']); ?></td>
                                             <td class="p-2 text-sm text-gray-700"><?php echo htmlspecialchars($d['asal_sekolah']); ?></td>
                                             <td class="p-2 text-center">
                                                  <div class="flex gap-2 justify-center">
                                                       <a href="<?php echo base_url('index.php/welcome/editpage/' . $d['nim']); ?>" class="flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition-all ease-in-out transform hover:scale-105 active:scale-95 text-sm">
                                                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="Edit--Streamline-Tabler" height="24" width="24">
  <desc>
    Edit Streamline Icon: https://streamlinehq.com
  </desc>
  <path d="M6.708333333333334 6.708333333333334H5.75a1.9166666666666667 1.9166666666666667 0 0 0 -1.9166666666666667 1.9166666666666667v8.625a1.9166666666666667 1.9166666666666667 0 0 0 1.9166666666666667 1.9166666666666667h8.625a1.9166666666666667 1.9166666666666667 0 0 0 1.9166666666666667 -1.9166666666666667v-0.9583333333333334" stroke-width="1"></path>
  <path d="M19.535625000000003 6.310625a2.0125 2.0125 0 0 0 -2.8462500000000004 -2.8462500000000004L8.625 11.5v2.875h2.875l8.035625 -8.064375z" stroke-width="1"></path>
  <path d="m15.333333333333334 4.791666666666667 2.875 2.875" stroke-width="1"></path>
</svg></span> Edit
                                                       </a>
                                                       <a href="<?php echo base_url('index.php/welcome/deletedata/' . $d['nim']); ?>" class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition-all ease-in-out transform hover:scale-105 active:scale-95 text-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="Delete--Streamline-Rounded-Material" height="24" width="24">
  <desc>
    Delete Streamline Icon: https://streamlinehq.com
  </desc>
  <path fill="currentColor" d="M6.525 21c-0.4125 0 -0.7656 -0.1469 -1.05925 -0.44075 -0.29385 -0.29365 -0.44075 -0.64675 -0.44075 -1.05925V5.25H4.75c-0.2125 0 -0.390585 -0.07235 -0.53425 -0.217C4.071915 4.8885 4 4.709335 4 4.4955c0 -0.213665 0.071915 -0.391335 0.21575 -0.533C4.359415 3.820835 4.5375 3.75 4.75 3.75h3.95c0 -0.216665 0.0719 -0.395835 0.21575 -0.5375C9.0594 3.070835 9.2375 3 9.45 3h5.1c0.2125 0 0.39065 0.071835 0.5345 0.2155 0.14365 0.143835 0.2155 0.322 0.2155 0.5345h3.95c0.2125 0 0.39065 0.072335 0.5345 0.217 0.14365 0.1445 0.2155 0.323665 0.2155 0.5375 0 0.213665 -0.07185 0.391335 -0.2155 0.533 -0.14385 0.14165 -0.322 0.2125 -0.5345 0.2125h-0.275V19.5c0 0.4125 -0.14685 0.7656 -0.4405 1.05925 -0.29385 0.29385 -0.647 0.44075 -1.0595 0.44075h-10.95Zm10.95 -15.75h-10.95V19.5h10.95V5.25ZM9.9295 17.35c0.21365 0 0.39135 -0.0719 0.533 -0.21575 0.14165 -0.14365 0.2125 -0.32175 0.2125 -0.53425V8.125c0 -0.2125 -0.07235 -0.39065 -0.217 -0.5345 -0.1445 -0.14365 -0.32365 -0.2155 -0.5375 -0.2155 -0.21365 0 -0.39135 0.07185 -0.533 0.2155 -0.14165 0.14385 -0.2125 0.322 -0.2125 0.5345V16.6c0 0.2125 0.07235 0.3906 0.217 0.53425 0.1445 0.14385 0.32365 0.21575 0.5375 0.21575Zm4.15 0c0.21365 0 0.39135 -0.0719 0.533 -0.21575 0.14165 -0.14365 0.2125 -0.32175 0.2125 -0.53425V8.125c0 -0.2125 -0.07235 -0.39065 -0.217 -0.5345 -0.1445 -0.14365 -0.32365 -0.2155 -0.5375 -0.2155 -0.21365 0 -0.39135 0.07185 -0.533 0.2155 -0.14165 0.14385 -0.2125 0.322 -0.2125 0.5345V16.6c0 0.2125 0.07235 0.3906 0.217 0.53425 0.1445 0.14385 0.32365 0.21575 0.5375 0.21575Z" stroke-width="0.5"></path>
</svg></span> Hapus
                                                       </a>
                                                  </div>
                                             </td>
                                        </tr>
                                   <?php
                                        $no++;
                                   }
                                   ?>
                              </tbody>
                         </table>
                    </div>
               <?php else: ?>
                    <div class="p-8 text-center">
                         <p class="text-gray-500 text-lg mb-4">Belum ada data siswa</p>
                         <a href="<?php echo base_url('index.php/welcome'); ?>" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition-all ease-in-out">
                              Tambah Data
                         </a>
                    </div>
               <?php endif; ?>
          </div>

          <!-- Action Button -->
          <?php if (count($dt) > 0): ?>
               <div class="mt-6 text-center">
                    <a href="<?php echo base_url('index.php/welcome'); ?>" class="inline-block bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-bold py-3 px-8 rounded-lg transition-all ease-in-out transform hover:scale-105 active:scale-95 shadow-lg">
                         ➕ Tambah Data Siswa Baru
                    </a>
               </div>
          <?php endif; ?>
     </div>
</body>
</html>