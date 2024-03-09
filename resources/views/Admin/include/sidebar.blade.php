<div class="col-sm-3">
    <div class="side-bar shadow">
        <div class="menu">
            <div class="item">
                <a href="{{ route('dashboard') }}" class="active">
                    <i class="fa-solid fa-gauge"></i>
                    Dashboard
                </a>
            </div>
            <div class="item">
                <a class="sub-btn">
                    <i class="fa-sharp fa-solid fa-bullhorn"></i>
                    Categories
                    <i class="fa-solid fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="{{ route('category.show') }}" class="sub-item">
                        All Categories
                        <b class="text-danger"></b>
                    </a>
                    <a href="{{ route('category.add') }}" class="sub-item">Add New Category</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn">
                    <i class="fa-sharp fa-solid fa-bullhorn"></i>
                    About Us
                    <i class="fa-solid fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="{{ route('about.show') }}" class="sub-item">
                        All About
                        <b class="text-danger"></b>
                    </a>
                    <a href="{{ route('about.add') }}" class="sub-item">Add About</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn">
                    <i class="fa-solid fa-user"></i>
                    Admin's Posts
                    <i class="fa-solid fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="{{ route('business.show.post') }}" class="sub-item">
                        <i class="fa-solid fa-blog"></i>
                        Admin's All Posts
                    </a>
                    <a href="{{ route('business.post') }}" class="sub-item">
                        <i class="fa-solid fa-blog"></i>
                        Add category Post
                    </a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn">
                    <i class="fa-solid fa-list-check"></i>
                    Media
                    <i class="fa-solid fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="{{ route('show.media') }}" class="sub-item">
                        All Media
                        <b class="text-danger"></b>
                    </a>
                    <a href="{{ route('add.image') }}" class="sub-item">
                        Add New Media
                    </a>
                </div>
            </div>
            <div class="item">
                <a href="{{ route('show.subscribe') }}">
                    <i class="fa-solid fa-bell"></i>
                    Subscribed Users
                    <b class="text-danger"></b>
                </a>
            </div>
            <div class="item">
                <a href="guest_users.php">
                    <i class="fa-solid fa-users"></i>
                    Guest Users Managements
                    <b class="text-danger"></b>
                </a>
            </div>
        </div>
    </div>
</div>
