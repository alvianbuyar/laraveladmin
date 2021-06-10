@extends('admin.layout.master')

@section('content')

<link rel="{{asset('public/stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/themify-icons/css/themify-icons.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css')}}">

<link rel="{{asset('public/stylesheet" href="assets/css/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tabel Edit film</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
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
                        <strong>{{$pagename}}</strong>
                    </div>
                    <div class="card-body card-block">


                        @if($errors->any())

                        <div class="alert alert-danger">
                            <div class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{$error}}
                                </li>
                                @endforeach
                            </div>
                        </div>

                        @endif

                        <form action="{{route('film.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @method('PATCH')

                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Film</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="film" value="{{$data->film}}" placeholder="film" class="form-control" required><small class="form-text text-muted"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">kodeFilm</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="kode_film" placeholder="kode_film" value="{{$data->kode_film}}" class="form-control" required><small class="form-text text-muted"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">judul film</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="judul_film" placeholder="Judul Film" value="{{$data->judul_film}}" class="form-control" required><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">genre Film</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="genre_film" placeholder="genre FIlm" value="{{$data->genre_film}}" class="form-control" required><small class="form-text text-muted"></small></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .Animated -->
</div><!-- .content -->
@endsection