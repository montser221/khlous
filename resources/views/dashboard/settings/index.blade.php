@extends('dashboard.index')
@section('title','الاعدادات  ')
@section('dashboard-content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">لوحة التحكم</a></li>
      <li class="breadcrumb-item active" aria-current="page"> الاعدادات   </li>
    </ol>
    </nav>
    <div class="users">
      <div class="h5">الاعدادات  </div>
      <div class="row " style="margin-bottom:15px">
        <div class="col">
          <form class="" action="" method="post">
            {{-- <input type="text" class="form-control" name="" value=""> --}}
          </form>
        </div>
      </div>

       {{-- Errors message --}}
      @include('includes.errors')
      {{-- success message --}}
      @include('includes.success')

      <div class="settings-edit" style="background-color:#FFF;padding:30px">
          <h5 class="mb-4">تعديل  الاعدادات </h5>
          <form  id="edit-form" enctype="multipart/form-data" method="post" action="@if(!empty($data)) {{route('settings.update',$data->settingId ?? 1)}}  @else{{route('settings.store')}}@endif">
            @csrf
            @if(!empty($data))
              @method('PATCH')
            @else
              @method('post')
            @endif
            <div class="form-row mb-4">
              <div class="col">
                <label class="label-control" for="foundationName"> أسم الشركة /المؤسسة  </label>
                <input id="inputfullName" type="text" name="foundationName" class="form-control" value="{{ !empty($data->foundationName) ? $data->foundationName :  old('foundationName') }}" >
              </div>
              <div class="col">
                <label class="label-control" for="email">  البريد الالكتروني </label>
                <input type="text" name="email" class="form-control"  value="{{$data->email ?? old('email')}}" >
              </div>

            </div>
            <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row mb-4">
              <div class="col">
                <label class="label-control" for="phone1">  رقم الجوال </label>
                <input type="text" class="form-control" name="phone1" value="{{$data->phone1 ?? ''}}">
              </div>


              <div class="col">
                <label class="label-control" for="foundationTitle">  العنوان  </label>
                <input type="text" class="form-control" name="foundationTitle" value="{{$data->foundationTitle ?? old('foundationTitle')}}">
              </div>
            </div>
            <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row mb-4">
              <div class="col">
                <label class="label-control" for="phone2"> رقم الجوال 2  </label>
                <input type="text" class="form-control" name="phone2" value="{{$data->phone2??''}}">
              </div>
              <div class="col">
                <label class="label-control" for="phone3">  رقم الجوال 3   </label>
                <input type="text" name="phone3" class="form-control" value="{{$data->phone3 ?? ''}}">
              </div>
            </div>
            <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row mb-4">
              <div class="col">
                <label class="label-control" for="phoneNumber">  رقم الهاتف</label>
                <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" value="{{$data->phoneNumber ?? old('phoneNumber')}}">
              </div>
              <div class="col">
                <label class="label-control" for="fax"> الفاكس    </label>
                <input id="fax" type="text" name="fax" class="form-control" value="{{$data->fax ?? ''}}">
              </div>
              <span id='msg'></span>
            </div>
            <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row  mt-3">
                <div class="col">
                  <label class="label-control" for="facebook">      فيسبوك  </label>
                  <input type="text"
                  class="form-control"
                  name="facebook"
                  placeholder="https://www.facebook.com/aconufs8"
                  value="{{$data->facebook}}"
                  >
                </div>
                <div class="col">
                  <label class="label-control" for="twitter"> تويتر</label>
                  <input type="text" name="twitter" class="form-control"
                  placeholder="https://www.twitter.com/aconufs8"
                  value="{{$data->twitter}}"
                  >
                </div>
              </div>

              <div class="form-row mt-3 mb-3">
                <div class="col">
                  <label class="label-control" for="instagram">      إنستاجرام  </label>
                  <input type="text" class="form-control" name="instagram"
                  placeholder="https://www.instagram.com/aconufs8"
                  value="{{$data->instagram}}"
                  >
                </div>
                <div class="col">
                  <label class="label-control" for="linkedin"> لينكدإن</label>
                  <input type="text" name="linkedin" class="form-control"
                  placeholder="https://www.linkedin.com/aconufs8"
                  value="{{$data->linkedin}}"
                  >
                </div>
              </div>
              <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row mb-4">
              <div class="col">
                <label class="label-control" for="fax"> الكلمات المفتاحية    </label>
                <textarea class="form-control" name="keywords" rows="5" cols="40">{{$data->keywords ?? ''}}</textarea>
              </div>
              <div class="col">
                  <label class="label-control" for="foundationLogo"> شعار الجمعية </label>
                  <input type="file" name="foundationLogo" class="form-control-file"  >
              </div>
            </div>
            <div class="main-color mt-4 mb-4" style="border-bottom:2px solid "></div>

            <div class="form-row mb-4">

         </div>

          <button type="submit" class="btn text-orange text-white mt-5"> حفظ التعديلات <i class="fa fa-plus"></i></button>
        </form>
      </div>
    </div>
@endsection
