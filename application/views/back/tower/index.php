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
									<h4 class="m-t-0 header-title">Input Foto Gedung Avianbrands</h4>
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
														<input id="img_upload_01" name="files" type="file" class="form-control head">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label"></label>
													<div class="col-10">
														<img id="img_preview_01" src="<?= base_url().DEFAULT_IMG ?>" id="images"
															style="height:100px;width: 100px;border: 1px solid aqua">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">File Gambar 02 *</label>
													<div class="col-10">
														<input id="img_upload_02" name="files" type="file" class="form-control  head">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label"></label>
													<div class="col-10">
														<img id="img_preview_02" src="<?= base_url().DEFAULT_IMG ?>" id="images"
															style="height:100px;width: 100px;border: 1px solid aqua">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">File Gambar 03 *</label>
													<div class="col-10">
														<input id="img_upload_03" name="files" type="file" class="form-control  head">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label"></label>
													<div class="col-10">
														<img id="img_preview_03" src="<?= base_url().DEFAULT_IMG ?>" id="images"
															style="height:100px;width: 100px;border: 1px solid aqua">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">File Gambar 04 *</label>
													<div class="col-10">
														<input id="img_upload_04" name="files" type="file" class="form-control head">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label"></label>
													<div class="col-10">
														<img id="img_preview_04" src="<?= base_url().DEFAULT_IMG ?>" id="images"
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
									<h4 class="m-t-0 header-title">Input Header & Deskripsi Gedung Avianbrands</h4>
									<hr>
									<div class="row">
										<div class="col-12">
											<div class="p-20">
												<div class="form-group row">
													<label class="col-2 col-form-label">Header 01*</label>
													<div class="col-10">
														<input required="" id="i_header_01" name="header_01" type="text" class="form-control head"
															placeholder="Please fill header......">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">Header 02*</label>
													<div class="col-10">
														<input required="" id="i_header_02" name="header_02" type="text" class="form-control head"
															placeholder="Please fill header......">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">Header 03*</label>
													<div class="col-10">
														<input required="" id="i_header_03" name="header_03" type="text" class="form-control head"
															placeholder="Please fill header......">
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">Deskripsi 01 *</label>
													<div class="col-10">
														<textarea id="i_desc_01" class="form-control head" name="desc_01" rows="8"
															placeholder="Please fill description here..."></textarea>
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">Deskripsi 02 *</label>
													<div class="col-10">
														<textarea id="i_desc_02" class="form-control head" name="desc_02" rows="8"
															placeholder="Please fill description here..."></textarea>
													</div>
												</div>
	
												<div class="form-group row">
													<label class="col-2 col-form-label">Deskripsi 03 *</label>
													<div class="col-10">
														<textarea id="i_desc_03" class="form-control head" name="desc_03" rows="8"
															placeholder="Please fill description here..."></textarea>
													</div>
												</div>
	
												<hr>
	
												<div class="col-4 offset-8">
													<div class="pull-right">
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

<?php $this->load->view('back/tower/js_tower') ?>