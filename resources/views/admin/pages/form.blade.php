
    <h3>Editar la página {{ $page->id }}</h3>
    {!! Form::model($page ,['route' => ['pages.update', $page->id], 'method' => 'put', 'class' => 'form-horizontal style-form']) !!}
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        <div class="row">
            <div class="col-md-8">
            <div class="form-group">
                <label class="col-sm-12 col-sm-12 control-label">Nombre de la Página</label>
                <div class="col-sm-12">
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 col-sm-12 control-label">Título de la Página</label>
                <div class="col-sm-12">
                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 col-sm-12 control-label">Slug</label>
                <div class="col-sm-12">
                {!! Form::text('slug', old('slug'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 col-sm-12 control-label">Permanlink</label>
                <div class="col-sm-12">
                {!! Form::text('perman_link', old('perman_link'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 col-sm-12 control-label">Description</label>
                <div class="col-sm-12">
                {!! Form::text('description', old('description'), ['class'=> 'description']) !!}
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 col-sm-12 control-label">Extracto</label>
                <div class="col-sm-12">
                {!! Form::text('excerpt', old('excerpt'), ['class'=> 'description']) !!}
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
            <label class="col-sm-12 col-sm-12 control-label">Status</label>
            <div class="col-sm-12">
                {!! Form::select('status', ['1' => 'Active', '2' => 'Draf', '3' => 'Review'], old('status'), ['class' =>"form-control"]) !!}
            </div>
            </div> 
            <div class="form-group">
            <label class="col-sm-12 col-sm-12 control-label">Tipo de Página</label>
            <div class="col-sm-12">
                {!! Form::select('type_id', $page->types->pluck('name', 'id'), old('types->name'), ['class' =>"form-control"]) !!}
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 col-sm-12 control-label">Nivel de Página</label>
            <div class="col-sm-12">
                {!! Form::select('level', ['1' => 'parent', '2' => 'children', '3' => 'descendant'], old('level'), ['class' =>"form-control"]) !!}
            </div>
            </div>
            </div>
        </div>
        <div class="text-left">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    {!! Form::close() !!}
    
        