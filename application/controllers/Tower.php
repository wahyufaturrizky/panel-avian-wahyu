<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tower extends CI_Controller {
	
	private $tbl = 'dtb_new_tower';

	public function __construct() {
        parent::__construct();
		$this->load->model('my_query'); 
	}

	public function index(){
		$url = [
			'0'=> base_url(),
			'1'=> "#",
			'2'=> base_url().'Tower/' ,
		];
		$breadcrumb = [
			'0'=>'Dashboard' ,
			'1'=>'Frontend',
			'2'=>'Gedung'
		];

		$data = [
			'title' => 'Gedung' ,
			'breadcrumb' => $breadcrumb , 'b_url' => $url,
			'content' => $this->load->view('back/tower/index' ,'',true),
		];
		$this->load->view('back/layout/page'  , $data);
	}

	// ///////////////////////// LOAD DATA /////////////////////  //
	function get_detail($id){

		$where = [
			'id' => $id
		];

		$resp = $this->my_query->get_data('*' , $this->tbl , $where )->row();

		echo json_encode($resp);

	}

	function get_data_tower(){
		$select = '*';
		
		//LIMIT
		$limit = array(
			'start'  => $this->input->get('start'),
			'finish' => $this->input->get('length')
		);
		//WHERE LIKE
		$where_like['data'][] = array(
			'column' => 'id,pic_01,pic_02,pic_03,pic_04,header_01,header_02,header_03,description_01,description_02,description_03',
			'param'	 => $this->input->get('search[value]')
		);
		
		$index_order = $this->input->get('order[0][column]');
		$order['data'][] = array(
			'column' => $this->input->get('columns['.$index_order.'][name]'),
			'type'	 => $this->input->get('order[0][dir]')
		);

		$query_total  = $this->my_query->get_data_complex($select,$this->tbl,NULL,NULL,NULL,null,null,null);
		$query_filter = $this->my_query->get_data_complex($select,$this->tbl,NULL,$where_like,$order,null,null,null);
		$query        = $this->my_query->get_data_complex($select,$this->tbl,$limit,$where_like,$order,null,null,null);

		$response['data'] = array();
		if ($query<>false) {
			$no = $limit['start']+1;
			foreach ($query->result() as $val) {
				if ($val->id>0) {

					$config = ' <button type="button" onclick="do_edit('.$val->id.')" class="btn-warning btn btn-rounded 				btn-sm btn-circle">
            						<i class="fa fa-pencil"></i>
            					</button>
            					<button type="button" onclick="do_delete('.$val->id.')" class="btn-danger btn btn-rounded btn-sm btn-circle">
            						<i class="fa fa-trash"></i>
            					</button>';

            		$img_01 = "<img src='".base_url()."assets/picture/pic_tower/".$val->pic_01."' style='height:80px;width:80px;'>";
            		$img_02 = "<img src='".base_url()."assets/picture/pic_tower/".$val->pic_02."' style='height:80px;width:80px;'>";
            		$img_03 = "<img src='".base_url()."assets/picture/pic_tower/".$val->pic_03."' style='height:80px;width:80px;'>";
            		$img_04 = "<img src='".base_url()."assets/picture/pic_tower/".$val->pic_04."' style='height:80px;width:80px;'>";

					$response['data'][] = array(
						$val->id,
						$img_01,
						$img_02,
						$img_03,
						$img_04,
						$val->header_01,
						$val->header_02,
						$val->header_03,
						$val->description_01,
						$val->description_02,
						$val->description_03,
						$config,
					);
					$no++;	
				}
			}
		}

		$response['recordsTotal'] = 0;
		if ($query_total<>false) {
			$response['recordsTotal'] = $query_total->num_rows();
		}
		$response['recordsFiltered'] = 0;
		if ($query_filter<>false) {
			$response['recordsFiltered'] = $query_filter->num_rows();
		}

		echo json_encode($response);
	}

	// //////////////////////// SAVE DATA ///////////////////////// //


	function save_tower($id=null){
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$config['upload_path']          = './assets/picture/pic_tower/';
	    $config['allowed_types']        = 'jpeg|jpg|png';
	    $config['encrypt_name']         = true;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1048 * 3;
	    $this->load->library('upload', $config);

		$data = [
			'header_01'        => $this->input->post('header_01'),
			'header_02'        => $this->input->post('header_02'),
			'header_03'        => $this->input->post('header_03'),
			'description_01' => $this->input->post('desc_01'),
			'description_02' => $this->input->post('desc_02'),
			'description_03' => $this->input->post('desc_03')
		];

		if ($id != null && $id > 0) {
			$where    = ['id' => $id];
			$old_img  = $this->my_query->get_data('*' , $this->tbl ,$where  )->row()->pic_01;
			$old_path = 'assets/picture/pic_tower/'.$old_img;
			if ( file_exists( $old_path) ) {
				unlink($old_path);
			}
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];

				$data['pic_01'] = $resp_img['success']['file_name'];

				$msg = ['msg' => 'Berhasil Diupdate '];
				
			} else {
				$data_01['pic_01'] = "no-image.png"; 
				$msg = ['msg' => 'Berhasil Diupdate namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , $where , $data_01);
		} 

		else if ($id != null && $id > 0) {
			$where    = ['id' => $id];
			$old_img  = $this->my_query->get_data('*' , $this->tbl ,$where  )->row()->pic_02;
			$old_path = 'assets/picture/pic_tower/'.$old_img;
			if ( file_exists( $old_path) ) {
				unlink($old_path);
			}
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];

				$data['pic_02'] = $resp_img['success']['file_name'];

				$msg = ['msg' => 'Berhasil Diupdate '];
				
			} else {
				$data['pic_02'] = "no-image.png"; 
				$msg = ['msg' => 'Berhasil Diupdate namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , $where , $data);
		} 

		else if ($id != null && $id > 0) {
			$where    = ['id' => $id];
			$old_img  = $this->my_query->get_data('*' , $this->tbl ,$where  )->row()->pic_03;
			$old_path = 'assets/picture/pic_tower/'.$old_img;
			if ( file_exists( $old_path) ) {
				unlink($old_path);
			}
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];

				$data['pic_03'] = $resp_img['success']['file_name'];

				$msg = ['msg' => 'Berhasil Diupdate '];
				
			} else {
				$data['pic_03'] = "no-image.png"; 
				$msg = ['msg' => 'Berhasil Diupdate namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , $where , $data);
		}

		else if ($id != null && $id > 0) {
			$where    = ['id' => $id];
			$old_img  = $this->my_query->get_data('*' , $this->tbl ,$where  )->row()->pic_04;
			$old_path = 'assets/picture/pic_tower/'.$old_img;
			if ( file_exists( $old_path) ) {
				unlink($old_path);
			}
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];

				$data['pic_04'] = $resp_img['success']['file_name'];

				$msg = ['msg' => 'Berhasil Diupdate '];
				
			} else {
				$data['pic_04'] = "no-image.png"; 
				$msg = ['msg' => 'Berhasil Diupdate namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , $where , $data);
		} 
		else {
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];
				$data['pic_01'] = $resp_img['success']['file_name'];
				$msg = ['msg' => 'Berhasil disimpan '];
			} 
			else if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];
				$data['pic_02'] = $resp_img['success']['file_name'];
				$msg = ['msg' => 'Berhasil disimpan '];
			} 
			else if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];
				$data['pic_03'] = $resp_img['success']['file_name'];
				$msg = ['msg' => 'Berhasil disimpan '];
			} 
			else if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];
				$data['pic_04'] = $resp_img['success']['file_name'];
				$msg = ['msg' => 'Berhasil disimpan '];
			} 
			else {
				$msg = ['msg' => 'Berhasil disimpan namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , null , $data);
		}
		echo json_encode($msg);

	}

}
 ?>