
<!-- sidebar: style can be found in sidebar.less -->
 <!-- <aside class="main-sidebar"> udah di content-->

    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/images/admin.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('level'); ?></p>
          <a href=""><i class="fa fa-circle text-success"></i>miwa rengginang</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HALAMAN MIWA RENGGINANG</li>
        <!-- session level member-->
        <?php if($this->session->userdata('level') == 'member'){ ?>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>PENGGUNA MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo base_url('Barang'); ?>" ><i class="fa fa-briefcase text-yellow"></i>Data Miwa</a></li> -->
            <li><a href="<?php echo base_url('Pelanggan'); ?>"><i class="fa fa-bar-chart text-red"></i>Data Pemesanan</a></li>
          </ul>
        </li>

        <?php }else if($this->session->userdata('level') == 'karyawan') { ?>
        <!-- session level karyawan-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>PENGGUNA MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Pelanggan'); ?>"><i class="fa fa-bar-chart text-red"></i>Data Pelanggan</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>PRODUK MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Barang'); ?>" ><i class="fa fa-briefcase text-yellow"></i>Data Miwa</a></li>
            <li><a href="<?php echo base_url('Kategori'); ?>" ><i class="fa fa-cube text-yellow"></i>Kategori</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>REPORT MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Report'); ?>"><i class="fa fa-print text-green"></i>Report</a></li>
          </ul>
        </li>
      
        <?php }else if($this->session->userdata('level') == 'admin'){ ?>
        <!-- session level admin-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>PENGGUNA MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Karyawan'); ?>"><i class="fa fa-user text-red"></i>Data Karyawan</a></li>
            <li><a href="<?php echo base_url('Pelanggan'); ?>"><i class="fa fa-bar-chart text-red"></i>Data Pelanggan</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>PRODUK MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Barang'); ?>" ><i class="fa fa-briefcase text-yellow"></i>Data Miwa</a></li>
            <li><a href="<?php echo base_url('Kategori'); ?>" ><i class="fa fa-cube text-yellow"></i>Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>LAP.KEUANGAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Pendapatan'); ?>"><i class="fa fa-area-chart text-blue"></i>Pendapatan</a></li>
            <!-- <li><a href="<?php //echo base_url('pengeluaran'); ?>"><i class="fa fa-circle-o text-blue"></i>Pengeluaran</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>REPORT MIWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Report'); ?>"><i class="fa fa-print text-green"></i>Report</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>CREATE AKSES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Akun'); ?>"><i class="fa fa-user text-white"></i>Akun Akses</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      
    </section>
  