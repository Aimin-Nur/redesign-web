@include('layouts.header')
@include('admin.navbar')


<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-success">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countArtikelPublish}} Karir Publish</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-red">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countArtikelDraft}} Draft Karir</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            <h2 class="page-title">
                Manage Karir
            </h2>
            </div>
        </div>
        </div>
    </div>

    @if ($countArtikel == NULL)
    <div class="page-body">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            <div class="empty">
              <div class="empty-img"><img src="{{asset('demo')}}/./static/illustrations/undraw_printing_invoices_5r4r.svg" height="128" alt="">
              </div>
              <p class="empty-title">Anda Belum Memiliki berita Karir</p>
              <p class="empty-subtitle text-secondary">
                Buat artikel seputar karir di Malewa dan pubslih artikelnya sekarang juga.
              </p>
              <div class="empty-action">
                <a href="/addKarir/{id}" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                 Tambah karir
                </a>
              </div>
            </div>
          </div>
    </div>
    @else
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                @foreach ($getArtikel as $artikel)
                <div class="col-md-6 col-lg-6">
                        <div class="card">
                            @if ($artikel->status == 'Publish')
                                <div class="ribbon bg-success">Publish</div>
                            @else
                                <div class="ribbon bg-warning">Draft</div>
                            @endif
                            <!-- Photo -->
                            <div class="img-responsive img-responsive-21x9 card-img-top"style="background-image: url('{{ asset('storage/uploads/Karir-Malewa/' . $artikel->gambar) }}')"></div>
                            <div class="card-body">
                            <h3 class="card-title">{{$artikel->judul}}</h3>
                            <p class="text-secondary">{!! $artikel->isi !!}</p>
                            </div>
                            <div class="card-footer">
                            <div class="d-flex">
                                <a href="#" class="btn btn-link me-auto">Last Update 3 mins Ago</a>
                                <div class="btn-group ms-auto">
                                    <a href="/readArtikel" class="btn btn-md btn-primary btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>
                                    </a>
                                    <a href="/editArtikel/{{$artikel->id}}" class="btn btn-md btn-warning btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    </a>
                                    <a href="/" class="btn btn-md btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#modal-danger{{$artikel->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    @endif




@include('layouts.footer')
@include('layouts.script')
