<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./assets/output.css" />
	</head>
	<body>
		<form action="index.php/welcome/insertdata" method="post" name="input_mhs" class="flex flex-col items-center w-full bg-slate-300 justify-start">
			<div class="w-full bg-slate-100">
			<div class="bg-slate-200 p-4 flex flex-col gap-2">
				<label for="nim"> nim </label>
				<input type="number" name="nim" id="" class="p-2 w-full md:w-120 bg-slate-100 outline-slate-700 focus:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md"  />
			</div>

			<div class="bg-slate-200 p-4 flex flex-col gap-2">
				<label for="nama"> nama </label>
				<input type="text" name="nama" id="" class="p-2 w-full md:w-120 bg-slate-100 outline-slate-700 focus:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md"/>
			</div>

			<div class="bg-slate-200 p-4 flex flex-col gap-2">
				<label for="agama"> agama </label>
				<input type="text" name="agama" id="" class="p-2 w-full md:w-120 bg-slate-100 outline-slate-700 focus:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md" />
			</div>

			<div class="bg-slate-200 p-4 flex flex-col gap-2">
				<label for="alamat"> alamat </label>
				<input type="text" name="alamat" id="" class="p-2 w-full md:w-120 bg-slate-100 outline-slate-700 focus:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md" />
			</div>

			<div class="bg-slate-200 p-4 flex flex-col gap-2">
				<label for="asal_sekolah"> asal sekolah </label>
				<input type="text" name="asal_sekolah" id="" class="p-2 w-full md:w-120 bg-slate-100 outline-slate-700 focus:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md" />
			</div>

			<button type="submit" class="p-2 mt-12 w-full md:w-120 bg-slate-100 outline-slate-700 hover:outline-offset-3 text-slate-700 transition-all ease-in-out rounded-md">kirim data siswa</button>

			</div>
		</form>
	</body>
</html>
