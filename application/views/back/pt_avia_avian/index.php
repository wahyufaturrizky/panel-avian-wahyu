<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">PT Avia Avian</h4> -->

			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data PT Avia Avian
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data PT Avia Avian
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="index">

					<div style="overflow-x:auto;">
						<table class="table table-bordered table-hover" id="tbl1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title Job</th>
									<th>Position</th>
									<th>Detail</th>
									<th>Requirement</th>
									<th>Additional Info</th>
									<th>Available from date</th>
									<th>Available to date</th>
									<th>Create date</th>
									<th>Update date</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
	
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="input">
					<div class="card-box">
						<h4 class="m-t-0 header-title">Input PT Avia Avian Avianbrands</h4>
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
											<label class="col-2 col-form-label">Title Job PT Avia Avian</label>
											<div class="col-10">
												<select class="form-control" name="title" id="i_title">
													<option>Please fill Title Job name...</option>
													<option value="PT Avia Avian">PT Avia Avian</option>
													<option value="Tirtakencana Tatawarna">Tirtakencana Tatawarna</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Position PT Avia Avian</label>
											<div class="col-10">
												<select class="form-control" name="position" id="i_position">
													<option>Please fill Title Job name...</option>
													<option value="Marketing Manager">Marketing Manager</option>
													<option value="Sales">Sales</option>
													<option value="Accounting">Accounting</option>
													<option value="Admin">Admin</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Detail Job *</label>
											<div class="col-10">
												<textarea id="i_detail" class="form-control" name="detail" rows="8"
													placeholder="Please fill detail here..."></textarea>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Requirement Job *</label>
											<div class="col-10">
												<textarea id="i_requirement" class="form-control" name="requirement" rows="8"
													placeholder="Please fill requirement here..."></textarea>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Additional info Job *</label>
											<div class="col-10">
												<textarea id="i_additional_info" class="form-control" name="additional_info" rows="8"
													placeholder="Please fill requirement here..."></textarea>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Available from date</label>
											<div class="col-10">
												<input type="date" id="i_available_from_date" class="form-control" name="available_from_date" rows="8" placeholder="Please fill date create here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Available to date</label>
											<div class="col-10">
												<input type="date" id="i_available_to_date" class="form-control" name="available_to_date" rows="8" placeholder="Please fill date create here...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Create date</label>
											<div class="col-10">
												<input type="date" id="i_created_date" class="form-control" name="created_date" rows="8" placeholder="Please fill date create here...">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-2 col-form-label">Update date</label>
											<div class="col-10">
												<input type="date" id="i_updated_date" class="form-control" name="updated_date" rows="8" placeholder="Please fill date create here...">
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

<?php $this->load->view('back/pt_avia_avian/js_pt_avia_avian') ?>