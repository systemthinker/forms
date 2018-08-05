@extends('layouts.app')

@section('content')


      <div class=".container-fluid">
          <div class="offset-md-4 col-md-4">
                {!! Form::open(['method'=>'post','action'=>'PostController@store','files'=>true]) !!}


                 <div class="form-group">
                           {!! Form::label('naam','Naam:') !!}
                           {!! Form::text('naam',null,['class'=>'form-control']) !!}

                       </div>

              <div class="form-group">
                  {!! Form::label('straat','Staat en huisnummer:') !!}
                  {!! Form::text('straat',null ,['class'=>'form-control']) !!}
                  {!! Form::label('postcode','Postcode en stad:') !!}
                  {!! Form::text('postcode', null,['class'=>'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('bericht','Bericht:') !!}
                  {!! Form::textarea('bericht','laat iets leuks achter!', ['class'=>'form-control']) !!}
              </div>




                    {{csrf_field()}}


                  <div class="form-group">
                        {!! Form::label('file','Upload een bestand:') !!}
                          {!! Form::file('file',['class'=>'form-control']) !!}

                      </div>

                    {!! Form::submit('Submit!',['class'=>'btn btn-primary btn-block']) !!}


                   {!! Form::close() !!}


                {!! Form::close() !!}

          </div>
      </div>


    @endsection