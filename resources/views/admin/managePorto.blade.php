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
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-export"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countPublish}} Portofolio Publish</h3>
                        <p class="text-secondary">Customer dapat melihat seluruh portofolio yang telah Anda masukkan. Pastikan agar Anda mengubah status portofolio menjadi Publish agar dapat tampil di website.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-red">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-report"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M17 13v4h4" /><path d="M12 3v4a1 1 0 0 0 1 1h4" /><path d="M11.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v2m0 3v4" /></svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$countDraf}} Draft Portofolio</h3>
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
                Portofolio
            </h2>
            </div>
        </div>
        </div>
    </div>

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
                            <div class="img-responsive img-responsive-21x9 card-img-top"style="background-image: url('{{ asset('storage/uploads/Portofolio-Malewa/' . $artikel->gambar) }}')"></div>
                            <div class="card-body">
                            <h3 class="card-title">{{$artikel->judul}}</h3>
                            </div>
                            <div class="card-footer">
                            <div class="d-flex">
                                <a href="#" class="btn btn-link me-auto">Last Update 3 mins Ago</a>
                                <div class="btn-group ms-auto">
                                    <a href="/readArtikel" class="btn btn-md btn-primary btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>
                                    </a>
                                    <a href="/editPorto/{{$artikel->id}}" class="btn btn-md btn-warning btn-icon">
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
                <h3>Hapus Artikel {{$artikel->judul}}?</h3>
                <div class="text-secondary">Tindakan ini akan membuat artikel terhapus dan tidak dapat dikembalikan.</div>
                </div>
                <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                    <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                        Cancel
                        </a></div>
                    <div class="col"><a href="/destroyPorto/{{$artikel->id}}" class="btn btn-danger w-100">
                        Hapus Artikel
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
