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



    <title>Add Task</title>
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
      <div class="col-lg-6 py-5">
        <h1 class="font-weight-bold py-3" style="font-weight: bold">Add Task </h1>
          <!---  <h4>Sign in to your account</h4>--->

          @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
          @endif

          <form action="/addtask" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
    
 <!----class="form-row{{ $errors->has('assignby') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="text" name="assignby" placeholder="Assign by" class="form-control my-3 p-3" required autofocus>
                </div>
              </div>--->

              <div class="form-row{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="text" name="name" placeholder="Task Name" class="form-control my-3 p-3" required autofocus>
                </div>
              </div>

              <div class="form-row{{ $errors->has('description') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="text" name="description" placeholder="Description" class="form-control my-3 p-3"required autofocus>
                </div>
              </div>

             <div class="form-row{{ $errors->has('assign') ? ' has-error' : '' }}">
                 <div class="col-lg-9">
                     <!---<h6 class="font-weight-bold py-3" style="font-weight: bold">Assign to </h6>--->

                 <select name="assign" class="form-select" aria-label="Default select example" required autofocus>
                    <option selected>Assign To</option>
                    <option value="Denuka">Denuka</option>
                    <option value="Janith">Janith</option>
                    <option value="Amali">Amali</option> 
                    <option value="Banuka">Banuka</option> 
                    <option value="Sasa">Sasa</option> 
              
                 </select>
                 </div>
             </div>     

             <div class="form-row{{ $errors->has('Photo') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="" type="file" name="image" class="form-control my-3 p-3" value="" required autofocus>
                 
                </div>
              </div>     
              

              <div class="form-row">
                <div class="col-lg-9">
                  <button type="submit" value="submit" class="btn1 mt-3 mb-5">Add Task</button>
                </div>
              </div>
              
            </form>
      </div>
      <div class="col-lg-6 pt-5">
        <img src="images/task.png" class="img-fluid" style="border-top-left-radius: 30px,
        border-bottom-left-radius: 30px" alt="">
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