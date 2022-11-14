{{-- icon close --}}


<script>
    // function closeDetails(){
    //     const state = {id: ""};
    //     const title = "dashboard";
    //     const url = "/dashboard";
    //     history.pushState(state, title, url);


    //    const main = document.querySelector('.main_dashboard');
    //     const items = document.querySelectorAll('.container_itm');
    //     const details = document.querySelector(".main_details")

    //     main.style.overflow = "auto";
        
    //     details.removeAttribute("id", "hidden")
    //     items.forEach(element => element.removeAttribute("id", "visible"));
    // }

    function closeProfil(){


       const main = document.querySelector('.main_dashboard');
        const items = document.querySelectorAll('.container_itm');
        const profil = document.getElementById("container-profil")
        const iconProfil = document.querySelector(".fa-user");
        
        main.style.overflow = "auto";
        
        profil.style.visibility = "hidden";
        profil.style.opacity = "0";
        items.forEach(element => element.removeAttribute("id", "visible"));
        iconProfil.classList.remove("active");
    }
</script>

<i class="fas fa-times icon_close" onclick=" closeProfil()"></i>
{{-- end icon close --}}



{{-- details --}}
