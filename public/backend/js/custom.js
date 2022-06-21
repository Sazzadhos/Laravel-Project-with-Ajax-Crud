
jQuery(document).ready(function(){

    showAlldata();
    function showAlldata(){
        $.ajax({
            url:'catshow',
            type:'GET',
            dataType:'json',
            success:function(result){
                var sl=1;
                jQuery(".tbody").html('');
                $.each(result.data, function(key, item){
                    if(item.status=="1"){var status="<div class='badge badge-info'>Active</div>";}else{var status="<div class='badge badge-warning'>Inctive</div>";}
                    jQuery(".tbody").append('<tr>\
                            <td>'+sl+'</td>\
                            <td>'+item.name+'</td>\
                            <td>'+item.description+'</td>\
                            <td>'+item.tag+'</td>\
                            <td>'+status+'</td>\
                            <td>\
                            <button type="button" value="'+item.id+'" data-target="#catEditModal" data-toggle="modal" class="btn btn-sm btn-info catEdit"><i class="fa fa-edit"></i></button>\
                            <button type="button" value="'+item.id+'" data-target="#catDelete" data-toggle="modal" class="btn btn-sm btn-danger catDelete"><i class="fa fa-trash"></i></button>\
                            </td>\
                        </tr>');
                        sl++; });
                
            }
        });
    };

    jQuery(document).on('click','.catEdit', function(e){
        e.preventDefault();
        var catId=jQuery(this).val();
        $.ajax({
            url:'catedit/'+catId,
            type:'GET',
            dataType:'json',
            success:function(result){
                if(result.error=="400"){
                    jQuery(".modalMsg").append('<div class="alert alert-danger">'+result.error+'</div>');
                }
               else{
                   jQuery("#name").val(result.data.name);
                   jQuery("#description").val(result.data.description);
                   jQuery("#tag").val(result.data.tag);
                   jQuery("#status").val(result.data.status);
                   jQuery("#id").val(result.data.id);
                //    jQuery("#stsVal").text(result.data.status);
               }
            }
        });
    });

    jQuery(".addCategory").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var name=jQuery(".name").val();
        var description=jQuery(".description").val();
        var tag=jQuery(".tag").val();
        var status=jQuery(".status").val();
        $.ajax({
            url:'catstore',
            type:'POST',
            dataType:'json',
            data:{
                'name':name,
                'description':description,
                'tag':tag,
                'status':status
            },
            success:function(result){
                if(result.status=="Faild"){
                    jQuery(".nameError").text(result.errors.name);
                    jQuery(".descriptionError").text(result.errors.description);
                    jQuery(".tagError").text(result.errors.tag);
                }
                else{
                    jQuery(".msg").append('<div class="alert alert-success">'+result.message+'</div>');
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#addCategory").modal('hide');
                    jQuery("#addCategory").find('input').val('');
                    jQuery("#addCategory").find('textarea').val('');
                }
            }

        });
    });
    jQuery(".updated ").click(function(){
        // alert("OK");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var id=jQuery("#id").val();
        var name=jQuery("#name").val();
        var description=jQuery("#description").val();
        var tag=jQuery("#tag").val();
        var status=jQuery("#status").val();
        $.ajax({
            url:'catupdate/'+id,
            type:'POST',
            dataType:'json',
            data:{
                'name':name,
                'description':description,
                'tag':tag,
                'status':status
            },
            success:function(result){
                if(result.status=="Faild"){
                    jQuery(".nameError").text(result.errors.name);
                    jQuery(".descriptionError").text(result.errors.description);
                    jQuery(".tagError").text(result.errors.tag);
                }
                else{
                    jQuery(".msg").append('<div class="alert alert-success">'+result.message+'</div>');
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#catEditModal").modal('hide');
                    showAlldata();
                    // jQuery("#catEditModal").find('input').val('');
                    // jQuery("#catEditModal").find('textarea').val('');
                }
            }

        });
    });
});