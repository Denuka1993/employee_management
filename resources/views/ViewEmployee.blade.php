<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>

    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        
        
        .table_responsive{
            max-width: 1200px;
            background-color: white;
            padding: 15px;
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

@extends('layouts.app')

@section('content')




            <section class="main py-3">
            <div class="container pt-5">
            <div class="row">
    <div class="table_responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th> 
                    <th>Designation</th>
                    <th>Contact No.</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($User as $E)
            <tr>
                    <td>{{$E->Employee_ID}}</td>
                    <td>{{$E->FirstName}} {{$E->LastName}}</td>
                    <td>{{$E->Gender}}</td>
                    <td>{{$E->Designation}}</td>
                    <td>{{$E->ContactNumber}}</td>
                    <td>{{$E->Email}}</td>
                    <td><img src="uploads/{{$E->Image}}" alt=""></td>
                    <td>
                        <span class="action_btn">
                            <a href="/edit-employee/{{$E->Employee_ID}}">Edit</a>
                        </span>
                    </td>
                    <td>
                        <span class="action_btn">
                            
                        <a href="/delete/{{$E->Employee_ID}}">Delete </a>
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
  
<!---footer---->
@extends('layouts.footer')
<!---footer ends---->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
    
</body>
</html>