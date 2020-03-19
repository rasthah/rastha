@extends('sendcomplaints.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Semua Keluhan</h2>
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
            <th>Departemen Id</th>
            <th>Bagian Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telp/Hp</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>Keterangan Tambahan</th>
            <th>File Pendukung</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ (++$i) }}</td>
            <td>{{ $blog->departemen_id }}</td>
            <td>{{ $blog->bagian_id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->alamat }}</td>
            <td>{{ $blog->no_hp }}</td>
            <td>{{ $blog->email }}</td>
            <td>{{ $blog->tanggal }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->keterangan }}</td>
            <td>{{ $blog->file_pendukung }}</td>
            <td>
                <form action="{{ route('bagian.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('bagian.show',$blog->id) }}">Kirim</a>

                    <a class="btn btn-success" href="{{ route('bagian.edit',$blog->id) }}">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $blogs->links() !!}
      
@endsection