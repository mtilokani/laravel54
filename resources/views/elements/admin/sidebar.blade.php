<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @if (count($menu_items) > 0)                
                @foreach ($menu_items as $menu_item)
                    <li class="nav-item start ">
                        @if(isset($menu_item['children']) && count($menu_item['children']))
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa {{ $menu_item['icon'] }}"></i>
                                <span class="title">{{ $menu_item['name'] }}</span>
                                <span class="arrow"></span>
                            </a>    
                            @include('elements.admin.submenu', ['menu_item' => $menu_item['children']])
                        @else
                            <a href="{{ $menu_item['url'] }}" class="nav-link nav-toggle">
                                <i class="fa {{ $menu_item['icon'] }}"></i>
                                <span class="title">{{ $menu_item['name'] }}</span>
                                <span class="arrow"></span>
                            </a>
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>