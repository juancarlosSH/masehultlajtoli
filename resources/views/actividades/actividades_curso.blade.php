@extends('layouts.app')

@section('title', 'Actividades del curso')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Actividades {{$courseName}}</h1>
                </div>
                <div class="card-body">
                @if (empty($paginatedActivities))
                    <p>Actualmente no cuenta con actividades en el curso</p>
                @else
                <table class="table">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Opciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($paginatedActivities as $activity)
                        <tr>
                            <td>{{$activity->name}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p style="text-align:center;">Completada</p>
                            </td>
                            <td>
                                <a href="{{route('actividades.actividad',[$activity->course, $activity])}}" class="btn btn-primary">{{ __('Acceder') }}</a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
              </table>
              @endif
              {{ $paginatedActivities->links() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
