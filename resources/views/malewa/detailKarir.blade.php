@include('malewa.layouts.header')
@include('malewa.layouts.navbar')



<div class="slider-area">
    <div class="single-slider slider-bg3 hero-overly slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-12">

                    <div class="hero-caption hero-caption2 text-center">
                        <h2>{{$getId->judul}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('/storage/uploads/Karir-Malewa/' . $getId->gambar) }}"
                            alt="Ilustrasi-Karir">
                        </div>
                        <div class="blog_details">
                            <h1 style="color: #2d2d2d;">{{$getId->judul}}
                            </h1>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i>Editor : {{$getId->editor}}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>{{$getId->updated_at}}</a></li>
                            </ul>
                            <p class="excert">
                            {!! $getId->isi !!}
                            </p>

                            <div class="navigation-top">
                                <div class="d-sm-flex justify-content-between text-center">
                                    <p class="like-info"><span class="align-middle"><i class="fa-solid fa-building"></i></span>PT. Malewa Intermedia Indonesia</p>
                                    <div class="col-sm-4 text-center my-2 my-sm-0">
                                    </div>
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>

                    <div class="navigation-area">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                    <div class="thumb">
                    <a href="#">
                    <img class="img-fluid" src="assets/img/post/preview.jpg" alt>
                    </a>
                    </div>
                    <div class="arrow">
                    <a href="#">
                    <span class="lnr text-white ti-arrow-left"></span>
                    </a>
                    </div>
                    <div class="detials">
                    <p>Prev Post</p>
                    <a href="#">
                    <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                    </a>
                    </div>
                    </div>
    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
    <div class="detials">
    <p>Next Post</p>
    <a href="#">
    <h4 style="color: #2d2d2d;">Telescopes 101</h4>
    </a>
    </div>
    <div class="arrow">
    <a href="#">
    <span class="lnr text-white ti-arrow-right"></span>
    </a>
    </div>
    <div class="thumb">
    <a href="#">
    <img class="img-fluid" src="assets/img/post/next.jpg" alt>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="blog-author">
    <div class="media align-items-center">
    <img src="assets/img/blog/author.png" alt>
    <div class="media-body">
    <a href="#">
    <h4>Harvard milan</h4>
    </a>
    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
    our dominion twon Second divided from</p>
    </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    </section>

    </main>
    <footer>
    <div class="footer-wrapper">







    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@include('malewa.layouts.footer')
@include('malewa.layouts.script')
