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
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h1.5" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M20.2 20.2l1.8 1.8" /></svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Verifikasi Akun Users</h3>
                    <p class="text-secondary">Dengan melakukan verifikasi akun users, Anda mengizinkan users untuk menambahkan serta mengedit content-content yang ada di website profile company Malewa. Users tidak dapat melakukan apapun ketika Anda belum melakukan verifikasi akun.</p>
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
                    <p class="empty-title">Belum ada User yang menunggu untuk verifikasi Akun</p>
                    <p class="empty-subtitle text-secondary">
                    Anda belum memiliki permintaan verifikasi akun dari user.
                    </p>
                    <div class="empty-action">
                    </div>
                </div>
                </div>
            </div>
            @else
            <div class="col-sm-6 col-lg-12 mt-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-warning-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-exclamation"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4c.348 0 .686 .045 1.008 .128" /><path d="M19 16v3" /><path d="M19 22v.01" /></svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          {{$countNotVerif}} Akun
                        </div>
                        <div class="text-secondary">
                          Menunggu Verifikasi Anda
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
                <table
                    class="table table-vcenter card-table table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Tanggal Daftar Akun</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getUser as $user)
                    <tr>
                        <td >{{$user->name}}</td>
                        <td class="text-secondary" ><a href="#" class="text-reset">{{$user->email}}</a></td>
                        <td class="text-secondary">
                          {{$user->created_at}}
                        </td>
                        <td class="text-secondary" >
                          User
                        </td>
                        <td>
                          <button class="btn btn-outline-green" href="#" data-bs-toggle="modal" data-bs-target="#modal-success{{$user->id}}">Verifikasi Akun</button>
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
@foreach ($getUser as $user)
<div class="modal modal-blur fade" id="modal-success{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-status bg-success"></div>
        <div class="modal-body text-center py-4">
          <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
          <h3>Verifikasi Akun {{$user->name}}</h3>
          <div class="text-secondary">Tindakan ini akan membuat user atas nama {{$user->name}} dapat menambahkan serta mengedit content website profile company Malewa</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                  Batalkan
                </a></div>
              <div class="col"><a href="/sendVerifUser/{{$user->id}}" class="btn btn-success w-100">
                  Verfikasi Akun
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
