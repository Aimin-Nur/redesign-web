@include('malewa.layouts.header')
@include('malewa.layouts.navbar')
<main>
    <div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row justify-content-center ">
    <div class="col-xl-12">

    <div class="hero-caption hero-caption2 text-center">
    <h2>Portfolio</h2>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="guest-house top-padding">
    <div class="container">
    <div class="row">
    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-9">
    <div class="section-tittle mb-70">
    <span>Projects</span>
    <h2>Explore Our Latest Projects for Clients</h2>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">

    @foreach ($getPorto as $porto)
    <div class="col-lg-6 col-sm-6 p-0">
        <div class="single-location">
            <img  src="{{ asset('/storage/uploads/Portofolio-Malewa/' . $porto->gambar) }}">
        <div class="guest-contents">
            <p>Portofolio Company</p>
            <h3><a>{{$porto->judul}}</a></h3>
        </div>
    </div>
</div>
    @endforeach
</div>






    <div class="row">
    <div class="col-lg-12 p-0">
    <a href="#" class="btn_10 w-100 text-center">Hubungi Kami<img src="assets/img/icon/right-arrow.svg" alt></a>
    </div>
    </div>
    </div>
    </div>
@include('malewa.layouts.footer')
@include('malewa.layouts.script')
