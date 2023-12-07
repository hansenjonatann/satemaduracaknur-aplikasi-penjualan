<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="shorcut icon" type="image/jpg" href="<?= base_url() ?>assets/images/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
    <title>Sate Madura Cak Nur - Masuk</title>
  </head>
  <body>
    <div
      class="flex items-center justify-center h-screen mx-auto"
      style="
        background: url('<?= base_url() ?>images/login-bg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
      "
    >
      <div class="">
        <img
          src="<?= base_url() ?>images/logo.png"
          alt=""
          class="mx-4 overflow-x-hidden md:mx-16"
        />
        <?php if(session()->getFlashdata('failed')) : ?>
          <?= '<div class="bg-red-600 my-3 rounded-lg text-white font-bold text-center ">' . session()->getFlashdata('failed') . '</div>'; ?>
          <?php endif; ?>
        <form action="<?= base_url() ?>user/login" method="post">
          <input
            type="text"
            placeholder="Nama Pengguna"
            class="rounded-3xl w-full px-4 placeholder:px-4 py-2"
            name="namapengguna" required 
          />
          <input
            type="password"
            placeholder="Kata Sandi"
            class="rounded-3xl w-full md:px-4 placeholder:px-4 py-2 mt-4"
            name="katasandi" required
          />
          <button
            type="submit"
            class="bg-primary text-secondary font-bold mt-4 w-full py-2 rounded-3xl"
          >
            Masuk
          </button>
          <p class="text-black text-center mt-4">
            Tidak memiliki akun?
            <a href="<?= base_url() ?>register" class="font-bold">Daftar Sekarang</a>
          </p>
        </form>
      </div>
    </div>

    <script src="<?= base_url() ?>js/script.js"></script>
  </body>
</html>
