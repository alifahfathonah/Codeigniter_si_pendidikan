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
                                        <td colspan="11"><b>II. Pendidikan Anak Usia Dini*</b></td>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach($usia as $u):?>
                                    <tr>
                                        <td align="center">2</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">1. Jumlah Peserta PAUD** </td>
                                        <td align="right"><b><?= $u['peserta_paud'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">2. Jumlah Bangungan PAUD** </td>
                                        <td align="right"><b><?= $u['bangunan_paud'];?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <tr>
                                        <td align="center">4</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">3. Jumlah Tenaga Pengajar PAUD** </td>
                                        <td align="right"><b><?= $u['tenaga_pendidik_paud'];?></b></td>
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