
@extends('layouts.app')

@section('content')

     <div class="row">
            <div class="col-md-1"></div>
             <div class="col-md-8">
                 <h1>Create Users</h1>
                    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}

                    <div class="form-group ">
                        {!! Form::label('name:','Name')  !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group ">
                        {!! Form::label('email','Email') !!}
                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                    </div>


                     <div class="form-group ">
                         {!! Form::label('status','Status') !!}
                         {!! Form::select('status',array(1=>'Active' ,0=>'Not active'),0,['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group ">
                         {!! Form::label('role_id','Role') !!}
                         {!! Form::select('role_id',[''=>'Choose Options'],null,['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group ">
                         <div class="form-group ">
                             {!! Form::label('Password','Password') !!}
                             {!! Form::password('password',['class'=>'form-control']) !!}
                         </div>      {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
                     </div>
                    {!! Form::close()!!}
             </div>
            <div class="col-md-3"></div>

     </div>






@endsection