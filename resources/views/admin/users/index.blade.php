@extends('admin.layout.layout')

@section('content')
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i><a href="{{ route('users.create') }}" type="button" class="btn btn-round btn-primary">Crear Usuario</a></h4>
                @if (\Session::has('success'))
                  <div class="alert alert-success">
                      <ul>
                          <li>{!! \Session::get('success') !!}</li>
                      </ul>
                  </div>
                @endif
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th><i class="far fa-envelope"></i> Email</th>
                    <th><i class="far fa-images"></i> Avatar</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th><i class=" fa fa-edit"></i> Acciones</th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{ $user->name }}</a>
                    </td>
                    <td class="hidden-phone">{{ $user->email }}</td>
                    <td><img src="{{ $user->avatar }}" alt="" height="42" width="42"></td>
                    <td><span class="label label-info label-mini">{{ $user->status }}</span></td>
                    <td>
                      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                      <form method="post" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <div>
                          <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-alt "></i></button>
                        </div>				
                      </form>
                      <!-- <i href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-alt "></i></a> -->
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
    </section>
</section>

@stop