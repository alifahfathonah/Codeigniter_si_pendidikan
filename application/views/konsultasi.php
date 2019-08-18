<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Laman Konsultasi</h2>
        </div>
        <?php if($this->session->flashdata('konsultasi')):?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Pesan Konsultasi <strong>berhasil</strong> <?= $this->session->flashdata('konsultasi');?>
            </div>
        <?php endif;?>
        <div class="row clearfix">
            <?php foreach($pesan as $pes):?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <?php if($pes['status']=='sudah dibaca'){?>
                    <div class="header bg-blue-grey">
                    <?php }else{?>
                    <div class="header bg-cyan">
                    <?php } ?>
                    <h2>
                        <?= $pes['kecamatan'];?> 
                        <small><?= $pes['judul_konsultasi'];?></small>
                        <small>Diterima tanggal : <?= $pes['tgl_kirim'];?></small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <?php if($pes['isi_balasan']==''){?>
                            <li><a href="javascript:void(0);"><i class="material-icons">info_outline</i></a></li>
                        <?php }else{ echo '';}?>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="" data-toggle="modal" data-target="#pesanModal<?= $pes['id_konsultasi'];?>">Buka Pesan Konsultasi</a></li>
                                <li><a href="<?= base_url();?>konsultasi/hapus/<?= $pes['id_konsultasi'];?>">Hapus Pesan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <?= word_limiter($pes['isi_konsultasi'], 3);?>
                </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModal">Kirim Konsultasi Baru</h4>
            </div>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="post" action="konsultasi/kirim">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <p>Kecamatan</p>
                                            <select class="form-control show-tick" name="nama_kecamatan">
                                                <option></option>
                                                <?php foreach($kec as $k):?>
                                                    <option value="<?= $k['nama_kecamatan'];?>"><?= $k['nama_kecamatan'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="judul_konsultasi" required>
                                            <label class="form-label">Perihal</label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <h6>Isi Pesan</h6>
                                            <input type="text" class="form-control" name="isi_konsultasi" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info"></div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Kirim</button>
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
<?php foreach($pesan as $pes):?>
<!-- Default Size -->
<div class="modal fade" id="pesanModal<?= $pes['id_konsultasi'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="pesanModal<?= $pes['id_konsultasi'];?>">Pesan Konsultasi dari Kecamatan <?= $pes['kecamatan'];?></h4>
            </div>
            <?php if($pes['isi_balasan']==''){?>
                <div class="modal-body">
                    <!-- Advanced Validation -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <?php if($pes['status']=='sudah dibaca'){?>
                                <div class="header bg-blue-grey">
                                <?php }else{?>
                                <div class="header bg-cyan">
                                <?php } ?>
                                <h2>
                                    <?= $pes['kecamatan'];?> 
                                    <small><?= $pes['judul_konsultasi'];?></small>
                                    <small>Diterima tanggal : <?= $pes['tgl_kirim'];?></small>
                                </h2>
                            </div>
                        <div class="body">
                            <?= $pes['isi_konsultasi'];?>
                        </div>
                        <div class="body">
                            <h4 class="modal-title" id="">Tanggapan</h4>
                        </div>
                        <div class="body">
                            <?= $pes['isi_balasan'];?>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- #END# Advanced Validation -->
                    <form id="form_advanced_validation" method="post" action="<?= base_url();?>konsultasi/tanggap/<?= $pes['id_konsultasi'];?>">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <!-- <input type="hidden" class="form-control" name="id_kosultasi" value="<?= $pes['id_konsultasi'];?>"> -->
                                <input type="text" class="form-control" name="tanggap" required>
                                <label class="form-label">Masukkan Tanggapan</label>
                            </div>
                            <div class="help-info"></div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Balas</button>
                    </form>
                </div>
            <?php }else{?>
            <div class="modal-body">
                <!-- Advanced Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <?php if($pes['status']=='sudah dibaca'){?>
                            <div class="header bg-blue-grey">
                            <?php }else{?>
                            <div class="header bg-cyan">
                            <?php } ?>
                            <h2>
                                <?= $pes['kecamatan'];?> 
                                <small><?= $pes['judul_konsultasi'];?></small>
                                <small>Status Pesan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $pes['status'];?></small>
                                <small>Diterima tanggal : <?= $pes['tgl_kirim'];?></small>
                            </h2>
                        </div>
                    <div class="body">
                        <?= $pes['isi_konsultasi'];?>
                    </div>
                    <div class="body">
                        <h4 class="modal-title" id="">Tanggapan</h4>
                    </div>
                    <div class="body">
                        <?= $pes['isi_balasan'];?>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php }?>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div> -->
        </div>
    </div>
</div>
<?php endforeach;?>
