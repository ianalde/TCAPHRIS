@extends('layouts.master')

@section('title', 'Edit Department')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
	  <h1>Edit department</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ action('DepartmentController@update', ['id' => $department->id]) }}" method="POST">
              @method('PATCH')
              @csrf
              <div class="box-body" style="padding-bottom: 0">
                <div class="form-group">
                  <label for="description">Department Name</label>
                  
                  <input type="text" class="form-control" id="description" name="department_name" value="{{ $department->department_name }}" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/departments" class="btn btn-default">Back</a>
              </div>
            </form>
            
          </div>
    </div>
</div>
@endsection