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
                                Data Sekolah Taman Kanak-Kanak
                                <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                            </h2>
                            <hr>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Data Sekolah Taman Kanak-Kanak</a>
                            <a href="<?= base_url();?>tkUptd" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
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
                            <h4> Data Sekolah Taman Kanak-Kanak di Tahun <?= $sort;?> </h4>   
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
                                <tr></tr>
                                <tr>
                                    <th width="3%">No</th>
                                    <th colspan="7" width="37%">Nama</th>
                                    <th width="10%">Nilai</th>
                                    <th width="12%">Satuan</th>
                                    <th width="25%">Sumber Data</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td align="center">1</td>
                                    <td colspan="11"><b>III. Sekolah Taman Kanak-Kanak*</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">1. Jumlah Siswa**</td>
                                    <td align="right"><b><?= $jml_siswa;?></b></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#siswa"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">2. Jumlah Bangunan Sekolah TK ** </td>
                                    <td align="right"><b><?= $jml_bg_baik + $jml_bg_tdk_baik;?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bangunan Baik **</td>
                                    <td align="right"><b><?= $jml_bg_baik;?></b></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#bgbaik"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Bangunan Tidak Baik **</td>
                                    <td align="right"><b><?= $jml_bg_tdk_baik;?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#bgtdkbaik"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">3. Jumlah Pengelola Sekolah TK **   </td>
                                    <td align="right"><b><?= $jml_pgl_negeri + $jml_pgl_swasta;?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">7</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Negeri </td>
                                    <td align="right"><b><?= $jml_pgl_negeri;?></b></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">8</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Swasta</td>
                                    <td align="right"><b><?= $jml_pgl_swasta;?></b></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">9</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">4. Jumlah Ruang Kelas Sekolah TK  </td>
                                    <td align="right"><b><?= $jml_rg_kelas;?></b></td>
                                    <td>Ruang Kelas</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td align="center">10</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">5. Jumlah Tenaga Pendidik TK**   </td>
                                    <td align="right"><b><?= $jml_pd_bersertifikat + $jml_pd_tdk_bersertifikat;?></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">11</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bersertifikat</td>
                                    <td align="right"><b><?= $jml_pd_bersertifikat;?></b></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">12</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Tidak Bersertifikat</td>
                                    <td align="right"><b><?= $jml_pd_tdk_bersertifikat;?></b></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">13</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">6. Rasio Siswa dengan Tenaga Pendidik   </td>
                                    <td align="right"><b><?= $jml_rasio;?></b></td>
                                    <td>%</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
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
                <h4 class="modal-title" id="defaultModal">Tambah Data Sekolah Taman Kanak-Kanak</h4>
            </div>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModal">Data Setiap Kecamatan</h4>
                            </div>
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="tkUptd/tambahDataTk">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Kecamatan</p>
                                            <select class="form-control show-tick" name="nama_kecamatan">
                                                <option value="<?= $kecamatan;?>"><?= $kecamatan;?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Siswa</p>
                                            <input type="number" class="form-control" name="jumlah_siswa" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Bangunan Baik</p>
                                            <input type="number" class="form-control" name="jumlah_bangunan_baik" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Bangunan Tidak Baik</p>
                                            <input type="number" class="form-control" name="jumlah_bangunan_tdk_baik" required>
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


<!-- siswa -->
<div id="siswa" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Peserta Sekolah Taman Kanak-Kanak**
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
                                        <?php foreach($peserta_siswa as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_tb_jml_siswa'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>tkUptd/hapus_siswa/<?= $p['id_tb_jml_siswa'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<!-- EDIT siswa -->
<?php foreach($peserta_siswa as $p):?>
<div id="edit<?= $p['id_tb_jml_siswa'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_peserta_siswa">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_jml_siswa'];?>" name="id_tb_jml_siswa" required>
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
<!-- end siswa -->

<!-- bgbaik -->
<div id="bgbaik" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Bangunan Baik**
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
                                        <?php foreach($bg_baik as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#editbg<?= $p['id_tb_bangunan_baik'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>tkUptd/hapus_bg_baik/<?= $p['id_tb_bangunan_baik'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<!-- EDIT bgbaik -->
<?php foreach($bg_baik as $p):?>
<div id="editbg<?= $p['id_tb_bangunan_baik'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_bg_baik">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_bangunan_baik'];?>" name="id_tb_bangunan_baik" required>
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
<!-- end bgbaik -->

<!-- bgtdkbaik -->
<div id="bgtdkbaik" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Bangunan Tidak Baik**
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
                                        <?php foreach($bg_tdk_baik as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edittdk<?= $p['id_tb_bangunan_tdk_baik'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>tkUptd/hapus_bg_tdk_baik/<?= $p['id_tb_bangunan_tdk_baik'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<!-- EDIT bgtdkbaik -->
<?php foreach($bg_tdk_baik as $p):?>
<div id="edittdk<?= $p['id_tb_bangunan_tdk_baik'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_bg_tdk_baik">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_bangunan_tdk_baik'];?>" name="id_tb_bangunan_tdk_baik" required>
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
<!-- end bgtdkbaik -->

<!-- EDIT pglnegeri -->
<?php foreach($pgl_negeri as $p):?>
<div id="pglnegeri" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_pgl_negeri">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_pengelola_negeri'];?>" name="id_tb_pengelola_negeri" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
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
<!-- end siswa -->

<!-- EDIT pglswasta -->
<?php foreach($pgl_swasta as $p):?>
<div id="pglswasta" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_pgl_swasta">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_pengelola_swasta'];?>" name="id_tb_pengelola_swasta" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
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
<!-- end siswa -->

<!-- EDIT rgkelas -->
<?php foreach($rg_kelas as $p):?>
<div id="rgkelas" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_rg_kelas">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_ruang_kelas'];?>" name="id_tb_ruang_kelas" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
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
<!-- end siswa -->

<!-- EDIT pdbersertifikat -->
<?php foreach($pd_bersertifikat as $p):?>
<div id="pdbersertifikat" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_pd_bersertifikat">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_pendidik_bersertifikat'];?>" name="id_tb_pendidik_bersertifikat" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
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
<!-- end siswa -->

<!-- EDIT pdtdkbersertifikat -->
<?php foreach($pd_tdk_bersertifikat as $p):?>
<div id="pdtdkbersertifikat" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_pd_tdk_bersertifikat">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_pendidik_tdk_bersertifikat'];?>" name="id_tb_pendidik_tdk_bersertifikat" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
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
<!-- end siswa -->

<!-- EDIT pdtdkbersertifikat -->
<?php foreach($rasio as $p):?>
<div id="rasio" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>tkUptd/edit_rasio">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_tb_rasio'];?>" name="id_tb_rasio" required>
                                    <div class="form-group form-float ">
                                        <div class="form-line disabled">
                                                <input disabled type="text" value="<?= $p['tahun'];?>" class="form-control">
                                            <label class="form-label">Nama</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="<?= $p['nilai'];?>" name="nilai" required>
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
<!-- end siswa -->
