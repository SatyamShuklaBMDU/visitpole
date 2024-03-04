<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('upload/upload/logoback.PNG') }}" width="220px">
                </a>
            </nav>
        </div>
        <div class="col-sm-4">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <img src="{{ asset('upload/upload/user.jpg') }}" class="float-right admnimg">
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <li class="nav-item my-auto ms-4">
                        <button type="submit" style="border: none;background:none;" class="admnlg">Logout</button>
                    </li>
                </form>
            </ul>
        </div>
    </div>
</div>
<hr>
