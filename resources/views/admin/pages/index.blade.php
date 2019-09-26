@extends('admin.layout.layout')

@section('content')
<section id="main-content">
    <section class="wrapper">
         <div class="row mt">
          <div class="col-md-12">
            <page-component :page="{{ $pages }}"></page-component>
          </div>
        </div>
    </section>
</section>
@stop