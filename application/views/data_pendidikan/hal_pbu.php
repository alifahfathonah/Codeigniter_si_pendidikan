                    <div class="body table-responsive">
                        <?php foreach($pbu as $pb):?>
                            <h4> Data Penduduk Berdasarkan Usia di Tahun <?= $pb['tahun'];?></h4>
                            <?php break;?>
                        <?php endforeach;?> 
                        <hr>
                        <?php if($this->session->flashdata('pbu')):?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Data <strong>berhasil</strong> <?= $this->session->flashdata('pbu');?>
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
                                        <?php foreach($pbu as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['usia0_6'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['usia0_6'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikan/hapus_pbu/<?= $p['id_pbu'];?>/usia0_6" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<?php foreach($pbu as $p):?>
<div id="edit<?= $p['usia0_6'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikan/edit_pbu">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pbu'];?>" name="id_pbu" required>
                                    <input type="hidden" class="form-control" value="<?= $p['kecamatan'];?>" name="kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['usia0_6'];?>" name="jumlah" required>
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
                                        <?php foreach($pbu as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['usia7_12'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['usia7_12'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikan/hapus_pbu/<?= $p['id_pbu'];?>/usia7_12" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<?php foreach($pbu as $p):?>
<div id="edit<?= $p['usia7_12'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikan/edit_pbuusia7_12">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pbu'];?>" name="id_pbu" required>
                                    <input type="hidden" class="form-control" value="<?= $p['kecamatan'];?>" name="kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['usia7_12'];?>" name="jumlah" required>
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
                                        <?php foreach($pbu as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['usia13_15'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['usia13_15'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikan/hapus_pbu/<?= $p['id_pbu'];?>/usia13_15" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<?php foreach($pbu as $p):?>
<div id="edit<?= $p['usia13_15'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikan/edit_pbuusia13_15">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pbu'];?>" name="id_pbu" required>
                                    <input type="hidden" class="form-control" value="<?= $p['kecamatan'];?>" name="kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['usia13_15'];?>" name="jumlah" required>
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
                                    Jumlah Penduduk Usia 16-18 Tahun**
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
                                        <?php foreach($pbu as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['usia16_18'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['usia16_18'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>pendidikan/hapus_pbu/<?= $p['id_pbu'];?>/usia16_18" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<?php foreach($pbu as $p):?>
<div id="edit<?= $p['usia16_18'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>pendidikan/edit_pbuusia16_18">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_pbu'];?>" name="id_pbu" required>
                                    <input type="hidden" class="form-control" value="<?= $p['kecamatan'];?>" name="kecamatan" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['kecamatan'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?= $p['usia16_18'];?>" name="jumlah" required>
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