
$(document).ready(function(){


    
$(document).on('change','#oblast_id', function(){

    var oblast_id = $("#oblast_id").val();
    var div=$(this).parent();
    var op=" ";


     $.ajax({
        type:'get',
        url:"{{ url('/gorod/search') }}",
        data: {reg_id : oblast_id },
        dataType:'json',
        success: function(data)
                {
         
					op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0;i<data.length;i++)
                    {
                    op+='<option value="'+data[i].ter_level+'">'+data[i].ter_name+'</option>';
                   }

                    $('#gorod_id').html(" ");
                    $('#gorod_id').append(op);
                }

     });


});
    



 
$(document).on('change','#gorod_id', function(){
    var oblast_id = $("#oblast_id").val();
    var gorod_id = $("#gorod_id").val();
    var div=$(this).parent();
    var op=" ";


     $.ajax({
        type:'get',
        url:"{{ url('/raion/search') }}",
        data: {reg_id : oblast_id ,ter_type_id: gorod_id },
        dataType:'json',
        success: function(data)
                {
         
               
					op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0;i<data.length;i++)
                    {
                    op+='<option value="'+data[i].ter_level+'">'+data[i].ter_name+'</option>';
                   }

                    $('#raion_id').html(" ");
                    $('#raion_id').append(op);
                }

     });


});
    
 



})

      