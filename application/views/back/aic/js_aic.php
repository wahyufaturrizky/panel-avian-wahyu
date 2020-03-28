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
              url: '<?php echo base_url("AIC/get_data_aic/"); ?>'
            },
            "columns": [
              {"name": "id"},
              {"name": "pic"},
              {"name": "header"},
              {"name": "description"},
              {"name": "aksi","orderable": false,"searchable": false,"className": "text-center"},
            ],
            "order": [
              [0, 'asc']
            ],
            "iDisplayLength": 10
        });
    }

    $("#img_upload").change(function() {
      readURL(this);
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
            url: '<?= base_url() ?>AIC/save_aic',
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
          $('#img_preview').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function edit_head(){
        $("#head_modal").modal('show');
    }

    function do_edit(id){
        $.ajax({
            url: '<?= base_url() ?>AIC/get_detail/'+id,
            type: 'POST',
            dataType: 'json',
            success:function(data){ 

                list_to_form();
                $("#id").val(data.id);
                $("#i_header").val(data.header);
                $("#i_desc").val(data.description);
                $("#img_preview").attr('src' , '<?= base_url() ?>assets/picture/pic_aic/'+data.picture);

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
            url: '<?= base_url() ?>AIC/save_aic/'+id,
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
          if (result.value) {
            $.ajax({
                url: '<?= base_url() ?>AIC/do_delete/'+id,
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