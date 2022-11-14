
  <div class="container-profil" id="container-profil">

    @include('components.buttonClose')
    
      <div class="photo"> 
        <div class="Ste_div">
          <img src="{{ $user->avatar }}" alt="photo de profil">
        </div>
      </div>
  
      <div class="profil">
          <h1>
            {{$user->name}}
          </h1>
  
      </div>
  
    <div id="info">
      <div class="mail_phone_adress">
        <p class="mail">{{$user->email}}</p>
        <p class="phone">{{$user->phone_number}}</p>
        <p class="adress">{{$user->address}}</p>
      </div>

      <div class="bio">
        <span class="bio">{{$user->bio}}</span>
      </div>
      
    </div> 
    <button class="btn_profil">valider</button>
  </div> 