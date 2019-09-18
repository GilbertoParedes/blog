@extends('admin.layout.layout')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Crear Página</h4>
              <form class="form-horizontal style-form" method="get">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Nombre de la Página</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Título de la Página</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="col-sm-12 col-sm-12 control-label">Status</label>
                    {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div> 
                </div>
              </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
    </section>
</section>
@stop