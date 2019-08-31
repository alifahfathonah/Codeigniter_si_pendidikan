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
                                Data Pendidikan Menengah Pertama
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
                            <h4> Data Pendidikan Menengah Pertama di Tahun <?= $sort;?> </h4>   
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr></tr>
                                <tr>
                                    <th width="3%">No</th>
                                    <th colspan="7" width="42%">Nama</th>
                                    <th width="5%">Nilai</th>
                                    <th width="12%">Satuan</th>
                                    <th width="25%">Sumber Data</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td colspan="11"><b>V. Pendidikan Menengah Pertama*</b>
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
                                    <td colspan="6">2. Jumlah Bangunan Sekolah SMP/Mts/Sederajat ** </td>
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
                                    <td colspan="6">3. Jumlah Pengelola Sekolah SMP/Mts/Sederajat**   </td>
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
                                    <td colspan="6">4. Jumlah Ruang Kelas Sekolah SMP/Mts/Sederajat  </td>
                                    <td align="right"><b><?= $jml_rg_kelas;?></b></td>
                                    <td>Ruang Kelas</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">10</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">5. Jumlah Tenaga Pendidik Sekolah SMP/Mts/Sederajat**   </td>
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
                                            <th><b>Jumlah</b></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($peserta_siswa as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                            <td></td>
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
                                            <th><b>Jumlah</b></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($bg_baik as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                            <td></td>
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
                                            <th><b>Jumlah</b></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($bg_tdk_baik as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                            <td></td>
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

