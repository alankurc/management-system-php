<header class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-brand_bg-color">
            <div class="container">
                <a class="navbar-brand" href="home.php"><img src="img/logo-64.png" alt="BRAND NAME" title="BRAND NAME" class="img-fluid w-120"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">Users</a>
                        </li>
                    </ul>
                    <article class="mb-3 mb-md-0 mx-md-5">
                        <div id="export-menu">
                            <p class="mb-0" id="export-to-excel"><a href="#" class="navbar-brand_btn-color"><i class="fa-solid fa-file-excel pe-2"></i> Export to excel</a></p>
                        </div>
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="export-form">
                            <input type="hidden" value='' id='hidden-type' name='ExportType'/>
                        </form>
                    </article>
                    <article class="dropdown mb-3 mb-md-0">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-circle-user fa-2x"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="do-logout.php">Logout</a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </nav>
    </div>
</header>