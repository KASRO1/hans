@include("admin.elements.aside")
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <!-- Title -->
    <title>Videos | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/admin/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Front Template -->
    <script src="/admin/assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/admin/assets/vendor/hs-file-attach/dist/hs-file-attach.js"></script>
    <link rel="stylesheet" href="/admin/assets/vendor/flatpickr/dist/flatpickr.min.css">
    <link rel="preload" href="/admin/assets/css/theme.min.css" data-hs-appearance="default" as="style">
    <link rel="preload" href="/admin/assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }

        body {
            opacity: 0;
        }
    </style>

    <script>
        window.hs_config = {
            "autopath": "@@autopath",
            "deleteLine": "hs-builder:delete",
            "deleteLine:build": "hs-builder:build-delete",
            "deleteLine:dist": "hs-builder:dist-delete",
            "previewMode": false,
            "startPath": "/index.html",
            "vars": {
                "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                "version": "?v=1.0"
            },
            "layoutBuilder": {
                "extend": {"switcherSupport": true},
                "header": {"layoutMode": "default", "containerMode": "container-fluid"},
                "sidebarLayout": "default"
            },
            "themeAppearance": {
                "layoutSkin": "default",
                "sidebarSkin": "default",
                "styles": {
                    "colors": {
                        "primary": "#377dff",
                        "transparent": "transparent",
                        "white": "#fff",
                        "dark": "132144",
                        "gray": {"100": "#f9fafc", "900": "#1e2022"}
                    }, "font": "Inter"
                }
            },
            "languageDirection": {"lang": "en"},
            "skipFilesFromBundle": {
                "dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"],
                "build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.css", "assets/css/docs.css", "assets/vendor/icon-set/style.css", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js", "assets/js/demo.js"]
            },
            "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
            "copyDependencies": {
                "dist": {"*assets/js/theme-custom.js": ""},
                "build": {"*assets/js/theme-custom.js": "", "node_modules/bootstrap-icons/font/*fonts/**": "assets/css"}
            },
            "buildFolder": "",
            "replacePathsToCDN": {},
            "directoryNames": {"src": "./src", "dist": "./dist", "build": "./build"},
            "fileNames": {
                "dist": {"js": "theme.min.js", "css": "theme.min.css"},
                "build": {
                    "css": "theme.min.css",
                    "js": "theme.min.js",
                    "vendorCSS": "vendor.min.css",
                    "vendorJS": "vendor.min.js"
                }
            },
            "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
        }
        window.hs_config.gulpRGBA = (p1) => {
            const options = p1.split(',')
            const hex = options[0].toString()
            const transparent = options[1].toString()

            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
            }
            throw new Error('Bad Hex');
        }
        window.hs_config.gulpDarken = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = -parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
        window.hs_config.gulpLighten = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
    </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

<script src="/admin/assets/js/hs.theme-appearance.js"></script>

<script src="/admin/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

<!-- ========== HEADER ========== -->

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->
@yield("aside")
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10">


                <!-- Filter -->
                <div class="row align-items-center mb-5">
                    <div class="col">
                        <h3 class="mb-0">{{count($videos)}} видео</h3>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                        <!-- Nav -->
                        <button data-bs-toggle="modal" data-bs-target="#createCategoryModal" class="btn btn-primary">
                            Создать категорию
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#newProjectModal" class="btn btn-primary">
                            Добавить видео
                        </button>

                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Filter -->

                <!-- Tab Content -->
                <div class="tab-content" id="connectionsTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <!-- Connections -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                            @foreach($videos as $video)
                            <div class="col mb-3 mb-lg-5">


                                <div class="card h-100">
                                    <div class="card-pinned">
                                        <div class="card-pinned-top-end">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <button type="button"
                                                        class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                                        id="connectionsDropdown1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <i class="bi-three-dots-vertical"></i>
                                                </button>

                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end"
                                                     aria-labelledby="connectionsDropdown1">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!-- End Dropdown -->
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                                            <img class="avatar-img" src="/storage/{{$video->path_preview}}"
                                                 alt="Image Description">
                                        </div>
                                        <!-- End Avatar -->

                                        <h3 class="mb-1">
                                            <a class="text-dark" href="#">{{$video['title']}}</a>
                                        </h3>

                                        <!-- Badges -->
                                        <ul class="list-inline mb-0">
                                            @if($video->show_main)
                                                <li class="list-inline-item"><a
                                                        class="badge bg-soft-primary text-primary p-2" href="#">На
                                                        главной</a></li>
                                            @endif
                                            <li class="list-inline-item"><a
                                                    class="badge bg-soft-secondary text-secondary p-2"
                                                    href="#">{{$video['category']}}</a></li>

                                        </ul>
                                        <!-- End Badges -->
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                        <!-- End Connections -->
                    </div>

                    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row row-cols-1">
                        </div>
                        <!-- End Col -->

                        <div class="col mb-3">
                            <!-- Card -->
                            <div class="card card-body">
                                <div class="d-flex align-items-md-center">
                                    <div class="flex-shrink-0">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle">
                                            <img class="avatar-img" src="/admin/assets/img/160x160/img8.jpg"
                                                 alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                        <!-- End Avatar -->
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4 class="mb-1">
                                                    <a class="text-dark" href="#">Isabella Finley</a>
                                                </h4>


                                            </div>
                                            <!-- End Col -->

                                            <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <button type="button"
                                                            class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                                            id="connectionsListDropdown2" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                        <i class="bi-three-dots-vertical"></i>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end"
                                                         aria-labelledby="connectionsListDropdown2">
                                                        <a class="dropdown-item" href="#">Rename project </a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive project</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Dropdown -->
                                            </div>
                                            <!-- End Col -->

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <!-- Badges -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a
                                                            class="badge bg-soft-secondary text-secondary p-2" href="#">Human
                                                            resources</a></li>
                                                    <li class="list-inline-item"><a
                                                            class="badge bg-soft-secondary text-secondary p-2" href="#">Support</a>
                                                    </li>
                                                </ul>
                                                <!-- End Badges -->
                                            </div>
                                            <!-- End Col -->

                                        </div>
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->


                    </div>
                    <!-- End Row -->
                </div>
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>Название категории</td>
                            <td>Действия</td>
                        </tr>

                        </thead>
                        <tbody>
                            @foreach($category as $cat)
                                <tr>
                                <td>{{$cat['title']}}</td>
                                <td><a href="{{route("category.delete:id", $cat['id'])}}" class="btn btn-danger">
                                        Удалить
                                    </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Keyboard Shortcuts -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts"
     aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="fw-semibold">Bold</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">b</kbd>
                    </div>
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <em>italic</em>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">i</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <u>Underline</u>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">u</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <s>Strikethrough</s>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                        <!-- End Col -->
                    </div>
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="small">Small text</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <mark>Highlight</mark>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">e</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Mention person <a href="#">(@Brian)</a></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">@</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">+</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="#">#hashtag</a>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">#hashtag</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Date</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/date</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                        <kbd class="d-inline-block mb-1">/datetime</kbd>
                        <kbd class="d-inline-block mb-1">/datetime</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Time</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/time</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Note box</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/note</kbd>
                        <kbd class="d-inline-block mb-1">Enter</kbd>
                        <kbd class="d-inline-block mb-1">/note red</kbd>
                        <kbd class="d-inline-block mb-1">/note red</kbd>
                        <kbd class="d-inline-block mb-1">Enter</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find and replace</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">r</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find next</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">n</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find previous</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">p</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Indent</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Tab</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Un-indent</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Tab</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Move line up</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Move line down</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Add a comment</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">m</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Undo</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">z</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Redo</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">y</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
                <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Create new doc</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">n</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Present</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">p</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Share</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Search docs</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">o</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Keyboard shortcuts</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">/</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>
    </div>
</div>
<!-- End Keyboard Shortcuts -->

<!-- Activity -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
     aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Step -->
        <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar" src="/admin/assets/img/160x160/img9.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Iana Robinson</h5>

                        <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

                        <ul class="list-group list-group-sm">
                            <!-- List Item -->
                            <li class="list-group-item list-group-item-light">
                                <div class="row gx-1">
                                    <div class="col-6">
                                        <!-- Media -->
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs"
                                                     src="/admin/assets/svg/brands/excel-icon.svg"
                                                     alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <span class="d-block fs-6 text-dark text-truncate"
                                                      title="weekly-reports.xls">weekly-reports.xls</span>
                                                <span class="d-block small text-muted">12kb</span>
                                            </div>
                                        </div>
                                        <!-- End Media -->
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-6">
                                        <!-- Media -->
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs"
                                                     src="/admin/assets/svg/brands/word-icon.svg"
                                                     alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <span class="d-block fs-6 text-dark text-truncate"
                                                      title="weekly-reports.xls">weekly-reports.xls</span>
                                                <span class="d-block small text-muted">4kb</span>
                                            </div>
                                        </div>
                                        <!-- End Media -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </li>
                            <!-- End List Item -->
                        </ul>

                        <span class="small text-muted text-uppercase">Now</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-dark">B</span>

                    <div class="step-content">
                        <h5 class="mb-1">Bob Dean</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span
                                class="badge bg-soft-success text-success rounded-pill"><span
                                    class="legend-indicator bg-success"></span>"Completed"</span></p>

                        <span class="small text-muted text-uppercase">Today</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img3.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="h5 mb-1">Crane</h5>

                        <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

                        <ul class="list-group list-group-sm">
                            <li class="list-group-item list-group-item-light">
                                <div class="row gx-1">
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-1.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-2.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-3.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="text-center">
                                            <a href="#">+2</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <span class="small text-muted text-uppercase">May 12</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-info">D</span>

                    <div class="step-content">
                        <h5 class="mb-1">David Lidell</h5>

                        <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

                        <span class="small text-muted text-uppercase">May 15</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img7.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Rachel King</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span
                                class="badge bg-soft-success text-success rounded-pill"><span
                                    class="legend-indicator bg-success"></span>"Completed"</span></p>

                        <span class="small text-muted text-uppercase">Apr 29</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img5.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Finch Hoot</h5>

                        <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i>
                            badge</p>

                        <span class="small text-muted text-uppercase">Apr 06</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

                    <div class="step-content">
                        <h5 class="mb-1">Project status updated</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span
                                class="badge bg-soft-primary text-primary rounded-pill"><span
                                    class="legend-indicator bg-primary"></span>"In progress"</span></p>

                        <span class="small text-muted text-uppercase">Feb 10</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->
        </ul>
        <!-- End Step -->

        <div class="d-grid">
            <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
        </div>
    </div>
</div>
<!-- End Activity -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Создание категории</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <form action="{{route("category.add")}}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Название категории</label>
                            <input type="text" name="title" id="exampleFormControlInput1" class="form-control" placeholder="Введи название категории">
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- Welcome Message Modal -->
<div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-close">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i class="bi-x-lg"></i>
                </button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body p-sm-5">
                <div class="text-center">
                    <div class="w-75 w-sm-50 mx-auto mb-4">
                        <img class="img-fluid" src="/admin/assets/svg/illustrations/oc-collaboration.svg"
                             alt="Image Description" data-hs-theme-appearance="default">
                        <img class="img-fluid" src="/admin/assets/svg/illustrations-light/oc-collaboration.svg"
                             alt="Image Description" data-hs-theme-appearance="dark">
                    </div>

                    <h4 class="h1">Welcome to Front</h4>

                    <p>We're happy to see you in our community.</p>
                </div>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer d-block text-center py-sm-5">
                <small class="text-cap text-muted">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/gitlab-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/fitbit-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/flow-xo-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/layar-gray.svg"
                                 alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProjectModalLabel">Новое видео</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <!-- Step Form -->
                <form action="{{route("video.add")}}" enctype="multipart/form-data" method="post" class="js-step-form" data-hs-step-form-options='{
                  "progressSelector": "#createProjectStepFormProgress",
                  "stepsSelector": "#createProjectStepFormContent",
                  "endSelector": "#createProjectFinishBtn",
                  "isValidate": false
                }'>

@csrf
                    <!-- Content Step Form -->
                    <div id="createProjectStepFormContent">
                        <div id="createProjectStepDetails" class="active">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label">Превью</label>

                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <label for="basicFormFile" class="js-file-attach form-label"
                                           data-hs-file-attach-options='{
          "textTarget": "[for=\"customFile\"]"
         }'></label>
                                    <input class="form-control" name="preview" type="file" id="basicFormFile">
                                    <!-- End Avatar -->

                                </div>
                            </div>
                            <!-- End Form -->


                            <!-- Form -->
                            <div class="mb-4">
                                <label for="projectNameNewProjectLabel" class="form-label">Заголовок </label>

                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-briefcase"></i>
                                    </div>
                                    <input type="text" class="form-control" name="title"
                                           id="projectNameNewProjectLabel" placeholder="Введи название видео здесь">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="projectNameNewProjectLabel" class="form-label">Введи длительность видео </label>

                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-clock"></i>
                                    </div>
                                    <input type="text" class="form-control" name="video_time"
                                           id="projectNameNewProjectLabel" placeholder="Введи длительность видео здесь">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Quill -->
                            <div class="mb-4">
                                <label class="form-label">Описание <span
                                        class="form-label-secondary">(по желанию)</span></label>

                                <!-- Quill -->
                                <textarea name="description" id="exampleFormControlTextarea1" class="form-control"
                                          placeholder="А здесь введи описание" rows="4"></textarea>
                                <!-- End Quill -->
                            </div>
                            <!-- End Quill -->

                            <div class="row">
                                <div class="">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="projectDeadlineNewProjectLabel" class="form-label">Выбери категорию</label>
{{--                                        <select name="category" id="exampleFormControlSelect1" class="form-control">--}}
{{--                                            <option>Выбери категорию</option>--}}
{{--                                            @foreach($category as $item)--}}
{{--                                            <option value="{{$item['title']}}">{{$item['title']}}</option>--}}
{{--                                            @endforeach--}}

{{--                                        </select>--}}
                                        <input name='category' id="input" class='some_class_name form-control' placeholder='Введи сюда категорию' data-whitelist="@foreach ($category as $item) {{$item['title']}}, @endforeach" >
                                       </div>
                                    <script>
                                        var inputElm = document.getElementById('input'),
                                        whitelist = ['test']

                                        var tagify = new Tagify(inputElm, {
                                            enforceWhitelist: true,
                                            whitelist: inputElm.value.trim().split(/\s*,\s*/) // Array of values. stackoverflow.com/a/43375571/104380
                                        })



                                        document.querySelector('.tags--removeAllBtn')
                                            .addEventListener('click', tagify.removeAllTags.bind(tagify))

                                        // Chainable event listeners
                                        tagify.on('add', onAddTag)
                                            .on('remove', onRemoveTag)
                                            .on('input', onInput)
                                            .on('edit', onTagEdit)
                                            .on('invalid', onInvalidTag)
                                            .on('click', onTagClick)
                                            .on('focus', onTagifyFocusBlur)
                                            .on('blur', onTagifyFocusBlur)
                                            .on('dropdown:hide dropdown:show', e => console.log(e.type))
                                            .on('dropdown:select', onDropdownSelect)

                                        var mockAjax = (function mockAjax(){
                                            var timeout;
                                            return function(duration){
                                                clearTimeout(timeout); // abort last request
                                                return new Promise(function(resolve, reject){
                                                    timeout = setTimeout(resolve, duration || 700, whitelist)
                                                })
                                            }
                                        })()

                                        // tag added callback
                                        function onAddTag(e){
                                            console.log("onAddTag: ", e.detail);
                                            console.log("original input value: ", inputElm.value)
                                            tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
                                        }

                                        function onRemoveTag(e){
                                            console.log("onRemoveTag:", e.detail, "tagify instance value:", tagify.value)
                                        }

                                        // on character(s) added/removed (user is typing/deleting)
                                        function onInput(e){
                                            console.log("onInput: ", e.detail);
                                            tagify.whitelist = null; // reset current whitelist
                                            tagify.loading(true) // show the loader animation

                                            // get new whitelist from a delayed mocked request (Promise)
                                            mockAjax()
                                                .then(function(result){
                                                    tagify.settings.whitelist = result.concat(tagify.value) // add already-existing tags to the new whitelist array

                                                    tagify
                                                        .loading(false)
                                                        // render the suggestions dropdown.
                                                        .dropdown.show(e.detail.value);
                                                })
                                                .catch(err => tagify.dropdown.hide())
                                        }

                                        function onTagEdit(e){
                                            console.log("onTagEdit: ", e.detail);
                                        }

                                        // invalid tag added callback
                                        function onInvalidTag(e){
                                            console.log("onInvalidTag: ", e.detail);
                                        }

                                        // invalid tag added callback
                                        function onTagClick(e){
                                            console.log(e.detail);
                                            console.log("onTagClick: ", e.detail);
                                        }

                                        function onTagifyFocusBlur(e){
                                            console.log(e.type, "event fired")
                                        }

                                        function onDropdownSelect(e){
                                            console.log("onDropdownSelect: ", e.detail)
                                        }
                                    </script>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->

                            </div>
                            <!-- End Row -->

                            <!-- Form -->
                            <div class="mb-4">

                                <label for="basicFormFile" class="js-file-attach form-label"
                                       data-hs-file-attach-options='{
          "textTarget": "[for=\"customFile\"]"
         }'></label>
                                <input class="form-control" name="video" type="file" id="basicFormFile">
                                <!-- End Avatar -->

                            </div>
                            <!-- End Form -->


                            <div class="input-group input-group-md-vertical">
                                <div class="form-check mb-3">
                                    <input type="checkbox" name="show_main" id="show_index" class="form-check-input">
                                    <label class="form-check-label" for="show_index">Показать на главной?</label>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="d-flex align-items-center mt-5">
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#createProjectStepTerms"
                            }'>
                                        Загрузить
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="createProjectStepTerms" style="display: none;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="paymentTermsNewProjectLabel" class="form-label">Terms</label>

                                        <!-- Select -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="paymentTermsNewProjectLabel"
                                                    data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                                                <option value="fixed" selected>Fixed</option>
                                                <option value="Per hour">Per hour</option>
                                                <option value="Per day">Per day</option>
                                                <option value="Per week">Per week</option>
                                                <option value="Per month">Per month</option>
                                                <option value="Per quarter">Per quarter</option>
                                                <option value="Per year">Per year</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-6">
                                    <label for="expectedValueNewProjectLabel" class="form-label">Expected value</label>

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend input-group-text">
                                                <i class="bi-currency-dollar"></i>
                                            </div>
                                            <input type="text" class="form-control" name="expectedValue"
                                                   id="expectedValueNewProjectLabel" placeholder="Enter value here"
                                                   aria-label="Enter value here">
                                        </div>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Form Row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="milestoneNewProjectLabel" class="form-label">Milestone <a
                                                class="small ms-1" href="javascript:;">Change probability</a></label>

                                        <!-- Select -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="milestoneNewProjectLabel"
                                                    data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                                                <option value="New">New</option>
                                                <option value="Qualified">Qualified</option>
                                                <option value="Meeting">Meeting</option>
                                                <option value="Proposal">Proposal</option>
                                                <option value="Negotiation">Negotiation</option>
                                                <option value="Contact">Contact</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->

                                <div class="col-lg-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="privacyNewProjectLabel" class="form-label me-2">Privacy</label>

                                        <!-- Select -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="privacyNewProjectLabel"
                                                    data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                                                <option value="privacy1"
                                                        data-option-template='<span class="d-flex"><i class="bi-people fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Everyone</span><small class="tom-select-custom-hide">Public to Front Dashboard</small></span></span>'>
                                                    Everyone
                                                </option>
                                                <option value="privacy2" disabled
                                                        data-option-template='<span class="d-flex"><i class="bi-lock fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Private to project members <span class="badge bg-soft-primary text-primary">Upgrade to Premium</span></span><small class="tom-select-custom-hide">Only visible to project members</small></span></span>'>
                                                    Private to project members
                                                </option>
                                                <option value="privacy3"
                                                        data-option-template='<span class="d-flex"><i class="bi-person fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Private to me</span><small class="tom-select-custom-hide">Only visible to you</small></span></span>'>
                                                    Private to me
                                                </option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Form Row -->

                            <div class="d-grid gap-2">
                                <!-- Check -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                           id="budgetNewProjectCheckbox">
                                    <label class="form-check-label" for="budgetNewProjectCheckbox">
                                        Budget resets every month
                                    </label>
                                </div>
                                <!-- End Check -->

                                <!-- Check -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                           id="emailAlertNewProjectCheckbox" checked>
                                    <label class="form-check-label" for="emailAlertNewProjectCheckbox">
                                        Send email alerts if project exceeds <span
                                            class="font-weight-bold">50.00%</span> of budget
                                    </label>
                                </div>
                                <!-- End Check -->
                            </div>

                            <!-- Footer -->
                            <div class="d-flex align-items-center mt-5">
                                <button type="button" class="btn btn-ghost-secondary me-2"
                                        data-hs-step-form-prev-options='{
                       "targetSelector": "#createProjectStepDetails"
                     }'>
                                    <i class="bi-chevron-left"></i> Previous step
                                </button>

                                <div class="ms-auto">
                                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#createProjectStepMembers"
                            }'>
                                        Next <i class="bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="createProjectStepMembers" style="display: none;">
                            <!-- Form -->
                            <div class="mb-4">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control" name="fullName"
                                           placeholder="Search name or emails" aria-label="Search name or emails">

                                    <div class="input-group-append input-group-append-last-sm-down-none">
                                        <!-- Select -->
                                        <div class="tom-select-custom tom-select-custom-end">
                                            <select
                                                class="js-select form-select tom-select-custom-form-select-invite-user"
                                                autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                                                <option value="guest" selected>Guest</option>
                                                <option value="can edit">Can edit</option>
                                                <option value="can comment">Can comment</option>
                                                <option value="full access">Full access</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->

                                        <a class="btn btn-primary d-none d-sm-inline-block"
                                           href="javascript:;">Invite</a>
                                    </div>
                                </div>

                                <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
                            </div>
                            <!-- End Form -->

                            <ul class="list-unstyled list-py-3 mb-5">
                                <!-- List Group Item -->
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                        <span class="icon icon-soft-dark icon-sm icon-circle">
                          <i class="bi-people-fill"></i>
                        </span>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <h5 class="text-body mb-0">#digitalmarketing</h5>
                                                    <span class="d-block fs-6">8 members</span>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-sm-auto">
                                                    <!-- Select -->
                                                    <div class="tom-select-custom tom-select-custom-sm-end">
                                                        <select
                                                            class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0"
                                                            autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                                            <option value="guest" selected>Guest</option>
                                                            <option value="can edit">Can edit</option>
                                                            <option value="can comment">Can comment</option>
                                                            <option value="full access">Full access</option>
                                                            <option value="remove"
                                                                    data-option-template='<div class="text-danger">Remove</div>'>
                                                                Remove
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- End Select -->
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </li>
                                <!-- End List Group Item -->

                                <!-- List Group Item -->
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar avatar-sm avatar-circle">
                                                <img class="avatar-img" src="/admin/assets/img/160x160/img3.jpg"
                                                     alt="Image Description">
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <h5 class="text-body mb-0">David Harrison</h5>
                                                    <span class="d-block fs-6">david@site.com</span>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-sm-auto">
                                                    <!-- Select -->
                                                    <div class="tom-select-custom tom-select-custom-sm-end">
                                                        <select
                                                            class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0"
                                                            autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                                            <option value="guest" selected>Guest</option>
                                                            <option value="can edit">Can edit</option>
                                                            <option value="can comment">Can comment</option>
                                                            <option value="full access">Full access</option>
                                                            <option value="remove"
                                                                    data-option-template='<div class="text-danger">Remove</div>'>
                                                                Remove
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- End Select -->
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </li>
                                <!-- End List Group Item -->

                                <!-- List Group Item -->
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar avatar-sm avatar-circle">
                                                <img class="avatar-img" src="/admin/assets/img/160x160/img9.jpg"
                                                     alt="Image Description">
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <h5 class="text-body mb-0">Ella Lauda <i
                                                            class="tio-verified text-primary" data-toggle="tooltip"
                                                            data-placement="top" title="Top endorsed"></i></h5>
                                                    <span class="d-block fs-6">Markvt@site.com</span>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-sm-auto">
                                                    <!-- Select -->
                                                    <div class="tom-select-custom tom-select-custom-sm-end">
                                                        <select
                                                            class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0"
                                                            autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                                            <option value="guest" selected>Guest</option>
                                                            <option value="can edit">Can edit</option>
                                                            <option value="can comment">Can comment</option>
                                                            <option value="full access">Full access</option>
                                                            <option value="remove"
                                                                    data-option-template='<div class="text-danger">Remove</div>'>
                                                                Remove
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- End Select -->
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </li>
                                <!-- End List Group Item -->

                                <!-- List Group Item -->
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                        <span class="icon icon-soft-dark icon-sm icon-circle">
                          <i class="bi-people-fill"></i>
                        </span>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <h5 class="text-body mb-0">#conference</h5>
                                                    <span class="d-block fs-6">3 members</span>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-sm-auto">
                                                    <!-- Select -->
                                                    <div class="tom-select-custom tom-select-custom-sm-end">
                                                        <select
                                                            class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0"
                                                            autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                                            <option value="guest" selected>Guest</option>
                                                            <option value="can edit">Can edit</option>
                                                            <option value="can comment">Can comment</option>
                                                            <option value="full access">Full access</option>
                                                            <option value="remove"
                                                                    data-option-template='<div class="text-danger">Remove</div>'>
                                                                Remove
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- End Select -->
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </li>
                                <!-- End List Group Item -->
                            </ul>

                            <div class="d-grid gap-3">
                                <!-- Form Switch -->
                                <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch1">
                    <span class="col-8 col-sm-9 ms-0">
                      <i class="bi-bell text-primary me-3"></i>
                      <span class="text-dark">Inform all project members</span>
                    </span>
                                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch1" checked>
                    </span>
                                </label>
                                <!-- End Form Switch -->

                                <!-- Form Switch -->
                                <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch2">
                    <span class="col-8 col-sm-9 ms-0">
                      <i class="bi-chat-left-dots text-primary me-3"></i>
                      <span class="text-dark">Show team activity</span>
                    </span>
                                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch2">
                    </span>
                                </label>
                                <!-- End Form Switch -->
                            </div>

                            <!-- Footer -->
                            <div class="d-sm-flex align-items-center mt-5">
                                <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                                        data-hs-step-form-prev-options='{
                       "targetSelector": "#createProjectStepTerms"
                     }'>
                                    <i class="bi-chevron-left"></i> Previous step
                                </button>

                                <div class="d-flex justify-content-end gap-3 ms-auto">
                                    <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel
                                    </button>
                                    <button id="createProjectFinishBtn" type="button" class="btn btn-primary">Create
                                        project
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                    <!-- End Content Step Form -->

                    <!-- Message Body -->
                    <div id="createProjectStepSuccessMessage" style="display:none;">
                        <div class="text-center">
                            <img class="img-fluid mb-3" src="/admin/assets/svg/illustrations/oc-hi-five.svg"
                                 alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                            <img class="img-fluid mb-3" src="/admin/assets/svg/illustrations-light/oc-hi-five.svg"
                                 alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

                            <div class="mb-4">
                                <h2>Successful!</h2>
                                <p>New project has been successfully created.</p>
                            </div>

                            <div class="d-flex justify-content-center gap-3">
                                <a class="btn btn-white" href="./projects.html">
                                    <i class="bi-chevron-left"></i> Back to projects
                                </a>

                                <a class="btn btn-primary" href="javascript:;" data-toggle="modal"
                                   data-target="#newProjectModal">
                                    <i class="bi-building"></i> Add new project
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Message Body -->
                </form>
                <!-- End Step Form -->
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Welcome Message Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/admin/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/admin/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
<script src="/admin/assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

<script src="/admin/assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
<script src="/admin/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

<!-- JS Front -->
<script src="/admin/assets/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    (function () {
        window.onload = function () {


            // INITIALIZATION OF NAVBAR VERTICAL ASIDE
            // =======================================================
            new HSSideNav('.js-navbar-vertical-aside').init()


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            new HSFormSearch('.js-form-search')


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF NAV SCROLLER
            // =======================================================
            new HsNavScroller('.js-nav-scroller')
            new HSFileAttach('.js-file-attach')

            HSCore.components.HSFlatpickr.init('.js-flatpickr')
            // INITIALIZATION OF STICKY BLOCKS
            // =======================================================

        }
    })()
</script>

<!-- Style Switcher JS -->

<script>
    (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
            $variants.forEach($item => {
                if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                    $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                    return $item.classList.add('active')
                }

                $item.classList.remove('active')
            })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
            $item.addEventListener('click', function () {
                HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
            })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
            setActiveStyle()
        })
    })()
</script>

<!-- End Style Switcher JS -->
</body>
</html>
