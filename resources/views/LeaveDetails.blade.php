<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>LeaveDetails</title>
    
    <style>
        
        
        .table_responsive{
            max-width: 1200px;
            background-color: white;
            padding:0px;
            overflow: auto;
            margin: auto;
            border-radius: 4px;

        }
        table{
            width: 100%;
            font-size: 13px;
            color: black;
            white-space: nowrap;
            border-collapse: collapse;

        }
        table>thead{
            background-color: blue;
            color: white;
           
        }
        table>thead th{
            padding: 15px;
            
        }
        table th,table td{
            border: 3px solid blue;
            padding: 10px 15px;
            
            
        }
        table>tbody>tr>td>img{
            display: inline-block;
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            justify-content: center;
             
        }
        .action_btn{
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .action_btn>a{
            text-decoration: none;
            color: black;
            background: white;
            border: 1px solid orange;
            display: inline-block;
            padding: 7px 20px;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.3s ease-in-out;
        }

        .action_btn>a:nth-child(1){
            border-color: blue;
        }
        .action_btn>a:nth-child(2){
            border-color: orange;
        }
        .action_btn>a:hover{
            color: white;
            background-color: blue;
        }
        table>tbody>tr{
            background-color: white;
            transition: 0.3s ease-in-out;

        }
        table>tbody>tr:nth-child(even){
            background-color: white;
            
        }




    </style>
  </head>
  <body>
    
<!--navbar begin--->
@extends('layouts.app')

@section('content')

<!---navbar ends--->


<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row" style="background: white, border-radius: 30px">
      
      <div class="col-lg-12">
      <div class="container pt-6">
       <!--- <img src="images/noti.png" class="img-fluid" style="border-top-left-radius: 30px,
        border-bottom-left-radius: 30px" alt="">---->
        
                
               
              <!--table--->
            
                        <section class="main py-0">
                         <div class="container pt-2">
                           <div class="row">
                           <h1 class="font-weight-bold py-3" style="font-weight: bold">View Leave List </h1>
                            <div class="table_responsive">
                              <table>
                                  <thead>
                                      <tr>
                                          <th>Leave Id</th>
                                          <th>Employee Name</th>
                                          <th>Leave applied date</th>
                                          <th>Reason</th> 
                                          <th>Status</th>
                                          <th>Approved</th>
                                          <th>Declined</th>
                                          
                                      </tr>
                                  </thead>

                                  <tbody>
                                
                                  <tr>

                                  @foreach ($leaves as $data)
                                          <td>{{ $data->LeaveFormID }}</td>
                                          <td>{{ $data->FirstName }}</td>
                                          <td>{{ $data->Date }}</td>
                                          <td>{{ $data->Reason }}</td>
                                          <td>{{ $data->Status }}</td>
                                          <td>
                        <span class="action_btn">
                            
                            <a href="/Approve/{{$data->LeaveFormID}}">Approved</a>
                            
                        </span>
                        </td>
                        <td>
                        <span class="action_btn">
                            
                            <a href="/Decline/{{$data->LeaveFormID}}">Declined</a>
                            
                        </span>

                    </td>
                                          
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                  </section>
  <!----table end--->
      
      </div>
    </div>
  </div>
</section>
<!---main section ends---->

<!---footer---->
@extends('layouts.footer')
<!---footer ends---->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>