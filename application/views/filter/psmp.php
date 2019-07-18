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
                                <th colspan="7" width="50%">Nama</th>
                                <th width="10%">Nilai</th>
                                <th width="10%">Satuan</th>
                                <th width="20%">Sumber Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td colspan="11"><b>V. Pendidikan Menengah Pertama*</b></td>
                            </tr>
                            <?php foreach($usia as $u):?>
                            <tr>
                              <td align="center">2</td>
                              <td width="1%">&nbsp;</td>
                              <td colspan="6">1. Jumlah Siswa SMP/Mts/Sederajat ** </td>
                              <td align="right"><b><?= $u['jml_siswa'];?></b></td>
                              <td>Orang</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td align="center">3</td>
                              <td width="1%">&nbsp;</td>
                              <td colspan="6">2. Jumlah Bangunan SMP/Mts/Sederajat**</td>
                              <td align="right"><b><?= $u['jml_bg_baik']+$u['jml_bg_tdk_baik'];?></b></td>
                              <td>Unit</td>
                              <td></td>
                            </tr>
                            <tr>
                                <td align="center">4</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Bangunan Baik **</td>
                                <td align="right"><b><?= $u['jml_bg_baik'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">5</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Bangunan Tidak Baik **</td>
                                <td align="right"><b><?= $u['jml_bg_tdk_baik'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">6</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">3. Jumlah Pengelola SMP/Mts/Sederajat** (se-kabupaten) </td>
                                <td align="right"><b><?= $u['jml_plsn'] + $u['jml_plss'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">7</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Negeri</td>
                                <td align="right"><?= $u['jml_plsn'];?></td>
                                <td>Unit</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">8</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Swasta</td>
                                <td align="right"><?= $u['jml_plss'];?></td>
                                <td>Unit</td>
                                <td>Dinas Pendidikan Daerah</td> 
                            </tr>
                            <tr>
                                <td align="center">9</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">4. Jumlah Ruang Kelas SMP/Mts/Sederajat </td>
                                <td align="right"><?= $u['jml_ruang'];?></td>
                                <td>Ruang</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">10</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">5. Jumlah Tenaga Pendidik SMP/Mts/Sederajat ** (se-kabupaten) </td>
                                <td align="right"><b><?= $u['jml_tp_brst'] + $u['jml_tp_tdk_brst'];?></b></td>
                                <td>Orang</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">11</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Bersertifikat</td>
                                <td align="right"><?= $u['jml_tp_brst'];?></td>
                                <td>Orang</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">12</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Tidak Bersertifikat</td>
                                <td align="right"><?= $u['jml_tp_tdk_brst'];?></td>
                                <td>Orang</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">13</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">6. Rasio Siswa Dengan Tenaga Pendidik (se-kabupaten)</td>
                                <td align="right"><?= $u['rasio'];?></td>
                                <td>%</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">14</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">7. Jumlah Sekolah SMP/Mts/Sederajat Memiliki Fasilitas Laboratorium ** (se-kabupaten)</td>
                                <td align="right"><b><?= $u['jml_labn']+$u['jml_labs'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">15</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Negeri</td>
                                <td align="right"><?= $u['jml_labn'];?></td>
                                <td>Unit</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">16</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Swasta</td>
                                <td align="right"><?= $u['jml_labs'];?></td>
                                <td>Unit</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">17</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">8. Jumlah Sekolah SMP/Mts/Sederajat Memiliki Fasilitas Komputer ** (se-kabupaten)</td>
                                <td align="right"><b><?= $u['jml_komn']+$u['jml_koms'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">18</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Negeri</td>
                                <td align="right"><?= $u['jml_komn'];?></td>
                                <td>Unit</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">19</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Swasta</td>
                                <td align="right"><?= $u['jml_koms'];?></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">20</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">9. Jumlah Sekolah SMP/Mts/Sederajat Memiliki Fasilitas Internet ** (se-kabupaten)</td>
                                <td align="right"><b><?= $u['jml_intn'] + $u['jml_ints'];?></b></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">21</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">1. Negeri</td>
                                <td align="right"><?= $u['jml_intn'];?></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">22</td>
                                <td width="1%">&nbsp;</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="5">2. Swasta</td>
                                <td align="right"><?= $u['jml_ints'];?></td>
                                <td>Unit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center">23</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">10. Angka Partisipasi Murni SMP/Mts/Sederajat (se-kabupaten)</td>
                                <td align="right"><?= $u['p_murni'];?></td>
                                <td>%</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">24</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">11. Angka Partisipasi Kasar SMP/Mts/Sederajat (se-kabupaten)</td>
                                <td align="right"><?= $u['p_kasar'];?></td>
                                <td>%</td>
                                <td>Dinas Pendidikan Daerah</td>
                            </tr>
                            <tr>
                                <td align="center">25</td>
                                <td width="1%">&nbsp;</td>
                                <td colspan="6">12. Angka Partisipasi Sekolah SMP/Mts/Sederajat (se-kabupaten)</td>
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