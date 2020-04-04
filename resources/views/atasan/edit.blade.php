@extends('atasan.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Kirim Keluhan</h2>
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
  
    <form action="{{ route('atasan.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keluhan:</strong>
                <textarea disabled class="form-control" name="" id="" cols="30" rows="10">{{ $blog->description }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departemen: </strong>
                <select name="departemen_id" id="" class="form-control" disabled>
                    <option value="1">Departemen 1</option>
                    <option value="2">Departemen 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bagian Atasan</strong>
                <select name="bagian_id" id="" class="form-control" disabled>
                    <option value="1">Bagian 1</option>
                    <option value="2">Bagian 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal salur:</strong>
                <input type="date" name="" id="" class="form-control" value="{{ $blog->tanggal }}" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal response: </strong>
                <input class="form-control" type="date" name="tanggal_respon" id="" value="{{ $blog->tanggal_respon }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Respon:</strong>
                <textarea class="form-control" name="" id="" cols="30" rows="10" disabled>{{ $blog->keterangan }}</textarea> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu penanganan: </strong>
                <input class="form-control" type="text" name="waktu_penanganan" id="" value="{{ $blog->waktu_penanganan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Atasan-2</strong>
                <select name="atasan_id" id="" class="form-control">
                    <option value="1">Atasan 1</option>
                    <option value="2">Atasan 2</option>
                    <option value="3">Atasan 3</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pngg Jawab Keluhan</strong>
                <input class="form-control" type="text" name="penanggung_jawab" id="" value="{{ $blog->penanggung_jawab }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
   
    </form>
@endsection