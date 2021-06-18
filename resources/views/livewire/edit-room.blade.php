<div>
    @if($updateMode)
<div class="col-md-12">
    @include('livewire.room-edit')
</div>
@else

    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
            <thead class="thead-light">
                <tr class="text-center">
                    <th><p class="mb-0">ID</p></th>
                    <th><p class="mb-0">Hotel Name</p></th>
                    <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                    <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                    <th><p class="mb-0">Room Type</p></th>
                    <th><p class="mb-0">Room Size</p></th>
                    <th><p class="mb-0">Type of Bed</p></th>
                    <th><p class="mb-0">View</p></th>
                    <th><p class="mb-0">Single Rate</p></th>
                    <th><p class="mb-0">Double Rate</p></th>
                    <th><p class="mb-0">Corporate Rate</p></th>
                    <th><p class="mb-0">Action</p></th>

                </tr>
            </thead>
            <tbody align="center">
                @forelse($rooms as $data )
                    <tr>
                        <td><p class="mb-0 font-weight-normal">{{ $data->id ? $data->id  : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->hotels->hotel_name ? $data->hotels->hotel_name : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->hotels->car_radius ? $data->hotels->car_radius : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->hotels->walking_radius ? $data->hotels->walking_radius : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->room_type ? $data->room_type : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->size ? $data->size : "-" }} sq.ft</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->type_of_bed ? $data->type_of_bed : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">{{ $data->view ? $data->view : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">RM {{ $data->single_rate ? $data->single_rate : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">RM {{ $data->double_rate ? $data->double_rate : "-" }}</p></td>
                        <td><p class="mb-0 font-weight-normal">RM {{ $data->corporate_rate ? $data->corporate_rate : "-" }}</p></td>
                        <td>
                            <a wire:click="edit({{$data->id}})" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                            <form action="{{ route('hotelroom.delete', $data->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                {{-- <td>Table is Empty</td> --}}
                @endforelse
            </tbody>
        </table>
    </div>
    @endif


</div>
