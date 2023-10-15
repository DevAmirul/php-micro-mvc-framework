<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Micro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <?php if (auth()->check()): ?>
                    <li class="nav-item">
                        <form action="/logout" method="POST">

                            <?= setMethod('delete') ?>
                            <?= setCsrf() ?>

                            <button class="btn btn-danger mt-1">Logout</button>
                        </form>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif?>

            </ul>

            </div>
        </div>
        </nav>
</header>