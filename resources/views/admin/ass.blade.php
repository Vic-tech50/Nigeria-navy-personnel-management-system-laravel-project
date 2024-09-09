@extends('layouts.main')

@section('content')

 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                       
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="admin/home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Assignment</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        
        
        <div class="product-cart-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 class="w3-text-white">Personnel Assignment</h3>
                                <section>
                                   
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Personnel Details</th>
                                                    <th>Title</th>
                                                    <th>Document</th>
                                                    <th>Date Submitted</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>

                                                @foreach($ass as $ass)
                                                <tr>
                                                    
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$ass->name}}<br>{{$ass->employeeId}}
                                                    </td>
                                                    <td>{{$ass->title}}</td>
                                                    <td><a href="uploads/{{$ass->pdf}}" target="_blank"><button class="btn btn-primary">View PDF</button></a></td>
                                                    <td>{{$ass->created_at}}</td>
                                                    <td>@if($ass->status == 0)
                                                        <p class="w3-text-red">Waiting...</p>

                                                        @else
                                                        <p>Completed <i class="fa fa-check w3-text-green"></i></p>

                                                        @endif
                                                    </td>
                                                     <td>
                                                        <div class = "row">
                    <div class = "col-lg-1">
                        <form action="/assignment" method="Post">
                            @csrf
                            <input type="hidden" name="id" value="{{$ass->id}}">

                                                        <button title="Seen" class="pd-setting-ed"  data-toggle="modal" data-target=""><i class="fa fa-check" aria-hidden="true" ></i></button>
                        </form>
                            
</div>

                    <div class = "col-lg-1">
                                                          <form action="/delete_assignment" method="Post">
@csrf
 <input type="hidden" name="id" value="{{$ass->id}}">
                                                        <button data-toggle="tooltip" style="background: red;" title="Trash" class="pd-setting-ed"><i class="fa fa-times" aria-hidden="true"></i></button>

</form>
</div>

     </div>
                                                    </td>
                                                  
                                                </tr>
@endforeach
       

                                              
                                           
                                            </table>
                                        </div>
                                    </div>
                                </section>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

 


@endsection