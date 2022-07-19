<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kas Keluar</h6>
        <span title="Tambah Data">
            <button style="float: right;" class="btn-md btn btn-success"data-toggle="modal" data-target="#myModal">
            <b>+ Tambah</b>
            </button>
        </span>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Kredit</th>
                        <th>Kategori</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php 
                
                $no=1;
                foreach($kredit as $kr) :

                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $kr->tanggal ?></td>
                        <td><?php echo $kr->keterangan?></td>
                        <td><?php echo $kr->pengeluaran ?></td>
                        <td><?php echo $kr->jenis ?></td>
                        <td>
                        <a href="<?php echo base_url('kredit/edit/' . $kr->id_note) ?>"  class="btn btn-warning btn-sm" title="Ubah Data"><i class="fa fa-edit"> </i></a>
                        <a href="<?php echo base_url('kredit/hapus/' . $kr->id_note) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm" title="Hapus Data"><i class="fa fa-trash"> </i></a>

                        </td>
                        
                    </tr>
                    <?php 
                    endforeach;
                    ?>
                    <tr>
                        <td colspan="3" style="text-align: left; font-size: 16px; color: maroon;">Total Kas Keluar :</td>
                        <td style="font-size: 17px; text-align: right; "><font style="color: red;"><?php echo $total_keluar;  ?></font></td>
                    
                    </tr>
                               
                </tbody>
            </table>
            <div class="panel-body">
                            <!-- <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                            + Tambah
                        </button> -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('kredit/tambah_kre'); ?>" method="POST">
                                            <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="form-control" type="date" name="tanggal" />
                                                </div>
                                                <div>
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input class="form-control" type="number" name="pengeluaran" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <input class="form-control" type="text" name="jenis" value="pengeluaran"  readonly/>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit"  class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
