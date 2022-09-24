
@extends('front_end.layout.page')

@section('content')
    <section class="top-tech">
      <!-- <div class="overlay">

      </div> -->
    </section>

    <section class="aboutUs" id="aboutUs">
            <div class="container ">
                <div class="row my-5" style="justify-content: between;">
                    <div class="col-lg-6 col-sm-12"><img src="{{ asset('front_end/images/aboutimg2.jpg') }}" width="80%"></div>
                    <div class="col-lg-6 col-sm-12" style="margin: auto;">
                    <p>تعمل شركة توب تيك في مجال التدريب الهندسي والتقني كالبرمجة والتصميم والكهرباء وغيرها من
                       الدورات التدريبية المهمة في مجال الحاسوب والكهرباء والعمارة. وأيضا تعمل الشركة
                        في مجال التمديدات الكهربائية والخلايا الشمسية ومجال البرمجة والتصميم وتحتضن فريق أعمال حرة مختص في
                        مجالات عدة وما زالت الشركة تقوم بتطوير أعمالها</p>
                    </div>


    </section>

    <section class="OurCoursesOfTop" id="OurCoursesOfTop">
      <div class="container text-center">
        <div class="row" style="justify-content: space-between;">
          <div class="col-lg-12 ">
            <h2 class="name-courses my-5">الدورات المتوفرة لدى الشركة</h2>
          </div>
          <div class="cm col-lg-4 col-sm-12 my-5 ">
            <img src="{{ asset('front_end/images/multyCourse.jpg') }}" class="card-img-top" style="border-radius:4px;">
            <div class=" text-center">
              <a href="courseMultyMedia.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;">دورات الوسائط المتعددة </a>
            </div>


          </div>
          <div class="cm col-lg-4 col-sm-12 my-5">

            <img src="{{ asset('front_end/images/courseSoft.jpg') }}" class="card-img-top" style="border-radius:4px;">
            <div class=" text-center">
              <a href="softweerEngCourse.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;">دورات هندسة البرمجيات </a>
            </div>

          </div>

          <div class="cm col-lg-4 col-sm-12 my-5">
            <img src="{{ asset('front_end/images/architect.jpg') }}" class="card-img-top" style="border-radius:4px;">
            <div class=" text-center">
              <a href="architectureCourses.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;"> دورات هندسة معمارية </a>
            </div>

          </div>

          <div class="cm col-lg-4 col-sm-12 my-5">

            <img src="{{ asset('front_end/images/electric.jpg') }}" class="card-img-top" style="border-radius:4px;">
            <div class=" text-center">
              <a href="electricCourses.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;">دورات هندسة كهرباء </a>
            </div>

          </div>

          <div class="cm col-lg-4 col-sm-12 my-5">

    <img src="{{ asset('front_end/images/camp.jpg') }}" class="card-img-top" style="border-radius:4px;">
    <div class=" text-center">
      <a href="courseMultyMedia.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;"> مخيمات و مسابقات </a>
    </div>

    </div>

          <div class="cm col-lg-4 col-sm-12 my-5">

            <img src="{{ asset('front_end/images/warshat.jpg') }}" class="card-img-top" style="border-radius:4px;">
            <div class=" text-center">
              <a href="courseMultyMedia.php" class="btn btn-primary btn-lg btn-block " style="width: 100%;background-color:#4F7AC8;">  ورشات عمل </a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="servises" id="servises">

        <div class="container">
          <div class="row my-5">
                <div class="col-lg-12 ">
                    <h2 class=" text-center my-5">نوفر لطلابنا خدمات مميزة </h2>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                          <h4>حجز قاعة تدريبية</h4>
                          <p class="ms-5 mt-4"  >تعمل شركة توب تيك في مجال التدريب الهندسي والتقني كالبرمجة والتصميم والكهرباء وغيرها من
                            الدورات التدريبية المهمة في مجال الحاسوب والكهرباء والعمارة. وأيضا تعمل الشركة
                              في مجال التمديدات الكهربائية والخلايا الشمسية ومجال البرمجة والتصميم وتحتضن فريق أعمال حرة مختص في
                              مجالات عدة وما زالت الشركة تقوم بتطوير أعمالها</p>
                  </div>
              <div class="col-lg-6 col-sm-12"><img src="{{ asset('front_end/images/aboutimg2.jpg') }}" width="80%"></div>


        </div>

        <div class="container">
          <div class="row my-5 " >
          <div class="col-lg-12 ">
                    <h2 class=" text-center my-5"></h2>
                  </div>

                  <div class="col-lg-6 col-sm-12">
                          <h4> تدريب جامعي  </h4>
                          <p class="ms-5 mt-4"  >تعمل شركة توب تيك في مجال التدريب الهندسي والتقني كالبرمجة والتصميم والكهرباء وغيرها من
                            الدورات التدريبية المهمة في مجال الحاسوب والكهرباء والعمارة. وأيضا تعمل الشركة
                              في مجال التمديدات الكهربائية والخلايا الشمسية ومجال البرمجة والتصميم وتحتضن فريق أعمال حرة مختص في
                              مجالات عدة وما زالت الشركة تقوم بتطوير أعمالها</p>
                  </div>
              <div class="col-lg-6 col-sm-12"><img src="{{ asset('front_end/images/aboutimg2.jpg') }}" width="80%"></div>


        </div>

        <div class="container">
          <div class="row my-5 servis" >
                <div class="col-lg-12 ">
                    <h2 class=" text-center my-5"></h2>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                          <h4> محاضرات مسجلة</h4>
                          <p class="ms-5 mt-4"  >تعمل شركة توب تيك في مجال التدريب الهندسي والتقني كالبرمجة والتصميم والكهرباء وغيرها من
                            الدورات التدريبية المهمة في مجال الحاسوب والكهرباء والعمارة. وأيضا تعمل الشركة
                              في مجال التمديدات الكهربائية والخلايا الشمسية ومجال البرمجة والتصميم وتحتضن فريق أعمال حرة مختص في
                              مجالات عدة وما زالت الشركة تقوم بتطوير أعمالها</p>
                  </div>
              <div class="col-lg-6 col-sm-12"><img src="{{ asset('front_end/images/aboutimg2.jpg') }}" width="80%"></div>


        </div>




    </section>
@endsection
