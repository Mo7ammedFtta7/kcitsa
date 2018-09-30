@extends('layouts.app')

@section('content')
<section class="blog_section big_padding" id="blog">
<style>
    .pricing_table_column h3 {
    margin-bottom: 0px;
}
    .pricee {
    padding: 5px 0 5px;
    border-bottom: 2px solid rgba(48, 56, 64, 0.18);
    margin-top: -25px;
    vertical-align: middle;
}
    ul.packages {
    padding: 5px 0;
}
    .blog_img {
    width: 100%;
    overflow: hidden;
    margin: 0px 0; 
    border-radius: 5px;
}
.bg_grey {
    background: #b7aaaa;
}
.big_padding {
    padding: 55px 0;
}
    .pricing_table_column {
    border: 2px solid #FFFFFF;
    padding: 32px 21px;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    background: #FFFFFF;
}
.job-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #DDD;
    opacity: 0.5;
}
.logo {
    position: absolute;
    width: 21%;
    min-width: 60px;
    top: 80px;
    left: 10px;
    background: #fff;
    z-index: 1;
}
.job-status-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: none;
}
.rowspace
{
    padding: 10px 15px 10px 15px;
}
</style>
  
<section class="pricing_section big_padding bg_grey" id="pricing_table">

        <div class="container">

            <div class="pricing_table_section">

                <p class="default_text raleway text-center default_small_heading blue_color font_200">New Plans</p>
                <h2 class="default_section_heading text-center"><span class="font_200">    Our</span>     Jobs

                    <span class="font_200">              Table   </span>

                </h2>
                <div class="">
                            <div class="row">
                                @foreach($jobs as $jobs)
                                    <div class="col-sm-6 rowspace">
                                        <div class="pricing_table_column ">                                  

                                                    <div class="pricee">
                                                        <div class="row">
                                                                <div class="col-xs-2">
                                                                            <img src="/imgs/logos/{!! $jobs->clients->icon !!}" alt="" style="max-width: 40px;max-height: 50px;">        
                                                                </div>
                                                                <div class="col-xs-6">
                                                                            <br><p>{!! $jobs->clients->name !!}</p>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                            <br> {!! $jobs->jopname !!}
                                                                </div>
                                                        </div>
                                                    </div>    
                                                    <div class="packages">
                                                            <div class="blog_img">
                                                                    <img src="/imgs/jobsmain/{!! $jobs->img !!}" alt="blog_img">
                                                            </div>
                                                                                       
                                                    </div>
                                                    <div class="row" >
                                                            <div class="col-md-2" >
                                                                 Slots: <b>{!! $jobs->slots !!}</b>
                                                            </div>
                                                            <div class="col-md-3" >
                                                                    Duration: <b>{!! $jobs->duration !!}</b>
                                                            </div>
                                                            <div class="col-md-3">
                                                                    <div class="open_sans pink_color">
                                                                        SDG {!! $jobs->price !!}/Month
                                                                    </div>
                                                            
                                                            </div>
                                                            <div class="col-md-4" >
                                                                    <div class="pricing_button">
                                                        
                                                                            <a href="{!! route('jobs.show', [$jobs->id]) !!}" class="btn btn-info">Learn more</a>
                                                        
                                                                        </div>
                                                        
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                <div>
            </div>

        </div>

</section>

@endsection

