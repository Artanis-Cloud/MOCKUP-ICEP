@extends('layouts.app-user')

@section('content')
<style>
a{
  font-size: 110% !important;
}
/* unvisited link */
a:link {
  color: black !important;
}

/* visited link */
a:visited {
  color: black !important;
}

/* mouse over link */
a:hover {
  color: red !important;
}

/* selected link */
a:active {
  color: black !important;

}
</style>

<div class="p-4 page-body text-dark">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
    <i class="fa fa-home" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
    Dashboard
  </div>
  <hr style="background-color: black !important;">
  <div style="padding:5px;"></div>
  <!-- Small card component -->
  <div class="mb-4 small-cards">




      <div class="row">
          <div class="mt-3 col-sm-2 col-md-2 col-lg-2 mt-lg-0"></div>
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="mt-3 col-sm-4 col-md-4 col-lg-4 mt-lg-0">
            <!-- Card -->
              <div class="rounded-lg card border-1" style="border-color: #003473 !important;">
                  <!-- Card body -->
                  <div class="card-body"  style="border-radius:.5rem;">

                      <div class="flex-row d-flex justify-content-center align-items-center">
                          <!-- Icon -->
                          <div class="small-card-icon">
                              <i class="fas fa-door-open card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                          </div>
                          <!-- Text -->
                          <div class="text-center small-card-text w-100">
                              <p class="m-0 font-weight-normal text-primary" style="font-size: 120%; color: #003473 !important;">Total Event Spaces</p>
                              <h4 class="m-0 font-weight-normal text-primary" style="color: #003473 !important;">{{ $eventspace }}</h4>
                          </div>

                      </div>

                      <hr style="background-color: #003473 !important;">

                      <p class="m-0 font-weight-normal text-primary" style="text-align: right; color: #003473 !important;">
                        <a href="#"  >
                        Next <i class="fa fa-caret-right" aria-hidden="true"></i>
                      </a>

                      </p>

                  </div>
              </div>

          </div>


          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="mt-3 col-sm-4 col-md-4 col-lg-4 mt-lg-0">
              <!-- Card -->
              <div class="rounded-lg card border-1" style="border-color: #D25F00 !important;">
                  <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="flex-row d-flex justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-hotel card-icon-bg-primary fa-4x" style="color: #D25F00 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="text-center small-card-text w-100">
                                <p class="m-0 font-weight-normal text-primary" style="font-size: 120%; color: #D25F00 !important;">Total Hotel Rooms</p>
                                <h4 class="m-0 font-weight-normal text-primary" style="color: #D25F00 !important;">{{ $rooms }}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #D25F00 !important;">
                        <p class="m-0 font-weight-normal text-primary" style="text-align: right; color: #D25F00 !important;">
                          <a href="#"  >

                          Next <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>

              </div>
          </div>
          <div class="mt-3 col-sm-2 col-md-2 col-lg-2 mt-lg-0"></div>

      </div>

      <div class="" style="padding: 10px;"></div>

      <div style="padding: 10px;">

      </div>
{{--
      <hr style="background-color: black;"> --}}

      <div style="padding: 10px;"></div>


      <div class="row">
        <div class="col-md-2"></div>
         <div class="col-md-8">

            <!--  Custom content card -->
            <div class="rounded-lg card" style="border-color: #003473 !important;">
              <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Announcement</div>

                <div class="card-body">
                    <!-- List -->


                    <div class="list-group" style="overflow:auto;height:500px;width:100%;border:1px solid #ccc">

                        @forelse($announcement as $data)
                            <div class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1" style="font-weight: bold;">{{ $data->user_message }}</h6>
                                <small class="text-muted" style="font-size: 110%;"></small>
                                </div>
                                <p class="my-1" style="font-size: 15px; text-align:justify;">{{ $data->created_at }}</p>
                            </div>
                        @empty
                            No Announcement
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
      </div>


  </div>



                <!-- Small card component -->
                <!-- <div class="rounded-lg card">
                <div class="card-body">
                      <div class="card-titleuser"><b>Selamat Datang Ke Portal Perhutanan Semenanjung Malaysia</b></div>
                </div>
                </div><br><br> -->


                <!-- <div class="rounded-lg card">
            <div class="card-body">
                      <div class="card-title"><b>Tatacara Penggunaan Untuk Mengisi Permohonan.</b></div>
                      <div class="card-title">1. Mendaftar masuk di Portal e-Spatial.</div>
                      <div class="card-title">2. Klik Permohonan Baru untuk memohon data hutan.</div>
                      <div class="card-title">3. Masukkan jenis data, jenis hutan, negeri, tahun dan memuatnaik lampiran yang berkaitan.</div>
                      <div class="card-title">4. Klik Mohon untuk menghantar kepada JPSM untuk diproses.</div>
                </div>
            </div><br><br> -->



            <!-- <div class="rounded-lg card">
                  <div class="card-body">


                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                        <thead>
                            <tr>

                              <th class="all">JENIS DOKUMEN</th>
                              <th class="all">JENIS DATA</th>
                              <th class="all">NEGERI</th>
                              <th class="all">TAHUN</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                  </div>
                </div> -->






                </div>

    </div>



@endsection
