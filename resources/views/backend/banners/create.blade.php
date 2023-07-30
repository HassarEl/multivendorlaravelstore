@extends('backend.layouts.template')

@section('title')
Create Banner
@endsection

@section('title_header')
Create Banner
@endsection

@section('first_link')
<a class="btn btn-outline-secondary" href="{{ route('banner.index') }}">Banner</a>
@endsection

@section('second_link')
<a class="btn btn-outline-secondary" href="{{ route('banner.create') }}">Add Banner</a>
@endsection

@section('css')
<style>
    .body input{
        background: rgb(224, 224, 224);
        border: 1px solid rgb(46, 56, 70) !important;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-lg-12 col-sm-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('banner.store') }}" method="post">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Write some text..."></textarea>
                </div>
                <!-- select -->
                <div class="form-group">
                    <label>Condition <span class="text-danger">*</span></label>
                    <select name="condition" class="form-control">
                        <option selected>-- Condition --</option>
                        <option value="banner" {{ old('condition')=='banner' ? 'selected' : '' }}>Banner</option>
                        <option value="promo" {{ old('condition')=='promo' ? 'selected' : '' }}>Promotional</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option selected>-- Status --</option>
                        <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection