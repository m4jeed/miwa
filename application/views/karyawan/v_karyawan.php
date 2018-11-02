
<div class="box box-danger">
  <div class="box-header">
  <h3 class="box-title">Data Karyawan Miwa Rengginang</h3>
      <!-- <a href="<?php //echo base_url();?>Karyawan/tambah_Karyawan" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a>  -->
      <button type="button" class="btn btn-success pull-right" onclick="tambah()" data-toggle="modal" data-target="#click"><i class="fa fa-plus"></i> Tambah</button>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th width="2%">No</th>
          <th>No KTP</th>
          <th>Nama Karyawan</th>
          <th>Alamat</th>
          <th width="5%">Jenis Kelamin</th>
	        <th width="10%"><center>Aksi</center></th>
	      </tr>
      </thead>
      <tbody>
      <tr>
        <?php 
        $no=1;
        	foreach ($karyawan as $k) {
        ?> 
        <td><center><?php echo $no++ ?></center></td>
        <td><?php echo $k->ktp ?></td>
        <td><?php echo $k->nama_karyawan ?></td>
        <td><?php echo $k->alamat ?></td>
        <td><?php echo $k->jenis_kelamin ?></td>
        <td>
          <a href="" title="Edit" onclick="edit_id('<?php echo $k->id_karyawan; ?>')" class="btn btn-success" data-toggle="modal" data-target="#click"><i class="fa fa-pencil"></i></a>

        	<a class="btn btn-warning" href="<?php echo base_url(); ?>karyawan/hapus/<?php echo $k->id_karyawan;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a>    
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
        <form action="" id="form" class="form-horizontal" role="form">
          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">No. KTP</label>
                <div class="col-sm-8">
                  <input type="hidden" name="id_karyawan">
                  <input type="text" name="ktp" id="ktp" placeholder="isi nomor KTP" class="form-control required">
                </div>
              </div>
            </div>
          </div>

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" name="nama" id="nama" placeholder="isi nama karyawan" class="form-control required">
                </div>
              </div>
            </div>
          </div> 

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-8">
                  <textarea type="text" name="alamat" id="alamat" placeholder="isi alamat karyawan" class="form-control required"></textarea> 
                </div>
              </div>
            </div>
          </div> 

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                  <select name="kelamin" id="kelamin" class="form-control required">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </div> 

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="simpan()" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


  <script type="text/javascript">
        $('#form').validate({
            rules: {
                ktp: {
                    minlength: 1,
                    required: true
                },
            },
            highlight: function (element) {
                $('#ktp').removeClass('has-success').addClass('has-error');
            },
            success: function (element) {
                $('#ktp').removeClass('has-error').addClass('has-success');
            }
        });
    </script>


<!-- <script type="text/javascript">
  $(document).ready(function(){

    $("#simpan").click(function(){
      var string = $("#myform").serialize();
      alert(string);
    });
  });
  
</script> -->
<script type="text/javascript">
  function tambah(){
      simpan_method = 'tambah'; //nama method harus sesuai button simpan
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').appendTo("body").modal('show'); //klo ada maslah halaman modal di belakang
      $('.modal-title').text('Tambah Data Karyawan'); // Set Title to Bootstrap modal title
  }

  function simpan(){

    if(simpan_method == 'tambah'){
        url = "<?php echo site_url('karyawan/tambah') ?>";
      }else{
        url = "<?php echo site_url('karyawan/update') ?>";
      }

   $.ajax({
      //url :'<?php //echo site_url() ?>karyawan/tambah',
      url : url,
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

  function edit_id(id) {
    simpan_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    $.ajax({
      url     :"<?php echo site_url('karyawan/edit/')?>/" + id,
      type    :"GET",
      dataType:"JSON",
      success :function(data){
        $('[name="id_karyawan"]').val(data.id_karyawan); //nama id harus sesuai dgn nama di field tabel
        $('[name="ktp"]').val(data.ktp);
        $('[name="nama"]').val(data.nama_karyawan);
        $('[name="alamat"]').val(data.alamat);
        $('[name="kelamin"]').val(data.jenis_kelamin);
        $('#modal_form').appendTo("body").modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Data Karyawan'); 

      },
      error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
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