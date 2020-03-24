@extends('sendcomplaints.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Kirim Keluhan </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sendcomplaints.index') }}"> Back</a>
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
    <form action="{{ route('sendcomplaints.store') }}" method="post">
    @csrf
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama customer</strong>
                <input type="text" class="form-control" disabled value="{{ $blog->title }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" class="form-control" disabled value="{{ $blog->alamat }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NoTelp/HP:</strong>
                <input type="text" class="form-control" disabled value="{{ $blog->no_hp }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control" disabled value="{{ $blog->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departemen: </strong>
                <select name="departemen_id" id="" class="form-control">
                    <option value="1">Departemen 1</option>
                    <option value="2">Departemen 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bagian</strong>
                <select name="bagian_id" id="" class="form-control">
                    <option value="1">Bagian 1</option>
                    <option value="2">Bagian 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal diterima:</strong>
                <input type="date" class="form-control" disabled value="{{ $blog->tanggal }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal: </strong>
                <input type="date" name="tanggal" id="" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keluhan:</strong>
                <textarea disabled class="form-control" cols="30" rows="10">{{ $blog->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan tambahan:</strong>
                <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"></textarea>   
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Petugas</strong>
                <select name="petugas_id" id="" class="form-control">
                    <option value="1">Petugas 1</option>
                    <option value="2">Petugas 2</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
@endsection