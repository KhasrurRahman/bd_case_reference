<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('public/assets/backend/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
            <div class="email">{{Auth::user()->email}}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href=""><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="material-icons">input</i>Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if(Request::is('admin*'))
                <li class="{{Request::is('admin/dashboard')?'active': ''}}">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="{{Request::is('admin/maincategory*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">label</i>
                        <span>Appellate Division or High Court Division</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.maincategory.index')}}" class=" waves-effect waves-block">All Appellate Division or High Court Division
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.maincategory.create')}}" class=" waves-effect waves-block">create Appellate Division or High Court Division
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{Request::is('admin/civil*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">label</i>
                        <span>Civil or Criminal</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.civil.index')}}" class=" waves-effect waves-block">All Civil or Criminal
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.civil.create')}}" class=" waves-effect waves-block">create Civil or Criminal
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{Request::is('admin/act*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">label</i>
                        <span>Act or Law or Rule</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.act.index')}}" class=" waves-effect waves-block">All Act or Law or Rule
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.act.create')}}" class=" waves-effect waves-block">create Act or Law or Rule
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{Request::is('admin/section*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">label</i>
                        <span>Section or Article or Rule</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.section.index')}}" class=" waves-effect waves-block">All Section or Article or Rule
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.section.create')}}" class=" waves-effect waves-block">create Section or Article or Rule
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{Request::is('admin/post*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">label</i>
                        <span>Post</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.post.index')}}" class=" waves-effect waves-block">All Post
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.post.create')}}" class=" waves-effect waves-block">create Post
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{Request::is('admin/contact*')?'active': ''}}">
                    <a href="{{route('admin.contact.index')}}">
                        <i class="material-icons">label</i>
                        <span>All contact</span>
                    </a>
                </li>




                <li class="header">System</li>

            <li>







                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                        <i class="material-icons">input</i>Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
                </li>
             @endif









        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018 - 2019 <a href="javascript:void(0);">Developed by - Ratin</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
