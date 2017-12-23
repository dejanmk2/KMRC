<style>
  body {
    background-image:url('{{ asset('images/pozadina2.png') }}');
    background-size: cover;
    background-attachment: fixed;
    color:white;
  }
  .dugme {
    background-color:lightblue;
    color:white;
    border:2px solid black;
    border-radius:5px;
    padding:8px;
  }

  .dugme:hover {
    color:black;
  }

  .prikaz {
    text-align: center;
  }
</style>
<div class="prikaz">
Поштовани,<br><br>
за потврду регистрације на квиз Квиско молимо Вас кликните на дугме "Потврди регистрацију".<br><br>
<a href="{{route('sendEmailDone',["email" => $user->email,"verifyToken"=>$user->verifyToken])}}">
<button class="dugme">Потврди регистрацију</button>
</a>
</div>
