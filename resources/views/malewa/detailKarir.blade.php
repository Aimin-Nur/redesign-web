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
                <div class="col-lg-8 posts-list">
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
                                <li><a href="#"><i class="fa fa-comments"></i>{{ \Carbon\Carbon::parse($getId->created_at)->format('F d, Y') }}</a></li>
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
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
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
