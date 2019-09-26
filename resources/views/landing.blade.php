@extends('components.master')

@section('main')
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="img/brand/white.png" style="width: 200px;" class="img-fluid">
                <h1 class="display-3  text-white mt-5">پلتفرم ویدئویی برای ناشران</h1>
                <p class="lead text-white">ساده ترین راه برای بارگذاری محتوای ویدئویی و پخش سریع و آسان ویدیو به صورت رایگان</p>
                <div class="btn-wrapper mt-5">
                  <a href="{{ route('upload') }}" class="btn btn-danger btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-circle-08"></i></span>
                    <span class="btn-inner--text">ورود به پنل</span>
                  </a>
                  <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-default btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                    <span class="btn-inner--text">بارگذاری ویدئو</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 text-center">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">سرویس رایگان</h6>
                    <p class="description mt-3">ثبت نام اختیاری می باشد. کافیه لینک ویدئو خودتون رو وارد کنید</p>
                   
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 text-center">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                      <i class="ni ni-istanbul"></i>
                    </div>
                    <h6 class="text-success text-uppercase">با کیفیت بالا</h6>
                    <p class="description mt-3">فیام ها با کیفیت ۱۰۸۰ و ۶۰فریم بر ثانیه پخش می شوند و با دستگاه های مختلف سازگار است</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 text-center">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                      <i class="ni ni-planet"></i>
                    </div>
                    <h6 class="text-warning text-uppercase">آپلودینگ سریع</h6>
                    <p class="description mt-3">سریعترین متد آپلد کدرن، فقط کافیه امتحان کنید.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="/img/theme/promo-1.png" class="img-fluid floating">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h3 class="text-right">ویژگی های عالی</h3>
              <p class="text-right">ساده ترین راه برای هر کسی برای جاسازی محتوای ویدیو ، به صورت رایگان.</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success ml-3">
                        <i class="ni ni-settings-gear-65"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">سازگاری با همه دستگاه‌ها و مرورگرها</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success ml-3">
                        <i class="ni ni-html5"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">پخش بهترین کیفیت، با هر سرعت اینترن</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success ml-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">بهره‌مندی از فضای ذخیره‌سازی ابری</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="/img/theme/img-1-1200x1000.jpg" class="card-img-top">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white text-right">نمونه ای کیفیبت</h4>
                <p class="lead text-italic text-white text-right">اقیانوس قطبی هر زمستان یخ زده و بیشتر یخ های دریا هر تابستان را فرو می ریزد و این روند هر اتفاقی که می افتد ادامه خواهد یافت.</p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                <i class="ni ni-settings"></i>
              </div>
              <h3 class="text-right">مشتریان ما</h3>
              <p class="lead text-right">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
              <p class="lead text-right">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <p class="lead text-right">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@stop