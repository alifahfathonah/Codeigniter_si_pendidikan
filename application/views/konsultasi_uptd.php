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
        <hr>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Kirim Konsultasi Baru</a>
        <a href="<?= base_url();?>konsultasiuptd" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
        <hr>
        <div class="row clearfix">
            <?php foreach($pesan as $pes):?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <?php if($pes['status']=='sudah dibaca'){?>
                    <div class="header bg-cyan">
                    <?php }else{?>
                    <div class="header bg-blue-grey">
                    <?php } ?>
                    <h2>
                        <?= $pes['kecamatan'];?> 
                        <small><?= $pes['judul_konsultasi'];?></small>
                        <small>Status Pesan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $pes['status'];?></small>
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
                                <li><a href="<?= base_url();?>konsultasiuptd/hapus/<?= $pes['id_konsultasi'];?>">Hapus Pesan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <?= $pes['isi_konsultasi'];?>
                    <hr>
                    <?= $pes['isi_balasan'];?>
                </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>