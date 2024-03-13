@include('layouts.header')
@include('admin.navbar')

<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-stamp">
                    <div class="card-stamp-icon bg-yellow">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /><path d="M15 19l2 2l4 -4" /></svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Manage Akun User</h3>
                    <p class="text-secondary">User yang telah terverfikasi dapat menambahkan serta mengedit konten karir dan portofolio</p>
                  </div>
                </div>
            </div>

            @if ($getCount == 0)
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl d-flex flex-column justify-content-center">
                <div class="empty">
                    <div class="empty-img"><img src="{{asset('demo')}}/./static/illustrations/undraw_printing_invoices_5r4r.svg" height="128" alt="">
                    </div>
                    <p class="empty-title">Tidak Ada Akun yang telah terverifikasi</p>
                    <p class="empty-subtitle text-secondary">
                    Anda belum memiliki users yang dapat mengubah serta menambahkan konten website Malewa.
                    </p>
                    <div class="empty-action">
                    </div>
                </div>
                </div>
            </div>
            @else
            <div class="col-sm-12 col-lg-12 mt-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-green-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /><path d="M15 19l2 2l4 -4" /></svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          {{$countVerif}} Akun
                        </div>
                        <div class="text-secondary">
                          Telah Terverifikasi
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row rows-card mt-5">
        <div class="col-12">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Tanggal Verifikasi Akun</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getUser as $user)
                    <tr>
                        <td data-label="Name">
                          <div class="d-flex py-1 align-items-center">
                            <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span>
                            <div class="flex-fill">
                              <div class="font-weight-medium">{{$user->name}}</div>
                              <div class="text-secondary"><a href="#" class="text-reset">{{$user->email}}</a></div>
                            </div>
                          </div>
                        </td>
                        <td data-label="Title" >
                          <div class="text-secondary">{{ \Carbon\Carbon::parse($user->updated_at)->format('F d, Y') }}</div>
                        </td>
                        <td class="text-secondary" data-label="Role" >
                          User
                        </td>
                        <td>
                          <div class="btn-list flex-nowrap">
                            <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal-danger{{$user->id}}">
                              Batalkan Verifikasi
                            </a>
                          </div>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
@endif

 {{-- Batalkan Verifikasi--}}
 @foreach ($getUser as $user )
 @csrf
     <div class="modal modal-blur fade" id="modal-danger{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
         <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="modal-status bg-danger"></div>
             <div class="modal-body text-center py-4">
             <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
             <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
             <h3>Batalkan Verifikasi Akun {{$user->name}}?</h3>
             <div class="text-secondary">Tindakan ini akan membuat akun user tidak dapat megubah serta menambahkan konten.</div>
             </div>
             <div class="modal-footer">
             <div class="w-100">
                 <div class="row">
                 <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                     Cancel
                     </a></div>
                 <div class="col"><a href="/cancelVerifUser/{{$user->id}}" class="btn btn-danger w-100">
                     Ya, saya yakin
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
