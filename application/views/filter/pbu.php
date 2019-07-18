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
                                        <td colspan="11"><b>I. Penduduk Berdasarkan Usia Sekolah*</b></td>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach($usia as $u):?>
                                    <tr>
                                        <td align="center">2</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">1. Jumlah Penduduk Usia 0-6 Tahun** </td>
                                        <td align="right"><b><?= $u['usia0_6'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">2. Jumlah Penduduk Usia 7-12 Tahun** </td>
                                        <td align="right"><b><?= $u['usia7_12'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <tr>
                                        <td align="center">4</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">3. Jumlah Penduduk Usia 13-15 Tahun** </td>
                                        <td align="right"><b><?= $u['usia13_15'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <tr>
                                        <td align="center">5</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">4. Jumlah Penduduk Usia 16-18 Tahun** </td>
                                        <td align="right"><b><?= $u['usia16_18'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>  
                                <?php $i++;?>
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