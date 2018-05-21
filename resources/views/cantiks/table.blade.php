<table class="table table-responsive" id="cantiks-table">
    <thead>
        <tr>
            <th>No Hp</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cantiks as $cantik)
        <tr>
            <td>{!! $cantik->no_hp !!}</td>
            <td>
                {!! Form::open(['route' => ['cantiks.destroy', $cantik->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cantiks.show', [$cantik->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cantiks.edit', [$cantik->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>