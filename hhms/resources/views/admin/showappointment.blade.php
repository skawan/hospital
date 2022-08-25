<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
        <div align="" class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
            <table>
                <tr style="background-color:#1F4690">
                    <th style="padding:20px">Customer Name</th>
                    <th style="padding:20px">Email</th>
                    <th style="padding:20px">Phone</th>
                    <th style="padding:20px">Doctor Name</th>
                    <th style="padding:20px">Date</th>
                    <th style="padding:20px">Message</th>
                    <th style="padding:20px">Status</th>
                    <th style="padding:20px">Approve</th>
                    <th style="padding:20px">Cancel</th>
                    <th style="padding:20px">Send Mail</th>
                </tr>
                    @foreach($data as $appoint)

                <tr align="center"  style="background-color:#FCE2DB">
                    <td  style="color:black;">{{$appoint->name}}</td>
                    <td style="color:black;">{{$appoint->email}}</td>
                    <td style="color:black;">{{$appoint->phone}}</td>
                    <td style="color:black;">{{$appoint->doctor}}</td>
                    <td style="color:black;">{{$appoint->date}}</td>
                    <td style="color:black;">{{$appoint->message}}</td>
                    <td style="color:black;">{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Verify</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
        </div>
        </div>
        
      
        
       
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
</body>
</html>