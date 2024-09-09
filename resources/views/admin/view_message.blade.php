@extends('layouts.main')

@section('content')
           

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Inbox</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mailbox-area mg-tb-15">
            <div class="container-fluid">
                <div class="">
                   
                    <div class="">
                        <div class="hpanel mg-b-15">
                            <div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 mg-b-15">
                                     
                                    </div>
                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 mailbox-pagination mg-b-15">
                                       
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="w3-table w3-bordered table-hover " style="padding: 30px;">
                                        <tbody>
                                        	@foreach($mess as $mess)
                                            <tr style="padding: 30px;">
                                                
                                                <td><a href="#">title</a></td>
                                                <td><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                </td>
                                                <td>{{strip_tags($mess->message)}}</td>
                                                <td><i class="fa fa-eye"></i> <i class="fa fa-trash"></i> </td>
                                                <td class="text-right mail-date">{{$mess->created_at}}</td>
                                            </tr>

                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection