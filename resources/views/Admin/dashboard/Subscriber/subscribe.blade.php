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
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                    </form>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>
@endsection