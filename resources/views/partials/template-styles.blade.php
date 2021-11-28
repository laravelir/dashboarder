@if (dashboarder_dir() == 'rtl')
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-flags.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-payments.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-vendors.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/demo.rtl.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/fonts.rtl.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/dashboarder.css') }}" rel="stylesheet"/>

@else
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/libs/tabler/demo.min.css') }}" rel="stylesheet"/>
    <link href="{{ dashboarder_asset('/css/dashboarder.css') }}" rel="stylesheet"/>
@endif
