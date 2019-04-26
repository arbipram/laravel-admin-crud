@extends('admin.layouts.master')

@section('breadcumb')
<div class="page-title">
    <h3>Role</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Role</li>
        </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Create Role</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('admin/role/store')}}" method="post">
                    <div class="form-group">
                        <label for="">Nama Role</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <br>
                        <div>
                            <textarea name="description" class="summernote"></textarea>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <a href="javascript:history.back()" class="btn btn-default">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    $('#role_table').dataTable();
    $('.summernote').summernote({
      height: 350
    });
    console.log('ok')
</script>
@stop