
@if(session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn btn-success" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn btn-danger" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


@section('scripts')

    <script>
        const alertList = document.querySelectorAll('.alert')
        const alerts = [...alertList].map(element => new bootstrap.Alert(element))
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection