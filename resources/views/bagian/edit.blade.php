@extends('sendcomplaints.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Kirim Keluhan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bagian.index') }}"> Back</a>
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
  
    <form action="{{ route('sendcomplaints.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <input type="hidden" name="blog_id" value="{{ $blog->customer_id }}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama customer:</strong>
                    {{ $blog->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    {{ $blog->alamat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NoTelp/HP:</strong>
                    {{ $blog->no_hp }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $blog->email }}
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
                <strong>Bagian</strong>
                <select name="bagian_id" id="">
                    <option value="1">Bagian 1</option>
                    <option value="2">Bagian 2</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal diterima:</strong>
                    {{ $blog->tanggal }}
                </div>
            </div>
            <div class="form-group">
                <strong>Tanggal: </strong>
                <input type="date" name="tanggal_kirim" value="{{ $blog->tanggal_kirim }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keluhan:</strong>
                    {{ $blog->description }}
                </div>
            </div>
            <div class="form-group">
                <strong>Keterangan tambahan:</strong>
                <textarea name="keterangan" id="" cols="30" rows="10">{{ $blog->keterangan }}</textarea>
            </div>
            <div class="form-group">
                <strong>Petugas</strong>
                <select name="petugas_id" id="">
                    <option value="1">Petugas 1</option>
                    <option value="2">Petugas 2</option>                    
                </select> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection