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

        
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahStock">
        Tambah Data Stock
        </button>          
          <a href="<?=base_url()?>stock/printPDF" class="btn btn-warning me-4"> <i class="fas fa-print"></i> Cetak Laporan Stock</a>

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
            <th>Nama Item</th>
            <th>Jumlah Item</th>
            <th>Porsi / Satuan</th>
            <th>Jumlah Porsi</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>

          <?php $no = 1; foreach($dataStock as $stock) : ?>
            <?php 

                $totalPorsi = $stock->jumlah_item * $stock->porsi_satuan;

                $status = "";

             




              ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $stock->nama_item ?></td>
            <td><?= $stock->jumlah_item ?></td>
            <td><?= $stock->porsi_satuan ?></td>
            <td><?= $totalPorsi ?></td>
            <?php if($totalPorsi < $stock->porsi_satuan): ?>
              <td class=" bg-danger text-white fw-bold text-center"><?= $status = 'STOCK TIDAK TERSEDIA' ?></td>
              
              <td>

                <a href="<?=base_url('stock/addStock/' . $stock->id_stock)?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                <a href="<?= base_url('stock/edit/' . $stock->id_stock)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('stock/delete/' . $stock->id_stock)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            <?php elseif($totalPorsi == $stock->porsi_satuan) : ?>
              <td class="bg-warning text-white fw-bold text-center"><?= $status = "STOCK TERAKHIR" ?></td>
              <td>
                <a href="<?=base_url('stock/addStock/' . $stock->id_stock)?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                <a href="<?= base_url('stock/edit/' . $stock->id_stock)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('stock/delete/' . $stock->id_stock)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            <?php else: ?>
              <td class="bg-success text-white fw-bold text-center"><?= $status  = "STOCK TERSEDIA "?></td>
              <td>
                <a href="<?= base_url('stock/edit/' . $stock->id_stock)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('stock/delete/' . $stock->id_stock)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            <?php endif ?>



         
          </tr>
          <?php endforeach ?>

         
        </table>
      </div>

    </section>

    


    <!-- /.content -->
  </div>


  <div class="modal fade" id="ModalTambahStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah <?= $title ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url() ?>stock/create" method="post">
          <div class="mb-3">
            <label for="namaItem" class="form-label">Nama Item</label>
            <input type="text" class="form-control" id="namaItem" name="nama_item">
          </div>

          <div class="mb-3">
            <label for="jumlahItem" class="form-label">Jumlah Item</label>
            <input type="number" class="form-control" id="jumlahItem" name="jumlah_item">
          </div>

          <div class="mb-3">
            <label for="satuanPorsi" class="form-label">Porsi / Satuan</label>
            <input type="number" class="form-control" id="satuanPorsi" name="porsi_satuan">
          </div>

          
          

          
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Stock</button>
      </div>
      </form>

    </div>
  </div>
</div>




 
  <!-- /.content-wrapper -->