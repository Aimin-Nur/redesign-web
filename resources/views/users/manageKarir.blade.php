@include('layouts.header')
@include('users.navbar')


<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-success">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 15l2 2l4 -4" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countArtikelPublish}} Karir Publish</h3>
                        <p class="text-secondary">Customer dapat melihat seluruh portofolio yang telah Anda masukkan. Pastikan agar Anda mengubah status portofolio menjadi Publish agar dapat tampil di website.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-red">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-history"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 8l0 4l2 2" /><path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countArtikelDraft}} Draft Karir</h3>
                        <p class="text-secondary">Status Draft artinya portofolio yang Anda masukkan belum di publish di website Malewa. Status Draft memasktikan bahwa content yang Anda masukkan sudah fix dan tidak ada perubahan lagi.</p>
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
                            <p class="text-secondary"><p>{!! \Illuminate\Support\Str::words($artikel->isi, 35, '...') !!}</p></p>
                            </div>
                            <div class="card-footer">
                            <div class="d-flex">
                                <a href="#" class="btn btn-link me-auto">{{ \Carbon\Carbon::parse($artikel->created_at)->format('F d, Y') }}
                                </a>
                                <div class="btn-group ms-auto">
                                    <a href="/detailKarirMalewa/{{$artikel->id}}" class="btn btn-md btn-primary btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>
                                    </a>
                                    <a href="/editKarirByUser/{{$artikel->id}}" class="btn btn-md btn-warning btn-icon">
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


    {{-- Delete Porto --}}
    @foreach ($getArtikel as $artikel )
    @csrf
        <div class="modal modal-blur fade" id="modal-danger{{$artikel->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                <h3>Hapus Karir {{$artikel->judul}}?</h3>
                <div class="text-secondary">Tindakan ini akan membuat artikel terhapus dan tidak dapat dikembalikan.</div>
                </div>
                <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                    <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                        Cancel
                        </a></div>
                    <div class="col"><a href="/destroyKarirByUser/{{$artikel->id}}" class="btn btn-danger w-100">
                        Hapus Karir
                        </a></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
@endforeach


@include('layouts.footer')
@include('layouts.script')
