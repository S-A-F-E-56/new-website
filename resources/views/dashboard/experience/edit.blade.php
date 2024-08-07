@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('experience.index') }}" class="btn btn-secondary">
            << kembali</a>
    </div>
    <form action="{{ route('experience.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Mata Kuliah</label>
            <input
                type="text"
                class="form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Mata Kuliah" value="{{ $data->judul }}"
            />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Hari</label>
            <input
                type="text"
                class="form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Hari" value="{{ $data->info1 }}"
            />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Start Date</div>
                <div class="col-auto"><input type="time" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{ $data->tgl_mulai }}"></div>
                <div class="col-auto">End Date</div>
                <div class="col-auto"><input type="time" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{ $data->tgl_akhir }}"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{ $data->isi }}</textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
