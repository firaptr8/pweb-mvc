<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://tailwindcomponents.com/css/component.checkboxes.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="leading-loose">
  <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
    <p class="text-gray-800 font-medium">Form Donasi</p>
    <div class="">
      <label class="block text-sm text-gray-00" for="cus_name">Nama</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Name" aria-label="Name">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-00" for="cus_email">Email</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Youremail@gmail.com" aria-label="Email">
    </div>
    <div class="mt-2">
      <label class=" block text-sm text-gray-00" for="cus_email">Program Donasi</label>
      <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"> 
            <option value="">Pilih Program Donasi...</option>
            <option value="">Donasi Beasiswa</option>
            <option value="">Donasi Kebutuhan Pokok</option>
            <option value="">Sumbangan Bencana Alam</option>
    </select>
    </div>
    <div class="mt-2">
      <label class=" block text-sm text-gray-00" for="cus_email">Jumlah Donasi</label>
      <input class="w-full px-2 py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Rp" aria-label="Email">
    </div>
    <p class="mt-4 text-gray-800 font-medium">No Rekening Transfer</p>
    <div class="flex flex-col">
        <label class="inline-flex items-center mt-3">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">BRI 0550-02-000295-50-3 (a.n Yayasan Pelita Hati)</span>
        </label>

        <label class="inline-flex items-center mt-3">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-red-600"><span class="ml-2 text-gray-700">BSM 7108822257 (a.n Yayasan Pelita Hati)</span>
        </label>

        <label class="inline-flex items-center mt-3">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600"><span class="ml-2 text-gray-700">BANK JATIM 1492021466 (a.n Yayasan Pelita Hati)</span>
        </label>
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-00" for="cus_name">No Rekening</label>
      <input class="w-full px-2 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
    </div>
    <div class="mt-4">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">
            <a href="<?= base_url; ?>/home">Donasikan</a>
      </button>
    </div>
  </form>
</div>
</body>
</html>
