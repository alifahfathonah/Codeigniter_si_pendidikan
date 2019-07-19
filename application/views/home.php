    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Dashboard</h2>
            </div>
            
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text">PEGAWAI</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">archive</i>
                        </div>
                        <div class="content">
                            <div class="text">DOKUMENTASI</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">PUTUSAN</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">243</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ADMINISTRATOR</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">3</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <?php if($this->session->flashdata('cari')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data pegawai <strong>berhasil</strong> <?= $this->session->flashdata('pegawai');?>
                </div>
            <?php endif;?>
            <!-- Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pendidikan Kabupaten Morowali
                                <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                            </h2>
                            <hr>
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="header">
                                                    <option value="">Header</option>
                                                    <?php foreach($header as $h):?>
                                                        <option value="<?= $h;?>"><?= $h;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="kecamatan">
                                                    <option value="">Kecamatan</option>
                                                    <?php foreach($kec as $k):?>
                                                        <option value="<?= $k;?>"><?= $k;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="tahun">
                                                    <option value="">Tahun</option>
                                                    <?php foreach($tahun as $t):?>
                                                        <option value="<?= $t;?>"><?= $t;?></option>
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
                        

    