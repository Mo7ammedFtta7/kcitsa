@extends('layouts.app')

@section('content')
<style>

.pricing_table_column {
    border: 2px solid #FFFFFF;
    padding: 32px 21px;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    background: #FFFFFF;
}
</style>
<section class="container big_padding ">
  
    <p class="default_text raleway text-center default_small_heading blue_color font_200"></p>
    <h2 class="default_section_heading text-center"><span class="font_200">    </span>     My Vehicle
<br>
        <span class="font_200">                 </span>

    </h2>
    <div class="row">
<div class="col-md-4 pricing_table_section">
    <div class="pricing_table_section">
            <div class="form-group  ">
                    <div class="team_detail_inner">

                            <img src="/imgs/{!! Auth::user()->img !!}" alt="team_img">

                        </div>
                
                </div>
         
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Add vehicle                      </button>
    </div>

</div>

<div  class="col-md-8">
    <div class="pricing_table_section">
            <div class="content">
                    <div class="clearfix"></div>
            
                    @include('flash::message')
            
                    <div class="clearfix"></div>
                    <div class="box box-primary">
                        <div class="box-body">
                                @include('vehicles.table')
                        </div>
                    </div>
                    <div class="text-center">
                    
                    </div>
                </div>
    </div>
</div>

    </div>
    
</section>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add vehicle</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    @include('adminlte-templates::common.errors')
                    <div class="box box-primary">
            
                        <div class="box-body">
                            <div class="row">
                                {!! Form::open(['route' => 'vehicles.store']) !!}
            
                                 <!-- User Field -->
        {!! Form::hidden('user', Auth::user()->id, ['class' => 'form-control']) !!}
     <!-- Vehicle Make Field -->
     <div class="form-group col-sm-6">
            {!! Form::label('vehicle_make', 'Vehicle Brand:') !!}
            {!! Form::text('vehicle_make', null, ['class' => 'form-control']) !!}
        </div>
    <!-- Model Field -->
    <div class="form-group col-sm-6">
            {!! Form::label('model', 'Model:') !!}
            {!! Form::text('model', null, ['class' => 'form-control']) !!}
        </div>
      
    <!-- Type Field -->
    <div class="form-group col-sm-6">
            {!! Form::label('type', 'Type:') !!}
            {!! Form::select('type',array('Car' => 'Car', 'Truck' => 'Truck', 'SUV' => 'SUV'),null, ['class' => 'form-control']) !!}
        </div>
        
    <!-- License No Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('license_no', 'License No:') !!}
        {!! Form::text('license_no', null, ['class' => 'form-control']) !!}
    </div>
    
  
    
    <!-- Color Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('color', 'Color:') !!}
        {!! Form::text('color', null, ['class' => 'form-control']) !!}
    </div>
  
    <!-- Rented Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('rented', 'Rented:') !!}
        {!! Form::select('rented',array('1' => 'Yes', '0' => 'No'),null, ['class' => 'form-control']) !!}

    </div>
    
   
    
            {!! Form::hidden('status',3, ['class' => 'form-control']) !!}
       <!-- Img Field -->
       <div class="form-group col-sm-6">
            {!! Form::label('img', 'Img:') !!}
            {!! Form::file('img', null, ['class' => 'form-control']) !!}
        </div>
    
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('vehicles.index') !!}" class="btn btn-default">Cancel</a>
    </div>
   
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
            </div>
           
          </div>
        </div>
      </div>
@endsection

