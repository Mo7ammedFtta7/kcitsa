@extends('layouts.app')

@section('content')
   
            <section class="container big_padding ">

                    <p class="default_text raleway text-center default_small_heading blue_color font_200"></p>
                        <h2 class="default_section_heading text-center"><span class="font_200">    </span>     My Jobs
        
                            <span class="font_200">                 </span>
        
                        </h2>
                    <div class="pricing_table_section">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('myjobs.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
</div>
            </section>
@endsection

