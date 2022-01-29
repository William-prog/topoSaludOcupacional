<form action="{{ url('/registroAccidente/'.$registroAccidente->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroAccidente.formEdit', ['modo'=>'Guardar cambios']);
</form>