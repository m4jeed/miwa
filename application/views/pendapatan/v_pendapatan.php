 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
 <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Data Pendapatan/Hari</h3>

        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">cek Data</button> -->
        </div>   <!-- <a href="" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Cek</a>  -->
      </div><br>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div id="demo" class="collapse">
              <table name="cabin_delay" id="cabiDelay" class="table table-bordered table-hover" style="font-size:9pt !important">
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>Pendapatan/cek_pendapat">
       
                <thead>
                  <tr style="font-size:11pt;">
                    <th>From Date</th>
                    <th>To Date</th>
                    <th style="text-align:center;">Aksi</th>        
                  </tr> 
                </thead>

                <tbody>
                  <tr>
                      <td>
                        <input type="date" name="date" id="datepicker_from" class="form-control pull-right" >
                      </td>
                      <td><div class="col-md-9">
                        <input type="date" name="date" id="datepicker_to" class="form-control pull-right" >
                      <td align="center"><input type="button" name="onclick_check"  id="onclick_check" value="Check" class="btn btn-primary"></td>
                  </tr>
                </tbody>
                </form>
              </table>
            </div>
          </div>
      </div>
    </div>

     
      <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Add Data</button>
      </div> --> 

      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
    	      <tr>
    	        <th width="2%">No</th>
              <th width="5%">Tanggal</th>
    	        <th width="5px">Jumlah Pelanggan</th>
              <th width="5px">Total Pendapatan</th>
    	      </tr>
          </thead>
          <tbody>
          <tr>
          <?php
          $no=1;
          foreach ($hasil as $key) {
          
          
          ?>
            <td><?php echo $no++ ?></td>
            <td><?php echo date('d-m-Y',strtotime($key->tgl_terima)); ?></td>
            <td><?php echo $key->jumlah ?></td>
            <td><?php echo $key->total ?></td>
          </tr>
          <?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script>
  jQuery(function(e){
  $('[name=onclick_check]').click(function() {
    //alert('oke');
    var datepicker_from = $('#datepicker_from').val();
    //alert(datepicker_from);
    var datepicker_to = $('#datepicker_to').val();
    $('#example1').DataTable().destroy();

    //alert(datepicker_to);
    $('#example1').DataTable({
       "searching"  : false,
      // "pagingType" : false,
       "scrolly"    : "342px",
       "processing" : true,
       "serverSide" : true,
       "order"      :[],

        "ajax":{
          "url":"<?php echo base_url() ?>/pendapatan/cek_pendapat/",
          "type":"POST",
          "data":{
            datepicker_from : datepicker_from,
            datepicker_to : datepicker_to,
            /*opt_assesment : opt_assesment,*/ //buat variabel option
          },
        },
        
        "columnDefs" : [
          {
            "targets"   : [],
            "orderable" : true,
          },

        ],

       });

    
    });


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
