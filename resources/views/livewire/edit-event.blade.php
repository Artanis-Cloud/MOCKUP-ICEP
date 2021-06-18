<div>
    @if($updateMode)
<div class="col-md-12">
    @include('livewire.eventspace-edit')
</div>
@else
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
            <thead class="thead-light">
                <tr class="text-center">
                    <th><p class="mb-0">ID</p></th>
                    <th><p class="mb-0">Hotel Name</p></th>
                    <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                    <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                    <th><p class="mb-0">Venues</p></th>
                    <th><p class="mb-0">Size (sq.ft.)</p></th>
                    <th><p class="mb-0">Banquet</p></th>
                    <th><p class="mb-0">Classroom</p></th>
                    <th><p class="mb-0">Theater</p></th>
                    <th><p class="mb-0">Cocktail</p></th>
                    <th><p class="mb-0">Daily Rates</p></th>
                    <th><p class="mb-0">Actions</p></th>
                </tr>
            </thead>
            <tbody align="center">
                @forelse ($eventspaces as $data )
                    {{-- @if($data->hotel_id) --}}
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->hotels->hotel_name}}</td>
                        <td>{{$data->hotels->car_radius}}</td>
                        <td>{{$data->hotels->walking_radius}}</td>
                        <td>{{$data->venue}}</td>
                        <td>{{$data->size}}</td>
                        <td>{{$data->banquet}}</td>
                        <td>{{$data->classroom}}</td>
                        <td>{{$data->theater}}</td>
                        <td>{{$data->cocktail}}</td>
                        <td>{{$data->daily_rate}}</td>
                        <td>
                            <a wire:click="edit({{$data->id}})" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                            <form action="{{ route('eventspace.delete', $data->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    {{-- </tr>
                    @else
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>{{$data->venue}}</td>
                        <td>{{$data->size}}</td>
                        <td>{{$data->banquet}}</td>
                        <td>{{$data->classroom}}</td>
                        <td>{{$data->theater}}</td>
                        <td>{{$data->cocktail}}</td>
                        <td>{{$data->daily_rate}}</td>
                        <td>
                            <a wire:click="edit({{$data->id}})" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                            <form action="{{ route('eventspace.delete', $data->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endif --}}
                @empty
                {{-- <td>Table is Empty</td> --}}
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
</div>
