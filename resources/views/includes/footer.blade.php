<!-- Start Footer  -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
          @empty($about)

          <p class="about">
              {{ $aboutassociation->about ?? ''}}
            </p>
            @endempty
        <div class="social">
          <div class="h6"> تابعنا عبر وسائل التواصل الاجتماعي:</div>
          <a href="{{$settingsdata->facebook ?? '' }}"><img src="{{url('design/facebook.png')}}"></a>
          <a href="{{$settingsdata->twitter ?? ''}}"><img src="{{url('design/twitter.png')}}"></a>
          <a href="{{$settingsdata->instagram ?? ''}}"><img src="{{url('design/instagram.png')}}"></a>
          <a href="{{$settingsdata->linkedin ?? ''}}"><img src="{{url('design/linkedin.png')}}"></a>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="contact-info fix-footer"> معلومات التواصل</div>
        <ul class="list-unstyled">

          <li ><a href="tel:{{$settingsdata->phoneNumber ?? ''}}" dir="ltr">الهاتف:  {{$settingsdata->phoneNumber ?? ''}}</a></li>
          <li class="d-block">العنوان: {{$settingsdata->foundationTitle ?? ''}}  </li>
        </ul>
        <div class="pay-by">
          <div class="h6"> نقبل الدفع بواسطة</div>
          <a href="#" data-toggle="tooltip"  offset="2" data-placement="bottom" title="Amazon" ><i class="fa fa-amazon fa-lg"></i></a>
          <a href="#" data-toggle="tooltip"  offset="2" data-placement="bottom" title="Visa"><i class="fa fa-cc-visa fa-lg" aria-hidden="true"></i></a>
          <a href="#" data-toggle="tooltip"  offset="2" data-placement="bottom" title="Paypal"><i class="fa fa-cc-paypal fa-lg"></i></a>
          <a href="#" data-toggle="tooltip"  offset="2" data-placement="bottom" title="Creditcard"><i class="fa fa-credit-card fa-lg" aria-hidden="true"></i></i></a>
          <a href="#" data-toggle="tooltip"  offset="2" data-placement="bottom" title="Mastercard"> <i class="fa fa-cc-mastercard fa-lg" aria-hidden="true"></i></a>
        </div>
        </div>
        <div class="col-sm-3">
          <div class="d-flex fix-footer menu-phone">القائمة </div>
          <ul class="list-unstyled">
            <li>
              <a href="{{url('aboutus')}}">من نحن</a>
            </li>
            <li>
              <a href="{{url('ourproject')}}">مشاريعنا</a>
            </li>
            <li>
              <a href="{{url('paymethod')}}" >طرق التبرع</a>
            </li>
            <li>
              <a href="{{url('jobs')}}">وظائف</a>
            </li>
            <li>
              <a href="{{url('contact')}}" > الاتصال بالجمعية  </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-3">
					<div class="d-flex fix-footer menu-phone">مركز المساعدة </div>
					<ul class="list-unstyled">
            <li>
              <a href="#">شروط وسياسة التبرع</a>
            </li>
            <li>
              <!--<a href="#" >ارجاع واسترداد المنتجات  </a>-->
            </li>
            <li>
              <a href="#">سياسة الخصوصية</a>
            </li>
            <li>
              <a href="#" >  الدليل الارشادي</a>
            </li>
          </ul>
        </div>
    </div>
    <hr style="border-bottom:2px solid #DDD"/>
    <div class="copyright">
      <div class="footer-left">
          @empty($about)

          جميع الحقوق محفوظة لدى
          {{$aboutassociation->associationTitle}}
          بمحافظة
          {{$aboutassociation->location}}
          تصميم نوافذ الابداع
          @endempty
       </div>

      <div class="footer-right">
        {{date('Y')}}
      </div>
    </div>
  </div>
</div>

<!-- End Footer  -->
