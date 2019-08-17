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
                                Data Pendidikan Anak Usia Dini
                                <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                            </h2>
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
                                        <td colspan="11"><b>II. Pendidikan Anak Usia Dini*</b></td>
                                    </tr>
                                    <tr>
                                        <td align="center">2</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">1. Jumlah Peserta PAUD** </td>
                                        <td align="right"><b><?= $peserta;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#peserta"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">2. Jumlah Bangungan PAUD** </td>
                                        <td align="right"><b><?= $bangunan;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#bangunan"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">4</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">3. Jumlah Tenaga Pengajar PAUD** </td>
                                        <td align="right"><b><?= $pengajar;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#pengajar"><i class="fa fa-eye"></i></a></td>
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
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($peserta_paud as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
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
<!-- bangunan -->
<div id="bangunan" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Bangunan PAUD**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($bangunan_paud as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
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
<!-- pengajar -->
<div id="pengajar" class="modal fade" tabindex="-1" data-focus-on="input:first">
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
                                    Jumlah Pengajar PAUD**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pengajar_paud as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
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