<table class="table table-responsive table-bordered table-striped" id="myjobs-table">
    <thead>
        <tr>
       
        <th>Job</th>
        <th>Vehicle</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($myjobs as $myjobs)
        <tr>
            <td>{!! $myjobs->jobs->jopname !!}</td>
            <td>{!! $myjobs->vehicles->model !!}-{!! $myjobs->vehicles->license_no !!}</td>
            <td>{!! $myjobs->start_date !!}</td>
            <td>{!! $myjobs->end_date !!}</td>
            <td>{!! $myjobs->statuses->name !!}</td>
            <td>
                {!! Form::open(['route' => ['myjobs.destroy', $myjobs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>