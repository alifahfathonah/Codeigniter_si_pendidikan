<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Data Pendidikan</h2>
            </div>
            <!-- Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Penduduk Berdasarkan Usia Sekolah
                                <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                            </h2>
                            <hr>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Data Pendidikan</a>
                            <a href="<?= base_url();?>pendidikanusiauptd" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                            <hr>
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="keyword">
                                                    <option value="">Tahun</option>
                                                    <?php foreach($tahun as $t):?>
                                                        <option value="<?= $t['tahun'];?>"><?= $t['tahun'];?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="body table-responsive">
                            <h4> Data Penduduk Berdasarkan Usia di Tahun <?= $sort;?> </h4>   
                        <hr>
                        <?php if($this->session->flashdata('pbu')):?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Data <strong>berhasil</strong> <?= $this->session->flashdata('pbu');?>
                            </div>
                        <?php endif;?>
                        <?php if($this->session->flashdata('pbu1')):?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?= $this->session->flashdata('pbu1');?>
                            </div>
                        <?php endif;?>
                        <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                        <?php endif;?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                </tr>
                                <tr>
                                    <th width="3%">No</th>
                                    <th colspan="7" width="50%">Nama</th>
                                    <th width="10%">Nilai</th>
                                    <th width="10%">Satuan</th>
                                    <th width="20%">Sumber Data</th>
                                    <th width="7%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td align="center">1</td>
                                        <td colspan="11"><b>I. Penduduk Berdasarkan Usia Sekolah*</b></td>
                                    </tr>
                                    <tr>
                                        <td align="center">2</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">1. Jumlah Penduduk Usia 0-6 Tahun** </td>
                                        <td align="right"><b><?= $usia0_6;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia0_6"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">2. Jumlah Penduduk Usia 7-12 Tahun** </td>
                                        <td align="right"><b><?= $usia7_12;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia7_12"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">4</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">3. Jumlah Penduduk Usia 13-15 Tahun** </td>
                                        <td align="right"><b><?= $usia13_15;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia13_15"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">5</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">4. Jumlah Penduduk Usia 16-18 Tahun** </td>
                                        <td align="right"><b><?= $usia16_18;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia16_18"><i class="fa fa-eye"></i></a></td>
                                    </tr>               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</section>
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModal">Tambah Data Pendidikan</h4>
            </div>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="pendidikanusiauptd/tambahDataPendidikan">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Kecamatan</p>
                                            <select class="form-control show-tick" name="nama_kecamatan">
                                                <option value="<?= $kecamatan;?>" selected><?= $kecamatan;?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Usia</p>
                                            <select class="form-control show-tick" name="usia">
                                                <option value=""></option>
                                                <?php foreach($usia as $u):?>
                                                    <option value="<?= $u;?>"><?= $u;?> Tahun</option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah</p>
                                            <input type="number" class="form-control" name="jumlah" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Tahun</p>
                                            <select class="form-control show-tick" name="tahun">
                                                <option value=""></option>
                                                <?php foreach($tahun as $t):?>
                                                    <option value="<?= $t['tahun'];?>"><?= $t['tahun'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
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


<!-- usia0_6 -->
<div id="usia0_6" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 0-6 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b style="float: right;">Jumlah</b></th>
                                            <th><b style="float: right;">Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan0_6 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_pendidikan_usia'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikanusiauptd/hapus_pendidikan_usia/<?= $p['id_pendidikan_usia'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- EDIT usia0_6 -->
<?php foreach($pendidikan0_6 as $p):?>
<div id="edit<?= $p['id_pendidikan_usia'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikanusiauptd/edit_pendidikan0_6">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pendidikan_usia'];?>" name="id_pendidikan_usia" required>
                                    <input type="hidden" class="form-control" value="<?= $p['nama_kecamatan'];?>" name="nama_kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['nama_kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['jumlah'];?>" name="jumlah" required>
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end usia0_6 -->


<!-- usia7_12 -->
<div id="usia7_12" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 7-12 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b style="float: right;">Jumlah</b></th>
                                            <th><b style="float: right;">Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan7_12 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_pendidikan_usia'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikanusiauptd/hapus_pendidikan_usia/<?= $p['id_pendidikan_usia'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- EDIT usia7_12 -->
<?php foreach($pendidikan7_12 as $p):?>
<div id="edit<?= $p['id_pendidikan_usia'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikanusiauptd/edit_pendidikan7_12">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pendidikan_usia'];?>" name="id_pendidikan_usia" required>
                                    <input type="hidden" class="form-control" value="<?= $p['nama_kecamatan'];?>" name="nama_kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['nama_kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['jumlah'];?>" name="jumlah" required>
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end usia7_12 -->


<!-- usia13_15 -->
<div id="usia13_15" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 13-15 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b style="float: right;">Jumlah</b></th>
                                            <th><b style="float: right;">Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan13_15 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_pendidikan_usia'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikanusiauptd/hapus_pendidikan_usia/<?= $p['id_pendidikan_usia'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- EDIT usia13_15 -->
<?php foreach($pendidikan13_15 as $p):?>
<div id="edit<?= $p['id_pendidikan_usia'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikanusiauptd/edit_pendidikan13_15">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pendidikan_usia'];?>" name="id_pendidikan_usia" required>
                                    <input type="hidden" class="form-control" value="<?= $p['nama_kecamatan'];?>" name="nama_kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['nama_kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['jumlah'];?>" name="jumlah" required>
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end usia13_15 -->


<!-- usia16_18 -->
<div id="usia16_18" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 13-15 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b style="float: right;">Jumlah</b></th>
                                            <th><b style="float: right;">Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan16_18 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_pendidikan_usia'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikanusiauptd/hapus_pendidikan_usia/<?= $p['id_pendidikan_usia'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- EDIT usia16_18 -->
<?php foreach($pendidikan16_18 as $p):?>
<div id="edit<?= $p['id_pendidikan_usia'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikanusiauptd/edit_pendidikan16_18">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pendidikan_usia'];?>" name="id_pendidikan_usia" required>
                                    <input type="hidden" class="form-control" value="<?= $p['nama_kecamatan'];?>" name="nama_kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['nama_kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['jumlah'];?>" name="jumlah" required>
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end usia13_15 -->
