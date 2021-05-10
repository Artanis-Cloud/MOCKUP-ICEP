@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-add" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        Add New Announcement
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="card" style="padding: 10px;border-color: #003473 !important;">

                        @if ($message = Session::get('success'))
                        <div id=alert>
                            <div class="alert alert-card alert-success" role="alert">
                                <strong>Operation Successful! </strong>
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

                        <!-- <div style="padding: 5px;"></div> -->
                        <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;"> Add New Announcement</div>
                        <div class="p-0 card-body">
                            <div style="padding: 10px;"></div>

                            <form class="" action="{{route('admin.announcement.add.save') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-8">
                                <div class="form-group">
                                    <label for="message" style="color:black;font-size:15px;">Announcement:</label>
                                    <textarea id="message" name="message" style="width:100%;height:200px;" required></textarea>

                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <!-- <button class="btn btn-block btn-primary" type="submit">Change Password</button> -->
                                    <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" >Publish</a>
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            {{-- <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5> --}}
                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </a>
                                        </div>
                                        <div class="modal-body">
                                            <p>Confirm to add new announcement?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="button" class="btn btn-primary">Publish</button>
                                            <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <script type="text/javascript">
        function onlyNumberKey(evt) {

          // Only ASCII charactar in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
        }
        </script>
@endsection
