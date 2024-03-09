@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="bg-light">
            <!-- <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
                <h4 class="text-success mt-3">Media Details</h4>
            </marquee> -->
        </div>
        <table class="table table-responsive display table-ordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Sr.No</th>
                    <th>Images</th>
                    <th>Short Descriptions</th>
                    <th>Long Descriptions</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('images/' . $data->image) }}" height="100px" width="100px"></td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->description}}</td>
                        <td><a href="" class="btn btn-warning">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
