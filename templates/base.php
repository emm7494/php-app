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
    <header class="hbar-1 sgi-flex">
        <div class="view-dim">
        </div>
        1
    </header>
    <section class="hbar-2 sgi-flex">2</section>
    <nav class="hbar-3 sgi-flex">3</nav>
    <section class="sgi-grid hero-grid">
        <div class="hero-1">h1</div>
        <div class="hero-2">h2</div>
        <div class="hero-3">h3</div>
    </section>
    <main class="main-content sgi-grid">
        <?= $main_content ?>
    </main>
    <footer class="footer-content sgi-grid">
        Copyright &copy; <span class="this-year"></span>
    </footer>
    <script src="/static/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/static/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="module" src="/static/js/main.js"></script>
</body>

</html>