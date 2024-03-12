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
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                  </div>
                </div>
            </div>
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
                      <th>Title</th>
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
                              <div class="font-weight-medium">Thatcher Keel</div>
                              <div class="text-secondary"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
                            </div>
                          </div>
                        </td>
                        <td data-label="Title" >
                          <div>VP Sales</div>
                          <div class="text-secondary">Business Development</div>
                        </td>
                        <td class="text-secondary" data-label="Role" >
                          User
                        </td>
                        <td>
                          <div class="btn-list flex-nowrap">
                            <a href="#" class="btn">
                              Edit
                            </a>
                            <div class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                Actions
                              </button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </div>
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

@include('layouts.footer')
@include('layouts.script')
