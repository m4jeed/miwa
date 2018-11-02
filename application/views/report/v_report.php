<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/admin.jpeg');?>">
<div class="box box-success">
  <div class="box-header">
  <h3 class="box-title">Data Report Pelanggan</h3>
      <a href="<?php echo base_url();?>Report/cetakpdf" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak</a>
      <!--<?php //echo anchor('Report/cetakpdf', 'Cetak');?>" class="btn btn-primary pull-right"><i class="fa fa-print"></i>-->
  </div>
      <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th width="2%">Nomor</th>
          <th width="5%">Pelanggan</th>
	        <th width="5px">Alamat</th>
          <th width="5%">Tanggal Terima</th>
          <th width="5%">Tanggal Keluar</th>
          <th width="5%">Jumlah Barang</th>
          <th width="5%">harga</th>
          <th width="5%">Harga Total</th>
	      </tr>
      </thead>
      <tbody>
      <tr>
      <?php 
      $no=1;
      	foreach ($cetak as $c) {
      ?>
      <td><center><?php echo $no++ ?></center></td>
      <td><?php echo $c->pelanggan ?></td>
      <td><?php echo $c->alamat ?></td>
      <td><?php echo $c->tgl_terima ?></td>
      <td><?php echo $c->tgl_keluar ?></td>
      <td><?php echo $c->order_barang ?></td>
      <td><?php echo $c->harga ?></td>
      <td><?php echo $c->harga_total ?></td>
      <!-- <td>
      	<center><a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
				<a class="btn btn-danger" href="<?php echo base_url(); ?>Pelanggan/hapus/<?php echo $p->id_pelanggan;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a></center> 
		  </td> -->

      </tr>
      <?php } ?>
			</tbody>
		</table>
	</div>
</div>