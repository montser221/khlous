@extends('layouts.app')

@section('title','مشاريعنا')

@section('header')
    @include('includes.header')
@stop
@push('css')
    <link rel="stylesheet" href="{{url('css/ourproject.css')}}">
@endpush

@section('content')

{{-- Start Our Projects --}}

<div class="our-projects mt-5">

  <div class="container">

<?php $show = 0 ?>

@foreach ($allprojects as $project)

  @if ($project->projectStatus==1)

    <?php $show = 1 ?>

  @endif

@endforeach

@if ($show)

    <div class="h2 text-center">من مشاريعنا</div>
    <div class="text-center title mt-3 mb-4">
        {{-- <img src="{{url('design/shape.png')}}"> --}}
    </div>
    <div class="text-center p-fix">مجموعة المشاريع التطوعية التي قامت بها المؤسسة</div>

    {{--  <button class="btn btn-light">أخترنا لكم </button>

      <button class="btn btn-light"> آخر المشاريع  </button>

    </div> --}}

  @endif



      <div class="row">

        @foreach ($allprojects as $project)



        <div class="all-projects col-md-4 col-sm-6">

          <a href="{{route('projectDetail',$project->projectId)}}">
          <img style=" "  src="{{ url($project->projectImage) }}" class="" alt="1" />

          <span class="d-block text-center main-color mt-3 mb-3">{{$project->projectName ?? ''}}</span>
        </a>

         <p style="font-size:15px;    max-height: 50px; overflow: hidden;">

          {{$project->projectText ?? ''}}

          </p>

          <hr>

          <div class="text-center  mb-3 mt-3  ">

            تكلفة المشروع

          </div>

          <div class="btn  btn-lg d-block button-custom btn-active " style="direction: ltr;">


            </strong> {{number_format($project->projectCost,0) ?? 0}} </strong>  <strong> SAR</strong>


          </div>



          <span   class="d-total-text mt-3"  >إجمالي التبرعات</span>

                <div class="denoate-total">
             <strong style="display: inline-block">SAR</strong>
             <strong>
            @php
                $getAllDenoate = $project->denoate->sum('moneyValue');
            @endphp
            @if($getAllDenoate >= $project->projectCost ) {{number_format( $project->projectCost ,0)}} @else  {{ number_format( $getAllDenoate ,0)}} @endif
            </strong>
          </div>

         <div class="remain mb-2"  >
            <span style="font-size: 12px; margin-left: 10px;">باقي للتبرع:</span>
             <small style="margin-left: 5px"> SAR</small>
              <small style="margin-left: 5px">@if($getAllDenoate >= $project->projectCost ) 0 @else {{ $project->projectCost - $getAllDenoate }} @endif </small>
          </div>



          <div class="progress mb-5"  data-toggle="tooltip"  offset="2" data-placement="top" title="@if($getAllDenoate >= $project->projectCost ) {{  $project->projectCost }} @else  {{ number_format( $getAllDenoate ,0)}} @endif SAR ">
            <div class="progress-bar" role="progressbar"

                 style="@if($getAllDenoate > 0)   background: linear-gradient(rgba(21, 168, 148, 0.80) ,
   rgba(21, 144, 127, 0.80) );!important; @else  background-color:#e9ecef;width:15% !important;  @endif @if($getAllDenoate >= $project->projectCost ) width:100%;  @else  width: {{  round($getAllDenoate / $project->projectCost * 100)  }}%; @endif" aria-valuenow="25"
                 aria-valuemin="0" aria-valuemax="100"
                > @if($getAllDenoate >= $project->projectCost ) 100% @else
                <small style= "color:#32353c;  font-size: 15px;position: absolute;right: 50%;">

                 {{  round($getAllDenoate / $project->projectCost * 100) }}% @endif</div>
                </small>
          </div>

          <div class="project-buttons" id="our-projects-buttons">
            <small class="d-block text-gray mb-2 mt-4"> أختيار مبلغ التبرع </small>
            <?php


                ?>
                @if($project->arrow->count() <= 0)

                @else
                 <?php
                  foreach($project->arrow as $a)

                  {?>
              <button    class="c-b">
                  {{ $a->arrowName }} / {{ $a->arrowValue }} ريال
                <input class="ourArrVal" type="hidden"  value="{{ $a->arrowValue }}" />
              </button>
             <?php
              }
              ?>

            @endif

          </div>


          <form class="our-projects-form" action="{{route('addToCart',$project->projectId)}}" method="post">

          <div class="denoate-now">

              @csrf

              @method('post')

              <input required="required" type="number" id="_input_denoate" name="denoate"  class="input-denoate ourprojectnowvalue" placeholder="ضع قيمة التبرع هنا">


            <button  id="add-to-basket" type="submit" style="border:none;padding:10px" class="to-basket" data-toggle="tooltip"  data-placement="bottom" title="إضافة الى السلة">  <i class="fa fa-shopping-basket"></i> </button>

            </form>

   <form class="d-inline-flex dnow-form" action="{{route('addToCartNow',$project->projectId)}}" method="post">
          @csrf
          @method('post')
          <input type="hidden"  name="dnow"  class="dnow" value="" >

          <button  style="padding:10px;border:0" class="btn-denoate oprojecstnow"
          type="submit">تبرع الآن </button>
        </form>

          </div>

        </div>

      @endforeach

    </div>

 {{$allprojects->links()}}

  </div> <!--End container -->

</div>

{{-- End Our Projects --}}

@stop

@section('footer')


  @include('includes.footer')

@stop

