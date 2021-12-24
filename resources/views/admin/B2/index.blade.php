@extends('admin.layouts.master')
@section('title', 'Model B.2-KWK')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Model B.2-KWK</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-file-pdf"></i>
                        Model B.2-KWK
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div class="card card-primary">  
                    <div class="card-body">
                        <form action="{{ route('admin.B11.show', 1) }}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Calon Gubernur</label>
                                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Input here...">
                                        <div class="invalid-feedback" id="valid-name">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="wakil">Wakil Calon Gubernur</label>
                                        <input type="text" class="form-control form-control-sm @error('wakil') is-invalid @enderror" name="wakil" id="wakil" value="{{ old('wakil') }}" placeholder="Input here...">
                                        <div class="invalid-feedback" id="valid-wakil">{{ $errors->first('wakil') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-round" id="btn-submit">
                                        <i class="fas fa-check"></i>
                                        Download 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection