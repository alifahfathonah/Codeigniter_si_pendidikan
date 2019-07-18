                <div class="body table-responsive">
                    <?php foreach($usia as $u):?>
                        <h4> Data Pedidikan Kecamatan <?= $u['kecamatan'];?> Tahun <?= $u['tahun'];?></h4>
                    <?php endforeach;?> 
                    <hr>
                        <table class="table table-bordered">
                            <thead>
                            <tr></tr>
                                <tr>
                                    <th width="3%">No</th>
                                    <th colspan="7" width="45%">Nama</th>
                                    <th width="10%">Nilai</th>
                                    <th width="10%">Satuan</th>
                                    <th width="20%">Sumber Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td colspan="11"><b>IV. Pendidikan Dasar*</b></td>
                                </tr>
                                <?php foreach($usia as $u):?>
                                <tr>
                                    <td align="center">2</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">1. Jumlah Siswa SD/MI/Sederajat ** (se-kabupaten) </td>
                                    <td align="right"><b><?= $u['jml_siswa_sd'] + $u['jml_siswa_mi'];?></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Jumlah Siswa SD**</td>
                                    <td align="right"><?= $u['jml_siswa_sd'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Jumlah Siswa MI**</td>
                                    <td align="right"><?= $u['jml_siswa_mi'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">2. Jumlah Bangunan SD/MI/Sederajat**</td>
                                    <td align="right"><b><?= $u['jml_bg_baik'] + $u['jml_bg_tdk_baik'];?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bangunan Baik **</td>
                                    <td align="right"><b><?= $u['jml_bg_baik'];?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">7</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Bangunan Tidak Baik **</td>
                                    <td align="right"><b><?= $u['jml_bg_tdk_baik'];?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">8</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">3. Jumlah Pengelola SD/MI/Sederajat** (se-kabupaten)</td>
                                    <td align="right"><b><?= $u['jml_plsn'] + $u['jml_plss'];?></b></td>
                                    <td>Unit</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">9</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Negeri</td>
                                    <td align="right"><?= $u['jml_plsn'];?></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">10</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Swasta</td>
                                    <td align="right"><?= $u['jml_plss'];?></td>
                                    <td>Unit</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">11</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">4. Jumlah Ruang Kelas SD/MI/Sederajat (se-kabupaten)</td>
                                    <td align="right"><?= $u['jml_ruang'];?></td>
                                    <td>Ruang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">12</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">5. Jumlah Tenaga Pendidik SD/MI/Sederajat ** (se-kabupaten)</td>
                                    <td align="right"><b><?= $u['jml_tp_brst'] + $u['jml_tp_tdk_brst'];?></b></td>
                                    <td>Orang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td align="center">13</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">1. Bersertifikat</td>
                                    <td align="right"><?= $u['jml_tp_brst'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">14</td>
                                    <td width="1%">&nbsp;</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="5">2. Tidak Bersertifikat</td>
                                    <td align="right"><?= $u['jml_tp_tdk_brst'];?></td>
                                    <td>Orang</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">15</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">6. Rasio Siswa dengan Tenaga Pendidik (se-kabupaten)</td>
                                    <td align="right"><?= $u['rasio'];?></td>
                                    <td>%</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">16</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">7. Angka Partisipasi Murni SD/MI/Sederajat (se-kabupaten)</td>
                                    <td align="right"><?= $u['p_murni'];?></td>
                                    <td>%</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">17</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">8. Angka Partisipasi Kasar SD/MI/Sederajat (se-kabupaten)</td>
                                    <td align="right"><?= $u['p_kasar'];?></td>
                                    <td>%</td>
                                    <td>Dinas Pendidikan Daerah</td>
                                </tr>
                                <tr>
                                    <td align="center">18</td>
                                    <td width="1%">&nbsp;</td>
                                    <td colspan="6">9. Angka Partisipasi Sekolah SD/MI/Sederajat (se-kabupaten)</td>
                                    <td align="right"><?= $u['p_sekolah'];?></td>
                                    <td>%</td>
                                    <td>Dinas Pendidikan Daerah</td>
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