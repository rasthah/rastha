@extends('atasan.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Atasan </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('atasan.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <div class="row">
    <form action="{{ route('atasan.store') }}" method="post">
    @csrf
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keluhan:</strong>
                {{ $blog->description }}
            </div>
        </div>

        <div class="form-group">
            <strong>Departemen: </strong>
            <select name="departemen_id" id="">
                <option value="1">Departemen 1</option>
                <option value="2">Departemen 2</option>
            </select>
        </div>
        <div class="form-group">
            <strong>Bagian Atasan</strong>
            <select name="bagian_id" id="">
                <option value="1">Bagian 1</option>
                <option value="2">Bagian 2</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal salur:</strong>
                {{ $blog->tanggal }}
            </div>
        </div>
        <div class="form-group">
            <strong>Tanggal response: </strong>
            <input type="date" name="tanggal_respon" id="">
        </div>
        <div class="form-group">
            <strong>Respon:</strong>
            {{ $blog->keterangan }}
                
        </div>
        <div class="form-group">
            <strong>Waktu penanganan: </strong>
            <input type="text" name="waktu_penanganan" id="">
        </div>
        <div class="form-group">
            <strong>Nama Atasan-2</strong>
            <select name="atasan_id" id="">
                <option value="1">Atasan 1</option>
                <option value="2">Atasan 2</option>
                <option value="3">Atasan 3</option>
            </select>
        </div>
        <div class="form-group">
            <strong>Pngg Jawab Keluhan</strong>
            <input type="text" name="penanggung_jawab" id="">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    </form>
    </div>
@endsection