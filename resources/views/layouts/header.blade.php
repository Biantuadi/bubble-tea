@if (Request::path() == '/')
    <header class="welcome">
        <div class="logo">
            <img src={{ asset('img/logo.png') }} alt="logo">
        </div>
    
        <h1>BubbleMyTea</h1>
    </header>

    {{-- ----------------------------------------- --}}

@else

    <header class="dashboard">
        <h1>Bubble<img src={{ asset('img/logo.png') }} alt="logo">MyTea</h1>
        <nav>
            <ul>
                <script>
                    function profil() {
                        
                        const main = document.querySelector('.main_dashboard');
                        const items = document.querySelectorAll('.container_itm');
                        const profil = document.getElementById("container-profil")
                        
                        const iconProfil = document.querySelector(".fa-user");
                        iconProfil.classList.add("active");

                        // CREER UNE CONDITION AU TOGGLE DU ICON PROFIL

                            main.style.overflow = "hidden";
                            profil.style.visibility = "visible";
                            profil.style.opacity = "1";
                            items.forEach(element => element.setAttribute("id", "blur"));
                    }
                </script>
                <li><i class="fas fa-user" onclick="profil()"></i></li>
                <li><i class="fas fa-shopping-cart"></i></li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" ><i class="fas fa-sign-out-alt"></i></button>
                    </form>
                </li>
                {{-- <li><i class="fas fa-sign-out-alt"></i></li> --}}
            </ul>
        </nav>

    </header>
@endif



