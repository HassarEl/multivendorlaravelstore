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
        <div class="col-md-12">
          @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button type="button" class="btn btn-danger" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
            </div>
          @endif
          @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                  {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
        <!-- left column -->
        <div class="col-md-12 col-lg-12 col-sm-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Banner</h3>
            </div>
            <!-- /.card-header -->
            
            <!-- form start -->
            <form class="forms-sample" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title" placeholder="Title">
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                          <i class="fa fa-picture-o"></i> Choose
                        </a>
                      </span>
                      <input id="thumbnail" class="form-control" type="text" name="photo">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" name="description" class="form-control" rows="3" placeholder="Write some text..."></textarea>
              </div>
                
                <!-- select -->
                <div class="form-group">
                    <label>Condition <span class="text-danger">*</span></label>
                    <select name="condition" class="form-control">
                        <option value="" selected>-- Condition --</option>
                        <option value="banner" {{ old('condition')=='banner' ? 'selected' : '' }}>Banner</option>
                        <option value="promo" {{ old('condition')=='promo' ? 'selected' : '' }}>Promotional</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="" selected>-- Status --</option>
                        <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Cencel</button>
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

@section('scripts')
  <script>
    $('#lfm').filemanager('image');
  </script>

  <script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>

  <script>
    const alertList = document.querySelectorAll('.alert')
    const alerts = [...alertList].map(element => new bootstrap.Alert(element))
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection