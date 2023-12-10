<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="shorcut icon" type="image/jpg" href="<?= base_url() ?>images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url() ?>css/app.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <title>Sate Madura Cak Nur - Beranda</title>
  </head>
  <body>
 
    <!-- Bagian Navbar -->
    <div class="p-4">
      <div class="container mx-auto flex items-center justify-between">
        <div class="text-md" onclick="handleBackToIndex()">
          <img src="<?= base_url() ?>images/logo.png" alt="" width="150" />
        </div>
        <!-- Tombol Menu untuk Perangkat Mobile -->
        <div class="md:hidden">
          <button id="menuBtn" class="text-lg focus:outline-none">
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M4 6h16M4 12h16m-7 6h7"
              ></path>
            </svg>
          </button>
        </div>
        <ul
          id="menuItems"
          class="md:flex gap-2 text-lg font-bold md:space-x-4 md:border-none md:pl-4 border-t pt-4 md:pt-0"
        >
          <li>
            <a href="<?= base_url() ?>menuList">Menu</a>
          </li>
          <li>
            <a href="<?= base_url() ?>ulasan">Ulasan</a>
          </li>
          <li>
            <a href="<?= base_url() ?>tentang">Tentang Kami</a>
          </li>
          <li>
          
              <a
              href="<?= base_url() ?>login"
              class="border-primary px-4 py-2 border-2 rounded-lg"
              >Masuk</a
            >
          </li>
        </ul>
      </div>
    </div>

   

    <!-- Bagian Konten -->
    <div class="container mt-4 mx-28">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-[64px] font-bold uppercase">
            ketika kamu <span class="text-primary">dirumah</span> sendiri dan
            kamu lapar?
          </h1>
          <p>
            Sate Madura Cak Nur adalah solusi untuk perut kosong anda dengan
            cita rasa khas Madura yang memanjakan kamu di setiap gigitan dan
            ramah di kantong.
          </p>
          <div class="flex items-center">
            <input
              type="text"
              class="flex px-4 rounded-lg border-primary border-2 mt-5 w-full placeholder:uppercase py-4"
              placeholder="Sate Kambing"
            />
            <button
              class="bg-primary text-white mx-2 px-3 text-lg rounded-full mt-5   w-10 h-10 flex items-center justify-center"
            >
              <i class="fa-solid fa-search"></i>
            </button>
          </div>
          <p class="mt-2 font-bold">
            Pencarian Cepat:
            <span class="text-gray-400">Sate, Ayam Penyet , Nasgor</span>
          </p>
          <div class="mt-5">
            <a href="menu.html" class="bg-primary py-4 hover:bg-opacity-50 transition duration-300 ease-in-out  px-16 rounded-lg text-white font-bold ">Lihat Menu Kami</a>
          </div>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="mt-10 relative lg:mt-8 lg:right-0">
            <img
              src="<?= base_url() ?>images/menu.png"
              alt=""
              class="max-w-full lg:mb-4 mx-auto"
            />
          </div>
        </div>
      </div>
    </div>

    <script src="./js/script.js"></script>
  </body>
</html>
