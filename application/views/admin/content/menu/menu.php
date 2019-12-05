<div class="content-wrapper" style="font-size: 12px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
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
                <h3 class="card-title"><a href="" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#modal-default"> Tambah Menu List <i class="fas fa-plus"></i></a></h3>
              </div>
              <div class="card-body table-responsive p-6">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($get_all_menu as $key => $menu) {
                  ?>
                  <tr>
                      <td><?= $no ++?></td>
                      <td><?= $menu['nama']?></td>
                      <td><?= format_rupiah($menu['harga'])?></td>
                      <td><?= $menu['jenis']?></td>
                      <td>
                          <a href="<?= base_url('menu').'/edit/'.$menu['id'] ?>" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>
                          <a href="<?= base_url('menu').'/delete/'.$menu['id'] ?>" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Jenis</th>
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


  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Menu List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form role="form" method="POST" action="<?= base_url('/menu'); ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Menu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Menu" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga">
                  </div>
                  <?php $getJenis = $this->db->query('SELECT * FROM jenis_tb')->result_array();?>
                 <div class="form-group">
                   <label>Jenis Menu</label>
                    <select class="form-control" name="jenis_id">
                      <?php foreach ($getJenis as $key => $jenis) {?>
                      <option value="<?= $jenis['id']?>"> <?= $jenis['jenis']?></option>
                      <?php } ?>
                    </select>
                 </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->