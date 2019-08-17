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
                            <a href="<?= base_url();?>tk" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
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
                                    <th colspan="7" width="45%">Nama</th>
                                    <th width="10%">Nilai</th>
                                    <th width="10%">Satuan</th>
                                    <th width="20%">Sumber Data</th>
                                    <th width="7%">Aksi</th>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">2. Jumlah Bangunan Sekolah TK ** </td>
                                    <td align="right"><b></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bangunan Baik **</td>
                                    <td align="right"><b></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Bangunan Tidak Baik **</td>
                                    <td align="right"><b></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">3. Jumlah Pengelola Sekolah TK **   </td>
                                    <td align="right"><b></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">7</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Negeri </td>
                                    <td align="right"></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">8</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Swasta</td>
                                    <td align="right"></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">9</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">4. Jumlah Ruang Kelas Sekolah TK  </td>
                                    <td align="right"></td>
                                    <td>Ruang Kelas</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">10</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">5. Jumlah Tenaga Pendidik TK**   </td>
                                    <td align="right"><b></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">11</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bersertifikat</td>
                                    <td align="right"></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">12</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Tidak Bersertifikat</td>
                                    <td align="right"></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">13</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">6. Rasio Siswa dengan Tenaga Pendidik   </td>
                                    <td align="right"></td>
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
                                <form id="form_advanced_validation" method="post" action="tk/tambahDataTk">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Kecamatan</p>
                                            <select class="form-control show-tick" name="nama_kecamatan">
                                                <option></option>
                                                <?php foreach($kecamatan as $k):?>
                                                    <option value="<?= $k['nama_kecamatan'];?>"><?= $k['nama_kecamatan'];?></option>
                                                <?php endforeach;?>
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
                        <div class="card">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModal">Data Umum</h4>
                            </div>
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="tk/tambahDataTkUmum">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Pengelola Sekolah Negeri</p>
                                            <input type="number" class="form-control" name="jumlah_pengelola_sekolah_negeri" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Pengelola Sekolah Swasta</p>
                                            <input type="number" class="form-control" name="jumlah_pengelola_sekolah_swasta" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Ruang Kelas</p>
                                            <input type="number" class="form-control" name="jumlah_ruang_kelas" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Pendidik Bersertifikat</p>
                                            <input type="number" class="form-control" name="jumlah_pendidik_bersertifikat" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Pendidik Tidak Bersertifikat</p>
                                            <input type="number" class="form-control" name="jumlah_pendidik_tdk_bersertifikat" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Rasio</p>
                                            <input type="text" class="form-control" name="rasio" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Tahun</p>
                                            <select class="form-control show-tick" name="tahun1">
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


<!-- peserta -->
<div id="peserta" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Peserta PAUD**
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
                                        <?php foreach($peserta_paud as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b style="float: right;"><?= $p['jumlah'];?></b></td>
                                            <td>
                                                <b style="float: right;">
                                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#edit<?= $p['id_paud'];?>"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url();?>paud/hapus_paud/<?= $p['id_paud'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
<!-- EDIT peserta -->
<?php foreach($peserta_paud as $p):?>
<div id="edit<?= $p['id_paud'];?>" class="modal fade" role="dialog" data-focus-on="input:first">
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
                                <form id="form_advanced_validation" method="post" action="<?= base_url();?>paud/edit_peserta_paud">
                                    <input type="hidden" class="form-control" value="<?= $p['tahun'];?>" name="tahun" required>
                                    <input type="hidden" class="form-control" value="<?= $p['id_paud'];?>" name="id_paud" required>
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
<!-- end peserta -->
