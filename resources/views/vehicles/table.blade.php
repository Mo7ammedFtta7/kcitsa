<table class="table table-responsive table-bordered table-striped" id="vehicles-table">
    <thead>
        <tr>
        <th>Vehicle brand</th>
        <th>Model</th>
        <th>License No</th>
        <th>Color</th>
        <th>Type</th>
        <th>Rented</th>
        <th>Status</th>
            {{-- <th colspan="3">Action</th> --}}
        </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $vehicles)
        <tr>
                <td>{!! $vehicles->vehicle_make !!}</td>
                <td>{!! $vehicles->model !!}</td>
            <td>{!! $vehicles->license_no !!}</td>
          
            <td>{!! $vehicles->color !!}</td>
            <td>{!! $vehicles->type !!}</td>
            <td>{!! $vehicles->rented==1?'Yes':'No' !!}</td>
        
            <td>{!! $vehicles->statuses->name !!}</td>
            {{-- <td>
                {!! Form::open(['route' => ['vehicles.destroy', $vehicles->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vehicles.show', [$vehicles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vehicles.edit', [$vehicles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> --}}
        </tr>
    @endforeach
    </tbody>
</table>