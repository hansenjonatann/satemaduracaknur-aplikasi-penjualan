<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="shorcut icon" type="image/jpg" href="./assets/images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <title>Sate Madura Cak Nur - Pembayaran</title>
  </head>
  <body class="overflow-x-hidden">
    <div class="container mt-2 flex flex-col">
      <a href="menu.html" class="mb-4 font-bold text-xl"
        ><i class="fa fa-arrow-left text-xl px-2 ml-8"></i> Pembayaran</a
      >
      <p class="ml-[72px] font-semibold md:text-lg">Alamat Pengiriman</p>
      <p class="ml-[72px] font-bold text-base md:text-lg mb-4">
        JL Sukabumi Barat VI B No.27
        <span class="flex md:none"
          ><a
            href=""
            class="text-sm border-2 font-base rounded-lg border-primary px-2 py-2"
          >
            <i class="fa fa-edit"></i> Ganti alamat</a
          ></span
        >
      </p>
    </div>
    <a href="" class="border-primary ml-[72px] border-2 rounded-lg px-2 py-2">
      <i class="fa fa-location-dot px-2"></i>Isi Detail Pengiriman</a
    >
    <h2 class="ml-[72px] font-bold mt-4 text-lg">Pesanan</h2>
    <div class="container">
      <div
        class="flex ml-[72px] mt-4 border-primary border-2 py-2 rounded-lg max-w-1/4"
      >
        <img
          src="./assets/images/sateayam.png"
          alt=""
          width="100"
          class="ml-2"
        />
        <div class="flex flex-col">
          <p class="font-bold ml-8">Sate Ayam</p>
          <p class="font-bold ml-8">Rp18.000</p>
        </div>
      </div>
      <div
        class="flex font-semibold flex-col px-4 ml-[72px] mt-2 border-primary border-2 py-2 rounded-lg max-w-1/4"
      >
        <h1 class=" ">Detail Pembayaran</h1>
        <div class="flex justify-between items-center">
          <p class="">Harga</p>
          <span class="font-semibold">Rp 18.000</span>
        </div>
        <div class="flex justify-between items-center">
          <p class="">Biaya Pengiriman</p>
          <span class="font-semibold">Rp 9.000</span>
        </div>
        <div
          class="flex justify-between items-center mt-2"
          style="border-top: 2px solid black"
        >
          <p class="">Total Pembayaran</p>
          <span class="font-bold">Rp 27.000</span>
        </div>
      </div>
      <div
        class="flex font-semibold flex-col px-2 ml-[72px] mt-2 py-2 rounded-lg max-w-1/4"
      >
        <button
          class="bg-third hover:bg-opacity-50 uppercase py-4 font-bold text-secondary"
          onclick="handleOpenModal()"
        >
          pesan sekarang
        </button>
      </div>
    </div>
   
    <script src="./js/script.js"></script>
  </body>
</html>
