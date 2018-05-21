<table class="table table-responsive" id="nanunas-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>No Hp</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($nanunas as $nanuna)
        <tr>
            <td>{!! $nanuna->nama !!}</td>
            <td>{!! $nanuna->no_hp !!}</td>
            <td>
                {!! Form::open(['route' => ['nanunas.destroy', $nanuna->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nanunas.show', [$nanuna->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nanunas.edit', [$nanuna->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>