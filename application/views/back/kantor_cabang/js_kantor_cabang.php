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
              url: '<?php echo base_url("Kantor_Cabang/get_data_kantor_cabang/"); ?>'
            },
            "columns": [
              {"name": "id"},
              {"name": "name_branch"},
              {"name": "province"},
              {"name": "address"},
              {"name": "postal_code"},
              {"name": "handphone"},
              {"name": "telephone"},
              {"name": "email"},
              {"name": "website"},
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
            url: '<?= base_url() ?>Kantor_Cabang/save_kantor_cabang',
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
            url: '<?= base_url() ?>Kantor_Cabang/get_detail/'+id,
            type: 'POST',
            dataType: 'json',
            success:function(data){ 

                list_to_form();
                $("#id").val(data.id);
                $("#i_name_branch").val(data.name_branch);
                $("#i_province").val(data.province);
                $("#i_address").val(data.address);
                $("#i_postal_code").val(data.postal_code);
                $("#i_handphone").val(data.handphone);
                $("#i_telephone").val(data.telephone);
                $("#i_email").val(data.email);
                $("#i_website").val(data.website);

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
            url: '<?= base_url() ?>Kantor_Cabang/save_kantor_cabang/'+id,
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
          if (result.Kantor_Cabang) {
            $.ajax({
                url: '<?= base_url() ?>Kantor_Cabang/do_delete/'+id,
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