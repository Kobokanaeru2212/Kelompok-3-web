@extends('dashboard.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-block pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
        @if (session('hapus'))
    <div class="alert alert-danger" role="alert">
        {{ session('hapus') }}
      </div>
    @endif
        <a href="/create/dokter" class="btn btn-info">Tambah Data Dokter</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Usia</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_dokter as $item)
                <tr>
                    <th scope="row" class="p-3">{{ $loop->iteration }}</th>
                    <td class="p-3">{{ $item->name }}</td>
                    <td class="p-3">{{ $item->usia }}</td>
                    <td class="p-3">{{ $item->jenis_kelamin }}</td>
                    <td class="p-3">
                        <div class="btn-group">
                        <a href="{{ route('get.ubahdokter', $item->id) }}" class="d-inline mx-2 btn btn-warning rounded p-2 mt-2">Ubah</a>
                        <form action="{{ route('delete.hapusdokter', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Yakin Hapus Data Ini')" class="d-inline rounded mx-2 btn btn-danger p-2 mt-2 ">Hapus</button>
                        </form>
                    </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
  </div>
</div>
@endsection
