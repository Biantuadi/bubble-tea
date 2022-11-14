<div class="main_details">
    @include('components.buttonClose')


    


    


    <img src="/img/1.webp" alt="" width="40em">

    {{-- <h2 class="name">{{$item->name}}</h2> --}}

        <script>
            const out = document.getElementById("output");

            function hello(e){
                document.getElementById("valBox").innerHTML=""+e;
            }
         </script>

    <div class="bottom_flex">

        <div class="supplements">
            <p>supplements</p>
        <div class="check">
            <span>make</span>
        <input type="checkbox" >
        <br>
        <span>lilelo</span>
        <input type="checkbox" >
        <br>
        <span>btue</span>
        <input type="checkbox" >
        </div>
        </div>
        
        <div class="sucre_prix">
    
            <p>Sucre</p>
            {{-- <br> --}}
            <form method="post" action="#" oninput="result.value=Range.value" class="form_qt">
                <input id="output" type="range" step="0.01" name="Range" value="" min="0" max="5" onchange="hello(this.value)" onkeyup="hello(this.value)" >
    
                <output for="out" name="result" style="display:none"></output>
                <br>
                <span id="valBox">2.50</span>
            </form>
    
            <h3 class="prix">Prix : 4€</h3>
        </div>

    </div>

    <button class="ajout_panier">Ajouter</button>
</div>