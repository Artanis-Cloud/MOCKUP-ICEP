@extends('layouts.app-user')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operasi Berjaya! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card  alert-danger" role="alert">
                    <strong>Ralat! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif
                  <div class="card" style="padding: 10px;">



                    <!-- <div style="padding: 5px;"></div> -->
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbspPengumuman</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <a href="{{route('admin.others.announcement.create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp Tambah Pengumuman Baru</a> &nbsp &nbsp
                        <hr>

                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>

                                <th>Mesej</th>
                                <th>Tarikh </th>
                                <th>Tindakan</th>


                            </thead>
                            <tbody style="text-align: center;">
                              @foreach($data as $datas)
                              <tr>

                                <td>{{$datas->user_message}}</td>
                                <td>{{$datas->created_at}}</td>
                                <td> <a href="#" onclick="pass_id_delete({{ $datas->id  }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">Hapus</button></td>

                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Pengesahan</h5>
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda pasti mahu menghapus pengumuman ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                                <form class="" action="{{route('admin.others.announcement.delete')}}" method="post">
                                                @csrf
                                                  <input type="hidden" id="announcement_id" name="announcement_id">
                                                  <button type="submit" name="button" class="btn btn-primary">Hapus Pengumuman</button>
                                                </form>
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
