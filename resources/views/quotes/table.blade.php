<table class="table table-responsive" id="quotes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Type</th>
        <th>Fleet Size</th>
        <th>Duration</th>
        <th>Budget</th>
        <th>Remarks</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($quotes as $quotes)
        <tr>
            <td>{!! $quotes->name !!}</td>
            <td>{!! $quotes->company !!}</td>
            <td>{!! $quotes->phone !!}</td>
            <td>{!! $quotes->email !!}</td>
            <td>{!! $quotes->type !!}</td>
            <td>{!! $quotes->fleet_size !!}</td>
            <td>{!! $quotes->duration !!}</td>
            <td>{!! $quotes->budget !!}</td>
            <td>{!! $quotes->remarks !!}</td>
            <td>
                {!! Form::open(['route' => ['quotes.destroy', $quotes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('quotes.show', [$quotes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('quotes.edit', [$quotes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>