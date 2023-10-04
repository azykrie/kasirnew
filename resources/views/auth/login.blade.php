<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in (v2)</title>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="{{ asset('AdminLTE-3') }}/plugins/fontawesome-free/css/all.min.css">

        <link
            rel="stylesheet"
            href="{{ asset('AdminLTE-3') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

        <link rel="stylesheet" href="{{ asset('AdminLTE-3') }}/dist/css/adminlte.min.css?v=3.2.0">
        <script nonce="318bfa55-4d1c-4f5e-a261-7976c1910000">
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
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ asset('AdminLTE-3') }}/index2.html" class="h1">
                        <b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autofocus required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                            @error('email')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

        <script src="{{ asset('AdminLTE-3') }}/plugins/jquery/jquery.min.js"></script>

        <script src="{{ asset('AdminLTE-3') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('AdminLTE-3') }}/dist/js/adminlte.min.js?v=3.2.0"></script>
    </body>
</html>