

  <div class="row">
    <?php if($this->session->userdata('level') == 'member'){ ?>
    <div class='alert alert-default alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>    
         Silahkan Pesan, klik tombol Pengguna Miwa
    </div>
    
    
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $count_barang;?> </h3>
          <p>Data Barang</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
      </div>
    </div> 
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $count_pelanggan;?></h3>
          <p>Pelanggan</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div> 
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>0</h3>
        <p>masih kosongan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3>0</h3>
        <p>masih kosongan</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
        <!-- <i class="ion ion-pie-graph"></i> -->
      </div>
    </div>
  </div>


<?php }else if($this->session->userdata('level') == 'karyawan') { ?>


  <!-- small box -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $count_barang;?> </h3>
        <p>Data Barang</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
    </div>
  </div> 
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $count_pelanggan;?></h3>
        <p>Pelanggan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div> 
    </div>
  </div>
  
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $count_user; ?></h3>
        <p>Hak Akses</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3>0</h3>
        <p>masih kosong</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
        <!-- <i class="ion ion-pie-graph"></i> -->
      </div>
    </div>
  </div>
  <?php }else if($this->session->userdata('level') == 'admin'){ ?>
    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $count_barang;?> </h3>
        <p>Data Barang</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
    </div>
  </div> 
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $count_pelanggan;?></h3>
        <p>Pelanggan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div> 
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $count_user; ?></h3>
        <p>Hak Akses</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3>65</h3>
        <p>Pendapatan</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
        <!-- <i class="ion ion-pie-graph"></i> -->
      </div>
    </div>
  </div>
  <?php } ?>

    <!-- <div class="row"></div>
    <?php $no=0; foreach($stas->result() as $row) : $no++; ?>

    
    <div class="col-md-4">

      <?php if($row->status == 0){?>
        
          <span class="info-box-icon bg-aqua"></span>

        <?php } else {?>

          <span class="info-box-icon bg-red"></span>
      <?php } ?> 
          <div class="info-box">
            <div class="info-box-content">
              <span><?php if($row->status==0) {echo "Belum Laku";}else{echo "Sudah Laku";} ?></span>
              <span class="info-box-number"><?php echo $no;?></span> 
              <span class="info-box-number"><?php echo $row->order_barang; ?></span>
              <span class="info-box-text"><?php echo $row->jml_qty; ?></span> 
              <span class="info-box-text"><?php echo $row->status; ?></span> 
            </div>
          </div>
    </div>
    <?php endforeach; ?>  -->

</div>



