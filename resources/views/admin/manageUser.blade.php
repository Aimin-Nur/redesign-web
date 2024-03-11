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
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Card with icon bg</h3>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12 mt-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          132 Sales
                        </div>
                        <div class="text-secondary">
                          12 waiting payments
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
    class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="Name" >
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
                    <tr>
                      <td data-label="Name" >
                        <div class="d-flex py-1 align-items-center">
                          <span class="avatar me-2" style="background-image: url(./static/avatars/005f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="font-weight-medium">Dyann Escala</div>
                            <div class="text-secondary"><a href="#" class="text-reset">descalag@usatoday.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title" >
                        <div>Mechanical Systems Engineer</div>
                        <div class="text-secondary">Sales</div>
                      </td>
                      <td class="text-secondary" data-label="Role" >
                        Admin
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
                    <tr>
                      <td data-label="Name" >
                        <div class="d-flex py-1 align-items-center">
                          <span class="avatar me-2" style="background-image: url(./static/avatars/006f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="font-weight-medium">Avivah Mugleston</div>
                            <div class="text-secondary"><a href="#" class="text-reset">amuglestonh@intel.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title" >
                        <div>Actuary</div>
                        <div class="text-secondary">Sales</div>
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
                    <tr>
                      <td data-label="Name" >
                        <div class="d-flex py-1 align-items-center">
                          <span class="avatar me-2">AA</span>
                          <div class="flex-fill">
                            <div class="font-weight-medium">Arlie Armstead</div>
                            <div class="text-secondary"><a href="#" class="text-reset">aarmsteadi@yellowpages.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title" >
                        <div>VP Quality Control</div>
                        <div class="text-secondary">Accounting</div>
                      </td>
                      <td class="text-secondary" data-label="Role" >
                        Owner
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
                    <tr>
                      <td data-label="Name" >
                        <div class="d-flex py-1 align-items-center">
                          <span class="avatar me-2" style="background-image: url(./static/avatars/008f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="font-weight-medium">Tessie Curzon</div>
                            <div class="text-secondary"><a href="#" class="text-reset">tcurzonj@hp.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title" >
                        <div>Research Nurse</div>
                        <div class="text-secondary">Product Management</div>
                      </td>
                      <td class="text-secondary" data-label="Role" >
                        Admin
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
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.script')
