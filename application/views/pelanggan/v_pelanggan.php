  <div class="box box-danger">
      <div class="box-header">
      <h3 class="box-title">Data Pelanggan Miwa Rengginang</h3>
          <a href="<?php echo base_url();?>pelanggan/tambah_pelanggan" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a> 
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
    	      <tr>
    	        <th width="2%">No</th>
              <th width="5%">Pelanggan</th>
    	        <th width="5px">Alamat</th>
              <th width="5%">Tanggal Terima</th>
              <!-- <th>Tanggal Keluar</th> -->
              <th width="5%">Barang</th>
              <!-- <th width="5%">Paket</th> -->
              <th width="5%">Jumlah</th>
              <th width="5%">Total</th>
    	        <th width="10%"><center>Aksi</center></th>
    	      </tr>
          </thead>
          <tbody>
          <tr>
          <?php 
          $no=1;
          	foreach ($pelanggan as $p) {
          ?>
          <td><center><?php echo $no++ ?></center></td>
          <td><?php echo $p->pelanggan ?></td>
          <td><?php echo $p->alamat ?></td>
          <td><?php echo date('d F Y',strtotime($p->tgl_terima)) ?></td>
          <td><?php echo $p->order_barang ?></td>
          <td><?php echo $p->jml_qty ?></td>
          <td><?php echo $p->harga_total ?></td>
          <td>
          	<center>
    				<a class="btn btn-warning" href="<?php echo base_url(); ?>Pelanggan/hapus/<?php echo $p->id_pelanggan;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a></center> 
    		  </td>

          </tr>
          <?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>

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