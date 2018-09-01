<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'Admin'; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/hello4.png" alt="Logo" style="width: 40%;"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>assets/admin/images/h.png" alt="Logo" style="width: 100%;"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'Admin'; ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url().'Admin/isi_absen'; ?>"> <i class="menu-icon fa fa-address-book-o"></i>Isi Absen</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-group"></i><a href="<?php echo base_url().'Admin/data_mahasiswa
                            '; ?>">Data Mahasiswa</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url().'Admin/data_kelas'; ?>">Data Kelas</a></li>
                            <li><i class="fa fa-bars"></i><a href="<?php echo base_url().'Admin/data_jurusan'; ?>">Data Jurusan</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="<?php echo base_url().'Admin/data_prodi'; ?>">Data Prodi</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="<?php echo base_url().'Admin/data_semester'; ?>">Data Semester</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->