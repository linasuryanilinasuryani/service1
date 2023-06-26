@extends('master')
@section('tittle', 'Create Course')

@section('content')
<div class="alert alert-info">Create Courses</div>
<div class="row">
    <div class="col-6">
        <div class="card card-body">
            <Form action="{{route('course.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Course Name</label>
                    <input type="email" class="form-control" id="name"  name="name" placeholder="Input Course Name">
                  </div>
                  <div class="mb-3">
                    <label for="desc" class="form-label">Course Description</label>
                    <textarea class="form-control" id="desc" rows="2" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Course Price</label>
                    <input type="email" class="form-control" id="price" name="price" placeholder="Input Course Price">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Course Institution</label>
                    <select name="institution_id" class="form-control" >
                        <option value="1">UBG</option>
                        <option value="2">UBG</option>
                        <option value="3">UBG</option>
                        <option value="4">UBG</option>

                    </select>
                  </div>
                  <div class="card-header">
                    <input type="submit" value="Save Course" class="btn btn-primary float-right">
                </div>
                <div class="card-header">
                    <input type="submit" value="Cancle" class="btn btn-warning float-right">
                </div>
            </Form>
        </div>
    </div>
</div>


