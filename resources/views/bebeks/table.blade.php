<table class="table table-responsive" id="bebeks-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>No Hp</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bebeks as $bebek)
        <tr>
            <td>{!! $bebek->nama !!}</td>
            <td>{!! $bebek->no_hp !!}</td>
            <td>
                {!! Form::open(['route' => ['bebeks.destroy', $bebek->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bebeks.show', [$bebek->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bebeks.edit', [$bebek->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>