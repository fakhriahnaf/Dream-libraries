<table class="table table-responsive" id="peminjams-table">
    <thead>
        <tr>
            <th>Nama Peminjam</th>
        <th>Nim</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tanggal Pinjam</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($peminjams as $peminjam)
        <tr>
            <td>{!! $peminjam->Nama_peminjam !!}</td>
            <td>{!! $peminjam->Nim !!}</td>
            <td>{!! $peminjam->Judul_buku !!}</td>
            <td>{!! $peminjam->Pengarang !!}</td>
            <td>{!! $peminjam->Tanggal_pinjam !!}</td>
            <td>
                {!! Form::open(['route' => ['peminjams.destroy', $peminjam->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('peminjams.show', [$peminjam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('peminjams.edit', [$peminjam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>