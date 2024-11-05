<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
           <title>Qoutes</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                   <h3><center><b>Forms  Details</b></center></h3>
                </div>
                <div class="card-body">
            <table class="table">
               <thead>
         <tr> 
            <th>ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Message</th>
            <th>Email</th>
         </tr>
         </thead>
         <tbody>
            
            @foreach($form as $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->lname}}</td>
            <td>{{$item->message}}</td>
              <td>{{$item->email}}</td>
           </tr>
@endforeach
</tbody>
</table>
</div>
    </div>
</div></div>
</div>
</body>
</html>