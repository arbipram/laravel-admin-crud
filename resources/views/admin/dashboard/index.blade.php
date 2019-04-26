@extends('admin.layouts.master')

@section('breadcumb')
<div class="page-title">
    <h3>Dashboard</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    console.log('ok')
</script>
@stop