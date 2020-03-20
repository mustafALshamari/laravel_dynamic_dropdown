@extends('layouts.app')

@section('content')
<div class="container">



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    

                       

                        <form class="ui form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="field">
                              <label>ФИО</label>
                              <input name="empty" type="text">
                            </div>

                            <div class="field">
                                <label>EMAIL</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="ui form">
                                <div class="field">
                                  <label>Country</label>
                                  <select class="ui search dropdown">
                                    <option value="">Select Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                   <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                  </select>
                                </div>
                              </div>
                            <div class="field">
                              <label>Dropdown</label>
                              <select class="ui dropdown" name="dropdown">
                                <option value="">Select</option>
                                <option value="male">Choice 1</option>
                                <option value="female">Choice 2</option>
                              </select>
                            </div>
                         
                            <div class="ui submit button">Submit</div>
                            <div class="ui error message"></div>
                          </form>





                       
                   
                </div>
            </div>
        </div>
    </div>
</div>



 


   
   
@endsection


