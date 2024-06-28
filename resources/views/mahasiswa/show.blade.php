@extends('mahasiswa.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Detail Mahasiswa</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                        <p class="card-text"><strong>Kelas:</strong> {{ $mahasiswa->kelas }}</p>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data mahasiswa?');">Delete</button>
                        </form>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
