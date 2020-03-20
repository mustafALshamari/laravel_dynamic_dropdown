@extends('layouts.app')
 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Регистрация</div>

                <div class="card-body">


                  

                    <form class="ui form" method="POST" action="{{ url('/register') }}">
                        @csrf

                        <div class="field">
                          <label>ФИО</label>
                          <input name="fullname" type="text">
                        </div>

                        <div class="field">
                            <label>EMAIL</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                       
                         {{--  This is the oblast feild   --}}
                        <div class="field">
                            <label>Область</label>
                            <select class="ui search dropdown" id="oblast_id" name="oblast">
                                <option value="">Выбирайте область</option>
                                @foreach ($oblast as $item)
                            
                                <option value="{{$item->reg_id}}">{{ $item->ter_name }}</option>
                            
                                @endforeach
                            </select>
                        </div>

                         {{--  This is the gorod feild   --}}
                        <div class="field">
                            <label>Город</label>
                            <select class="ui search dropdown"  id="gorod_id" 
                            data-dependent="gorod" name="gorod">
                              <option value="">Выбирайте Город</option>
                              <option value="0" disabled="true" selected="true"></option>                    
                            </select>
                          </div>


                        {{--  This is the raion feild   --}}
                        <div class="field">
                            <label>Район</label>
                            <select class="ui search dropdown"  id="raion_id" name="raion">
                                <option value="">Выбирайте Район</option>
                                <option value="0" disabled="true" selected="true"></option>                    
                            </select>
                        </div>  
                         
                     
                        <div class="ui primary submit button" id="button">Отправить</div>
                        <div class="ui clear button">Стереть</div>
                  
     

                      </form>

                  
                </div>
            </div>
        </div>
    </div>
</div>


{{--  inside footer you find the seachdrop down script and the alert script you need to fullfill all feilds  --}}

@include('layouts.footer')



<script>
 
    /*
    here you find the ajax request to fetch data for gorod dependent on oblast
    */
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
    
  /*
    here you find the ajax request to fetch data for raion dependent on gorod
    */
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
    
 
     


  </script>

 
@endsection
