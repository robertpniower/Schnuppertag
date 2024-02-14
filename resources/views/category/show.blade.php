@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center pt-5">
                <h1 class="display-3 mt-5">Category details</h1>
                <br/>
                <div ><a href="users/register" class="btn btn-outline-primary">Add new category</a></div>	    
                    <br/>
                    <div class="row d-flex justify-content-center">
                    <div class="card mb-3" style="width: 45rem">
                        
                        <div class="card-body">
                            
                                <ul class="list-group">
                                    <li class="list-group-item"><h5>{!! $category->name !!}</h5></li>
                                    <li class="list-group-item">{!! $category->description !!}</li>
                                    
                                </ul>
                            </div>
                        </div>
                </div>

                    </div>
                   
  
        </div>
    </div>
@endsection