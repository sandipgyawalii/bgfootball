<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                </li>
                <li class="submenu ">
                    <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> </a>

                </li>


                <li class="menu-title">
                    <span>Company Profile</span>
                </li>
                <li>
                    <a href="{{ route('profile_index') }}"><i class="fas fa-file-invoice-dollar"></i> <span> Profile Settings</span> </a>
                </li>
                <li>
                    <a href="{{ route('homeslider.index') }}"><i class="fas fa-file-invoice-dollar"></i> <span> Home Image</span> </a>
                </li>
                <li>
                    <a href="{{ route('sponsor.index') }}"><i class="fas fa-file-invoice-dollar"></i> <span> Sponsor</span> </a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> About us </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Testimonial</a> </li>
                        <li><a href="{{ route('partner.index') }}">Our Team</a> </li>
                        <li><a href="{{route('about.index')}}">Page</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('facilities.index') }}"><i class="fas fa-file-invoice-dollar"></i> <span> Facilites</span> </a>
                </li>



                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span>Gallery</span><span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('gallerycategory.index') }}">Gallery Category</a></li>
                        <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span>Contact</span><span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Manage Contact</a></li>
                    </ul>
                </li>
           
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span>Blog</span><span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Blog Category</a></li>
                        <li><a href="#">Blog Details</a></li>
                        <li><a href="#">Manage Comments</a></li>
                    </ul>
                </li>

                <li>
            </ul>
        </div>
    </div>
</div>

{{-- Home page baki cha --}}
