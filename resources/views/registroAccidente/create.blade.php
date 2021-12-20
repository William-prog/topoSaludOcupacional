<form action="{{ url('/registroAccidente') }}" method="post">
    @csrf
    @include('registroAccidente.form', ['modo'=>'Registrar']);
</form>