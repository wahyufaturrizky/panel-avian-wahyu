<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">Sejarah</h4> -->

			<button onclick="edit_head()" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> Title Halaman
				Sejarah</button>
			<hr>
			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data Sejarah
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data Sejarah
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
								<th width="10%">Tahun</th>
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
						<h4 class="m-t-0 header-title">Input Sejarah Avianbrands</h4>
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
											<label class="col-2 col-form-label">Tahun *</label>
											<div class="col-10">
												<input required="" id="i_year" name="year" type="text" class="form-control"
													placeholder="Please fill range year ex:(1997 - 1998)">
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

<!-- MODAL -->
<div class="modal" tabindex="-1" role="dialog" id="head_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">History Head </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form_header">
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-2 col-form-label">Title </label>
						<div class="col-10">
							<input type="text" class="form-control head" id="head_title"
								placeholder="ex: Sejarah Avian Brands , Sejarah Avian">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-2 col-form-label">Deskripsi</label>
						<div class="col-10">
							<textarea class="form-control head" id="head_desc"></textarea>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" id="head_edit" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit </button>
					<button type="button" onclick="save_header()" id="head_save" class="btn btn-primary" style="display:none;"><i
							class="fa fa-save"></i> Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('back/sejarah/js_sejarah') ?>