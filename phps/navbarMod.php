<nav class="navbar navbar-dark bg-dark navbar-default navbar-static-top navbar-expand-md mb-3 ">
    <div class="container-fluid ">
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse " id="navbartop">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a class="nav-link " href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="showimg.php">Categories </a></li>
                <!--@if($_SESSION['tipus']=="A")
                    @if($_SESSION['tipus'] == "A" || $_SESSION['tipus'] == "M") -->
                    <li class="nav-item"><a class="nav-link active" href="showimg.php">Administrar Posts </a></li>
                    <!-- @endif -->
                    <li class="nav-item"><a class="nav-link " href="showimg.php">Administrar Usuaris </a></li>
                <!-- @endif -->
            </ul>
            <!-- @if(isset($_SESSION['tipus'])) -->
                <a class="nav-link link-light" href="logout.php">Sortir</a>
            <!-- @else -->
                <a class="nav-link link-light" href="login.php">Login</a>
            <!-- @endif -->

        </div>
    </div> 
</nav>