@extends('front_end.layout.page')

@section('content')

    <!--  -->
    <div class="container member ">
        <div class="text-center mt-5">
            <h3>الأعضاء</h3>
            <div class="menu-content">

                <div class="box">
                    <div class="box-content">
                    <a href="memberJbreel.php">
                        <div class="box-img">
                           <img src="{{ asset('front_end/images/jbreel.jpg') }}">
                        </div>
                        </a>

                        <div class="box-text my-3">
                            <h4>م. جبريل فروخ</h4>
                            <h6>Admistrator</h6>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-content">
                        <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/mohammed.jpg') }}">
                        </div></a>

                        <div class="box-text my-3">
                            <h4>م. محمد قنديل</h4>
                            <h6>Freelancer</h6>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/zaqaria.jpg') }}">
                        </div>
                    </a>

                        <div class="box-text my-3">
                            <h4>م. زكريا الجاعوني</h4>
                            <h6>Electricity</h6>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/shams.jpg') }}">
                        </div>
                    </a>

                        <div class="box-text my-3">
                            <h4>م.شمس حسان</h4>
                            <h6>UX/UI</h6>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/ali.jpg') }}">
                        </div>
                    </a>

                        <div class="box-text my-3">
                            <h4>م.علي فودة</h4>
                            <h6>Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/moatasem.jpg') }}">
                        </div>
                    </a>

                        <div class="box-text my-3">
                            <h4>م.معتصم أبو كرش</h4>
                            <h6>Java Programmer</h6>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/moh.jpg') }}">
                        </div>
                    </a>

                        <div class="box-text my-3">
                            <h4>م. محمدأبو القمبز</h4>
                            <h6>Php Laravel</h6>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                    <a href="memberali.php">
                        <div class="box-img">
                            <img src="{{ asset('front_end/images/hedar.jpg') }}">
                        </div></a>

                        <div class="box-text my-3">
                            <h4>م.حيدر الشوا</h4>
                            <h6>Electronics</h6>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        </div>

    <div class="memberToggle">
            <a href="members1.php"><i class="fas fa-angle-double-right"></i></a>
           <a href="members2.php"><i class="fas fa-angle-double-left"></i>  </a>

        </div>

@endsection
