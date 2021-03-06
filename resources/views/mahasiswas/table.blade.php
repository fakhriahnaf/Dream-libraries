<table class="table table-responsive" id="mahasiswas-table">
    <thead>
        <tr>
            <th>Nim</th>
        <th>Nama</th>
        <th>Departemen</th>
        <th>No Handphone</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{!! $mahasiswa->Nim !!}</td>
            <td>{!! $mahasiswa->Nama !!}</td>
            <td>{!! $mahasiswa->Departemen !!}</td>
            <td>{!! $mahasiswa->No_handphone !!}</td>
            <td>
                {!! Form::open(['route' => ['mahasiswas.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mahasiswas.show', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mahasiswas.edit', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>