<table class="table table-responsive" id="films-table">
    <thead>
        <tr>
            <th>Judul Film</th>
        <th>Tanggal Rilis</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($films as $film)
        <tr>
            <td>{!! $film->Judul_Film !!}</td>
            <td>{!! $film->Tanggal_rilis !!}</td>
            <td>
                {!! Form::open(['route' => ['films.destroy', $film->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('films.show', [$film->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('films.edit', [$film->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>