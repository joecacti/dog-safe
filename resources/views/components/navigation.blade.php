<!-- Large Size Menu Display -->
<div class="nav-container fixed-top large-menu-section d-none d-lg-block">
    <div class="container">
        <b-navbar toggleable="md" class="main-nav" type="light" variant="dslight">

            <b-navbar-brand href="/">
                <img src="/images/dogsafe-color.svg" alt="Dog Safe">
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse" class="d-flex justify-content-end">

                <b-navbar-nav>
                    <b-nav-item href="about">About</b-nav-item>
                    <b-nav-item href="what-we-do">What we do</b-nav-item>
                    <b-nav-item href="{{ url('/#contact-form') }}">Contact</b-nav-item>
                </b-navbar-nav>
                <b-nav-form><a href="tel:6143609400" class="btn btn-success">Call 614-360-9400</a></b-nav-form>
            </b-collapse>
        </b-navbar>
    </div>
</div>

<!-- Large Size Menu Display -->
<div class="nav-container fixed-top large-menu-section d-lg-none">
    <div class="container">
        <b-navbar toggleable="md" class="main-nav" type="light" variant="dslight">

            <b-navbar-brand href="/">
                <img src="/images/dogsafe-color.svg" alt="Dog Safe">
            </b-navbar-brand>

            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

            <b-collapse is-nav id="nav_collapse">

                <b-navbar-nav>
                    <b-nav-item href="about">About</b-nav-item>
                    <b-nav-item href="what-we-do">What we do</b-nav-item>
                    <b-nav-item href="{{ url('/#contact-form') }}">Contact</b-nav-item>
                    <b-nav-item href="blog">Blog</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
            
        </b-navbar>
        <div class="text-center call-button">
            <a href="tel:6143609400" class="btn btn-success">Call 614-360-9400</a>
        </div>  
    </div>
</div>