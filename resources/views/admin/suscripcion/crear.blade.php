@extends('layouts.admin')
@section('content')
<section class="content-header">
  <h1>
    Sucripciones
    <small>Crear</small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="{{route('suscripcion.index')}}">
      <i class="fa fa-book" ></i>Mis suscripciones</a>
    </li>
    <li class="active" ><i class="fa fa-pencil"></i>Crear</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <!-- Main content -->
  <section class="content">
      <form-crear-suscripcion></form-crear-suscripcion>
  </section>
  <!-- /.content -->
</section>
@stop
