{{-- @dd($monitoring->tanggal_mulai) --}}
@extends('Layouts.App')

@section('content')

    <h3 class="mb-2">Edit Project</h3>

    <form action="{{ route('monitoring.update', ['monitoring' => $monitoring->project_leader]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-2 mb-2">
            <div class="col-md-6">
                <label for="judul" class="form-label">Project Name</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul', $monitoring->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="leader" class="form-label">Projet Leader</label>
                <input type="text" class="form-control @error('leader') is-invalid @enderror" name="leader" id="leader" value="{{ old('leader', $monitoring->project_leader) }}">
                @error('leader')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="client" class="form-label">Client</label>
                <input type="text" class="form-control @error('client') is-invalid @enderror" name="client" id="client" value="{{ old('client', $monitoring->nama_client) }}">
                @error('client')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="progress" class="form-label">Progress</label>
                <input type="number" class="form-control @error('progress') is-invalid @enderror" min="0" max="100" name="progress" id="progress" value="{{ old('progress', $monitoring->progress) }}">
                @error('progress')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="awal" class="form-label">Start Date</label>
                <input type="date" class="form-control @error('awal') is-invalid @enderror" name="awal" id="awal" value="{{ old('awal', $monitoring->tanggal_mulai->isoFormat('YYYY-MM-DD')) }}">
                @error('awal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="col-md-6">
                <label for="akhir" class="form-label">End Date</label>
                <input type="date" class="form-control @error('akhir') is-invalid @enderror" name="akhir" id="akhir" value="{{ old('akhir', $monitoring->tanggal_berakhir->isoFormat('YYYY-MM-DD')) }}">
                @error('akhir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <a href="{{ route('monitoring.index') }}" class="btn btn-success">Kembali</a>
    </form>
@endsection
