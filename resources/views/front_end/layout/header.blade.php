<!--- Start header--->
<header>
    <nav class="navbar navbar-expand-lg" style="position: fixed;top:0px;">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand justify-contect-center " >
                <img src="{{ asset('front_end/images/logWeb.png') }}" width="150px" height="150px">
            </a>
            <button id="navbar_toggler_button" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span id="navbar_toggler_icon" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}#aboutUs">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}#servises">خدماتنا</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}#OurCoursesOfTop">دوراتنا</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('members') }}">الأعضاء</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}#blog">إنجازاتنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
