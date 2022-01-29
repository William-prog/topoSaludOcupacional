<div class="card-header header">
    <h2 style="text-align:center;"> <strong> Lugar y tiempo </strong> </h2>
</div>


<div class="headingcontainer">
    <div id="submit" class="heading3">
        <h3 id="colorLugar">Lugar</h3>
    </div>
</div>

<div class="divForm form-group">
    <div class="row mt-2">
        <div class="form-group col">
            <div class="col">
                <label for="form2LugarEvento">Lugar del evento: </label>
                <select name="form2LugarEvento" id="form2LugarEvento" class="form-control">
                    @isset ($registroAccidente->form2LugarEvento)
                    <option value="">Seleccione</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'Lugar habitual del trabajo' ? 'selected' : '' }} value="Lugar habitual del trabajo">Lugar habitual del trabajo</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'En viaje o traslado por motivo de trabajo' ? 'selected' : '' }} value="En viaje o traslado por motivo de trabajo">En viaje o traslado por motivo de trabajo</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'Otro lugar dentro del centro de trabajo' ? 'selected' : '' }} value="Otro lugar dentro del centro de trabajo">Otro lugar dentro del centro de trabajo</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'En trayecto del domicilio al trabajo' ? 'selected' : '' }} value="En trayecto del domicilio al trabajo">En trayecto del domicilio al trabajo</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'En trayecto del trabajo al domicilio' ? 'selected' : '' }} value="En trayecto del trabajo al domicilio">En trayecto del trabajo al domicilio</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'Otro' ? 'selected' : '' }} value="Otro">Otro</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
                    <option {{ $registroAccidente->form2LugarEvento == 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
                    @endisset
                </select>
            </div>
        </div>
    </div>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorFechaHora">Fecha y turno</h3>
    </div>
</div>

<div class="divForm form-group">
    <div class="row mt-2">
        <div class="form-group col">
            <div class="col">
                <label for="form2Fecha">Fecha en que ocurrió el evento: </label>
                <input name="form2Fecha" id="form2Fecha" class="form-control" type="date" value="{{isset($registroAccidente->form2Fecha)?$registroAccidente->form2Fecha:''}}">
            </div>
        </div>
        <div class="form-group col">
            <div class="col">
                <label for="form2Hora">Hora exacta en que ocurrió el evento: </label>
                <input name="form2Hora" id="form2Hora" class="form-control" type="time" value="{{isset($registroAccidente->form2Hora)?$registroAccidente->form2Hora:''}}">
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="form-group col">
            <div class="col">
                <label for="form2Turno">Turno durante el cual ocurrió el evento: </label>
                <select name="form2Turno" id="form2Turno" class="form-control">
                    @isset ($registroAccidente->form2Turno)
                    <option>Seleccionar..</option>
                    <option {{ $registroAccidente->form2Turno == 'Diurno' ? 'selected' : '' }} value="Diurno">Diurno</option>
                    <option {{ $registroAccidente->form2Turno == 'Nocturno' ? 'selected' : '' }} value="Nocturno">Nocturno</option>
                    <option {{ $registroAccidente->form2Turno == 'Mixto' ? 'selected' : '' }} value="Mixto">Mixto</option>
                    <option {{ $registroAccidente->form2Turno == 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
                    @endisset
                </select>
            </div>
        </div>
        <div class="form-group col">
            <div class="col">
                <label for="form2HorasTrabajo">Horas de trabajo antes del evento: </label>
                <input name="form2HorasTrabajo" id="form2HorasTrabajo" class="form-control" type="number" value="{{isset($registroAccidente->form2HorasTrabajo)?$registroAccidente->form2HorasTrabajo:''}}">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="form-group col">
            <div class="col">
                <label for="form2LugarAtencion">Lugar donde recibió atención médica el accidentado: </label>
                <textarea name="form2LugarAtencion" id="form2LugarAtencion" class="form-control" rows="3">
                    {{isset($registroAccidente->form2LugarAtencion)?$registroAccidente->form2LugarAtencion:''}}
                </textarea>
            </div>
        </div>
    </div>
</div>