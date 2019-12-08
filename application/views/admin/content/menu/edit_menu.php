  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?= "/ ". strtoupper($this->uri->segment(1)); ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($menu as $key => $menus): ?>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Menu</label>
                    <input type="text" class="form-control" id="" placeholder="Nama Menu" value="<?= $menus['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" id="" placeholder="Harga" value="<?= $menus['harga'] ?>">
                  </div>
                 


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php endforeach; ?>
            </div>
        </div>
      </section>
    </section>
  </div>

          