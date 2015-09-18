@extends('_layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center page-header">
                <h1>Ajouter des reals</h1>
            </div>

            <!-- ERROR MESSAGE -->
            @if ($errors)
                <div class="col col-md-4 col-md-offset-4 text-center">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{$errors}}
                    </div>
                </div>
                @endif

                        <!-- SUCCESS MESSAGE -->
                @if ($success)
                    <div class="col col-md-4 col-md-offset-4 text-center">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{$success}}
                        </div>
                    </div>
                @endif

            <div class="col-md-4 col-md-offset-4 text-center">
                {!! Form::open() !!}

                <div class="form-group">
                    {!! Form::text('account_name', null, ['placeholder' => "Nom de compte", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('reason', null, ['placeholder' => "Motif", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::input('number', 'reals', null, ['placeholder' => 50, 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <input type="submit" class="btn btn-danger" value="Ajouter les Reals">

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop