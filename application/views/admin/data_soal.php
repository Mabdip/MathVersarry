   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Isi Data Soal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right"> 

                            <li><a href="<?php echo base_url().'admin/data_soal'; ?>">Data Soal</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="key">

                    

                </div>
            </div>
                
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?= $title ?></strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Id_soal</th>
                        <th>Pertanyaan</th>
                        <th>Pilihan A</th>
                        <th>Pilihan B</th>
                        <th>Pilihan C</th>
                        <th>Pilihan D</th>
                        <th>Jawaban</th>
                        <th>Action</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($soal as $key): ?>
                        <tr>
                            <td style="width: 20px !important;" ><?= $i ?></td>
                            <td><?= $key->id_soal ?></td>
                            <td><?= $key->pertanyaan ?></td>
                            <td><?= $key->pilihan_a ?></td>                                                
                            <td><?= $key->pilihan_b ?></td> 
                            <td><?= $key->pilihan_c ?></td> 
                            <td><?= $key->pilihan_d ?></td>
                            <td><?= $key->jawaban ?></td>                                                                                                
                            <td align="center">

                            <a href="<?= base_url( 'admin/edit_soal/'.$key->id_soal )?>" class="btn btn-xs btn-primary fa fa-pencil" ></a>
                            <a href="<?= base_url( 'admin/data_soal/delete/'.$key->id_soal )?>" class="btn btn-xs btn-danger fa fa-trash" ></a>

                            </td>
                        </tr>
                      <?php $i++; endforeach; ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
<!-- Right Panel -->

    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>



                    </div>



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->