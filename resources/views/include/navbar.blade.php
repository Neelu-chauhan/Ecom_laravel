 <!-- Layout container -->
 <div class="layout-page">
    <!-- Navbar -->

    <nav
      class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
      id="layout-navbar">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
          <i class="bx bx-menu bx-md"></i>
        </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
            <h2 class="p-2">Welcome ,</h2>
           <h3 class="mx-3">{{Auth::user()->name}}</h3>
          </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Place this tag where you want the button to render. -->
          <li class="nav-item lh-1 me-4">
            <a
              class="github-button"
              href="https://github.com/themeselection/sneat-html-admin-template-free"
              data-icon="octicon-star"
              data-size="large"
              data-show-count="true"
              aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
              >Star</a
            >
          </li>

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a
              class="nav-link dropdown-toggle hide-arrow p-0"
              href="javascript:void(0);"
              data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">{{Auth::user()->name}}</h6>
                      <small class="text-muted">{{Auth::user()->email}}</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1"></div>
              </li>
              <li>
                <a class="dropdown-item" href="" onclick="showProfile('show')">
                  <i class="bx bx-user bx-md me-3"></i><span>Edit Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#"> <i class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
              </li>
             
              <li>
                <div class="dropdown-divider my-1"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('logout')}}" id="logout"onclick="confirmation(event)" >
                  <i class="bx bx-power-off bx-md me-3"></i><span >Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>
    </nav>

    <!-- / Navbar -->

 
  <!-- / Layout page -->


