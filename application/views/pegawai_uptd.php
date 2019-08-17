<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Kepegawaian</h2>
            </div>
            <!-- Exportable Table -->
            <?php if($this->session->flashdata('pegawai')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data pegawai <strong>berhasil</strong> <?= $this->session->flashdata('pegawai');?>
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
                                DATA PEGAWAI
                            </h2>
                            <hr>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="padding: 10px;"><i class="fa fa-plus-square"></i> Tambah Data Pegawai</a>
                            <a href="<?= base_url();?>pegawaiuptd" class="btn btn-success" style="padding: 10px; margin-right: 25px;"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>NIP</th>
                                            <th>Pangkat</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Instansi</th>
                                            <!-- <th>Kec</th>
                                            <th>Kel / Desa</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>NIP</th>
                                            <th>Pangkat</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Instansi</th>
                                            <!-- <th>Kec</th>
                                            <th>Kel / Desa</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach($pegawai as $pgw):?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $pgw['nama'];?></td>
                                            <td><?= $pgw['nip'];?></td>
                                            <td><?= $pgw['pangkat'];?></td>
                                            <td><?= $pgw['golongan'];?></td>
                                            <td><?= $pgw['jabatan'];?></td>
                                            <td><?= $pgw['tmpt_ajar'];?></td>
                                            <?php /*
                                            <td><?= $pgw['kec'];?></td>
                                            <td><?= $pgw['kel_des'];?></td>
                                            */?>
                                            <td>
                                                <a href="" class="btn btn-default" style="padding: 2px" data-toggle="modal" data-target="#editModal<?= $pgw['id_pegawai'];?>"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url();?>pegawaiuptd/hapus_pegawai/<?= $pgw['id_pegawai'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-default" style="padding: 2px"><i class="fa fa-trash-o"></i></a>
                                            </td>
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
        <!-- Default Size -->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModal">Tambah Data Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Advanced Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_advanced_validation" method="post" action="">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nama" required>
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="nip" maxlength="18" minlength="18">
                                                    <label class="form-label">NIP</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>Pangkat</p>
                                                    <select class="form-control show-tick" name="pangkat">
                                                        <option></option>
                                                        <?php foreach($pangkat as $p):?>
                                                            <option value="<?= $p;?>"><?= $p;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>Golongan</p>
                                                    <select class="form-control show-tick" name="gol">
                                                        <option></option>
                                                        <?php foreach($gol as $g):?>
                                                            <option value="<?= $g;?>"><?= $g;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="jabatan" required>
                                                    <label class="form-label">Jabatan</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tmpt_ajar" required>
                                                    <label class="form-label">Instansi</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>Kecamatan</p>
                                                    <select class="form-control show-tick" name="kec">
                                                        <option value="<?= $kec;?>" selected><?= $kec;?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>Status</p>
                                                    <select class="form-control show-tick" name="status">
                                                        <option></option>
                                                        <?php foreach($status as $st):?>
                                                            <option value="<?= $st;?>"><?= $st;?></option>
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
        <?php foreach($pegawai as $pgw):?>
        <!-- Default Size -->
        <div class="modal fade" id="editModal<?= $pgw['id_pegawai'];?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="editModal<?= $pgw['id_pegawai'];?>">Update Data Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Advanced Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_advanced_validation" method="post" action="<?= base_url();?>pegawaiuptd/edit_pegawai/<?= $pgw['id_pegawai'];?>">
                                            
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nama1" required value="<?= $pgw['nama'];?>">
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="nip1" value="<?= $pgw['nip'];?>">
                                                    <label class="form-label">NIP</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    Pangkat
                                                    <select class="form-control show-tick" name="pangkat1">
                                                        <option></option>
                                                        <?php foreach($pangkat as $p):?>
                                                            <?php if($p == $pgw['pangkat'] ):?>
                                                                <option value="<?= $p;?>" selected><?= $p;?></option>
                                                            <?php else :?>
                                                                <option value="<?= $p;?>"><?= $p;?></option>
                                                            <?php endif;?>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    Golongan
                                                    <select class="form-control show-tick" name="gol1">
                                                        <option></option>
                                                        <?php foreach($gol as $g):?>
                                                            <?php if($g == $pgw['golongan'] ):?>
                                                                <option value="<?= $g;?>" selected><?= $g;?></option>
                                                            <?php else :?>
                                                                <option value="<?= $g;?>"><?= $g;?></option>
                                                            <?php endif;?>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="jabatan1" required value="<?= $pgw['jabatan'];?>">
                                                    <label class="form-label">Jabatan</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tmpt_ajar1" required value="<?= $pgw['tmpt_ajar'];?>">
                                                    <label class="form-label">Instansi</label>
                                                </div>
                                                <div class="help-info"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    Kecamatan
                                                    <select class="form-control show-tick" name="kec1">
                                                        <option value="<?= $kec;?>" selected><?= $kec;?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>Status</p>
                                                    <select class="form-control show-tick" name="status1">
                                                        <option></option>
                                                        <?php foreach($status as $st):?>
                                                            <?php if($st == $pgw['status'] ):?>
                                                                <option value="<?= $st;?>" selected><?= $st;?></option>
                                                            <?php else :?>
                                                                <option value="<?= $st;?>"><?= $st;?></option>
                                                            <?php endif;?>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary waves-effect" type="submit">Update</button>
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
        <?php endforeach;?>
    </section>

    