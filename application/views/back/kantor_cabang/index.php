<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">Kantor Cabang</h4> -->

			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data Kantor Cabang
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data Kantor Cabang
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="index">

					<table class="table table-bordered table-hover" id="tbl1">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama Kantor Cabang</th>
								<th>Provinsi Kantor Cabang</th>
								<th>Alamat Kantor Cabang</th>
								<th>Kode Pos Kantor Cabang</th>
								<th>No Handphone Kantor Cabang</th>
								<th>No Telephone Kantor Cabang</th>
								<th>Email Kantor Cabang</th>
								<th>Website Kantor Cabang</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="input">
					<div class="card-box">
						<h4 class="m-t-0 header-title">Input Kantor Cabang Avianbrands</h4>
						<hr>
						<div class="row">
							<div class="col-12">
								<div class="p-20">
									<form class="form-horizontal" role="form" id="form1" enctype="multipart/form-data">

										<div class="form-group row">
											<label class="col-2 col-form-label">ID</label>
											<div class="col-10">
												<input type="text" id="id" readonly="" class="form-control" placeholder="Auto Generate">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Nama Kantor Cabang *</label>
											<div class="col-10">
												<input required="" id="i_name_branch" name="name_branch" type="text" class="form-control" placeholder="Please fill branch office name...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Provinsi Kantor Cabang</label>
											<div class="col-10">
												<input type="text" name="province" id="i_province" class="form-control" placeholder="Please fill with province branch office...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Alamat Kantor Cabang</label>
											<div class="col-10">
												<input id="i_address" class="form-control" name="address" rows="8" placeholder="Please fill address branch office here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Kode Pos Kantor Cabang</label>
											<div class="col-10">
												<input id="i_postal_code" class="form-control" type="number" name="postal_code" rows="8" placeholder="Please fill postal code branch office here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">No handphone Kantor Cabang</label>
											<div class="col-10">
												<input id="i_handphone" class="form-control" type="text" name="handphone" rows="8" placeholder="ex: +62828244449999">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Telephone Kantor Cabang</label>
											<div class="col-10">
												<input id="i_telephone" class="form-control" type="text" name="telephone" rows="8" placeholder="ex: +62828244449999">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Email Kantor Cabang</label>
											<div class="col-10">
												<input id="i_email" class="form-control" type="email" name="email" rows="8" placeholder="ex: yourname@mail.com">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Website Kantor Cabang</label>
											<div class="col-10">
												<input id="i_website" class="form-control" type="text" name="website" rows="8" placeholder="Please fill website branch office here...">
											</div>
										</div>

										<hr>

										<div class="col-4 offset-8">
											<div class="pull-right">
												<button type="submit" id="btn-submit" class="btn btn-success">
													<i class="fa fa-save"></i> Simpan
												</button>

												<button onclick="edit_process()" style="display:none;" type="button" id="btn-edit"
													class="btn btn-info">
													<i class="fa fa-pencil"></i> Simpan Perubahan
												</button>

												<button id="btn-cancel" type="button" class="btn btn-danger">
													<i class="fa fa-times"></i> Cancel
												</button>

											</div>

										</div>
									</form>
								</div>
							</div>

						</div>
						<!-- end row -->

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view('back/kantor_cabang/js_kantor_cabang') ?>