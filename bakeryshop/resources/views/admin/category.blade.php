<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        /* Input Fields */
        input[type='text'] {
            width: 400px;
            height: 50px;
            border-radius: 20px;
            border: 2px solid #800000;
            padding: 10px 15px;
            font-size: 16px;
            color: #343a40;
            background-color: #fff5f8; /* Light pink background */
            transition: all 0.3s ease;
        }

        input[type='text']:focus {
            border-color: #800000;
            outline: none;
            background-color: #ffffff;
            box-shadow: 0 0 8px rgba(255, 102, 163, 0.3); /* Pink glow */
        }

        .btn-primary {
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #800000;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #800000; /* Darker pink on hover */
            color: white;
        }

        /* Center Form Section */
        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }

        /* Table Design */
        .table_design {
            margin: 50px auto;
            width: 90%;
            max-width: 800px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff5f8; /* Light pink background */
            border-radius: 10px;
            overflow: hidden;
        }

        .table_design th {
            background-color: #800000; 
            color: white;
            padding: 15px;
            font-size: 18px;
            text-transform: uppercase;
        }

        .table_design td {
            padding: 12px 15px;
            font-size: 16px;
            color: #495057;
            text-align: center;
            border-bottom: 1px solid #ffe4ed; /* Soft pink border */
        }

        .table_design tr:hover {
            background-color: #ffe4ed; /* Hover effect */
        }

        /* Buttons inside the table */
        .btn-success {
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            background-color: #28a745;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            color: white;
        }

        .btn-danger {
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            background-color: #dc3545;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        /* Table Header Title */
        h1 {
            color: white; /
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
  </head>
  <body>
    
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h1>Add Category</h1>

          <div class="div_design">
            <form action="{{url('add_category')}}" method="post">
              @csrf
              <div>
                <input type="text" name="category" placeholder="Enter Category Name">
                <input class="btn btn-primary" type="submit" value="Add Category">
              </div>
            </form>
          </div>  

          <div>
            <table class="table_design">
              <tr>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>

              @foreach($data as $data)
              <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
    <script src="{{ asset('admncss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admncss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admncss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admncss/js/front.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
