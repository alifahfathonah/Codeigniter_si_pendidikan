<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Kepegawaian</h2>
            </div>
            <!-- Exportable Table -->
            <?php if($this->session->flashdata('admin')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data pegawai <strong>berhasil</strong> <?= $this->session->flashdata('admin');?>
                </div>
            <?php endif;?>
            <?php if(validation_errors()):?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
              </div>
            <?php endif;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEGAWAI
                            </h2>
                            <hr>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Admin</a>
                            <a href="<?= base_url();?>administrator" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                            <!-- <a href="" class="btn btn-success" style="padding: 10px;"><i class="fa fa-file-excel-o"></i></a>
                            <a href="" class="btn btn-danger" style="padding: 10px;"><i class="fa fa-file-pdf-o"></i></a>
                            <a href="" class="btn btn-primary" style="padding: 10px;"><i class="fa fa-file-word-o"></i></a> -->
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach($admin as $ad):?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $ad['username'];?></td>
                                            <td><?= $ad['password'];?></td>
                                            <td>
                                                <a href="" class="btn btn-default" style="padding: 2px" data-toggle="modal" data-target="#editModal<?= $ad['id_user'];?>"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url();?>administrator/hapus_admin/<?= $ad['id_user'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-default" style="padding: 2px"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        <!-- Default Size -->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModal">Tambah Admin</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Advanced Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_advanced_validation" method="post" action="">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">Username</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" name="password" required>
                                                    <label class="form-label">Password</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <button class="btn btn-primary waves-effect" type="submit">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Advanced Validation -->
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div> -->
                </div>
            </div>
        </div>
        <?php foreach($admin as $ad):?>
        <!-- Default Size -->
        <div class="modal fade" id="editModal<?= $ad['id_user'];?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="editModal<?= $ad['id_user'];?>">Update Data Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Advanced Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_advanced_validation" method="post" action="<?= base_url();?>administrator/edit_admin/<?= $ad['id_user'];?>">
                                            
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required value="<?= $ad['username'];?>">
                                                    <label class="form-label">Username</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" name="password" required value="<?= $ad['password'];?>">
                                                    <label class="form-label">Password</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Advanced Validation -->
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div> -->
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </section>

    