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
 <title>Insert data</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
<div class="text-center mt-3">
 <a href ="{{url('courieragent/create')}}" class="btn btn-outline-primary" width="30px">Back To Add New Courier Details</a>
    </div>
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Com/Agency Name</th>
               <th>Phone/No</th>
                <th>City</th> 
                <th>Image</th>
                <th>Record Update</th>
                <th>Record Delete</th>
        </tr>
        @foreach($courieragent as $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->lname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->ce_Name}}</td>
            <td>{{$item->phone_no}}</td>
            <td>{{$item->city}}</td>

            <td><img src="/images/{{$item->image}}" width="70px" alt=""></td>

 <td><a href="{{route('courieragent.edit',$item->id)}}" class="btn btn-outline-secondary">Edit</a></td>
 
     <form action="{{route('courieragent.destroy',$item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><input type="submit" value="Delete" class="btn btn-outline-danger"></td>
            </form>
        </td>
    </tr>
</tr>          @endforeach
  </table>
               </div>
            </div>
          </div>
       </div>
</body>
</html>
</x-admin-layout>

@endsection