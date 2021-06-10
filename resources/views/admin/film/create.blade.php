@extends('admin/layout/master')


@section('content')

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>FILM</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">
      <div class="page-title">
        <ol class="breadcrumb text-right">
          <li><a href="#">FILM</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Basic</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong>{{ $pagename }}</strong>
          </div>
          <form action="{{ route('film.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body card-block">

              @if($errors->any())
              <div class="alert alert-danger">
                <div class="list-group">
                  @foreach($errors->all() as $error)
                  <li class="list-gruop-item">{{ $error }}</li>
                  @endforeach
                </div>
              </div>
              @endif


              @csrf
              <div class="row form-group">
                <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">film</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" id="text-input" name="film" placeholder="Film" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">kode film</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="number" id="text-input" name="kode_film" placeholder="kode film" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">judul film</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="judul_film" placeholder="judul film" class="form-control" required>
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">genre film</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="genre_film" placeholder="Genre Film" class="form-control" required>
                  </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Simpan
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div><!-- .animated -->
</div><!-- .content -->

<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>

<script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js') }}"></script>

<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection('content')