@extends('backend.layouts.template')

@section('title')
Banners
@endsection

@section('title_header')
Banners
@endsection

@section('first_link')
<a class="btn btn-outline-secondary" href="{{ route('admin') }}">Dashboard</a>
@endsection

@section('second_link')
<a class="btn btn-outline-secondary" href="{{ route('banner.index') }}">Banner</a>
@endsection

@section('content')

<section class="container">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            @include('backend.layouts.notification')
          </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Banners List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.N.</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Photo</th>
                          <th>Condition</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($banners as $banner)
                          <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->description }}</td>
                            <td><img height="60px" src="{{ $banner->photo }}" alt=""></td>
                            <td>{{ $banner->conditions }}</td>
                            <td>{{ $banner->status }}</td>
                            <td><button class="btn btn-info">Edit</button></td>
                          </tr>
                          @endforeach                  
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
        </div>
</section>
@endsection

@section('scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection