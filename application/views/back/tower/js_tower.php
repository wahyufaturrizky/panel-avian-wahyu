<script type="text/javascript">
    
    $(document).ready(function() {
        
      do_edit(1);
       $(".head").attr('readonly' , true);

    });

    $("#btn-edit").click(function() {

      $(".head").attr('readonly' , false);
      $("#btn-save").show();    
    });

    function load_table(){
        $('#tbl1').DataTable({
            destroy: true,
            "processing": true,
            "serverSide": true,
            ajax: {
              url: '<?php echo base_url("Tower/get_data_tower/"); ?>'
            },
            "columns": [
              {"name": "id"},
              {"name": "pic_01"},
              {"name": "pic_02"},
              {"name": "pic_03"},
              {"name": "pic_04"},
              {"name": "header_01"},
              {"name": "header_02"},
              {"name": "header_03"},
              {"name": "description_01"},
              {"name": "description_02"},
              {"name": "description_03"},
              {"name": "aksi","orderable": false,"searchable": false,"className": "text-center"},
            ],
            "order": [
              [0, 'asc']
            ],
            "iDisplayLength": 10
        });
    }

    $("#img_upload_01").change(function() {
      readURL(this);
    });

    $("#img_upload_02").change(function() {
      readURL_02(this);
    });

    $("#img_upload_03").change(function() {
      readURL_03(this);
    });

    $("#img_upload_04").change(function() {
      readURL_04(this);
    });

    $("#btn-cancel").click(function() {
        form_to_list()
        $("#form1").trigger('reset');
        $("#btn-submit").show();
        $("#btn-edit").hide();
    });

    $("#form1").submit(function(e) {
        /* Act on the event */
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>Tower/save_tower',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success:function(resp){
                if (resp.status == 200) {
                    Swal.fire(
                      'Berhasil', // header
                      resp.msg, // text
                      'success' // type : success, error, question,
                    )
                    form_to_list();
                    load_table();
                    $("#form1").trigger('reset');
                }
            }
        });
    });
    // ============= funciton with method ============

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#img_preview_01').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function readURL_02(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#img_preview_02').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function readURL_03(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#img_preview_03').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function readURL_04(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#img_preview_04').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function edit_head(){
        $("#head_modal").modal('show');
    }

    function do_edit(id){
        $.ajax({
            url: '<?= base_url() ?>Tower/get_detail/'+id,
            type: 'POST',
            dataType: 'json',
            success:function(data){ 

                list_to_form();
                $("#id").val(data.id);
                $("#i_header_01").val(data.header_01);
                $("#i_header_02").val(data.header_02);
                $("#i_header_03").val(data.header_03);
                $("#i_desc_01").val(data.description_01);
                $("#i_desc_02").val(data.description_02);
                $("#i_desc_03").val(data.description_03);
                $("#img_preview_01").attr('src' , '<?= base_url() ?>assets/picture/pic_tower/'+data.pic_01);
                $("#img_preview_02").attr('src' , '<?= base_url() ?>assets/picture/pic_tower/'+data.pic_02);
                $("#img_preview_03").attr('src' , '<?= base_url() ?>assets/picture/pic_tower/'+data.pic_03);
                $("#img_preview_04").attr('src' , '<?= base_url() ?>assets/picture/pic_tower/'+data.pic_04);

                $("#btn-submit").hide();
                $("#btn-edit").show();

            }
        });
        
        
    }

    // ========= SAVE ==========

    function edit_process(){
        /* Act on the event */
        var id = $("#id").val();

        var data = new FormData( $("#form1")[0] );

        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>Tower/save_tower/'+id,
            data: data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success:function(resp){
                if (resp.status == 200) {
                    Swal.fire(
                      'Berhasil', // header
                      resp.msg, // text
                      'success' // type : success, error, question,
                    )
                    form_to_list();
                    load_table();
                    $("#form1").trigger('reset');
                    $("#btn-submit").show();
                    $("#btn-edit").hide();
                } else {
                    Swal.fire(
                      'Oops', // header
                      resp.msg, // text
                      'question' // type : success, error, question,
                    )
                }
            }
        });

    }

    function list_to_form(){
        $("#form").addClass('active');
        $("#input").addClass('active');
        $("#list").removeClass('active');
        $("#index").removeClass('active');
    }

    function form_to_list(){
        $("#list").addClass('active');
        $("#index").addClass('active');
        $("#form").removeClass('active');
        $("#input").removeClass('active');
    }




</script>