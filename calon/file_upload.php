<?php  ?>
<div class="content-wrapper">
  	
  		<form action="<?=base_url('calon/file_upload')?>" method ="post" enctype = "multipart/form-data">
  			<label for="gambar">Pilih Gambar</label>
  			<input type="file" name="gambar"  id="exampleInputFile">
  			<input type="submit" name="kirim">
  		</form>
</div>