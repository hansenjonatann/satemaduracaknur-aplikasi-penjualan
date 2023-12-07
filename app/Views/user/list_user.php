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

        
          
          <button class="btn btn-warning btn-md">Cetak laporan</button>
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
            <th>Nama User</th>
            <th>Nama Pengguna</th>
            <th>Aksi</th>
          </tr>

          <?php if(count($dataUser)) : ?>
            <?php  $no = 1; foreach($dataUser as $user) :?>

            <tr>
              <td><?= $no++ ?></td>
              <td><?= $user->nama ?></td>
              <td><?= $user->nama_pengguna ?></td>
              <td>
                <a href="<?= base_url('user/edituser/' . $user->id_user)?>" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <a href="<?= base_url('user/deleteuser/' . $user->id_user)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
              </td>
            </tr>

            <?php endforeach ?>
            <?php else: ?>

              <tr>
                <td>
                  <p class="text-danger fs-2">User tidak tersedia</p>
                </td>
              </tr>

            <?php endif; ?>
        </table>
      </div>

    </section>

    


    <!-- /.content -->
  </div>




 
  <!-- /.content-wrapper -->