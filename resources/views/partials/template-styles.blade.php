@if (dashboarder_dir() == 'rtl')
    <link href="{{ dashboarder_asset('/css/tabler.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-flags.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-payments.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-vendors.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/demo.rtl.min.css') }}" rel="stylesheet"/>
@else
    <link href="{{ dashboarder_asset('/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/demo.min.css') }}" rel="stylesheet"/>
@endif
