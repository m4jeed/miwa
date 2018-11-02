
<div class="col-md-50">  
  <div class="box box-danger">
<div class="box-header with-border">
    <h3 class="box-title">Form Edit Miwa Rengginang</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="<?php echo base_url('Barang/update');?>" class="form-horizontal" method="post">
      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2 control-label">Kode Barang</label>
          <div class="col-sm-2">
            <input type="hidden" name="id_barang" value="<?php echo $barang[0]->id_barang; ?>">
            <input type="text" name="kode" id="kode" value="<?php echo $barang[0]->kode_barang; ?>" class="form-control"  placeholder="kode" redonly>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-sm-3">
            <input type="text" name="nama_barang" id="barang" value="<?php echo $barang[0]->nama_barang; ?>" class="form-control"  placeholder="silahkan isi nama barang">
            <?php echo form_error('nama_barang'); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Kategori</label>
          <div class="col-sm-3">
            <select name="nama_kategori" class="form-control"> 

              <option value="<?php echo $barang[0]->id_kategori; ?>"><?php echo $barang[0]->nama_kategori; ?></option>
              <?php
              foreach ($kat_brg as $k) {
                echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Harga</label>
          <div class="col-sm-3">
            <input type="text" name="harga" id="harga" value="<?php echo $barang[0]->harga; ?>" class="form-control" placeholder="silahkan isi harga">
            <?php echo form_error('harga'); ?>
          </div>
        </div>

        <div class="modal-footer">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="" class="btn btn-warning pull-right"><a href="<?php echo base_url('Barang');?>"  style="color:white;"> <i class="fa fa-repeat"></i> Kembali</a></button>
          </div>
        </div>
      </div>
  </form>
  </div>
  </div>
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
