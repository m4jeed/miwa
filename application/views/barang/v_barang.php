  <div class="box box-danger">
      <div class="box-header">
      <h3 class="box-title">Data Produk Miwa Rengginang</h3>
          <a href="<?php echo base_url();?>barang/tambah_barang" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a> 
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
    	      <tr>
    	        <th width="2%">No</th>
              <th width="2%">Kode</th>
    	        <th>Nama Barang</th>
    	        <th>Kategori</th>
              <!-- s -->
              <th>Harga</th>
    	        <th><center>Aksi</center></th>
    	      </tr>
          </thead>
          <tbody>
          <tr>
          <?php 
          $no=1;
          	foreach ($barang->result() as $b) {
          ?>
          <td><center><?php echo $no++ ?></center></td>
          <td><?php echo $b->kode_barang ?></td>
          <td><?php echo $b->nama_barang ?></td> 
          <td><?php echo $b->nama_kategori ?></td>
          <!-- <td><?php echo $b->jml_barang ?></td> -->
          <td><?php echo $b->harga ?></td>
          <td>
          <!-- <a href="<?php //echo base_url(); ?>buku/buku_edit?id=<?php //echo $buku->id; ?>">Edit</a> --> 
          	<center><a href="<?php echo base_url();?>barang/edit?id_barang=<?php echo $b->id_barang; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
            <!-- <a class="btn btn-success" href="javascript:void(0);" onclick="return getItem('<?php echo $b->id_barang ?>')" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a> -->
    				<a class="btn btn-warning" href="<?php echo base_url(); ?>Barang/delete/<?php echo $b->id_barang;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');" ><i class="fa fa-trash"></i></a></center>
    		  </td>

          </tr>
          <?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>

<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">View - <small><i>Detail Item Barang</i></small></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12" style="border-right: 2px solid #ddd;">
              <table class="table table-hover">
                <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Harga Barang</th> 
                    </tr>
                </thead>
                <tbody id="detailItem">
                    <tr>
                      <td>Kode Barang</td>
                      <td>Nama Barang</td>
                      <td>Harga Barang</td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="text-align: center;border-top: 2px solid #ddd;">
          <button type="button" class="btn btn-default btn-1" data-dismiss="modal" style="border-radius: 60px;">Close Data</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  function getItem(idBarang){
    var url ='<?php echo site_url('barang/get_detail/');?>';
    $('tbody#detailItem').html('');
    sendData(url + idBarang, '', 'GET', function(a) {
      for (var b = 0; b < a.length; b++) {
        var tmp = '<tr>';
            tmp += '<td>'+ a[b].kode_barang +'</td>';
            tmp += '<td>'+ a[b].nama_barang +'</td>';
            tmp += '<td>'+ a[b].harga +'</td>';
            tmp += '</tr>';
        $('tbody#detailItem').append(tmp);
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