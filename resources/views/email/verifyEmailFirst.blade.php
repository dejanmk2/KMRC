<style>
body {
background-image:url('{{ asset('images/pozadina2.png') }}');
background-size: cover;
background-attachment: fixed;
}
.panel-heading {
  font-size: 22px;
}
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Линк за потврду регистрације је управо послат на Вашу
                е-mail адресу! </div>

            </div>
        </div>
    </div>
</div>
@endsection
