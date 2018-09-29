<table class="table table-responsive" id="jobs-table">
    <thead>
        <tr>
      <th>Jopname</th>
        <th>Slots</th>
        <th>Duration</th>
        <th>Price</th>
        <th>Client</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobs as $jobs)
        <tr>
            <td>{!! $jobs->jopname !!}</td>
            <td>{!! $jobs->slots !!}</td>
            <td>{!! $jobs->duration !!}</td>
            <td>{!! $jobs->price !!}</td>
            <td>{!! $jobs->client !!}</td>
            <td>{!! $jobs->status !!}</td>
            <td>
                {!! Form::open(['route' => ['jobs.destroy', $jobs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobs.show', [$jobs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobs.edit', [$jobs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>