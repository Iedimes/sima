<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/memos') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.memo.title') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/dependencies') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.dependency.title') }}</a></li> --}}
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/states') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.state.title') }}</a></li> --}}
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/doc-types') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.doc-type.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/user-cedulas') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.user-cedula.title') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/detail-memos') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.detail-memo.title') }}</a></li> --}}
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/media') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.medium.title') }}</a></li> --}}
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
