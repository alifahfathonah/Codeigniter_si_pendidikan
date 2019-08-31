<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Absensi</h2>
        </div>
        <!-- Exportable Table -->
        <?php if($this->session->flashdata('absen')):?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data absen <strong>berhasil</strong> <?= $this->session->flashdata('absen');?>
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
                            DATA ABSENSI
                        </h2>
                        <hr>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#absenModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Absen Baru</a>
                            <a href="<?= base_url();?>absenUptd" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th>Gambar</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th>Gambar</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $i=1;
                                        foreach($dataabsen as $d):?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $d['kecamatan'];?></td>
                                            <td><img src="<?= base_url();?>assets/images/absen/<?= $d['gambar'];?>" width="100px"> </td>
                                            <td><?= $d['bulan'];?></td>
                                            <td><?= $d['tahun'];?></td>
                                            <td>
                                                <a href="" class="btn btn-default" style="padding: 2px" data-toggle="modal" data-target="#editModal<?= $d['id_absen'];?>"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url();?>absenUptd/hapus/<?= $d['id_absen'];?>/<?= $d['gambar'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-default" style="padding: 2px"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                        $i++;
                                        endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
</section>
<!-- Default Size -->
<div class="modal fade" id="absenModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModal">Tambah Data Absen</h4>
            </div>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>absenUptd/insert_absen" enctype="multipart/form-data">
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <p>Gambar</p>
                                            <input type="file" class="form-control" name="fotopost" required>
                                            <!-- <label class="form-label">Nama</label> -->
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <br>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <p>Bulan</p>
                                            <select class="form-control show-tick" name="bulan">
                                                <option></option>
                                                <?php foreach($bulan as $b):?>
                                                    <option value="<?= $b;?>"><?= $b;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <p>Tahun</p>
                                            <select class="form-control show-tick" name="tahun">
                                                <option></option>
                                                <?php foreach($tahun as $th):?>
                                                    <option value="<?= $th['tahun'];?>"><?= $th['tahun'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
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


<!-- Default Size -->
<?php foreach($dataabsen as $d):?>
<div class="modal fade" id="editModal<?= $d['id_absen'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModal">Update Data Absen</h4>
            </div>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>absenUptd/updatedata" enctype="multipart/form-data">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <p>Gambar</p>
                                            <input type="file" class="form-control" name="fotopost1">
                                            <!-- <label class="form-label">Nama</label> -->
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <input type="hidden" class="form-control" name="filelama" value="<?= $d['gambar'];?>">
                                    <input type="hidden" class="form-control" name="id_absen" value="<?= $d['id_absen'];?>">
                                    <br>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <p>Bulan</p>
                                            <select class="form-control show-tick" name="bulan1">
                                                <option></option>
                                                <?php foreach($bulan as $b):?>
                                                <?php if($b == $d['bulan']):?>
                                                    <option value="<?= $b;?>" selected><?= $b;?></option>
                                                <?php else: ?>
                                                    <option value="<?= $b;?>" ><?= $b;?></option>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <p>Tahun</p>
                                            <select class="form-control show-tick" name="tahun1">
                                                <option></option>
                                                <?php foreach($tahun as $th):?>
                                                <?php if($th['tahun'] == $d['tahun']): ?>
                                                    <option value="<?= $th['tahun'];?>" selected><?= $th['tahun'];?></option>
                                                <?php else: ?>
                                                    <option value="<?= $th['tahun'];?>"><?= $th['tahun'];?></option>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
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
