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
    <section class="hbar-2 sgi-margin sgi-flex">2</section>

    <nav class="hbar-3 sgi-flex sgi-margin">3</nav>

    <section class="hero-grid sgi-margin">
        <div class="hero-1 hgi-scaler">h1</div>
        <div class="hero-2 hgi-scaler">h2</div>
        <div class="hero-3 hgi-scaler">h3</div>
    </section>
    <section class="icon-grid sgi-margin">
        <div class="icon-1 igi-scaler">
            <div class="icon-i">1</div>
        </div>
        <div class="icon-2 igi-scaler">
            <div class="icon-i">2</div>
        </div>
        <div class="icon-3 igi-scaler">
            <div class="icon-i">3</div>
        </div>
        <div class="icon-4 igi-scaler">
            <div class="icon-i">4</div>
        </div>
        <div class="icon-5 igi-scaler">
            <div class="icon-i">5</div>
        </div>
        <div class="icon-6 igi-scaler">
            <div class="icon-i">6</div>
        </div>
        <div class="icon-7 igi-scaler">
            <div class="icon-i">7</div>
        </div>
    </section>
    <main class="main-content sgi-margin">
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