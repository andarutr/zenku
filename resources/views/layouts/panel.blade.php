<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.panel.header')
</head>
<body id="page-top">
    <div id="wrapper">
        <x-panel.sidebar />
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <x-panel.navbar />
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    @include('partials.panel.breadcrumb')

                    @yield('content')

                </div>
                <!---Container Fluid-->
            </div>
            @include('partials.panel.copyright')
        </div>
    </div>
    @include('partials.panel.footer')
</body>

</html>