  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Isi Data Mahasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url().'admin/data_soal'; ?>">Data Mahasiswa</a></li>
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
                            <div class="card-header">
                                <strong>Edit Mahasiswa</strong>
                            </div>
                            <div class="card-body card-block">
                                <?= form_open( 'admin/edit_soal/'.$soal->id_soal, [ 'class' => 'form-inline'] ) ?>
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
                                                     
                                                    setup: function(ed) {
                                                    /*ed.on(
                                                    'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
                                                    'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
                                                    'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
                                                    console.log(e.type, e);
                                                    });*/
                                                    },
                                                     
                                                    spellchecker_callback: function(method, data, success) {
                                                    if (method == "spellcheck") {
                                                    var words = data.match(this.getWordCharPattern());
                                                    var suggestions = {};
                                                     
                                                    for (var i = 0; i < words.length; i++) {
                                                    suggestions[words[i]] = ["First", "second"];
                                                    }
                                                     
                                                    success({words: suggestions, dictionary: true});
                                                    }
                                                     
                                                    if (method == "addToDictionary") {
                                                    success();
                                                    }
                                                    }
                                                    });
                                </script>
                                <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->id_soal ?>" placeholder="nama" type="text" name="nama" required>
                                    </div>
                                </div>
                                <label class="form-control-label" style="margin-top: 5px;">Pertanyaan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-adn"></i></div>
                                        <textarea class="form-control" value="<?= $soal->pertanyaan ?>" name="pertanyaan" style="width: 80%;margin-top: 5px;"></textarea>
                                    </div>
                                <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->pilihan_a ?>" placeholder="Masukkan Pilihan" type="text" name="pilihan_a" required>
                                    </div>
                                </div>
                                 <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->pilihan_b ?>" placeholder="Masukkan Pilihan" type="text" name="pilihan_b" required>
                                    </div>
                                </div>
                                 <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->pilihan_c ?>" placeholder="Masukkan Pilihan" type="text" name="pilihan_c" required>
                                    </div>
                                </div>
                                 <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->pilihan_d ?>" placeholder="Masukkan Pilihan" type="text" name="pilihan_d" required>
                                    </div>
                                </div>
                                 <div class="form-group">                                    
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input class="form-control" value="<?= $soal->jawaban ?>" placeholder="Masukkan Pilihan" type="text" name="jawaban" required>
                                    </div>
                                </div>
                                <input type="submit" name="edit" value="simpan" class="btn btn-primary">
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

