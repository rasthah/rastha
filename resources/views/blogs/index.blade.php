@extends('blogs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Semua Keluhan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Buat Keluhan</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telp/Hp</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>File Pendukung</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->alamat }}</td>
            <td>{{ $blog->no_hp }}</td>
            <td>{{ $blog->email }}</td>
            <td>{{ $blog->tanggal }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->file_pendukung }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $blogs->links() !!}
      
@endsection