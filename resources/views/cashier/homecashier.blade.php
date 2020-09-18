<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Cashier</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('cashier.sidebarcas')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       @include('cashier.topbarcas')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Cashier</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="container">
              <div class="row">
                  @foreach ($menus as $a)
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="product">
                          <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset ('image/'. $a->image)}}" alt="Colorlib Template">
                              <div class="overlay"></div>
                          </a>
                          
                              
                          <div class="text py-3 pb-4 px-3 text-center">
                              <h3><a href="#">{{$a->menu_name}} </a></h3>
                              <div class="d-flex">
                                  <div class="pricing">
                                      <p class="price"><span style="margin-left: 80px">{{$a->price}}</span></p>
                                      <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary" style="margin-left: 67px; color:white">Order</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach 
        </div>
            
          </div>

           <!-- Modal Tambah -->
           <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-order" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    </div>
                    <form class="form-horizontal" action="/add" method="post" enctype="multipart/form-data" role="form">
                      {{ csrf_field() }}
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg col-sm-2 control-label">Menu Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="menu_name" placeholder="Menu name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Image</label>
                                <div class="col-lg-10">
                                    <input type="file" name="image" placeholder="Image">
                                </div>
                            </div>
                  
                            <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Price</label>
                              <div class="col-lg-10">
                                  <input type="text" class="form-control" name="price" placeholder="Price">
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Stock</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="stock" placeholder="Stock">
                            </div>
                        </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Save&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset ('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset ('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset ('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset ('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
