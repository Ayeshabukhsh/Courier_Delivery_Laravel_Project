@extends('admin.layout.main')
@section('main-content')

<x-admin-layout>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6  class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                   <h3><center><b>Create Agent</b></center></h3>
                </div>
                <div class="card-body">
                        <form action="{{route('agent.store')}}" method="POST">
                        @csrf
                        
                        <label for="">Name:</label>
                           <div class="row">
                          <div class="col">
                          <input type="text" name="fname" class="form-control" placeholder="First name">
                          </div>
                         <div class="col">
                    <input type="text" name="lname" class="form-control" placeholder="Last name">
                  </div>
              </div><br>
            <div class="container bg-light">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control"  placeholder="Ex:myname@example.com" >
                          <p>exampl@example.com</p></div>
                            <div class="form-group-md-3">
                            <label for="">Company/Egency Name:</label>
                            <input type="text" name="ce_Name" class="form-control" placeholder="" >
                       </div><br>
                        <div class="form-group-md-3">
                       <label for="">Phone/Number:</label>
                      <input type="text" name="phone_no" class="form-control" placeholder="(_____)__ ____">
                       </div><br>
                      <div class="container bg-light">
                            <label for="">Describe Product Inserted In:</label>
                            <textarea name="prod_des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <p>Please provide us with any additional information about the files you are submitting.</p>
                     </div>       
                     <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary">Manage Agent Details</button>
                     </div>   
                     </form>
               </div>
            </div>
        </div>
    </div>
   
 </div>
 </x-admin-layout>

@endsection


