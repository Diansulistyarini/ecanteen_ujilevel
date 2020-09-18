<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  
  <!--  -->

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       @include('admin.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

      

         <!-- Content Row -->
        <div class="row">
            <h2 style="margin-left: 12px; margin-top:5px;">Menu Table</h2>
            <div class="form-group text-left" style="margin-top:10px">
              <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary" style="color:white; margin-top:35px; margin-left:-165px"><i class="fas fa-plus"></i> Menu</a>
              <a href="cetakmenu" class="btn btn-info" style="color:white; margin-top:35px; margin-left:800px"><i class="fas fa-file-pdf"></i></i> Cetak PDF</a>

            </div>
        </div>
            <table class="table" id="datatable">
                <thead>
                <tr style="text-align: center">
                    <td>No</td>
                    <td>Menu Name</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td>Stock</td>
                    <td>Action</td>
                </tr>
                </thead>
                @foreach($menus as $data)
                        <tr style="text-align: center">
                            <th scope="row">{{ $data->id_menu }}</th>
                            <td>{{ $data->menu_name }}</td>
                            <td>
                            <img src="{{ asset ('image/'. $data->image) }}" alt=" {{ $data->image }}" width="100px">
                            </td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->stock }}</td>
                            <td>
                                <div class="icon">
                                  <a href="/edit/{{ $data->id_menu }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                {{-- </div> --}}

                                {{-- <div class="div mt-2"> --}}
                                    <a href="/delete/{{ $data->id_menu }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </div>

                            </td>
                        </tr>
                        <tr>
                        @endforeach
                
            </table>

            <!-- Modal Tambah -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  
  <!-- JS Bootstrap & Data Tables CDN -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  </body>

</html>

