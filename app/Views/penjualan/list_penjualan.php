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

        
          
        <a href="<?=base_url()?>penjualan/printPDF" class="btn btn-warning me-4"> <i class="fas fa-print"></i> Cetak PDF</a>

      </div>

        <table class="table" id="userTable">
          <?php if(session()->getFlashdata('berhasil')) : ?>
            <?= '<div class="alert alert-success">' . session()->getFlashdata('berhasil') .  '</div>' ?>
          <?php elseif(session()->getFlashdata('gagal'))  : ?>
            <?= '<div class="alert alert-danger">' . session()->getFlashdata('gagal') .  '</div>' ?>
          <?php else: ?>

          <?php endif; ?>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>User</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Harga Menu</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>

          <?php if(count($dataPenjualan)) : ?>
            <?php  $no = 1; foreach($dataPenjualan as $penjualan) :?>

            <tr>
              <td><?= $no++ ?></td>
              <td>
                <a href="<?= base_url('penjualan/editpenjualan/' . $penjualan->id_penjualan)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('penjualan/deletepenjualan/' . $penjualan->id_penjualan)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            </tr>

            <?php endforeach ?>
            <?php else: ?>

              <tr>
                <td>
                  <p class="text-danger fs-5">Tidak ada transaksi</p>
                </td>
              </tr>

            <?php endif; ?>
        </table>
      </div>

    </section>

    


    <!-- /.content -->
  </div>




 
  <!-- /.content-wrapper -->