@extends('layouts.admin')
@section('content')
<section class="content-header">
  <h1>
    Sucripciones
    <small>Lista</small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="{{url('ixtus')}}">
        <i class="fa fa-dashboard"></i> Dashboard
      </a>
    </li>
    <li class="active" ><i class="fa fa-book"></i>Mis suscripciones</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <show-component><show-component>
</section>
@stop
