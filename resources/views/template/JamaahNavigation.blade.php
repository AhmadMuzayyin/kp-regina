<!--navigation-->
<ul class="metismenu" id="menu">
  <li {{ Request::is('dashboard') ? "class=mm-active" : "" }}>
    <a href="{{ url('/jamaah/dashboard') }}" class="_blank">
      <div class="parent-icon">
        <ion-icon name="home-sharp"></ion-icon>
      </div>
      <div class="menu-title">Dashboard</div>
    </a>
  </li>
  <li class="menu-label">CORE</li>
  <li {{ Request::is('jamaah') ? "class=mm-active" : "" }}>
    <a href="{{ url('/jamaah/tabungan') }}" class="_blank">
      <div class="parent-icon">
        <ion-icon name="briefcase-sharp"></ion-icon>
      </div>
      <div class="menu-title">Data Jamaah</div>
    </a>
  </li>
  <li class="menu-label">Forms & Tables</li>
  <li>
    <a class="has-arrow" href="javascript:;">
      <div class="parent-icon">
        <ion-icon name="newspaper-sharp"></ion-icon>
      </div>
      <div class="menu-title">Forms</div>
    </a>
    <ul>
      <li> <a href="form-elements.html">
          <ion-icon name="ellipse-outline"></ion-icon>Form Elements
        </a>
      </li>
      <li> <a href="form-input-group.html">
          <ion-icon name="ellipse-outline"></ion-icon>Input Groups
        </a>
      </li>
      <li> <a href="form-layouts.html">
          <ion-icon name="ellipse-outline"></ion-icon>Forms Layouts
        </a>
      </li>
      <li> <a href="form-validations.html">
          <ion-icon name="ellipse-outline"></ion-icon>Form Validation
        </a>
      </li>
      <li> <a href="form-date-time-pickes.html">
          <ion-icon name="ellipse-outline"></ion-icon>Date Pickers
        </a>
      </li>
      <li> <a href="form-select2.html">
          <ion-icon name="ellipse-outline"></ion-icon>Select2
        </a>
      </li>
    </ul>
  </li>
</ul>
<!--end navigation-->