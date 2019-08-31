<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Data Sekolah</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA SEKOLAH
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>No. Izin</th>
                                        <th>Alamat</th>
                                        <th>Nama Kepala Sekolah</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>No. Izin</th>
                                        <th>Alamat</th>
                                        <th>Nama Kepala Sekolah</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($sekolah as $s):?>
                                    <tr>
                                        <td><?= $i;?></td>
                                        <td><?= $s['nama_sekolah'];?></td>
                                        <td><?= $s['no_izin'];?></td>
                                        <td><?= $s['alamat'];?></td>
                                        <td><?= $s['nama_kepsek'];?></td>
                                    </tr>
                                    <?php $i++;?>
                                    <?php endforeach; ?>
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

