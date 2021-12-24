@extends('admin.layouts.master')
@section('title', 'Model B.1.1-KWK')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Model B.1.1-KWK</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-file-pdf"></i>
                        Model B.1.1-KWK
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
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi<sup class="text-danger">*</sup></label>
                                        <select class="form-control form-control-sm @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" disabled>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->prov_id }}">{{ $province->prov_name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback" id="valid-kabupaten">{{ $errors->first('kabupaten') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten<sup class="text-danger">*</sup></label>
                                        <select class="form-control form-control-sm @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten">
                                            <option value="" selected disabled>-- Pilih Kabupaten --</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}" {{ old('kabupaten') == $city->city_name ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                                @endforeach
                                        </select>
                                        <div class="invalid-feedback" id="valid-kabupaten">{{ $errors->first('kabupaten') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan<sup class="text-danger">*</sup></label>
                                        <select class="form-control form-control-sm @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan">
                                            <option value="" selected disabled>-- Pilih Kecamatan --</option>
                                        </select>
                                        <div class="invalid-feedback" id="valid-kecamatan">{{ $errors->first('kecamatan') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="desa">Desa/Kelurahan<sup class="text-danger">*</sup></label>
                                        <select class="form-control form-control-sm @error('desa') is-invalid @enderror" name="desa" id="desa">
                                            <option value="" selected disabled>-- Pilih Desa/Kelurahan --</option>
                                        </select>
                                        <div class="invalid-feedback" id="valid-desa">{{ $errors->first('desa') }}</div>
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