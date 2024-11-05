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

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                   <h3><center><b>All Details Manage Agent</b></center></h3>
                </div>
                <div class="card-body">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
               <th>Email</th>
                <th>C/E_Name</th>
                <th>Phon_No</th>
                <th>Product_Des</th>
                <th>Edit</th>
                <th>Delete</th>



       </tr>
             @foreach($agent as $item)
             <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->fname}}</td>
                <td>{{$item->lname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->ce_Name}}</td>
                 <td>{{$item->phone_no}}</td>
                <td>{{$item->prod_des}}</td>
                <td><a href="{{route('agent.edit',$item->id)}}" class="btn btn-outline-secondary">Edit</a></td>
        </td>
        <form action="{{route('agent.destroy',$item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><input type="submit" value="Delete" class="btn btn-outline-danger"></td>
            </form>
        </td>
                </tr>
   @endforeach
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
</x-admin-layout>

@endsection

