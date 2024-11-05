@extends('admin.layout.main')
@section('main-content')
<x-admin-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert Data</title>
    <style>
      
      span{
        color:orange;
      }
        
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto mt-5">
        @if(session('status'))
            <h6  class="alert alert-success">{{session('status')}}</h6>
            @endif
        <!-- <div class="text-center">
 <a href ="{{url('/courieragentdetails/')}}" class="btn btn-outline-primary" width="30px">Go To All Show Courier Details</a>
    </div>
    <br> -->
     <div class="card">
            <div class="card-header">
                 <h3><b><u><center>ADD NEW <span>Coureirs Details<span></b></u></center>
                     </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('courieragent.update',$courieragent->id)}}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <label for="">Name:</label>
                           <div class="row">
                          <div class="col">
                          <input type="text" name="fname" value="{{$courieragent->fname}}" class="form-control" placeholder="First name">
                          </div>
                         <div class="col">
                    <input type="text" name="lname"  value="{{$courieragent->lname}}"class="form-control" placeholder="Last name">
                  </div>
              </div><br>
                        <div class=" bg-light row md-3" >
                            <label class="col-sm-2 col-label-form">New/Cr Email:</label>
                            <div class="col-sm-10">
                            <input type="text" name="email" value="{{$courieragent->email}}" class="form-control">
                            <p>exampl@example.com</p>
                        </div>
                </div>
                <br>

             <div class="row md-3">
                     <label class="col-sm-2 col-label-form">Com/A Name:</label>
                    <div class="col-sm-10">
                    <input type="text" name="ce_Name" value="{{$courieragent->ce_Name}}" class="form-control"  placeholder="Student Email">
              </div>
                 </div>
                 
             
                 </div><br>
                 <div class="row md-3">
                     <label class="col-sm-2 col-label-form">Phone/No</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone_no" value=" {{$courieragent->phone_no}}" class="form-control"  placeholder="">
              </div>
                 </div><br>
                  <div class="bg-light row mb-3">
                      <label class="col-sm-2 col-label-form" >City Name:</label>
                      <div class="col-sm-10">
                        <select class="select" name="city">
                          <option value="City">City</option>
                              <option value="Karachi">Karachi</option>
                              <option value="Hydrabad">Hydrabad</option>
                              <option value="Islamabad">Islamabad</option>
                              <option value="lahore">lahore</option>
                       </select>
                   </div>
    </div>
                <div class="row md-4">
                            <label class="col-sm-2 col-label-form"> Image:</label>
                            <div class="col-sm-10">  
                      <input type="file" name="image"/><br>
                      <img src="/images/{{$courieragent->image}}" width="50px" alt="">
                      </div>
                         
                    </div>    
                    <br><br>
                         

                      <div class="text-center">
                    <input type="submit"  class="btn btn-outline-primary" value="Update New Courier Details">                   
                   </div>
                         </form>
                         </div> 
                    </div>
                 </div> 
           </div>
      </div>
</body>
</html>
</x-admin-layout>

@endsection

