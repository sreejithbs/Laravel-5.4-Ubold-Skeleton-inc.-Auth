<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="{{ (\Route::current()->getName() == 'home') ?  'bkColor' : '' }}">
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ti-home"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-paint-bucket"></i> <span> Parent Element </span> <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="ui-buttons.html">Child Element </a></li>
                        <li><a href="ui-loading-buttons.html">Child Element </a></li>
                        <li><a href="ui-panels.html">Child Element </a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->