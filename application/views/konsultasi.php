<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Laman Konsultasi</h2>
        </div>
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
                        <small>Status Pesan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $pes['status'];?></small>
                        <small>Diterima tanggal : <?= $pes['tgl_kirim'];?></small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="" data-toggle="modal" data-target="#pesanModal<?= $pes['id_konsultasi'];?>">Buka Pesan Konsultasi</a></li>
                                <li><a href="javascript:void(0);">Balas Pesan Konsultasi</a></li>
                                <li><a href="javascript:void(0);">Tandai Telah Dibaca</a></li>
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
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                    <h2>
                        Kecamatan <small>Judul Konsultasi</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
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
                    </ul>
                </div>
                <div class="body">
                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<?php foreach($pesan as $pes):?>
<!-- Default Size -->
<div class="modal fade" id="pesanModal<?= $pes['id_konsultasi'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="pesanModal<?= $pes['id_konsultasi'];?>">Pesan Konsultasi dari Kecamatan <?= $pes['kecamatan'];?></h4>
            </div>
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