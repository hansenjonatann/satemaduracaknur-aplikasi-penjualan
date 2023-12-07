<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container">
        <div class="d-flex justify-content-between my-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahMenu">
  Tambah Menu Baru
</button>
          
          <button class="btn btn-warning btn-md">Cetak laporan</button>
        </div>
        <table class="table" id="tableMenu">
          <?php if(session()->getFlashdata('berhasil')) : ?>
            <?= '<div class="alert alert-success">' . session()->getFlashdata('berhasil') .  '</div>' ?>
          <?php elseif(session()->getFlashdata('gagal'))  : ?>
            <?= '<div class="alert alert-danger">' . session()->getFlashdata('gagal') .  '</div>' ?>
          <?php else: ?>

          <?php endif; ?>
          <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Harga Menu</th>
            <th>Gambar</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>

          <?php if(count($dataMenu)) : ?>
            <?php  $no = 1; foreach($dataMenu as $menu) :?>

            <tr>
              <td><?= $no++ ?></td>
              <td><?= $menu->nama ?></td>
              <td><?= $menu->harga ?></td>
              <td><?= $menu->kategori_id ?></td>
              <td><?= $menu->deskripsi ?></td>
              <td><?= $menu->stok ?></td>
              <td>
                <a href="<?= base_url('menu/editMenu/' . $menu->id_menu)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('menu/deleteMenu/' . $menu->id_menu)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            </tr>

            <?php endforeach ?>
            <?php else: ?>

              <tr>
                <td>
                  <p class="text-danger fs-2">Menu tidak tersedia</p>
                </td>
              </tr>

            <?php endif; ?>
        </table>
      </div>

    </section>

    <div class="modal fade" id="ModalTambahMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah <?= $title ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url() ?>menu/addMenu" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="namaMenu" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="namaMenu" name="nama">
          </div>

          <div class="mb-3">
            <label for="hargaMenu" class="form-label">Harga Menu</label>
            <input type="number" class="form-control" id="hargaMenu" name="harga">
          </div>

           <div class="mb-3">
            <label for="gambarMenu" class="form-label">Gambar Menu</label>
            <input type="text" class="form-control " id="gambarMenu" name="gambar">
          </div>

          

          <div class="mb-3">
            <label for="kategoriMenu" class="form-label">Kategori Menu</label>
            <select name="kategori" class="form-control" id="kategoriMenu">
              <option value="">Pilih Kategori Menu</option>
              <option value="1">Makanan</option>
              <option value="2">Makanan Ringan</option>
              <option value="3">Minuman</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
          </div>

          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="deskripsi" class="form-control"></input>
          </div>

          
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
      </div>
      </form>

    </div>
  </div>
</div>


    <!-- /.content -->
  </div>


 
  <!-- /.content-wrapper -->