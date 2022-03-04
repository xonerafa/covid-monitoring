    <!--app-content open-->
				<div class="container app-content">
					<div class="">

<br>
<span class="badge badge-danger">Status Kabupaten HSS : <strong>Tanggap Darurat Bencana Covid-19</strong></span>
<br>
<br>       
<div class="row">
    <div class="col-sm-6">
    <div class="card bg-success mb-3">
      <div class="card-body">
          
        <h5 class="card-title">Data Covid-19 Kab. HSS</h5>
        
        <p class="card-text"><strong>Saluran info resmi Covid-19 Kabupaten Hulu Sungai Selatan by Dinas Kominfo HSS </strong></p>
        <a href="https://corona.hulusungaiselatankab.go.id/" target="_blank" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-warning mb-3">
      <div class="card-body">
        <h5 class="card-title">Hoax Buster</h5>
        <p class="card-text"><strong>Data Informasi Hoax terkait Virus Corona atau Covid-19 di Indonesia</strong></p>
        <a href="https://www.covid19.go.id/hoaks-buster/" target ="_blank" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
</div>
<p>
  

<br>
<span class="badge badge-danger"><strong>DATA COVID-19 SELURUH INDONESIA : </strong></span><br>
<br>
						<!-- PAGE-HEADER END -->
					<!--	<div class="row">
						    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
						        <div class="card text-white bg-danger mb-3">
                                    <div class="card-header">HSS ODP</div>
                                    <div class="card-body">
                                    <h2 class="card-title">55 Orang</h2>
                               </div>
                            </div> 
                            </div>
                        </div> -->
						<!-- ROW-1 OPEN -->
						<div class="row">
						  <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->positif; ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->sembuh; ?></h2>
												<p class="text-white mb-0">PASIEN</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card  bg-info img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->meninggal; ?></h2>
												<p class="text-white mb-0">PASIEN</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->
				
						<!-- ROW-3 OPEN -->
						<span class="badge badge-danger"><strong>DATA COVID-19 BERDASARKAN PROVINSI : </strong></span><br>
						<br>
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
									
									</div>
									<div class="card-body">
										<div class="table-responsive service">
											<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Provinsi</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
														
													</tr>
												</thead>
												<tbody>
													     
													<?php foreach($total_provinsi as $q){ ?>
													<tr>
														<td></td>
														<td><?php echo $q->attributes->Provinsi; ?></td>
														<td><?php echo $q->attributes->Kasus_Posi; ?></td>
														<td><?php echo $q->attributes->Kasus_Semb; ?></td>
														<td><?php echo $q->attributes->Kasus_Meni; ?></td>
													</tr>
													<?php } ?>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->
					<div class="alert alert-danger" role="alert">
                         Sumber data dari Kementerian Kesehatan & JHU.  ( Data di ambil dari API for Developer <strong>KAWALCORONA.COM )</strong> 
                    </div>
                    <br>
					</div>
				</div>

				<!-- CONTAINER CLOSED -->
			</div>

	