<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach(TEMPLATEINFOJSON as $item){
                    echo '<li class="nav-item">
                    <a class="nav-link'.(($activeSite === $item['controllerName'])?' active':'') . '" href="' . $item['href'] . '">' . $item['button'] . '</a>
                    </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<body>