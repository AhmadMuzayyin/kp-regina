@extends('template.main')

@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
  <!-- start page content-->
  <div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Dashboard</div>
    </div>
    <!--end breadcrumb-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center gap-2">
              <div class="fs-5">
                <ion-icon name="person-add-outline"></ion-icon>
              </div>
              <div>
                <p class="mb-0">Followers</p>
              </div>
              <div class="fs-5 ms-auto">
                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <div>
                <h5 class="mb-0">1,037</h5>
              </div>
              <div class="ms-auto" id="chart1"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center gap-2">
              <div class="fs-5">
                <ion-icon name="heart-outline"></ion-icon>
              </div>
              <div>
                <p class="mb-0">Likes</p>
              </div>
              <div class="fs-5 ms-auto">
                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <div>
                <h5 class="mb-0">23,758</h5>
              </div>
              <div class="ms-auto" id="chart2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center gap-2">
              <div class="fs-5">
                <ion-icon name="chatbox-outline"></ion-icon>
              </div>
              <div>
                <p class="mb-0">Comments</p>
              </div>
              <div class="fs-5 ms-auto">
                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <div>
                <h5 class="mb-0">1,139</h5>
              </div>
              <div class="ms-auto" id="chart3"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center gap-2">
              <div class="fs-5">
                <ion-icon name="mail-outline"></ion-icon>
              </div>
              <div>
                <p class="mb-0">Messages</p>
              </div>
              <div class="fs-5 ms-auto">
                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <div>
                <h5 class="mb-0">1,037</h5>
              </div>
              <div class="ms-auto" id="chart4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end row-->

    <div class="card radius-10 w-100">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h6 class="mb-0">Recent Orders</h6>
          <div class="fs-5 ms-auto dropdown">
            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
        <div class="table-responsive mt-2">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>#ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#89742</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/11.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                    </div>
                  </div>
                </td>
                <td>2</td>
                <td>$214</td>
                <td><span class="badge alert-success">Completed</span></td>
                <td>Apr 8, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#68570</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/07.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Sports Time Watch</h6>
                    </div>
                  </div>
                </td>
                <td>1</td>
                <td>$185</td>
                <td><span class="badge alert-success">Completed</span></td>
                <td>Apr 9, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#38567</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/17.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Women Red Heals</h6>
                    </div>
                  </div>
                </td>
                <td>3</td>
                <td>$356</td>
                <td><span class="badge alert-danger">Cancelled</span></td>
                <td>Apr 10, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#48572</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/04.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                    </div>
                  </div>
                </td>
                <td>1</td>
                <td>$149</td>
                <td><span class="badge alert-success">Completed</span></td>
                <td>Apr 11, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#96857</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/10.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                    </div>
                  </div>
                </td>
                <td>2</td>
                <td>$199</td>
                <td><span class="badge alert-danger">Cancelled</span></td>
                <td>Apr 15, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#96857</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="assets/images/products/12.png" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                    </div>
                  </div>
                </td>
                <td>1</td>
                <td>$699</td>
                <td><span class="badge alert-warning">Pending</span></td>
                <td>Apr 18, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-sharp"></ion-icon>
                    </a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-sharp"></ion-icon>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end page content-->
</div>
<!--end page content wrapper-->
@endsection
@push('script')
<script>
  function round_error_noti() {
    Lobibox.notify('error', {
      pauseDelayOnHover: true,
      size: 'mini',
      rounded: true,
      delayIndicator: false,
      icon: 'bx bx-x-circle',
      continueDelayOnInactiveTab: false,
      position: 'top right',
      msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
    });
  }
</script>
@endpush