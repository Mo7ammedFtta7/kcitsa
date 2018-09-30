@extends('layouts.app')

@section('content')
  
<section class="pricing_section big_padding bg_grey" id="pricing_table">

        <div class="container">

            <div class="pricing_table_section">

                        <p class="default_text raleway text-center default_small_heading blue_color font_200">New Plans</p>
                        <h2 class="default_section_heading text-center"><span class="font_200">    Our</span>     Jobs <span class="font_200">Table   </span> </h2>
                        <br>        
                        <div class="">
                                                <div class="row">
                                                        <div class="col-sm-4 pricing_table_column  rowspace">

                                                                <div class="pricee">
                                                                        <div class="row">
                                                                                <div class="col-xs-2">
                                                                                            <img src="/imgs/logos/{!! $jobs->clients->icon !!}" alt="" style="max-width: 40px;max-height: 50px;">        
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                            <br><p>{!! $jobs->clients->name !!}</p>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                            <br> {!! $jobs->jopname !!}
                                                                                </div>
                                                                        </div>
                                                                    </div>    
                                                                    <div class="packages">
                                                                            <div class="blog_img">
                                                                                    <img src="/imgs/jobsmain/{!! $jobs->img !!}" alt="blog_img">
                                                                            </div>
                                                                                                       
                                                                    </div>
                                                                  
                                       
                                                                    {{-- @include('jobs.show_fields') --}}
                                                        </div>
                                                
                                                
                                                        <div class="col-md-4 ">
                                                                <div class="pricing_table_column">
                                                                        <div class="panel-body">

                                                                                <div class="row">
                                                                                      <div class="col-xs-12">
                                                                                            <b>Registration</b>
                                                                                      </div>
                                                                                      <div class="col-xs-4">
                                                                                        Start Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                            {!! $jobs->req_start_date->format('Y-m-d') !!}                                                                                  </div>
                                                                                              <div class="col-xs-4">
                                                                                          End Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                                {!! $jobs->reg_end_date->format('Y-m-d') !!}                                                                                  </div>
                                                                                      </div>
                                                                                </div>
                                                                            
                                                                                <br>
                                                                            
                                                                                      <div class="row">
                                                                                    <div class="col-xs-12">
                                                                                      <b>Installation Period</b>
                                                                                    </div>
                                                                            
                                                                                    <div class="col-xs-12">
                                                                                      <span class="small">Estimated installation time is 30 minutes.</span>
                                                                                    </div>
                                                                            
                                                                                              <div class="col-xs-4">
                                                                                        Start Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                            {!! $jobs->ins_start_date->format('Y-m-d') !!}    
                                                                                      </div>
                                                                                      <div class="col-xs-4">
                                                                                        End Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                            {!! $jobs->ins_end_date->format('Y-m-d') !!}    
                                                                                      </div>
                                                                                          </div>
                                                                                  <br>
                                                                                
                                                                                      <div class="row">
                                                                                    <div class="col-xs-12">
                                                                                      <b>Campaign</b>
                                                                                    </div>
                                                                                    <div class="col-xs-4">
                                                                                      Start Date
                                                                                    </div>
                                                                                    <div class="col-xs-8">
                                                                                            {!! $jobs->comp_start_date->format('Y-m-d') !!}   
                                                                                    </div>
                                                                                    <div class="col-xs-4">
                                                                                      End Date
                                                                                    </div>
                                                                                    <div class="col-xs-8">
                                                                                            {!! $jobs->comp_end_date->format('Y-m-d') !!}   
                                                                                    </div>
                                                                                  </div>
                                                                                  <br>
                                                                                
                                                                                      <div class="row">
                                                                                    <div class="col-xs-12">
                                                                                      <b>Uninstallation Period</b>
                                                                                    </div>
                                                                            
                                                                                    <div class="col-xs-12">
                                                                                      <span class="small">Estimated uninstallation time is 30 minutes.</span>
                                                                                    </div>
                                                                            
                                                                                              <div class="col-xs-4">
                                                                                        Start Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                            {!! $jobs->un_start_date->format('Y-m-d') !!}   
                                                                                      </div>
                                                                                      <div class="col-xs-4">
                                                                                        End Date
                                                                                      </div>
                                                                                      <div class="col-xs-8">
                                                                                            {!! $jobs->un_end_date->format('Y-m-d') !!}   

                                                                                      </div>
                                                                                          </div>
                                                                                  <br>
                                                                                
                                                                              </div>
                                                              </div>
                                                                        <div class="col-md-4">
                                                                                <div class="pricing_table_column">
                                                                                        <div class="panel">
                                                                                                <ul class="list-group">
                                                                                                  
                                                                                                  
                                                                                                  <li class="list-group-item font-magenta"><b>Location</b></li>
                                                                                                              <li class="list-group-item">{!! $jobs->location !!}</li>
                                                                                                  
                                                                                                  
                                                                                                  <li class="list-group-item font-magenta"><b>Vehicle</b></li>
                                                                                                              <li class="list-group-item">
                                                                                                                    {!! $jobs->vehicle !!}
                                                                                                    </li>
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                              <li class="list-group-item font-magenta"><b>Others</b></li>
                                                                                                    <li class="list-group-item">
                                                                                                          
                                                                                                    </li>
                                                                                                    <li class="list-group-item font-magenta"><b>Avilable vehicless</b></li>
                                                                                                    <li class="list-group-item">
                                                                                                          <table class="table">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                  <th>Type</th>
                                                                                                                  <th>Blade No</th>
                                                                                                                  <th>Action</th>
                                                                                                        </tr>
                                                                                                              </thead>
                                                                                                              <tbody>


@foreach ($vehicles as $item)
<tr>
<td>{!! $item->vehicle_make !!}-{!! $item->model !!}</td>
<td>{!! $item->license_no !!}</td>
<td>
  
    {!! Form::open(['route' => 'myjobs.store']) !!}
    {!! Form::hidden('job',  $jobs->id, null) !!}
    {!! Form::hidden('vehicle',  $item->id, null) !!}

    {!! Form::submit('Request', ['class' => 'btn btn-warning']) !!}

{!! Form::close() !!}

</tr>
@endforeach

                                                                                                            
                                                          
                                                                                                            </tbody>
                                                                                                          </table>
                                                                                                    </li>
                                                                                                </ul>
                                                                                              </div>
                                                                                    </div>
                                                                            </div>
                                                
                                                    </div>

                                    </div>

             </div>

        </div>
</section>
@endsection
