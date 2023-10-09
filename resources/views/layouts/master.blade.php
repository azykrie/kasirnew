<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Starter</title>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/fontawesome-free/css/all.min.css">
            
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/jqvmap/jqvmap.min.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/dist/css/adminlte.min.css?v=3.2.0">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/daterangepicker/daterangepicker.css">
            
            <link rel="stylesheet" href="{{asset('AdminLTE-3')}}/plugins/summernote/summernote-bs4.min.css">

        <link
            rel="stylesheet"
            href="{{ asset('AdminLTE-3') }}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link
            rel="stylesheet"
            href="{{ asset('AdminLTE-3') }}/dist/css/adminlte.min.css?v=3.2.0">
        <script nonce="092b6d8e-ee16-4325-a8eb-03be1d12bdea">
            (function (w, d) {
                !function (a, b, c, d) {
                    a[c] = a[c] || {};
                    a[c].executed = [];
                    a.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    a.zaraz.q = [];
                    a.zaraz._f = function (e) {
                        return async function () {
                            var f = Array
                                .prototype
                                .slice
                                .call(arguments);
                            a
                                .zaraz
                                .q
                                .push({m: e, a: f})
                        }
                    };
                    for (const g of["track", "set", "debug"]) 
                        a.zaraz[g] = a
                            .zaraz
                            ._f(g);
                    a.zaraz.init = () => {
                        var h = b.getElementsByTagName(d)[0],
                            i = b.createElement(d),
                            j = b.getElementsByTagName("title")[0];
                        j && (a[c].t = b.getElementsByTagName("title")[0].text);
                        a[c].x = Math.random();
                        a[c].w = a.screen.width;
                        a[c].h = a.screen.height;
                        a[c].j = a.innerHeight;
                        a[c].e = a.innerWidth;
                        a[c].l = a.location.href;
                        a[c].r = b.referrer;
                        a[c].k = a.screen.colorDepth;
                        a[c].n = b.characterSet;
                        a[c].o = (new Date).getTimezoneOffset();
                        if (a.dataLayer) 
                            for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) 
                                zaraz.set(n[0], n[1], {scope: "page"});
                    a[c].q = [];
                        for (; a.zaraz.q.length;) {
                            const q = a
                                .zaraz
                                .q
                                .shift();
                            a[c]
                                .q
                                .push(q)
                        }
                        i.defer = !0;
                        for (const r of[localStorage, sessionStorage]) 
                            Object
                                .keys(r || {})
                                .filter((t => t.startsWith("_zaraz_")))
                                .forEach((s => {
                                    try {
                                        a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                                    } catch  {
                                        a[c]["z_" + s.slice(7)] = r.getItem(s)
                                    }
                                }));
                        i.referrerPolicy = "origin";
                        i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(
                            encodeURIComponent(JSON.stringify(a[c]))
                        );
                        h
                            .parentNode
                            .insertBefore(i, h)
                    };
                    ["complete", "interactive"].includes(b.readyState)
                        ? zaraz.init()
                        : a.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document);
        </script>
        @livewireStyles
    </head>
    <body class="hold-transition sidebar-mini">
         @livewireScripts
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form action="logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-light-primary elevation-4">

                <a href="index3.html" class="brand-link">
                    <img
                        src="{{ asset('AdminLTE-3') }}/dist/img/AdminLTELogo.png"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <div class="sidebar">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img
                                src="{{ asset('AdminLTE-3') }}/dist/img/user2-160x160.jpg"
                                class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                        </div>
                    </div>

                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input
                                class="form-control form-control-sidebar"
                                type="search"
                                placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false">
                            @if (auth()->user()->level == "admin")
                            <li class="nav-header">Dashboard</li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">Setting</li>
                            <li class="nav-item">
                                <a href="{{ route('discount.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-plus-square"></i>
                                    <p>
                                        Setting Dsicount
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">Master</li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>User Data</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-cube"></i>
                                    <p>
                                        Category
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('item.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-cubes"></i>
                                    <p>
                                        Item
                                    </p>
                                </a>
                            </li>
                            @endif
                            <li class="nav-header">Transaction</li>
                            <li class="nav-item">
                                <a href="{{ route('transaction.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>
                                        Cashier
                                    </p>
                                </a>
                            </li>
                            @if (auth()->user()->level == "admin")
                            <li class="nav-header">Report</li>
                            <li class="nav-item">
                                <a href="{{ route('report.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Reports
                                    </p>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>

                </div>

            </aside>

            <div class="content-wrapper">
                @yield('content')
            </div>

            <aside class="control-sidebar control-sidebar-dark">

                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>

            <footer class="main-footer">

                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>

                <strong>Copyright &copy; 2014-2021
                    <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
            </footer>
        </div>

        <script src="{{ asset('AdminLTE-3') }}/plugins/jquery/jquery.min.js"></script>
        <script src="{{asset('AdminLTE-3')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/chart.js/Chart.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/sparklines/sparkline.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{asset('AdminLTE-3')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/moment/moment.min.js"></script>
        <script src="{{asset('AdminLTE-3')}}/plugins/daterangepicker/daterangepicker.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/summernote/summernote-bs4.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}dist/js/adminlte.js?v=3.2.0"></script>
        
        <script src="{{asset('AdminLTE-3')}}dist/js/demo.js"></script>
        
        <script src="{{asset('AdminLTE-3')}}dist/js/pages/dashboard.js"></script>

        <script
            src="{{ asset('AdminLTE-3') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('AdminLTE-3') }}/dist/js/adminlte.min.js?v=3.2.0"></script>
    </body>
</html>