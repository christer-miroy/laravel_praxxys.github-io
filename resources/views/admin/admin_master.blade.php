<!DOCTYPE html>
<!-- saved from url=(0040)https://adminlte.io/themes/v3/index.html -->
<html lang="en" style="height: auto;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/all.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/ionicons.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/jqvmap.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/adminlte.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/daterangepicker.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/summernote-bs4.min.css">
    <script defer="" referrerpolicy="origin" src="./AdminLTE 3 _ Dashboard_files/s.js.download"></script>
    <script nonce="d0259514-f957-48a1-a013-268a4cb6349b">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            }))))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                        "_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
    <!---toastr-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- livewire -->
    @livewireStyles
</head>

<body class="sidebar-mini layout-fixed" cz-shortcut-listen="true" style="height: auto;">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
            <img class="animation__shake" src="./AdminLTE 3 _ Dashboard_files/AdminLTELogo.webp" alt="AdminLTELogo"
                height="60" width="60" style="display: none;">
        </div>
        
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">Statistics</a>
                </li>
                
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="https://adminlte.io/themes/v3/index.html#"
                        role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
        </nav>


        <!-- start customized sidebar -->
        @include('admin.body.sidebar')
        <!-- end customized sidebar -->

        <div class="content-wrapper" style="min-height: 454px;">




            <section class="content">
                <div class="container-fluid m-4">
                    

                    <!-- start dynamic content -->
                    @yield('admin')
                    <!-- end dynamic content -->
                </div>
            </section>

        </div>

        <footer class="main-footer">
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px; height: 511px;">

            <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                style="height: 511px;">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
                            <h5>Customize AdminLTE</h5>
                            <hr class="mb-2">
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark
                                    Mode</span></div>
                            <h6>Header Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Fixed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Dropdown Legacy Offset</span></div>
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No
                                    border</span></div>
                            <h6>Sidebar Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Collapsed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                                    class="mr-1"><span>Fixed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                                    class="mr-1"><span>Sidebar Mini</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Sidebar Mini MD</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Sidebar Mini XS</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Flat Style</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Legacy Style</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Compact</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Child Indent</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Child Hide on Collapse</span></div>
                            <div class="mb-4"><input type="checkbox" value="1"
                                    class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div>
                            <h6>Footer Options</h6>
                            <div class="mb-4"><input type="checkbox" value="1"
                                    class="mr-1"><span>Fixed</span></div>
                            <h6>Small Text Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Body</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Navbar</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Brand</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Sidebar Nav</span></div>
                            <div class="mb-4"><input type="checkbox" value="1"
                                    class="mr-1"><span>Footer</span></div>
                            <h6>Navbar Variants</h6>
                            <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                                    <option class="bg-primary">Primary</option>
                                    <option class="bg-secondary">Secondary</option>
                                    <option class="bg-info">Info</option>
                                    <option class="bg-success">Success</option>
                                    <option class="bg-danger">Danger</option>
                                    <option class="bg-indigo">Indigo</option>
                                    <option class="bg-purple">Purple</option>
                                    <option class="bg-pink">Pink</option>
                                    <option class="bg-navy">Navy</option>
                                    <option class="bg-lightblue">Lightblue</option>
                                    <option class="bg-teal">Teal</option>
                                    <option class="bg-cyan">Cyan</option>
                                    <option class="bg-dark">Dark</option>
                                    <option class="bg-gray-dark">Gray dark</option>
                                    <option class="bg-gray">Gray</option>
                                    <option class="bg-light">Light</option>
                                    <option class="bg-warning">Warning</option>
                                    <option class="bg-white">White</option>
                                    <option class="bg-orange">Orange</option>
                                </select></div>
                            <h6>Accent Color Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Dark Sidebar Variants</h6>
                            <div class="d-flex"></div><select
                                class="custom-select mb-3 text-light border-0 bg-primary">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Light Sidebar Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Brand Logo Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-secondary">Secondary</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-cyan">Cyan</option>
                                <option class="bg-dark">Dark</option>
                                <option class="bg-gray-dark">Gray dark</option>
                                <option class="bg-gray">Gray</option>
                                <option class="bg-light">Light</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-white">White</option>
                                <option class="bg-orange">Orange</option><a
                                    href="https://adminlte.io/themes/v3/index.html#">clear</a>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>

        <div id="sidebar-overlay"></div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>


    <script src="./AdminLTE 3 _ Dashboard_files/jquery.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/jquery-ui.min.js.download"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="./AdminLTE 3 _ Dashboard_files/bootstrap.bundle.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/Chart.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/sparkline.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/jquery.vmap.min.js.download"></script>
    <script src="./AdminLTE 3 _ Dashboard_files/jquery.vmap.usa.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/jquery.knob.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/moment.min.js.download"></script>
    <script src="./AdminLTE 3 _ Dashboard_files/daterangepicker.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/tempusdominus-bootstrap-4.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/summernote-bs4.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/jquery.overlayScrollbars.min.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/adminlte.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/demo.js.download"></script>

    <script src="./AdminLTE 3 _ Dashboard_files/dashboard.js.download"></script>

    <!-- toastr -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch(type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                break;
            }
        @endif
    </script>

    <!-- livewire -->
    @livewireScripts


    <div class="daterangepicker ltr show-ranges opensright">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none;"></div>
</body>

</html>
