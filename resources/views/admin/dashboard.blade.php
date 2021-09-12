@extends('admin/layout')
@section('title','Dashboard')
@section('container')
 <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Contacts </h4>
                        </div>
                        {{session('msg')}}

                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>ID</th>

                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Subject</th>
                                       <th>Message</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                         @foreach($contact as $c)
                                    <tr>
                                          <td> <span class="name">{{$c->id}} </span> </td>
                                       <td> <span class="product">{{$c->name}} </span> </td>
                                       <td><span  >{{$c->email}} </span></td>
                                       <td>{{$c->subject}} </td>
                                       <td>{{$c->message}} </td>

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
@endsection