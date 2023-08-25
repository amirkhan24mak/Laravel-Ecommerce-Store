@extends("weblayout.dashadminlayoutnf")
@section('dashadmin')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12">
              <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="#" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="#" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Total Users</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Total Products</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Unlisted Products</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                          <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    
                    <div class="col-sm-8  grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-xl-flex justify-content-between mb-2">
                            <h4 class="card-title">Page views analytics</h4>
                            <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                          </div>
                          <canvas id="page-view-analytic"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection