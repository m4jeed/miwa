<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">

<div class="col-md-50">  
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Form Data Pelanggan Miwa Rengginang</h3>
    </div>
      <?php echo validation_errors(); ?>
      <form class="form-horizontal" method="post" action="<?php echo base_url();?>pelanggan/simpan">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pelanggan</label>
              <div class="col-sm-3">
                <input type="text" name="pelanggan" id="pelanggan" class="form-control"  placeholder="silahkan isi nama pelanggan">
              </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-sm-2 control-label">status oke</label>
              <div class="col-sm-3">
                <input type="text" name="status" class="form-control"  placeholder="silahkan isi nama pelanggan">
              </div>
            </div> -->
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat Pelanggan</label>
              <div class="col-sm-3">
                <textarea name="alamat" id="alamat" class="form-control"  placeholder="silahkan isi alamat"></textarea>
              </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-sm-2 control-label">Pilih Paket</label>
              <div class="col-sm-3">
                <select id="form_selector" name="kategori" id="" class="form-control">
                  <option value="Rasa Telor Asin">Rasa Telor Asin</option>
                  <option value="Rasa Coklat">Rasa Coklat</option>
                  <option value="Rasa Jagung Bakar">Rasa Jagung Bakar</option>
                  <option value="Rasa Keju">Rasa Keju</option> 
                  <option value="Rasa Cumi">Rasa Cumi</option>
                  <option value="Rasa Terasi">Rasa Terasi</option>
                  <option value="Rasa Pedas">Rasa Pedas</option>                  
                </select>
                <div id="result"></div>
              </div>
            </div> -->

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Barang</label>
              <div class="col-sm-3">
                <input type="text" name="order_barang" class="form-control testing" placeholder="silahkan isi barang">
                <!-- <input type="hidden" name="status" id="id_barang" class="form-control"> -->
              </div>
            </div> 

            <!-- <div class="form-group" id="hide" style="display:none"> -->
            <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah Pesan</label>
              <div class="col-sm-2">
                <input type="text" name="jml_qty" id="jml_qty" class="form-control"  placeholder="silahkan isi jumlah">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Pesan</label>
              <div class="col-sm-3">
                <input type="text" name="tgl_terima" id="tanggal" class="form-control" value="<?php echo date('Y-m-d') ?>" placeholder="silahkan isi tanggal terima">
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-2 control-label">Tanggal Kirim</label>
              <div class="col-sm-3">
                <input type="text" name="tgl_keluar" id="tgl_keluar" class="form-control" data-date-format="dd/mm/yyyy" placeholder="silahkan isi tanggal keluar">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Harga Barang</label>
              <div class="col-sm-3">

                <input type="text" name="harga" id="harga" class="form-control" placeholder="silahkan isi harga" readonly>
              </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-sm-2 control-label">Harga status</label>
              <div class="col-sm-3">

                <input type="text" name="status" id="status" class="form-control" placeholder="silahkan isi harga" >
              </div>
            </div> -->

            <div class="form-group">
              <label class="col-sm-2 control-label">Total Harga</label>
              <div class="col-sm-3">
                <input type="text" name="harga_total" id="harga_total" class="form-control" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Konfirmasi Pembelian</label>
              <div class="col-sm-3">
                <select id="status" name="status" class="form-control">
                  <option readonly></option>
                  <option value="1">Konfirmasi</option>
                </select>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <button type="" class="btn btn-warning pull-right" ><a href="<?php echo base_url('Pelanggan');?>" style="color:white;"><i class="fa fa-repeat"></i> Kembali</a></button>
            </div>
          </div>
      </form>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {
    $('#jml_qty').keyup(function(){
    <!-- Ambil nilai bayar dan diskon !-->
    var jumlah=parseInt($('#jml_qty').val());
    var harga=parseInt($('#harga').val());

    <!-- Perhitungan bayar-(diskon/100 x bayar) !-->
    var total_bayar=jumlah*harga;
    $('#harga_total').val(total_bayar);
    });
});
</script>

<script type='text/javascript'>
  var site = "<?php echo base_url();?>";
  $(function(){
      $('.testing').autocomplete({
          // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
          serviceUrl: site+'/pelanggan/search',
          // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
          onSelect: function (suggestion) {
            $('#nama_barang').val(''+suggestion.nama_barang); // membuat id 'jml_barang' untuk ditampilkan
            $('#nama_barang').val(''+suggestion.nama_barang);
            $('#harga').val(''+suggestion.harga);
           // $('#status').val(''+suggestion.status); // membuat id 'harga' untuk ditampilkan
          }
      });
  });
</script>

<script type="text/javascript">
    //Date picker
    $('#tanggal').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      startDate: '-3d'
    });

    $('#tgl_keluar').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      startDate: '-3d'
    });
</script>


