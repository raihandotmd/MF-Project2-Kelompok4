<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container justify-content-sm-center fixed-top bg-white p-3">
            <a class="navbar-brand" href="{{ url('/frontend') }}">
                <span>
                    MoFlix
                </span>
            </a>

            <button class="navbar-toggler d-sm-block  d-md-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-lg-flex align-items-center ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/frontend#hero') }}" onclick="scrollToMiddle(event)">Home
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#about-us') }}" onclick="scrollToMiddle(event)">
                            About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#now-playing') }}" onclick="scrollToMiddle(event)"">
                            Now Playing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#men') }}" onclick="scrollToMiddle(event)"> Coming
                            Soon </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#promo') }}" onclick="scrollToMiddle(event)"> Promo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#team') }}" onclick="scrollToMiddle(event)">Team</a>
                    </li>
                    <li class="nav-item order-sm-first order-lg-last ml-lg-auto my-2">
                        <div class="user_option-box">
                            <a href="">
                                <i class="fa fa-user fa-lg" aria-hidden="true"></i>

                            </a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>


<script>
    function scrollToMiddle(event) {
        event.preventDefault();
        const target = document.querySelector(event.target.hash);
        const topOffset = target.offsetTop;
        const middleOffset = topOffset - (window.innerHeight / 2) + (target.offsetHeight / 2);
        window.scrollTo({
            top: middleOffset,
            behavior: 'smooth'
        });
    }
</script>
