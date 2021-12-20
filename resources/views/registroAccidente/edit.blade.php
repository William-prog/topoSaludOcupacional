<form action="{{ url('/registroAccidente/'.$registroAccidente->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroAccidente.form', ['modo'=>'Guardar cambios']);
</form>