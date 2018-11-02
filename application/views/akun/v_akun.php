<div class="box box-danger">
  <div class="box-header">
  <h3 class="box-title">Data Akun Miwa Rengginang</h3>
      <button type="button" class="btn btn-success pull-right" onclick="tambah()" data-toggle="modal" data-target="#diclick"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th width="2%">No</th>
          <th>Nama</th>
	        <th>Email</th>
	        <th>Username</th>
          <th>Level</th>
	        <th><center>Aksi</center></th>
	      </tr>
      </thead>
      <tbody>
      <tr>
        <?php 
        $no=1;
        	foreach ($akun as $a) {
        ?>
        <td><center><?php echo $no++ ?></center></td>
        <td><?php echo $a->nama ?></td>
        <td><?php echo $a->email ?></td> 
        <td><?php echo $a->username ?></td>
        <td><?php echo $a->level ?></td>
        <td>
        	<a href="" title="Edit" onclick="edit_id('<?php echo $a->uid; ?>')" class="btn btn-success" data-toggle="modal" data-target="#diclick"><i class="fa fa-pencil"></i></a>
  				<a class="btn btn-warning" href="<?php echo base_url(); ?>akun/hapus/<?php echo $a->uid;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a>
  		  </td>

      </tr>
      <?php } ?>
			</tbody>
		</table>
	</div>
</div>

<div id="diclick" class="modal fade" id="modal_form" role="dialog">
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
                <label for="" class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-8">
                  <input type="hidden" name="uid">
                  <input type="text" name="nama" id="nama" placeholder="isi nama" class="form-control required">
                </div>
              </div>
            </div>
          </div>

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" name="email" id="email" placeholder="isi email" class="form-control required">
                </div>
              </div>
            </div>
          </div> 

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" name="username" id="username" placeholder="isi username" class="form-control required"> 
                </div>
              </div>
            </div>
          </div> 

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" name="pass" id="pass" placeholder="isi password" class="form-control required"> 
                </div>
              </div>
            </div>
          </div> 

          <div class="box-body"> 
            <div class="form-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Level</label>
                <div class="col-sm-8">
                  <select name="level" id="level" class="form-control required">
                    <option value="admin">Admin</option>
                    <option value="member">Member</option>
                    <option value="karyawan">Karyawan</option>
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
  function tambah(){
      simpan_method = 'tambah'; //nama method harus sesuai button simpan
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').appendTo("body").modal('show'); //klo ada maslah halaman modal di belakang
      $('.modal-title').text('Tambah Data Akun Akses'); // Set Title to Bootstrap modal title
  }

  function simpan(){

    if(simpan_method == 'tambah'){
        url = "<?php echo site_url('akun/tambah') ?>";
      }else{
        url = "<?php echo site_url('akun/update') ?>";
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
        // error: function (jqXHR, textStatus, errorThrown)
        // {
        //   alert('error adding / update data');
        //   $('#btnSave').text('simpan');
        //   $('#btnSave').attr('disable', false);
        // }

      });
    }

    function edit_id(id) {
    simpan_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    $.ajax({
      url     :"<?php echo site_url('akun/edit/')?>/" + id,
      type    :"GET",
      dataType:"JSON",
      success :function(data){
        $('[name="uid"]').val(data.uid); //nama id harus sesuai dgn nama di field tabel
        $('[name="nama"]').val(data.nama);
        $('[name="email"]').val(data.email);
        $('[name="username"]').val(data.username);
        //$('[name="level"]').val(data.level);
        $('[name="pass"]').val(data.password);
        $('[name="level"]').val(data.level);
        $('#modal_form').appendTo("body").modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Data Akun Akses'); 

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