<div class="page-header">
	<h3>Cetak Data Buku</h3>
</div>

<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_buku'; ?>">
	<span class="glyphicon glyphicon-print"></span> Print
</a>
<a class="btn btn-warning btn-md" href="<?php echo base_url().'admin/laporan_pdf_buku'; ?>">
	<span class="glyphicon glyphicon-print"></span> Cetak PDF
</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>ISBN</th>
				<th>Lokasi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach ($buku as $b) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $b->judul_buku ?></td>
				<td><?= $b->pengarang ?></td>
				<td><?= $b->penerbit ?></td>
				<td><?= $b->thn_terbit ?></td>
				<td><?= $b->isbn ?></td>
				<td><?= $b->lokasi ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>