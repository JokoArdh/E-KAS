  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-info-800">Update Data Kas Masuk</h1>

<div class="card">
			<div class="card-header">Edit Data Pemasukan</div>
      <?php foreach($debet as $dbt): ?>
			<div class="card-body">
			
			<form method="post" action="<?php echo base_url('debet/update'); ?>">
				<input type="hidden" name="id_note"  value="<?php echo $dbt->id_note ?>"/>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal" value="<?php echo $dbt->tanggal ?>" >
				</div>
        <div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan"><?php echo $dbt->keterangan ?></textarea>
				</div>
				<div class="form-group">
					<label for="keterangan">Jumlah</label>
					<input type="number" class="form-control" name="pemasukan" value="<?php echo $dbt->pemasukan ?>">
				</div>
 
				
 
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
      <?php endforeach; ?>
	</div>
   

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
