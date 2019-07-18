                    <div class="body table-responsive">
                        <?php foreach($usia as $u):?>
                            <h4> Data Pedidikan Kecamatan <?= $u['kecamatan'];?> Tahun <?= $u['tahun'];?></h4>
                        <?php endforeach;?> 
                        <hr>
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
                                    <!-- <th width="12%">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td colspan="11"><b>VII. Pendidikan Non Formal*</b></td>
                                </tr>
                                <?php foreach($usia as $u):?>
                                <tr>
                                    <td align="center">2</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="10">1. Pendidikan Ketrampilan dan Pelatihan Kerja* (se-kabupaten)</td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Jumlah Lembaga Pendidikan Ketrampilan dan Pelatihan Kerja</td>
                                    <td align="right"><?= $u['jml_lkpk'];?></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Jumlah Kelas Lembaga Pendidikan Ketrampilan dan Pelatihan Kerja</td>
                                    <td align="right"><?= $u['jml_kls_lkpk'];?></td>
                                    <td>Ruang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">3. Jumlah Siswa Lembaga Pendidikan Ketrampilan dan Pelatihan Kerja</td>
                                    <td align="right"><?= $u['jml_sw_lkpk'];?></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">4. Jumlah Tenaga Pengajar Lembaga Pendidikan Ketrampilan dan Pelatihan Kerja</td>
                                    <td align="right"><?= $u['jml_tp_lkpk'];?></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="10">2. Pendidikan Kesetaraan* (se-kabupaten)</td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="9">1. Pendidikan Kesetaraan Paket A*</td>
                                </tr>
                                <tr>
                                    <td align="center">7</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">1. Jumlah Siswa</td>
                                    <td align="right"><?= $u['paket_a_s'];?></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">8</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">2. Jumlah Tenaga Pengajar</td>
                                    <td align="right"><?= $u['paket_a_tp'];?></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">9</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="9">2. Pendidikan Kesetaraan Paket B*</td>
                                </tr>
                                <tr>
                                    <td align="center">10</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">1. Jumlah Siswa</td>
                                    <td align="right"><?= $u['paket_b_s'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">11</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">2. Jumlah Tenaga Pengajar</td>
                                    <td align="right"><?= $u['paket_b_tp'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">12</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="10">3. Pusat Kegiatan Belajar Masyarakat (PKBM)*</td>
                                </tr>
                                <tr>
                                    <td align="center">12</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Jumlah Pusat Kegiatan Belajar Masyarakat**</td>
                                    <td align="right"><b><?= $u['jml_tp_pkbm'] + $u['jml_ps_pkbm'];?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">13</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">1. Jumlah Peserta Pusat Kegiatan Belajar Masyarakat**</td>
                                    <td align="right"><b><?= $u['jml_ps_pkbm'];?></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">14</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="4">2. Jumlah Tenaga Pengajar Pusat Kegiatan Belajar Masyarakat**</td>
                                    <td align="right"><b><?= $u['jml_tp_pkbm'];?></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <?php endforeach;?>                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</section>