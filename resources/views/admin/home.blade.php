@extends('admin/layout')
@section('title','Dashboard')
@section('container')
 
    <div class="animated fadeIn">
   <form method="post" action="{{'/admin/banner_submit' }}" enctype="multipart/form-data">
      @csrf
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Homepage</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <div class="form-group">
                              <label for="company" class=" form-control-label">Title</label>
                              <input type="text"   name="title" id="company" placeholder="Enter you title" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="vat" class=" form-control-label">Sub-Title</label>
                           <input type="text"   name="sub_title" id="vat"class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="vat" class=" form-control-label">Image</label>
                           <input type="file"     name="image" id="vat"class="form-control">
                           </div>
                          
                          
                          
                           <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">MAKE CHANGES</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

 <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Homepage </h4>

                        </div>
                        {{session('msg')}}

                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>IMAGE</th>
                                       <th>TITLE</th>
                                       <th>sUB-TITLE</th>
                                       <th>Action</th>


                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                      @foreach($banner as $i)
                                        <td> <span class="name">{{$i->id}} </span> </td>
                                       <td class="avatar">
                                          <div class="round-img">
                                             <a href="#"><img class="rounded-circle" src="{{asset('/storage/post/'.$i->image)}}" height="70px" width="100px" alt=""></a>
                                          </div>
                                       </td>
                                       <td> <span class="product">{{$i->title}}  </span> </td>
                                       <td><span class="name">{{$i->sub_title}}  </span></td>
                                       
                                       
                                      @endforeach    
                                       
                                     
                                    </tr>
                                           
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                                 

  @endsection