@extends('atasan.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Semua Keluhan</h2>
            </div>
        </div>
    </div>

    @php
        use Carbon\Carbon;
        $date_now = Carbon::now();
    @endphp
   
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
        @php
            $tgl = Carbon::create($blog->tanggal);
            $tgl_deadline2 = $tgl->add(2, 'day');
            $date_diff = $date_now->diffInDays($tgl_deadline2, false);
        @endphp
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
                <form action="{{ route('atasan.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('atasan.show',$blog->id) }}">Kirim</a>

                    <a class="btn btn-success" href="{{ route('atasan.edit',$blog->id) }}">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $blogs->links() !!}
      
@endsection