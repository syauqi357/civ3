<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Input Data Siswa</title>
		<link rel="stylesheet" href="./assets/output.css" />
	</head>
	<body class="min-h-screen py-8 px-4">
		<div class="max-w-2xl mx-auto flex flex-col">
			<!-- Header -->
			<div class="text-center mb-12">
				<h1 class="text-4xl font-bold text-gray-800 mb-2">Input Data Siswa</h1>
				<p class="text-gray-600 text-lg">Masukkan informasi lengkap siswa baru</p>
			</div>

			<!-- Form Card -->
			<form action="welcome/insertdata" method="post" name="input_mhs" class="bg-white rounded-md border border-slate-500 p-8 space-y-6">
				
				<!-- NIM Input -->
				<div class="form-group">
					<label for="nim" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Induk Mahasiswa (NIM)</label>
					<input 
						type="number" 
						name="nim" 
						id="nim" 
						required
						placeholder="Masukkan NIM" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out" 
					/>
				</div>

				<!-- Nama Input -->
				<div class="form-group">
					<label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
					<input 
						type="text" 
						name="nama" 
						id="nama" 
						required
						placeholder="Masukkan nama lengkap" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out"
					/>
				</div>

				<!-- Agama Input -->
				<div class="form-group">
					<label for="agama" class="block text-sm font-semibold text-gray-700 mb-2">Agama</label>
					<input type="text" name="agama" 
						id="agama" 
						required
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out">
				</div>

				<!-- Alamat Input -->
				<div class="form-group">
					<label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">Alamat</label>
					<textarea 
						name="alamat" 
						id="alamat" 
						required
						placeholder="Masukkan alamat lengkap" 
						rows="3"
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out resize-none"
					></textarea>
				</div>

				<!-- Asal Sekolah Input -->
				<div class="form-group">
					<label for="asal_sekolah" class="block text-sm font-semibold text-gray-700 mb-2">Asal Sekolah</label>
					<input 
						type="text" 
						name="asal_sekolah" 
						id="asal_sekolah" 
						required
						placeholder="Masukkan asal sekolah" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out"
					/>
				</div>

				<!-- Submit Button -->
				<div class="pt-4">
					<button 
						type="submit" 
						class="flex items-center justify-center gap-2 w-full bg-blue-600 text-white font-bold py-3 rounded-lg transition-all ease-in-out transform hover:scale-101 active:scale-95"
					>
						<span>

						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" id="Send--Streamline-Mynaui" height="24" width="24">
  <desc>
    Send Streamline Icon: https://streamlinehq.com
  </desc>
  <path d="m14 10 -3 3m9.288 -9.969a0.535 0.535 0 0 1 0.68 0.681l-5.924 16.93a0.535 0.535 0 0 1 -0.994 0.04l-3.219 -7.242a0.534 0.534 0 0 0 -0.271 -0.271l-7.242 -3.22a0.535 0.535 0 0 1 0.04 -0.993z" stroke-width="1.5"></path>
</svg>

						</span> Kirim Data Siswa
					</button>
				</div>

				<!-- Reset Button -->
				<div>
					<button 
						type="reset" 
						class="flex items-center gap-2 justify-center w-full bg-gray-200 hover:bg-gray-300 text-slate-700 font-semibold py-3 rounded-lg transition-all ease-in-out"
					>
						<span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="Reset-Iso--Streamline-Outlined-Material" height="24" width="24">
  <desc>
    Reset Iso Streamline Icon: https://streamlinehq.com
  </desc>
  <path fill="currentColor" d="M12 15.225V13.15c0 -0.31665 0.10835 -0.58335 0.325 -0.8s0.48335 -0.325 0.8 -0.325l2.05 0.025L12 15.225Zm0 4.025v-2.125L17.1 12.05h2.1L12 19.25Zm0.1 1.65 8.8 -8.8c0.25 0.08335 0.46665 0.22085 0.65 0.4125s0.31665 0.4125 0.4 0.6625l-8.775 8.8c-0.26665 -0.08335 -0.49165 -0.21665 -0.675 -0.4 -0.18335 -0.18335 -0.31665 -0.40835 -0.4 -0.675Zm3.05 1.1L22 15.15v2.125L17.275 22H15.15Zm4.05 0 2.8 -2.8v1.675c0 0.31665 -0.10835 0.58335 -0.325 0.8s-0.48335 0.325 -0.8 0.325H19.2Zm1.675 -11.5h-1.55c-0.38335 -1.7 -1.25 -3.125 -2.6 -4.275C15.375 5.075 13.8 4.5 12 4.5c-2.08335 0 -3.85415 0.72915 -5.3125 2.1875C5.22915 8.14585 4.5 9.91665 4.5 12c0 1.35 0.320835 2.57915 0.9625 3.6875C6.10415 16.79585 6.95 17.68335 8 18.35V15.5h1.5v5.5H4v-1.5h3.025c-1.21665 -0.8 -2.191665 -1.85835 -2.925 -3.175C3.366665 15.00835 3 13.56665 3 12c0 -1.25 0.2375 -2.42085 0.7125 -3.5125 0.475 -1.09165 1.116665 -2.04165 1.925 -2.85 0.80835 -0.808335 1.75835 -1.45 2.85 -1.925C9.57915 3.2375 10.75 3 12 3c2.23335 0 4.17915 0.716665 5.8375 2.15 1.65835 1.43335 2.67085 3.21665 3.0375 5.35Z" stroke-width="0.5"></path>
</svg></span> Reset Form
					</button>
				</div>
			</form>

			<!-- Footer Info -->
			<span class="p-2 pl-3 pr-3 animate-pulse w-fit flex items-center gap-3 text-center text-gray-600 text-sm mt-6 bg-amber-300 border-amber-500 border rounded-md "> <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" id="Warning--Streamline-Phosphor" height="16" width="16">
  <desc>
    Warning Streamline Icon: https://streamlinehq.com
  </desc>
  <path d="m15.6159625 12.48605 -6.1211875 -10.63035625c-0.6698625 -1.1405375 -2.3189875 -1.1405375 -2.98885 0L0.3847375 12.48605c-0.29965 0.512875 -0.29965 1.1474375 0 1.6603125 0.30745625 0.533475 0.87873125 0.85965 1.494425 0.85325625h12.242375c0.61519375 0.0058875 1.18581875 -0.32021875 1.493025 -0.85325625 0.30008125 -0.512625 0.30061875 -1.1471875 0.0014 -1.6603125Zm-0.97085 1.09964375c-0.10865 0.18533125 -0.308775 0.2977 -0.523575 0.29398125H1.8791625c-0.2148 0.00371875 -0.414925 -0.10865 -0.523575 -0.29398125 -0.09844375 -0.166675 -0.09844375 -0.3737 0 -0.540375l6.1211875 -10.63035625c0.23796875 -0.396 0.81198125 -0.396 1.04995 0l6.1211875 10.63035625c0.09758125 0.16718125 0.09650625 0.3742125 -0.0028 0.540375Zm-7.20473125 -4.1857875v-2.79985625c0 -0.43106875 0.4666375 -0.70048125 0.83995625 -0.48495 0.17325625 0.10003125 0.27998125 0.2848875 0.27998125 0.48495v2.79985625c0 0.4310625 -0.46664375 0.70048125 -0.83995625 0.48495 -0.17325625 -0.10003125 -0.27998125 -0.28489375 -0.27998125 -0.48495Zm1.399925 2.51986875c0 0.6466 -0.6999625 1.050725 -1.2599375 0.727425 -0.55996875 -0.3233 -0.55996875 -1.13155 0 -1.45485 0.1277 -0.073725 0.272525 -0.1125375 0.41998125 -0.11253125 0.46388125 0.00001875 0.83995625 0.376075 0.83995625 0.83995625Z" stroke-width="0.0625"></path>
</svg></span> Pastikan semua data sudah benar sebelum mengirim</span>
		</div>
	</body>
</html>
