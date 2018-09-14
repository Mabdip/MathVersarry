  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Isi Soal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url().'C_admin/isi_absen'; ?>">Isi Soal</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <?= $this->session->flashdata('msg') ?>
                            <div class="card-header">
                                <strong>Masukkan Soal</strong>
                            </div>
                            <div class="card-body card-block">

                                <?= form_open( 'admin/isi_soal', [ 'class' => 'form'] ) ?>
                                <script type="text/javascript">
                                    tinymce.init({
                                                    selector: "textarea",
                                                    theme: "modern",
                                                    plugins: [
                                                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                                                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                                                    "save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
                                                    ],
                                                    external_plugins: {
                                                    //"moxiemanager": "/moxiemanager-php/plugin.js"
                                                    },
                                                    content_css: "css/development.css",
                                                    add_unload_trigger: false,
                                                     
                                                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
                                                     
                                                    image_advtab: true,
                                                     
                                                    style_formats: [
                                                    {title: 'Bold text', format: 'h1'},
                                                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                                                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                                                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                                                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                                                    {title: 'Table styles'},
                                                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                                                    ],
                                                     
                                                    template_replace_values : {
                                                    username : "Jack Black"
                                                    },
                                                     
                                                    template_preview_replace_values : {
                                                    username : "Preview user name"
                                                    },
                                                     
                                                    link_class_list: [
                                                    {title: 'Example 1', value: 'example1'},
                                                    {title: 'Example 2', value: 'example2'}
                                                    ],
                                                     
                                                    image_class_list: [
                                                    {title: 'Example 1', value: 'example1'},
                                                    {title: 'Example 2', value: 'example2'}
                                                    ],
                                                     
                                                    templates: [
                                                    {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
                                                    {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
                                                    ],
                                                     
                                                    });
                                </script>
                                
                                    <label class="form-control-label" style="margin-top: 5px;">Pertanyaan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-adn"></i></div>
                                        <textarea class="form-control" name="pertanyaan" style="width: 80%;margin-top: 5px;"></textarea>
                                    </div>
                                
                                
                                     <label class="form-control-label">Pilihan A</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-info"></i></div>
                                        <input class="form-control" placeholder="masukkan pilihan" name="pilihan_a" type="text" required>
                                    </div>
                                
                                    <label class="form-control-label">Pilihan B</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-info"></i></div>
                                        <input class="form-control" placeholder="masukkan pilihan" name="pilihan_b" type="text" required>
                                    </div>
                                
                                   <label class="form-control-label">Pilihan C</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-info"></i></div>
                                        <input class="form-control" placeholder="masukkan pilihan" name="pilihan_c" type="text" required>
                                    </div>
                                    
                                   <label class="form-control-label">Pilihan D</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-info"></i></div>
                                        <input class="form-control" placeholder="masukkan pilihan" name="pilihan_d" type="text" required>
                                    </div>

                                    <label class="form-control-label">Jawaban</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-info"></i></div>
                                        <input class="form-control" placeholder="masukkan jawaban" name="jawaban" type="text" required>
                                    </div>
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary button" style="margin-left: 1000px;margin-top: 10px;">
                                
                                
                                <?= form_close() ?> <hr>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                        
                        </div>

                    </div>



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
        <script>
            $(document).ready(function() {
                $('#tanggal.date').datepicker({format: "yyyy-mm-dd"});    
            }
            
        </script>
        