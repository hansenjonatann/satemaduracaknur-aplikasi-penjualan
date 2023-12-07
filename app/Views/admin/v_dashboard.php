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
      <div class="row">
    <div class="col-lg-6 col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Menu</h3>

                <p><?= count($dataMenu) ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url()?>menu" class="small-box-footer">Managemen Menu <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <h3>Pengguna</h3>

                <p><?= count($dataPengguna) ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url()?>user" class="small-box-footer">Managemen Pengguna <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          
          </div>

          <div class="row">
            <div class="col-md-4">
            <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon"><i class="fas fa-money-bill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pendapatan Hari ini</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>

            <div class="col-md-4">
            <div class="info-box mb-3 bg-lime">
              <span class="info-box-icon"><i class="fas fa-money-bill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pendapatan Minggu Ini</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>

            <div class="col-md-4">
            <div class="info-box mb-3 bg-navy">
              <span class="info-box-icon"><i class="fas fa-money-bill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pendapatan Bulan Ini</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>
          </div>

      <!-- Default box -->
      
       
        <!-- /.card-footer-->
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->