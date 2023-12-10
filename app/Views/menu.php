<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sate Madura Cak Nur - Menu</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css" />
  </head>
  <body>
    <div class="container mt-5 ml-[72px]">
      <div class="flex justify-between items-center">
        <h1 class="font-bold text-2xl">Mau makan apa hari ini?</h1>
        <img src="<?= base_url()?>images/profile.png" alt="" width="50" />
      </div>
      <input
        type="text"
        class="border-2 border-black placeholder:text-gray-500 w-80 px-2 rounded-lg py-2"
        placeholder="Nasi Goreng, Sate"
      />
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">
        <!-- Kolom 1 -->
        <?php foreach($dataCategory as $ktg) : ?>
          <a href="<?= base_url('menu/getMenuByCategory/'. $ktg->id_kategori)?>">
          <div class="bg-third py-2 px-4 rounded-lg">
          <div class="flex gap-4 items-center w-full text-white py-2">
            <i class="fa-solid fa-utensils"></i>
            <p class="text-lg font-bold"><?= $ktg->nama_kategori ?></p>
          </div>
        </div>
          </a>
        

        <?php endforeach ?>

        <!-- Kolom 2 -->
       
        <!-- Kolom 3 -->
       
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"
        id="selectedMenu"
      >
        <!-- Card 1 -->

        <?php foreach($dataMenu as $menu) : ?>

          <div
            class="bg-primary border-1 border-black mt-5 rounded-lg shadow-md p-4"
          >
            <img
              src="<?= base_url('menus/'. $menu->gambar)?>"
              alt="Gambar 1" 
              class="mb-4" width="100"
            />
            <div class="flex justify-between">
              <div class="flex-col flex">
                <h2 class="text-xl px-2 font-bold mb-2"><?= $menu->nama ?></h2>
                <p class="text-lg px-2">Rp <?= number_format($menu->harga) ?></p>
              </div>
              <a href="<?= base_url('payment/'. $menu->id_menu)?>" class="flex  px-4  rounded-lg text-white">

              <i class="fa-solid fa-cart-shopping py-4 text-third text-2xl   hover:text-white transition-all ease-in-out duration-75"></i>
              </a>
            </div>
          </div>

          <?php endforeach; ?>

        <!-- Card 2 -->
        
      </div>
      
    
    </div>
  </body>
</html>
