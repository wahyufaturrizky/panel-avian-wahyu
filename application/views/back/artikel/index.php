<div class="row">
	<div class="col-xl-12">
		<div>
			<!-- <h4 class="header-title m-t-0 m-b-30">Gedung</h4> -->
			<div id="input">
				<form class="form-horizontal" role="form" id="form1" enctype="multipart/form-data">
					<button type="button" id="btn-edit" class="btn btn-info mb-4">
						<i class="fa fa-pencil"></i> Edit Kontent
					</button>
					<div class="row">
						<div class="col-md-6">
							<div class="card-box">
								<h4 class="m-t-0 header-title">Input Foto Artikel</h4>
								<hr>
								<div class="row">
									<div class="col-12">
										<div class="p-20">
											<div class="form-group row">
												<label class="col-2 col-form-label">ID</label>
												<div class="col-10">
													<input type="text" id="id" readonly="" class="form-control" placeholder="Auto Generate">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">File Gambar 01 *</label>
												<div class="col-10">
													<input id="img_upload" name="files" type="file" class="form-control head">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label"></label>
												<div class="col-10">
													<img id="img_preview" src="<?= base_url().DEFAULT_IMG ?>" id="images"
														style="height:100px;width: 100px;border: 1px solid aqua">
												</div>
											</div>
										</div>
									</div>

								</div>
								<!-- end row -->

							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box">
								<h4 class="m-t-0 header-title">Input Header & Deskripsi Artikel</h4>
								<hr>
								<div class="row">
									<div class="col-12">
										<div class="p-20">
											<div class="form-group row">
												<label class="col-2 col-form-label">Header *</label>
												<div class="col-10">
													<input required="" id="i_header" name="header" type="text" class="form-control head"
														placeholder="Please fill header......">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Deskripsi *</label>
												<div class="col-10">
													<textarea id="i_desc" class="form-control head" name="desc" rows="8"
														placeholder="Please fill description here..."></textarea>
												</div>
											</div>

											<hr>

											<div class="col-4 offset-8">

													<button onclick="edit_process()" style="display:none;" type="button" id="btn-save"
														class="btn btn-info">
														<i class="fa fa-pencil"></i> Simpan Perubahan
													</button>
												</div>

											</div>
										</div>
									</div>

								</div>
								<!-- end row -->

							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('back/artikel/js_artikel') ?>