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
                    class="table table-vcenter card-table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >Maryjo Lebarree</td>
                      <td class="text-secondary" >
                        Civil Engineer, Product Management
                      </td>
                      <td class="text-secondary" ><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                      <td class="text-secondary" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Egan Poetz</td>
                      <td class="text-secondary" >
                        Research Nurse, Engineering
                      </td>
                      <td class="text-secondary" ><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                      <td class="text-secondary" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Kellie Skingley</td>
                      <td class="text-secondary" >
                        Teacher, Services
                      </td>
                      <td class="text-secondary" ><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                      <td class="text-secondary" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Christabel Charlwood</td>
                      <td class="text-secondary" >
                        Tax Accountant, Engineering
                      </td>
                      <td class="text-secondary" ><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                      <td class="text-secondary" >
                        Owner
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Haskel Shelper</td>
                      <td class="text-secondary" >
                        Staff Scientist, Legal
                      </td>
                      <td class="text-secondary" ><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                      <td class="text-secondary" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
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
