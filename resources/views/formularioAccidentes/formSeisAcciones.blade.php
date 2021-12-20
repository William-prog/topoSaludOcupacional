<div class="card-header header">
    <h2 style="text-align:center;"> <strong> Acciones Correctivas </strong> </h2>
</div>
<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorAccion">Acción</h3>
    </div>
</div>
<div class="form-group col">
    <div class="form-group">
        <label for="form6Ingenieria"> Acciones de ingeniería en el área de trabajo: </label>
        <textarea name="form6Ingenieria" id="form6Ingenieria" class="form-control" rows="3">
        {{isset($registroAccidente->form6Ingenieria)?$registroAccidente->form6Ingenieria:''}}
        </textarea>
    </div>
</div>
<div class="form-group col">
    <div class="form-group">
        <label for="form6Administrativa"> Acciones administrativas de mitigación de riesgos: </label>
        <textarea name="form6Administrativa" id="form6Administrativa" class="form-control" rows="3">
        {{isset($registroAccidente->form6Administrativa)?$registroAccidente->form6Administrativa:''}}
        </textarea>
    </div>
</div>
<div class="form-group col">
    <div class="form-group">
        <label for="form6Segumiento"> Acciones de Seguimiento integral de salud: </label>
        <textarea name="form6Segumiento" id="form6Segumiento" class="form-control" rows="3">
        {{isset($registroAccidente->form6Segumiento)?$registroAccidente->form6Segumiento:''}}
        </textarea>
    </div>
</div>
<div class="form-group col">
    <div class="form-group">
        <label for="form6Capacitacion"> Medidas de capacitación, formación e información para la mitigación del riesgo: </label>
        <textarea name="form6Capacitacion" id="form6Capacitacion" class="form-control" rows="3">
        {{isset($registroAccidente->form6Capacitacion)?$registroAccidente->form6Capacitacion:''}}
        </textarea>
    </div>
</div>