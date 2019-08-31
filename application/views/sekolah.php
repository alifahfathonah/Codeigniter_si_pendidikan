<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Data Sekolah</h2>
        </div>
        <!-- Exportable Table -->
        <?php if($this->session->flashdata('sekolah')):?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data sekolah <strong>berhasil</strong> <?= $this->session->flashdata('sekolah');?>
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
                            DATA SEKOLAH
                        </h2>
                        <hr>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Data Sekolah</a>
                        <a href="<?= base_url();?>sekolah" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>No. Izin</th>
                                        <th>Alamat</th>
                                        <th>Nama Kepala Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>No. Izin</th>
                                        <th>Alamat</th>
                                        <th>Nama Kepala Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($sekolah as $s):?>
                                    <tr>
                                        <td><?= $i;?></td>
                                        <td><?= $s['nama_sekolah'];?></td>
                                        <td><?= $s['no_izin'];?></td>
                                        <td><?= $s['alamat'];?></td>
                                        <td><?= $s['nama_kepsek'];?></td>
                                        <td>
                                            <a href="" class="btn btn-default" style="padding: 2px" data-toggle="modal" data-target="#editModal<?= $s['id_sekolah'];?>"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url();?>sekolah/hapus_sekolah/<?= $s['id_sekolah'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-default" style="padding: 2px"><i class="fa fa-trash-o"></i></a>
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
                    <h4 class="modal-title" id="defaultModal">Tambah Data Sekolah</h4>
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
                                                <input type="text" class="form-control" name="nama_sekolah" required>
                                                <label class="form-label">Nama Sekolah</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="no_izin" required>
                                                <label class="form-label">Nomor Izin</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="alamat" required>
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_kepsek" required>
                                                <label class="form-label">Nama Kepala Sekolah</label>
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
    <?php foreach($sekolah as $s):?>
    <!-- Default Size -->
    <div class="modal fade" id="editModal<?= $s['id_sekolah'];?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModal<?= $s['id_sekolah'];?>">Update Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <!-- Advanced Validation -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <form id="form_advanced_validation" method="post" action="<?= base_url();?>sekolah/edit_sekolah/<?= $s['id_sekolah'];?>">
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_sekolah1" required value="<?= $s['nama_sekolah'];?>">
                                                <label class="form-label">Sekolah</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="no_izin1" required value="<?= $s['no_izin'];?>">
                                                <label class="form-label">Nomor Izin</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="alamat1" required value="<?= $s['alamat'];?>">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <div class="help-info"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_kepsek1" required value="<?= $s['nama_kepsek'];?>">
                                                <label class="form-label">Nama Kepala Sekolah</label>
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

