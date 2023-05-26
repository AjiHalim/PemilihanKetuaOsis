<style type="text/css">
	/*tombol back*/
    .fa.fa-chevron-left {
      position: absolute;
      right: 3%;
      color: white;
      font-weight: bold;
      top: 20px;
    }
</style>
<?php
	foreach($data_tahun as $get){
		$tahun = $get['tahun_pemilu'];
		// $id = $get['id_tahun'];
	}
	foreach ($kode as $key) {
		$total = $key['total_suara'];
	}
	foreach ($pemilih as $key) {
		$jumlah = $key['total_pemilih'];
	}
?>
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card mt-3" style="width: 90%; margin: auto; border-radius: 5px">
			<div class="card-heaeder bg-info" style="height:5%; padding: 10px">
				<h5>Data Pemilihan Tahun <?php echo $tahun;?></h5>
				<?php 
					if ($this->session->userdata('level') == 'admin') {
						?>
							<a href="<?=base_url('admin/lihat_tahun')?>">
								<i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
							</a>
						<?php
					}elseif ($this->session->userdata('level') == 'anggota') {
						?>
							<a href="<?=base_url('anggota/lihat_tahun')?>">
								<i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
							</a>
						<?php
					}
				 ?>
			</div>
			<div class="card-body">
				<div class="row">
					<h4 class="col-sm-6">Total Suara Pemilihan: <?php echo $total ?></h4>
					<h4 class="col-sm-6">Total Jumlah Suara : <?php echo $jumlah ?></h4>
					
				</div>
				<table class="table table-info">
				  <thead class="thead-dark">
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Nama</th>
					  <th scope="col">Jumlah Pemilih</th>
					  <th scope="col">Presentase Pemilih</th>
					</tr>
				  </thead>
				  <tbody>
					<?php
					$no = 0;
						foreach($data_tahun as $get){
					?>
							<tr>
							  <th scope="row"><?php echo ++$no  ?></th>
							  <td><?php echo $get['name'] ?></td>
							  <td><?php echo $get['statistic_pemilih'] ?></td>
							  <td><?php echo number_format($get['statistic_pemilih'] / $jumlah * 100, 2) ?>%</td>
							</tr>
					<?php
						}
					?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>