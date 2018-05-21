<table class="table table-responsive" id="ayams-table">
    <thead>
        <tr>
            <th>No Hp</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ayams as $ayam)
        <tr>
            <td>{!! $ayam->no_hp !!}</td>
            <td>
                {!! Form::open(['route' => ['ayams.destroy', $ayam->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ayams.show', [$ayam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ayams.edit', [$ayam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>