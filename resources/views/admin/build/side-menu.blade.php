<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.cliente.index') }}" class="site_title"><img src="{{ url('logo.png') }}" width="50"
                    alt="{{ env('APP_NAME') }}" style="margin-right: 1px;margin-top: -6px"> <span
                    style="font-size: large">{{ env('APP_NAME') }}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        @include('admin.build.menu-profile', [])
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        @include('admin.build.menu', [])
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        @include('admin.build.menu-footer', [])
        <!-- /menu footer buttons -->
    </div>
</div>
