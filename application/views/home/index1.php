<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Kas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Debit</th>
                        <th>Kategori</th>
                        <th>Kredit</th>
                    </tr>
                </thead>
                <?php 
                
                $no=1;
                foreach($rekap as $rk) :

                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rk->tanggal ?></td>
                        <td><?php echo $rk->keterangan?></td>
                        <td><?php echo $rk->pemasukan ?></td>
                        <td><?php echo $rk->jenis ?></td>
                        <td><?php echo $rk->pengeluaran ?></td>
                    </tr>
                    <?php 
                    endforeach;
                    ?>
                            <tr>
                                <td colspan="3" style="text-align: left; font-size: 16px; color: maroon;">Total Kas Masuk :</td>
                                <td style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo $total_masuk; ?></font></td>
                            </tr>

                            <tr>
                                <td colspan="5" style="text-align: left; font-size: 16px; color: maroon;">Total Kas Keluar :</td>
                                <td style="font-size: 17px; text-align: right; "><font style="color: red;"><?php echo $total_keluar;  ?></font></td>
                            </tr>

                            <tr>
                                <td colspan="4" style="text-align: left; font-size: 16px; color: red;">Saldo Akhir :</td>
                                <th style="font-size: 17px; text-align: right;"><font style="color: purple;"><?php echo $total_masuk - $total_keluar;  ?></font></th>
                            </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
