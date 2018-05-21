<table class="table table-responsive" id="visitors-table">
    <thead>
        <tr>
            <th>Nama Mahasiswa</th>
        <th>Nim</th>
        <th>Buku Yang Dipinjam</th>
        <th>Tanggal Pinjam</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($visitors as $visitors)
        <tr>
            <td>{!! $visitors->Nama_Mahasiswa !!}</td>
            <td>{!! $visitors->NIM !!}</td>
            <td>{!! $visitors->Buku_yang_dipinjam !!}</td>
            <td>{!! $visitors->tanggal_pinjam !!}</td>
            <td>{!! $visitors->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['visitors.destroy', $visitors->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('visitors.show', [$visitors->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('visitors.edit', [$visitors->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>