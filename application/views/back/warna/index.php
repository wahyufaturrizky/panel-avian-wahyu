<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">Warna Avian Cat</h4> -->

			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data Warna Avian Cat
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data Warna Avian Cat
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="index">

					<table class="table table-bordered table-hover" id="tbl1">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama Warna Avian Cat</th>
								<th>Code Warna Avian Cat</th>
								<th>Code Red</th>
								<th>Code Green</th>
								<th>Code Blue</th>
								<th>Code HEX</th>
								<th>Can Size</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="input">
					<div class="card-box">
						<h4 class="m-t-0 header-title">Input Warna Avian Cat Avianbrands</h4>
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
											<label class="col-2 col-form-label">Nama Warna Avian Cat *</label>
											<div class="col-10">
												<input required="" id="i_name_color" name="name_color" type="text" class="form-control" placeholder="Please fill color name...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Code Warna Avian Cat</label>
											<div class="col-10">
												<input type="text" name="code" id="i_code" class="form-control" placeholder="Please fill with code color...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Red Code Warna Avian Cat</label>
											<div class="col-10">
												<input id="i_red" class="form-control" name="red" rows="8" placeholder="Please fill red code here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Green Code Warna Avian Cat</label>
											<div class="col-10">
												<input id="i_green" class="form-control" type="text" name="green" rows="8" placeholder="Please fill green code here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Blue Code Warna Avian Cat</label>
											<div class="col-10">
												<input id="i_blue" class="form-control" type="text" name="blue" rows="8" placeholder="Please fill blue code here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">HEX Code Warna Avian Cat</label>
											<div class="col-10">
												<input id="i_hex_code" class="form-control" type="text" name="hex_code" rows="8" placeholder="Please fill hex code here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Can size Warna Avian Cat</label>
											<div class="col-10">
												<input id="i_can_size" class="form-control" type="number" name="can_size" rows="8" placeholder="Please fill can size here...">
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

<?php $this->load->view('back/warna/js_warna') ?>