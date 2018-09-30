{{-- @extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Profiles</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('profiles.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('profiles.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
 --}}
 @extends('layouts.app')

 @section('content')
 <style>
 .bg_grey {
    background: #b7aaaa;
}
</style>

    <section class="container big_padding ">

            <p class="default_text raleway text-center default_small_heading blue_color font_200"></p>
                <h2 class="default_section_heading text-center"><span class="font_200">    </span>     Profile

                    <span class="font_200">                 </span>

                </h2>
            <div class="pricing_table_section">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($profiles, ['route' => ['profiles.update', $profiles->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
 

                            <div class="row">

                                <div class="col-md-4 ">
                                    <div class="pricing_table_column">
                                    <!-- Img Field -->
                        <div class="form-group  ">
                                <div class="team_detail_inner">

                                        <img src="/imgs/{!! $profiles->img !!}" alt="team_img">
    
                                    </div>
                                {!! Form::label('img', 'Img:') !!}
                                {!! Form::file('img', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                                </div>
                                <div class="col-md-4 pricing_table_column">
                                        <!-- Name Field -->
        
                                        <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <!-- Email Field -->
                    <div class="form-group  ">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                    
                       <!-- Mobile No Field -->
                       <div class="form-group  ">
                            {!! Form::label('mobile_no', 'Mobile No:') !!}
                            {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
                        </div>
                    
                
                        {!! Form::hidden('email_verified_at', null, ['class' => 'form-control']) !!}
                    
                  <input type="hidden" value="{!! $profiles->password !!}" name="password">
                 
                        {!! Form::hidden('remember_token', null, ['class' => 'form-control']) !!}
                                            <!-- Gender Field -->
                                            <div class="form-group  ">
                                                    {!! Form::label('gender', 'Gender:') !!}
                                                        {!!  Form::select('gender', array('1' => 'Male', '0' => 'Female'),null, ['class' => 'form-control']) !!}
                                                </div>
                    <!-- Identity No Field -->
                    <div class="form-group  ">
                        {!! Form::label('identity_no', 'Identity No:') !!}
                        {!! Form::text('identity_no', null, ['class' => 'form-control']) !!}
                    </div></div>
                                <div class="col-md-4 pricing_table_column">
                
                                        
                                        <!-- Bank Name Field -->
                                        <div class="form-group  ">
                                            {!! Form::label('bank_name', 'Bank Name:') !!}
                                            {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <!-- Account No Field -->
                                        <div class="form-group  ">
                                            {!! Form::label('account_no', 'Account No:') !!}
                                            {!! Form::text('account_no', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                     
                                        
                                        <!-- Home Address Field -->
                                        <div class="form-group  ">
                                            {!! Form::label('home_address', 'Home Address:') !!}
                                            {!! Form::text('home_address', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <!-- Work Address Field -->
                                        <div class="form-group  ">
                                            {!! Form::label('work_address', 'Work Address:') !!}
                                            {!! Form::text('work_address', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <!-- Submit Field -->
                                        <div class="form-group col-sm-12">
                                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                            <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancel</a>
                                        </div></div>



                            </div>



                        
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
 @endsection