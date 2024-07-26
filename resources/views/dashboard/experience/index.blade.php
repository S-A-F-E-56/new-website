@extends('dashboard.layout')
@section('konten')
    
    <p class="card-title">Jadwal Mahasiswa</p>
    <div class="pb-3"><a href= "{{ route('experience.create') }}" class="btn btn-primary">+ Add Jadwal Mahasiswa</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Start Class</th>
                    <th>End Class</th>
                    <th class='col-2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->info1 }}</td>
                    <td>{{ $item->tgl_mulai }}</td>
                    <td>{{ $item->tgl_akhir }}</td>
                    <td>
                        <a href='{{ route('experience.edit', $item->id) }}' class="btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data ini?')
                        "action="{{ route('experience.destroy',$item->id) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  class="btn-sm btn-danger" type="submit" name="submit">Del</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

