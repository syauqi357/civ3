<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Edit Data Siswa</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/output.css'); ?>" />
	</head>
	<body class="min-h-screen py-8 px-4">
		<div class="max-w-2xl mx-auto flex flex-col">
			<!-- Header -->
			<div class="text-center mb-12">
				<h1 class="text-4xl font-bold text-gray-800 mb-2">Edit Data Siswa</h1>
				<p class="text-gray-600 text-lg">Perbarui informasi siswa</p>
			</div>

			<!-- Form Card -->
			<form action="<?php echo base_url('index.php/welcome/updatedata'); ?>" method="post" name="edit_mhs" class="bg-white rounded-md border border-slate-500 p-8 space-y-6">
				
				<!-- NIM Input (Hidden & Display) -->
				<input type="hidden" name="nim" value="<?php echo htmlspecialchars($student['nim']); ?>" />
				
				<div class="form-group">
					<label for="nim" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Induk Mahasiswa (NIM)</label>
					<input 
						type="text" 
						id="nim_display" 
						disabled
						value="<?php echo htmlspecialchars($student['nim']); ?>"
						class="w-full px-4 py-3 bg-gray-100 border-2 border-gray-300 text-gray-800 rounded-lg cursor-not-allowed" 
					/>
					<p class="text-xs text-gray-500 mt-1">NIM tidak dapat diubah</p>
				</div>

				<!-- Nama Input -->
				<div class="form-group">
					<label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
					<input 
						type="text" 
						name="nama" 
						id="nama" 
						required
						value="<?php echo htmlspecialchars($student['nama']); ?>"
						placeholder="Masukkan nama lengkap" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out"
					/>
				</div>

				<!-- Agama Input -->
				<div class="form-group">
					<label for="agama" class="block text-sm font-semibold text-gray-700 mb-2">Agama</label>
					<input 
						type="text" 
						name="agama" 
						id="agama" 
						required
						value="<?php echo htmlspecialchars($student['agama']); ?>"
						placeholder="Masukkan agama" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out"
					/>
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
					><?php echo htmlspecialchars($student['alamat']); ?></textarea>
				</div>

				<!-- Asal Sekolah Input -->
				<div class="form-group">
					<label for="asal_sekolah" class="block text-sm font-semibold text-gray-700 mb-2">Asal Sekolah</label>
					<input 
						type="text" 
						name="asal_sekolah" 
						id="asal_sekolah" 
						required
						value="<?php echo htmlspecialchars($student['asal_sekolah']); ?>"
						placeholder="Masukkan asal sekolah" 
						class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-300 text-gray-800 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all ease-in-out"
					/>
				</div>

				<!-- Buttons -->
				<div class="pt-4 space-y-3">
					<!-- Update Button -->
					<button 
						type="submit" 
						class="flex items-center justify-center gap-2 w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg transition-all ease-in-out transform hover:scale-101 active:scale-95"
					>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" height="24" width="24">
								<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" stroke-width="1.5"></path>
							</svg>
						</span> Simpan Perubahan
					</button>

					<!-- Cancel Button -->
					<a 
						href="<?php echo base_url('index.php/welcome'); ?>"
						class="flex items-center justify-center gap-2 w-full bg-gray-400 hover:bg-gray-500 text-white font-bold py-3 rounded-lg transition-all ease-in-out"
					>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="24" width="24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</span> Batal
					</a>
				</div>
			</form>

			<!-- Footer Info -->
			<p class="text-center text-gray-600 text-sm mt-6">Pastikan semua data sudah benar sebelum menyimpan</p>
		</div>
	</body>
</html>
