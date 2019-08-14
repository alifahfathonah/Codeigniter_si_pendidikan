<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Absensi</h2>
        </div>
        <!-- Exportable Table -->
        <?php if($this->session->flashdata('absen')):?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data absen <strong>berhasil</strong> <?= $this->session->flashdata('absen');?>
            </div>
        <?php endif;?>
        <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>
            </div>
        <?php endif;?>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA ABSENSI
                        </h2>
                        <hr>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#absenModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Absen Baru</a>
                            <a href="<?= base_url();?>absen" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th>Nama Sekolah</th>
                                            <th>Bulan</th>
                                            <th>Gambar</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th>Nama Sekolah</th>
                                            <th>Bulan</th>
                                            <th>Gambar</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Bahodopi</td>
                                            <td>SDN Bete-bete</td>
                                            <td>Januari</td>
                                            <td><img src="<?= base_url();?>assets/images/image-gallery/1.jpg" width="100px"> </td>
                                            <td>2017</td>
                                            <td>
                                                <a href="" class="btn btn-default" style="padding: 2px" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a>
                                                <a href="" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-default" style="padding: 2px"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
</section>

