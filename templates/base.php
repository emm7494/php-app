<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <title><?= $title ?></title>
</head>

<body class="wrapper">
    <header class="hbar-1 sgi-padding sgi-flex">
        <span>1&nbsp;</span>
        <div class="view-dim">
        </div>
    </header>
    <section class="hbar-2 sgi-padding sgi-flex">2</section>

    <nav class="hbar-3 sgi-flex sgi-margin">3</nav>

    <section class="hero-grid sgi-padding">
        <div class="hero-1 hgi-scaler">h1</div>
        <div class="hero-2 hgi-scaler">h2</div>
        <div class="hero-3 hgi-scaler">h3</div>
    </section>
    <main class="main-content sgi-padding">
        <?= $main_content ?>
    </main>
    <section class="footer-2 sgi-padding">
        footer-1
    </section>
    <footer class="footer-1 sgi-padding">
        Copyright &copy; <span class="this-year"></span>
    </footer>
    <script src="/static/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/static/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="module" src="/static/js/main.js"></script>
</body>

</html>