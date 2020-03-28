<script type="text/javascript">
    
    $(document).ready(function() {
        
        load_table()
        $(".head").attr('readonly' , true);
        // Swal.fire(
        //   'The Internet?', // header
        //   'That thing is still around?', // text
        //   'question' // type : success, error, question,
        // )
    });

    $("#head_edit").click(function() {

        $(".head").attr('readonly' , false);
        $("#head_save").show();
        $("#head_edit").hide();
    });

    function load_table(){
        $('#tbl1').DataTable({
            destroy: true,
            "processing": true,
            "serverSide": true,
            ajax: {
              url: '<?php echo base_url("PT_Avia_Avian/get_data_pt_avia_avian/"); ?>'
            },
            "columns": [
              {"name": "id"},
              {"name": "title"},
              {"name": "position"},
              {"name": "detail"},
              {"name": "requirement"},
              {"name": "additional_info"},
              {"name": "available_from_date"},
              {"name": "available_to_date"},
              {"name": "created_date"},
              {"name": "updated_date"},
              {"name": "aksi","orderable": false,"searchable": false,"className": "text-center"},
            ],
            "order": [
              [0, 'asc']
            ],
            "iDisplayLength": 10
        });
    }

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
            url: '<?= base_url() ?>PT_Avia_Avian/save_pt_avia_avian',
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

    function do_edit(id){
        $.ajax({
            url: '<?= base_url() ?>PT_Avia_Avian/get_detail/'+id,
            type: 'POST',
            dataType: 'json',
            success:function(data){ 

                list_to_form();
                $("#id").val(data.id);
                $("#i_title").val(data.title);
                $("#i_position").val(data.position);
                $("#i_detail").val(data.detail);
                $("#i_requirement").val(data.requirement);
                $("#i_additional_info").val(data.additional_info);
                $("#i_available_from_date").val(data.available_from_date);
                $("#i_available_to_date").val(data.available_to_date);
                $("#i_created_date").val(data.created_date);
                $("#i_updated_date").val(data.updated_date);

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
            url: '<?= base_url() ?>PT_Avia_Avian/save_pt_avia_avian/'+id,
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

    function do_delete(id){
        
        Swal.fire({
          title: 'Yakin menghapus ?',
          text: "Data yang dihapus tidak dapat di restore",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus'
        }).then((result) => {
          if (result.pt_avia_avian) {
            $.ajax({
                url: '<?= base_url() ?>PT_Avia_Avian/do_delete/'+id,
                type: 'get',
                dataType: 'json',
                success:function(resp){
                     Swal.fire(
                      'Berhasil!',
                      'Data telah terhapus.',
                      'success'
                    )
                    load_table();
                }
            });
          }
        })


        
        
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