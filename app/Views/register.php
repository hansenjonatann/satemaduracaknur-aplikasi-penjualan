<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="shorcut icon" type="image/jpg" href="<?= base_url() ?>assets/images/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
    <title>Sate Madura Cak Nur - Daftar</title>
  </head>
  <body>
    <div
      class="flex items-center  justify-center h-screen mx-auto"
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
        <?php if(session()->getFlashdata('success')) : ?>
          <?= '<div class="bg-green-600 text-white font-bold text-center ">' . session()->getFlashdata('success') . '</div>'; ?>
        <?php elseif(session()->getFlashdata('failed')): ?>
          <?= '<div class="bg-red-600 text-white text-center font-bold">' . session()->getFlashdata('failed') . '</div>'; ?>
        <?php else: ?>
          <?php endif; ?>
          <form action="<?= base_url() ?>user/register" method="post">
          <div class="form-group mt-2">
            <label for="" class="font-bold mx-4 md:mx-8">Masukkan Nama</label>
            <input
              type="text"
              placeholder="Nama Lengkap"
              class="rounded-3xl w-full px-4 placeholder:px-4 py-2 mt-2"
              name="nama" required
            />
          </div>
          <div class="form-group mt-2">
            <label for="" class="font-bold mx-4 md:mx-8"
              >Masukkan Nama Pengguna</label
            >
            <input
              type="text"
              placeholder="nama pengguna"
              class="rounded-3xl w-full px-4 placeholder:px-4 py-2 mt-2"
              name="namapengguna" required
            />
          </div>

          <div class="form-group mt-2">
            <label for="" class="font-bold mx-4 md:mx-8 mb-2"
              >Masukkan Kata Sandi</label
            >
            <input
              type="password"
              placeholder="Kata Sandi"
              class="rounded-3xl w-full px-4 placeholder:px-4 py-2 mt-2"
              name="katasandi" required
            />
          </div>

         
        

          <button
          type="submit"
            class="bg-primary text-secondary font-bold mt-4 w-full py-2 rounded-3xl"
          >
            Daftar
          </button>
          <p class="text-black text-center mt-4">
            Anda memiliki akun?
            <a href="<?= base_url()?>login" class="font-bold">Masuk Sekarang</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
