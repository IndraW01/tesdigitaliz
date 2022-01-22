@extends('Layouts.App')

@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('monitoring.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="col-md-6">
        <form action="{{ route('monitoring.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Seacrh Leader" aria-label="Seacrh Leader" aria-describedby="button-addon2" value="{{ request('keyword') }}">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    </div>
</div>

@if (session()->has('success'))
<div class="row">
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
</div>
@endif


<div class="row align-items-md-stretch">
    <table class="table">
        <thead style="background: #15aabf; color: white;">
            <th>Project Name</th>
            <th>Client</th>
            <th>Leader</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Progress</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($monitorings as $monitoring)
            <tr>
                <td>{{ $monitoring->judul }}</td>
                <td>{{ $monitoring->nama_client }}</td>
                <td>{{ $monitoring->project_leader }}</td>
                <td>{{ $monitoring->tanggal_mulai->isoFormat('DD MMM YYYY') }}</td>
                <td>{{ $monitoring->tanggal_berakhir->isoFormat('DD MMM YYYY') }}</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $monitoring->progress }}%" aria-valuenow="{{ $monitoring->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span><small style="font-size: 14px">{{ $monitoring->progress }} %</small></span>
                </td>
                <td>
                    <a href="{{ route('monitoring.edit', ['monitoring' => $monitoring->project_leader]) }}" class="btn btn-warning"><i class="fas fa-fw fa-pen"></i></a>
                    <form class="d-inline" action="{{ route('monitoring.destroy', ['monitoring' => $monitoring->project_leader]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Yakin Menghapus Data ? ')"><i class="fas fa-fw fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Data Porject Kosong</td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{ $monitorings->links() }}
</div>

@endsection
