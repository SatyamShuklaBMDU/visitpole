@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9">
        <div class="bg-light mb-3">
            <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
                <h4 class="text-success mt-3">Subscribed Users Details</h4>
            </marquee>
        </div>
        <table class="table tabel-responsive table-bordered display">
            <thead class="bg-dark text-light">
                <tr>
                    <th class="text-center">SN.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Date</th>
                    {{-- <th class="text-center">Delete</th> --}}
                </tr>
            </thead>
            <tbody>

                {{-- @foreach ($subscribe as $sub)
                <tr>
                
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sub->name }}</td>
                <td>{{ $sub->email }}</td>
                <td>{{ $sub->created_at }}</td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
                @endforeach --}}
                @forelse ($subscribe as $sub)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sub->name }}</td>
                        <td>{{ $sub->email }}</td>
                        <td>{{ $sub->created_at->format('d-m-Y') }}</td>

                        {{-- <td> --}}
                            {{-- <form action="{{ route('delete.subscription') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $sub->id }}">
                <input type="submit" class="btn btn-danger" name="delete" value="Delete">
            </form> --}}
                        {{-- </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No subscription data available</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </div>
@endsection
