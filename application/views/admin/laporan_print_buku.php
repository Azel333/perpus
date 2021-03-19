<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		.table-data
		{
			width: 100%;
			border-collapse: collapse;
		}
		.table-data tr th,
		.table-data tr td
		{
			border: 1px solid black;
			font-size: 10pt;
		}
	</style>
	<h3>Laporan Data Buku Perpustakaan Online</h3>
	<br>
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Tahun Terbit</th>
				<th>Penerbit</th>
				<th>ISBN</th>
				<th>Jumlah Buku</th>
				<th>Lokasi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach ($buku as $b) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><img src="<?php echo base_url();?>assets/upload/<?=$b->gambar;?>" widht="80" height="80" alt="gambar tidak ada"></td>
				<td><?= $b->judul_buku ?></td>
				<td><?= $b->pengarang ?></td>
				<td><?= $b->thn_terbit ?></td>
				<td><?= $b->penerbit ?></td>
				<td><?= $b->isbn ?></td>
				<td><?= $b->jumlah_buku ?></td>
				<td><?= $b->lokasi ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>