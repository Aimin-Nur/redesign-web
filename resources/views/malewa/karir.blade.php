@include('malewa.layouts.header')
@include('malewa.layouts.navbar')

<div class="slider-area">
    <div class="single-slider slider-bg3 hero-overly slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-12">
                    <div class="hero-caption hero-caption2 text-center">
                        <h1>Career</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($getArtikel as $artikel )
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('/storage/uploads/Karir-Malewa/' . $artikel->gambar) }}"
                                alt="Ilustrasi-Karir Malewa">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="/detailKarirMalewa/{{$artikel->id}}">
                                    <h2 class="blog-head" style="color: #2d2d2d;">{{$artikel->judul}}</h2>
                                </a>
                                <p>{!! \Illuminate\Support\Str::words($artikel->isi, 35, '...') !!}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i>Editor: {{$artikel->editor}}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i>{{ \Carbon\Carbon::parse($artikel->updated_at)->format('F d, Y') }}</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Keyword">
                                        <div class="input-group-append d-flex">
                                            <button class="boxed-btn2" type="button">Search</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        <div class="media post_item">
                                <img src="assets/img/post/post_1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                        </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    </section>
@include('malewa.layouts.footer')
@include('malewa.layouts.script')
