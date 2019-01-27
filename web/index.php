<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website for SEO testing purposes. Check our github page and feel free to pull request your tests.">
    <title>OpenSeoTest.org - public website for SEO tests</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/res/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top m-b-20">
    <a class="navbar-brand" href="/">OpenSeoTest.org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/sergebezborodov/openseotest.org" target="_blank">Our GitHub</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logs/google.log" target="_blank">Google Access Log</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logs/yandex.log" target="_blank">Yandex Access Log</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <h2>How it works?</h2>
    <p>
        There are pages for testing different hypothesis. 
        What has more priority - canonical or meta noindex tag? Does Google really respect a rel=nofollow? 
        <br>
        Result checks manually by Google indexation and/or log files.
        Final experiment result finalize by creating wiki page at project's github.
    </p>
    <br><br>
    <div class="row">
        <div class="col-md-6">
            <h3>General Technical Tests</h3>
            <ul>
                <li>
                    <a href="/techical/gt1/index.html">#GT1: Does Google/Yandex follow links at pages with meta=noindex, nofollow</a>
                </li>
                <li>
                    <a href="/techical/gt2/index.html">#GT2: Does Google/Yandex follow links at pages with meta=noindex, follow</a>
                </li>
                <li>
                    <a href="/techical/gt3/index.html">#GT3: Does Google/Yandex follow links at pages with meta=noindex</a>
                </li>
                <li>
                    <a href="/techical/gt4/index.php">#GT4: Does Google/Yandex follow links at pages with XRobots header with noindex, follow</a>
                </li>
                <li>
                    <a href="/techical/gt5/index.php">#GT5: Does Google/Yandex follow links at pages with XRobots header with noindex</a>
                </li>
                <li>
                    <a href="/techical/gt6/index.html">#GT6: Does Google/Yandex follow links in images</a>
                </li>
            </ul>
            <br><br>
        </div>
        <div class="col-md-6">
            <h3>Yandex Technical Tests</h3>
            <ul>
                <li>
                    TODO
                </li>
            </ul>
        </div>
    </div>

    <h3>General Javascript Tests</h3>
    <ul>
        <li>
            <a href="/js/j1/index.html">J1#: Put links to page after different timeouts</a>
        </li>
    </ul>
</main><!-- /.container -->

<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            &copy; 2019 OpenSeoTest.org
        </div>
    </div>
</section>
</html>
