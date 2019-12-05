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

      <!-- Default box -->
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        <?php foreach($tables as $key => $table){ 
            if($table['is_empty'] == 'N'){  
        ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                
                <p>No. Meja</p>
                <h3><?= $table['no_meja']; ?></h3>
              </div>

              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box m-2 p-2 btn-success">Tambah Pesanan <i class="far fa-plus-square"></i></a></a>
              <a href="#" class="small-box-footer p-3" >BAYAR <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
            <?php }else{ ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary p-2">
              <div class="inner">
                
                <p>No. Meja</p>
                <h3><?= $table['no_meja']?></h3>
              </div>

              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box m-2 p-2 btn-secondary">Tambah Pesanan <i class="far fa-plus-square"></i></a>

            </div>
          </div>

        <?php } } ?>

          
        </div>
      </div>
    </section>

    </section>
    <!-- /.content -->
  </div>