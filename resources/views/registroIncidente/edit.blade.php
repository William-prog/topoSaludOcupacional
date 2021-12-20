<form action="{{ url('/registroIncidente/'.$registroIncidente->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroIncidente.form', ['modo'=>'Guardar cambios']);
</form>