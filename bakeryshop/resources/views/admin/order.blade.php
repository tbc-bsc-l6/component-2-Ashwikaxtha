<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        /* Center the Table */
        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        /* Table Styling */
        table {
            width: 90%; /* Responsive table width */
            max-width: 1200px; /* Restrict maximum width */
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
            background-color: #ffffff; /* White background */
        }

        th {
            background-color: #800000; 
            color: #ffffff; /* White text */
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            color: #495057; /* Neutral dark text */
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #f1f1f1; /* Light border between rows */
        }

        tr:hover {
            background-color: #ffe4ed; /* Light pink hover effect */
        }

        /* Button Styling */
        .btn {
            padding: 10px 20px; /* Add padding */
            font-size: 14px;
            border-radius: 25px; /* Fully rounded corners */
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background-color: #6c63ff; /* Vibrant purple */
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #574dcf; /* Darker purple */
        }

        .btn-success {
            background-color: #28a745; /* Green */
            color: white;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green */
        }

        .btn-secondary {
            margin-top:8px;
            background-color: #6c757d; /* Gray */
            color: white;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Darker gray */
        }

        /* Status Colors */
        .status-in-progress {
            color: red;
            font-weight: bold;
        }

        .status-on-the-way {
            color: blue;
            font-weight: bold;
        }

        .status-delivered {
            margin-top:8px;
            color: green;
            font-weight: bold;
        }

        /* Image Styling */
        img {
            border-radius: 8px; /* Rounded corners */
            width: 120px;
            height: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <!-- Centered Table -->
                <div class="table_center">
                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Print PDF</th>
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->rec_address}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->product->title}}</td>
                            <td>{{$data->product->price}}</td>
                            <td>
                                <img src="products/{{$data->product->image}}" alt="Product Image">
                            </td>
                            <td>
                                @if($data->status == 'in progress')
                                <span class="status-in-progress">{{$data->status}}</span>
                                @elseif($data->status == 'On the way')
                                <span class="status-on-the-way">{{$data->status}}</span>
                                @else
                                <span class="status-delivered">{{$data->status}}</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}">On the way</a>
                                <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{url('print_pdf', $data->id)}}">Print PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files -->
    <script src="{{ asset('admncss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admncss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admncss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admncss/js/front.js') }}"></script>
  </body>
</html>

