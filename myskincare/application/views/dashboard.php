<div class='container-fluid'>

		

	<div class='row text-center'>
	
		<?php foreach ($barang as $brg) : ?>
				<div class="card" style="width: 18rem;">
		  <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">
		  <div class="card-body">
			<h5 class="card-title mb-1"><?php echo $brg->nama_skincare ?>  </h5>
			<small><?php echo $brg->keterangan ?></small><br>
			<span class="badge bg-info text-dark mb-3">Rp. <?php echo $brg->harga ?></span><br>
			<a href="#" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
			<a href="#" class="btn btn-sm btn-warning">Detail</a>
		  </div>
			</div>
		<?php endforeach; ?>
	</div>
</div>