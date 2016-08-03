@extends('_layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-12 text-center page-header">
                <h1>Add item in the shop</h1>
            </div>

            <!-- SUCCESS MESSAGE -->
            @if ($success)
                <div class="col col-md-6 col-md-offset-3 text-center">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{$success}}
                    </div>
                </div>
            @endif

            <div class="col col-md-6 col-md-offset-3">
                {!! Form::open() !!}

                <div class="form-group">
                    {!! Form::label('id_item', "ID de l'item") !!}
                    {!! Form::input('number', 'id_item', null, ['placeholder' => "100001684", 'class' => 'form-control', 'required' => 'required', 'id' => 'idItem']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('id_sub_category', "Nom de la sous-catégorie") !!}
                    {!! Form::select('id_sub_category', $categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', "Nom de l'item") !!}
                    {!! Form::text('name', null, ['placeholder' => "Épée de gouverneur gardien", 'class' => 'form-control', 'required' => 'required', 'id' => 'nameItem']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', "Prix à l'unité") !!}
                    {!! Form::input('number', 'price', null, ['placeholder' => "200", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('quantity', "Quantité") !!}
                    {!! Form::input('number', 'quantity', null, ['placeholder' => "1", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('level', "Level") !!}
                    {!! Form::input('number', 'level', null, ['placeholder' => "0", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                {!! Form::input('hidden', 'quality_item', 'NONE', ['id' => 'qualityItem']) !!}

                <input type="submit" class="btn btn-success" value="Add item">

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
