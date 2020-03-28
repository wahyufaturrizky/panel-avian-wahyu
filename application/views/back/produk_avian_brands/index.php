<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">Produk Avian Brands</h4> -->

			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data Produk Avian Brands
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data Produk Avian Brands
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="index">

					<table class="table table-bordered table-hover" id="tbl1">
						<thead>
							<tr>
								<th>ID</th>
								<th>Picture</th>
								<th width="15%">Header</th>
								<th>Description</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="input">
					<div class="card-box">
						<h4 class="m-t-0 header-title">Input Produk Avian Brands Avianbrands</h4>
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
											<label class="col-2 col-form-label">File Gambar (optional)</label>
											<div class="col-10">
												<input id="img_upload" name="files" type="file" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label"></label>
											<div class="col-10">
												<img id="img_preview" src="<?= base_url().DEFAULT_IMG ?>" id="images"
													style="height:100px;width: 100px;border: 1px solid aqua">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Header *</label>
											<div class="col-10">
												<input required="" id="i_header" name="header" type="text" class="form-control" placeholder="Please fill header...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Deskripsi</label>
											<div class="col-10">
												<textarea id="i_desc" class="form-control" name="desc" rows="8" placeholder="Please fill description here..."></textarea>
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

<?php $this->load->view('back/produk_avian_brands/js_produk_avian_brands') ?>