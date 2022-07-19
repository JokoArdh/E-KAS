  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-info-800">Update Data Kas Masuk</h1>

<div class="card">
			<div class="card-header">Edit Data Pemasukan</div>
      <?php foreach($kredit as $kr): ?>
			<div class="card-body">
			
			<form method="post" action="<?php echo base_url('kredit/update'); ?>">
				<input type="hidden" name="id_note"  value="<?php echo $kr->id_note ?>"/>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal" value="<?php echo $kr->tanggal ?>" >
				</div>
        <div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan"><?php echo $kr->keterangan ?></textarea>
				</div>
				<div class="form-group">
					<label for="keterangan">Jumlah</label>
					<input type="number" class="form-control" name="pengeluaran" value="<?php echo $kr->pengeluaran ?>">
				</div>
 
				
 
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
      <?php endforeach; ?>
	</div>
   

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
