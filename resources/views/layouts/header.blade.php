<!-- Navbar start -->
<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">Cook<span class="text-dark">folio</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="dishes" class="nav-item nav-link">Dishes/Recipes</a>
                    <a href="//" class="nav-item nav-link">Skill/Expertise</a>
                    <a href="//" class="nav-item nav-link">Gallery</a>
                    <a href="//" class="nav-item nav-link">Testimonials</a>
                    <a href="//" class="nav-item nav-link">Contact Us</a>
                </div>
                <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                <a href="" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<script>
    // Get current path
    const currentLocation = window.location.pathname;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
        const linkPath = new URL(link.href).pathname;
        if (currentLocation === linkPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
</script>