<table class="table table-responsive" id="profiles-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
        <th>Img</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Identity No</th>
        <th>Gender</th>
        <th>Bank Name</th>
        <th>Account No</th>
        <th>Mobile No</th>
        <th>Home Address</th>
        <th>Work Address</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{!! $profile->name !!}</td>
            <td>{!! $profile->email !!}</td>
            <td>{!! $profile->img !!}</td>
            <td>{!! $profile->email_verified_at !!}</td>
            <td>{!! $profile->password !!}</td>
            <td>{!! $profile->remember_token !!}</td>
            <td>{!! $profile->identity_no !!}</td>
            <td>{!! $profile->gender !!}</td>
            <td>{!! $profile->bank_name !!}</td>
            <td>{!! $profile->account_no !!}</td>
            <td>{!! $profile->mobile_no !!}</td>
            <td>{!! $profile->home_address !!}</td>
            <td>{!! $profile->work_address !!}</td>
            <td>
                {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profiles.show', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profiles.edit', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>