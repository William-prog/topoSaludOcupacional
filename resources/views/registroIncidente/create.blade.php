<form action="{{ url('/registroIncidente') }}" method="post">
    @csrf
    @include('registroIncidente.form', ['modo'=>'Registrar']);
</form>