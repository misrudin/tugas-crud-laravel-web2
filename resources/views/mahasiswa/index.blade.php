@extends('mahasiswa.layout');

@section('content')
<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-4">Latihan CRUD Mahasiswa</h2>
          <div class="mb-3">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>
          </div>
          </div>
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($mahasiswa as $mahasiswa)
                      <tr>
                          <td>{{ $mahasiswa->id }}</td>
                          <td>{{ $mahasiswa->nama }}</td>
                          <td>{{ $mahasiswa->kelas }}</td>
                          <td>
                              <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">View</a>
                              <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data mahasiswa?');">Delete</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection