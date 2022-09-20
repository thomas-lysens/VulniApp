<header>
    <div class="navbar navbar-dark bg-primary">
        <div class="container">
            <div class="logo-section col">
                <a class="navbar-brand" href="./">VulniApp</a>
            </div>
	    <?php if ($user_logged_in) { ?>
	    <nav class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="/" class="nav-link" style="color: white;">Dashboard</a></li>
                    <li class="nav-item"><a href="/upload" class="nav-link" style="color: white;">Upload</a></li>
                    <li class="nav-item"><a href="/documents" class="nav-link" style="color: white;">Documents</a></li>
                </ul>
            </nav>
            <div class="login-section col" style="text-align: right;">
                <button type="button" class="btn btn-outline-light" onclick="window.location.pathname = '/logout';">Logout</button>
            </div>
	    <?php } else { ?>
            <nav class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="/" class="nav-link" style="color: white;">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link" style="color: white;">About</a></li>
                    <li class="nav-item"><a href="/pricing" class="nav-link" style="color: white;">Pricing</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link" style="color: white;">Contact</a></li>
                </ul>
            </nav>
            <div class="login-section col" style="text-align: right;">
                <button type="button" class="btn btn-outline-light" onclick="window.location.pathname = '/login';">Login</button>
                <button type="button" class="btn btn-outline-light" onclick="window.location.pathname = '/register';">Register</button>
            </div>
	    <?php } ?>
        </div>
    </div>
</header>
