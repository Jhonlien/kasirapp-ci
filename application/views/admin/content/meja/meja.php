<div class="content-wrapper" style="font-size: 12px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= "Kelola ". $title ?></h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?= "/ ". strtoupper($this->uri->segment(1)); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
             <div class="col-12"><?= $this->session->flashdata('message'); ?></div>
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url('meja/add')?>" class="btn btn-md btn-success" > Tambah Meja <i class="fas fa-plus"></i></a></h3>
              </div>
              <div class="card-body table-responsive p-6">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Meja</th>
                        <th>Terisi / Kosong</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($get_all_meja as $key => $mejas) {
                  ?>
                  <tr>
                      <td><?= $no ++?></td>
                      <td><?= $mejas['no_meja']?></td>
                      <td><?= $mejas['is_empty']?></td>
                      <td>
                          <a href="" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>
                          <a href="" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nomor Meja</th>
                        <th>Terisi / Kosong</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          </div>
        </div>
      </section>
    </section>
  </div>
