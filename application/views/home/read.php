<section class="section">
	<div class="section-header">
        <div class="col-12">
		<marquee direction="left" scrollamount="5" align="center">Nilaiku adalah aplikasi pemilihan umum yang dibangun untuk membantu sekolah dalam melaksanakan penilaian.</marquee>
		</div>
    </div>

	<div class="row">
		<div class="col-md-4">
			<div class="card card-hero">
				<div class="card-header">
					<div class="card-icon">
					<i class="far fa-question-circle"></i>
					</div>
					<h5>Mata Lomba <b><?=__session('bidang')?></b></h5>
					<!-- <div class="card-description">Mata Lomba <b><?=__session('bidang')?></b></div> -->
				</div>
				<div class="card-body p-0">
					<div class="tickets-list">
					<?php foreach($peserta as $row): ?>
					<a href="#add"  data-toggle="modal" class="ticket-item">
						<div class="ticket-title">
						<h4><?=$row['fullname']?></h4>
						</div>
						<div class="ticket-info">
						<div><?=$row['bidang']?></div>
						<div class="bullet"></div>
						<div class="text-primary"><?=$row['sekolah_asal']?></div>
						</div>
					</a>
					<?php endforeach; ?>
					
					<a href="features-tickets.html" class="ticket-item ticket-more">
						View All <i class="fas fa-chevron-right"></i>
					</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4>Top 10 </h4>
					<div class="card-header-action">
					<a href="" class="btn btn-danger"><b><?=__session('bidang')?></b></a>
					</div>
				</div>
				<div class="card-body p-0">
					<div class="table-responsive table-invoice">
					<table class="table table-striped">
						<tr>
							<th>Mata Lomba</th>
							<th>Nama</th>
							<th>Total Nilai</th>
							<th>Action</th>
						</tr>
						<tr>
							<td><a href="#">INV-87239</a></td>
							<td class="font-weight-600">Kusnadi</td>
							<td><div class="badge badge-warning">Unpaid</div></td>
							<td>
								<a href="#" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
							</td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php require_once('modals/_home.php'); ?>
