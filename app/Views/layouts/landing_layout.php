<!doctype html>
<html lang="en">

<head>
    <title>
        <?= $title ?? "PPDB" ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/img/icons/icon-48x48.png" alt="logo" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-lg-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Diagnosa</a>
                        </li>
                    </ul>
                    <div class="position-relative">
                        <?php if (session()->get('isLoggedIn')): ?>
                            <?php switch (session()->get('user_role')) {
                                case 'admin':
                                    echo '<a href="/admin/dashboard" class="btn btn-outline-primary">Dashboard</a>';
                                    break;
                                case 'user':
                                    echo '<a href="/user/dashboard" class="btn btn-outline-primary">Dashboard</a>';
                                    break;

                                default:
                                    break;
                            } ?>
                        <?php else: ?>
                            <a href="/login" class="btn btn-outline-success">Masuk</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <?= $this->renderSection('content') ?>
        </main>
        <footer>
            <div class="background-wrapper">
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <div class="bg"></div>
            </div>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-6 position-relative">
                        <span class="h5">&copy;<?= date('Y') ?> PPDB</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/js/app.js"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        var previousScroll = 70;
        window.addEventListener("scroll", () => {
            var scroll = document.querySelector('html').scrollTop
            if (scroll < previousScroll || scroll >= previousScroll) {
                document.querySelector('nav').classList.add("scrolled");
            }

            if (scroll == 0) {
                document.querySelector('nav').classList.remove("scrolled");
            }
            previousScroll = scroll;
        })

        document.querySelector("#navbarSupportedContent").addEventListener("show.bs.collapse", () => {
            document.querySelector('nav').classList.add("scrolled");
        })
        document.querySelector("#navbarSupportedContent").addEventListener("hide.bs.collapse", () => {
            var scroll = document.querySelector('html').scrollTop

            if (scroll == 0) {
                document.querySelector('nav').classList.remove("scrolled");
            }
        })
    </script>
</body>

</html>