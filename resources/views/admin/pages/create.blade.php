@extends('admin.layout.layout')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Crear Página</h4>
              {!! Form::open(['route' => 'pages.store', 'class' => 'form-horizontal style-form']) !!}
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Nombre de la Página</label>
                    <div class="col-sm-12">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Título de la Página</label>
                    <div class="col-sm-12">
                      <input type="text" name="title" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Slug</label>
                    <div class="col-sm-12">
                      <input type="text" name="slug" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Permanlink</label>
                    <div class="col-sm-12">
                      <input type="text" name="perman_link" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-12 col-sm-12 control-label">Description</label>
                    <div class="col-sm-12">
                    {!! Form::text('description', null, ['class'=> 'description']) !!}
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-12 col-sm-12 control-label">Extracto</label>
                    <div class="col-sm-12">
                    {!! Form::text('excerpt', null, ['class'=> 'description']) !!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label class="col-sm-12 col-sm-12 control-label">Status</label>
                  <div class="col-sm-12">
                    {!! Form::select('status', ['1' => 'Active', '2' => 'Draf', '3' => 'Review'], null, ['class' =>"form-control"]) !!}
                  </div>
                  </div> 
                  <div class="form-group">
                  <label class="col-sm-12 col-sm-12 control-label">Tipo de Página</label>
                  <div class="col-sm-12">
                    {!! Form::select('type_id', $pageTypes->pluck('name', 'id'), null, ['class' =>"form-control"]) !!}
                  </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-12 col-sm-12 control-label">Nivel de Página</label>
                  <div class="col-sm-12">
                    {!! Form::select('level', ['1' => 'parent', '2' => 'children', '3' => 'descendant'], null, ['class' =>"form-control"]) !!}
                  </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </section>
</section>
@stop