@extends('mahasiswa.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Tambah Mahasiswa</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="kelas">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-4">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
