<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link text-center">
        <img src="{{asset('front/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light  ">{{auth()->user()->name}}</span>
    </a>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <br><br>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link {{request()->segment(2) == 'users' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                             المستخدمين
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('faqs.index')}}" class="nav-link {{request()->segment(2) == 'faqs' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            الأسئلة والإجابات
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dialogs.index')}}" class="nav-link {{request()->segment(2) == 'dialogs' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            المحادثات
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('not_founds.index')}}" class="nav-link {{request()->segment(2) == 'not_found' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            أسئلة تحتاج إجابة
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contacts.index')}}" class="nav-link {{request()->segment(2) == 'contacts' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            تواصل معنا
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about.index')}}" class="nav-link {{request()->segment(2) == 'about' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            من نحن
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sliders.index')}}" class="nav-link {{request()->segment(2) == 'sliders' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            السلايدر
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('galleries.index')}}" class="nav-link {{request()->segment(2) == 'galleries' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            معرض الصور
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('testimonails.index')}}" class="nav-link {{request()->segment(2) == 'testimonails' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            آراء العملاء
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
