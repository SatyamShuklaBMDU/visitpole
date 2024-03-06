@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="bg-light">
            <!-- <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
                <h4 class="text-success mt-3">Media Details</h4>
            </marquee> -->
        </div>
        <div class="text-end mt-2 mb-2">
            <a href="{{route('add.image')}}" class="btn btn-dark text-light">
                <i class="fa-solid fa-plus"></i>
                Add Image
            </a>
        </div>
        <table class="table table-responsive display table-ordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Images</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="" height="100px" width="100px"></td>
                    <td><a href="" class="btn btn-warning">Update</a></td>
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
