<div class="box box-danger">
  <div class="box-header">
  <h3 class="box-title">Data Kategori Miwa Rengginang</h3>
      <!-- <a href="<?php //echo base_url();?>kategori/tambah_kategori" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a>  -->
      <button type="button" class="btn btn-success pull-right" onclick="add()" data-toggle="modal" data-target="#click"><i class="fa fa-plus"></i> Tambah</button>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th width="2%">No</th>
          <th width="5%">Nama Kategori</th>
	        <th width="10%"><center>Aksi</center></th>
	      </tr>
      </thead>
      <tbody>
      <tr>
      <?php 
      $no=1;
      	foreach ($kate_barang as $kb) {
      ?>
      <td><center><?php echo $no++ ?></center></td>
      <td><?php echo $kb->nama_kategori ?></td>
      <td>
      	<center><a class="btn btn-warning" href="<?php echo base_url(); ?>kategori/hapus/<?php echo $kb->id_kategori;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a></center> 
        <!-- <center><a data-toggle="modal"  title="Hapus Kontak" class="btn btn-danger" href="#modKonfirmasi" data-id="<?php //echo $kb->id_kategori;?>"><i class="fa fa-trash"></i></a></center> -->
        <!-- <a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="#modKonfirmasi" data-id="<?php //echo $row->id_jabatan;?>"><span class="glyphicon glyphicon-trash"></span></a> -->
		  </td>

      </tr>
      <?php } ?>
			</tbody>
		</table>
	</div>
</div>

<div id="click" class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="background-color:#B22222;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:white"; class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="" id="form">
          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="nama kategori" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" placeholder="isi kategori name" class="form-control" required>
                </div>
              </div>
            </div>
          </div> 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  id="id_kategori" onclick="simpan()" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
  
<script type="text/javascript">
  function add(){ //fungsi buat onclick
    simpan_method = 'add'; //fungsi buat onclick 
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_form').appendTo("body").modal('show');
    $('.modal-title').text('Tambah kategori barang');
  }

  function simpan(){
    //$('#btnSave').text('simpan...'); //fungsi simpan gk berfungsi krn onclick tambah tdk ada
    // var url;

    // if(simpan_method == 'simpan'){
    //   url = "<?php //echo site_url('kategori/tambah_data') ?>";
    // }else{
      // url = "<?php //echo base_url('kategori/update') ?>";
    // }

    $.ajax({
      url : '<?php echo site_url() ?>kategori/tambah_data',
      type: "POST",
      data: $('#form').serialize(),
      dataType: "JSON",
      success: function(data){
        if(data.status)//if success close modal and reload ajax table
        {
          $('#modal_form').modal('hide');
          window.location.reload(false);
        }
        $('#btnSave').text('simpan'); //change button text
        $('#btnSave').attr('disabled',false); //set button enable 
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('error adding / update data');
        $('#btnSave').text('simpan');
        $('#btnSave').attr('disable', false);
      }

    });
  }
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>