@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-bullhorn" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        Announcement
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card alert-success" role="alert">
                      <strong>Operation Success! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card alert-danger" role="alert">
                    <strong>Error! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="card" style="padding: 10px;border-color: #003473 !important;">
                        <!-- <div style="padding: 5px;"></div> -->
                        <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Announcement</div>
                        <div class="p-0 card-body">
                            <div style="padding: 10px;"></div>
                            <a href="{{route('admin.announcement.create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp Add New</a> &nbsp &nbsp
                            <div style="padding: 10px;"></div>

                            <div class="table table-striped table-bordered">
                            <table id="table_data" class="table table-striped table-bordered" style="width:100%">
                                <thead style="text-align: center;">
                                    <th>Announcement</th>
                                    <th>Date </th>
                                    <th>Actions</th>
                                </thead>
                                <tbody style="text-align: center;">
                                @foreach($data as $datas)
                                <tr>

                                    <td>{{$datas->user_message}}</td>
                                    <td>{{$datas->created_at}}</td>
                                    <td> <a href="#" onclick="pass_id_delete({{ $datas->id  }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">Delete</button></td>

                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{-- <h5 class="modal-title" id="exampleModalLabel2">Pengesahan</h5> --}}
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Confirm to delete announcement?</p>
                                                </div>
                                                <div class="modal-footer">

                                                    <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                                    <form class="" action="{{route('admin.announcement.delete')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" id="announcement_id" name="announcement_id">
                                                    <button type="submit" name="button" class="btn btn-primary">Delete</button>
                                                    </form>
                                                    <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</div>
        <script type="text/javascript">
        function pass_id_delete(id){
         $(".modal-footer #announcement_id").val( id );
       }
        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
