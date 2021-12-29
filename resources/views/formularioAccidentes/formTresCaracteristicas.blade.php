<div class="card-header header">
    <h2 style="text-align:center;"> <strong> Características </strong> </h2>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorCaracteristicas">Características</h3>
    </div>
</div>


<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form3TipoRiesgo">Tipo de riesgo: </label>
            <select name="form3TipoRiesgo" id="form3TipoRiesgo" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Accidente de trabajo' ? 'selected' : '' }} value="Accidente de trabajo">Accidente de trabajo </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Accidente de trayecto' ? 'selected' : '' }} value="Accidente de trayecto">Accidente de trayecto </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Enfermedad de trabajo' ? 'selected' : '' }} value="Enfermedad de trabajo">Enfermedad de trabajo </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a instalaciones' ? 'selected' : '' }} value="Daño a instalaciones">Daño a instalaciones</option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a infraestructura electrica' ? 'selected' : '' }} value="Daño a infraestructura electrica">Daño a infraestrura electrica</option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a infraestructura electronica' ? 'selected' : '' }} value="Daño a infraestructura electronica">Daño a infraestrura electrica</option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a infraestructura  de servicio de agua' ? 'selected' : '' }} value="Daño a infraestructura  de servicio de agua">Daño a infraestructura de servicio de agua </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a infraestructura de aire' ? 'selected' : '' }} value="Daño a infraestructura de aire">Daño a infraestructura de aire </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a infraestructura de ventilacion' ? 'selected' : '' }} value="Daño a infraestructura de ventilacion">Daño a infraestructura de ventilacion </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a Maquinaria' ? 'selected' : '' }} value="Daño a Maquinaria">Daño a Maquinaria </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a Equipo' ? 'selected' : '' }} value="Daño a Equipo">Daño a Equipo </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a Herramienta' ? 'selected' : '' }} value="Daño a Herramienta">Daño a Herramienta </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a materials de Produccion' ? 'selected' : '' }} value="Daño a materials de Produccion">Daño a materiales de produccion </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Daño a materiales de oficina' ? 'selected' : '' }} value="Daño a materiales de oficina">Daño a materiales de oficina </option>
                <option {{ isset($registroAccidente->form3TipoRiesgo) === 'Robo' ? 'selected' : '' }} value="Robo">Robo </option>
            </select>
        </div>
    </div>
    <div class="form-group col">
        <div class="form-group">
            <label for="form3ActoInseguro">Acto inseguro: </label>
            <select name="form3ActoInseguro" id="form3ActoInseguro" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Exposición innecesaria a materiales o equipo en movimiento' ? 'selected' : '' }} value="Exposición innecesaria a materiales o equipo en movimiento">Exposición innecesaria a materiales o equipo en movimiento</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Exposición innecesaria bajo cargas suspendidas, fijas o en movimiento' ? 'selected' : '' }} value="Exposición innecesaria bajo cargas suspendidas, fijas o en movimiento">Exposición innecesaria bajo cargas suspendidas, fijas o en movimiento</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Penetrar a tanques, depósitos u otros espacios cerrados sin autorización' ? 'selected' : '' }} value="Penetrar a tanques, depósitos u otros espacios cerrados sin autorización">Penetrar a tanques, depósitos u otros espacios cerrados sin autorización</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Adoptar posiciones peligrosas para levantar, sostener, mover, etc.' ? 'selected' : '' }} value="Adoptar posiciones peligrosas para levantar, sostener, mover, etc.">Adoptar posiciones peligrosas para levantar, sostener, mover, etc.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Viajar en posición peligrosa' ? 'selected' : '' }} value="Viajar en posición peligrosa">Viajar en posición peligrosa</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Adoptar posiciones o actitudes peligrosas, sce' ? 'selected' : '' }} value="Adoptar posiciones o actitudes peligrosas, sce">Adoptar posiciones o actitudes peligrosas, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Colocar en forma insegura vehículos o equipo de transporte de materiales' ? 'selected' : '' }} value="Colocar en forma insegura vehículos o equipo de transporte de materiales">Colocar en forma insegura vehículos o equipo de transporte de materiales</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Colocar en forma insegura materiales, herramientas, desperdicios, etc.' ? 'selected' : '' }} value="Colocar en forma insegura materiales, herramientas, desperdicios, etc.">Colocar en forma insegura materiales, herramientas, desperdicios, etc.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Colocar, mezclar, combinar, etc., en forma insegura, sce' ? 'selected' : '' }} value="Colocar, mezclar, combinar, etc., en forma insegura, sce">Colocar, mezclar, combinar, etc., en forma insegura, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En andamios' ? 'selected' : '' }} value="En andamios">En andamios</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En escaleras.' ? 'selected' : '' }} value="En escaleras.">En escaleras.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En espacios reducidos' ? 'selected' : '' }} value="En espacios reducidos">En espacios reducidos</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En la vía publica' ? 'selected' : '' }} value="En la vía publica">En la vía publica</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En pisos' ? 'selected' : '' }} value="En pisos">En pisos</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'En superficies resbalosas' ? 'selected' : '' }} value="En superficies resbalosas">En superficies resbalosas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Falta de atención a la base de sustentación o sus alrededores, sce' ? 'selected' : '' }} value="Falta de atención a la base de sustentación o sus alrededores, sce">Falta de atención a la base de sustentación o sus alrededores, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Arrancar o detener vehículos o equipo de la planta sin tomar las debidas precauciones' ? 'selected' : '' }} value="Arrancar o detener vehículos o equipo de la planta sin tomar las debidas precauciones">Arrancar o detener vehículos o equipo de la planta sin tomar las debidas precauciones</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Falla para impedir la utilización de equipo en mal estado o fuera de uso' ? 'selected' : '' }} value="Falla para impedir la utilización de equipo en mal estado o fuera de uso">Falla para impedir la utilización de equipo en mal estado o fuera de uso</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'No cerrar con llave, acuñar o asegurar contra movimientos inesperados, flujo de corriente eléctrica, vapor, etc. ' ? 'selected' : '' }} value="No cerrar con llave, acuñar o asegurar contra movimientos inesperados, flujo de corriente eléctrica, vapor, etc. ">No cerrar con llave, acuñar o asegurar contra movimientos inesperados, flujo de corriente eléctrica, vapor, etc. </option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Omitir la colocación de avisos, señales, marcas, etc., preventivas' ? 'selected' : '' }} value="Omitir la colocación de avisos, señales, marcas, etc., preventivas">Omitir la colocación de avisos, señales, marcas, etc., preventivas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Soltar, mover cargas, etc., sin dar aviso adecuado' ? 'selected' : '' }} value="Soltar, mover cargas, etc., sin dar aviso adecuado">Soltar, mover cargas, etc., sin dar aviso adecuado</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Falla al asegurar o prevenir, sce' ? 'selected' : '' }} value="Falla al asegurar o prevenir, sce">Falla al asegurar o prevenir, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Bloquear, taponar, etc., los dispositivos de seguridad' ? 'selected' : '' }} value="Bloquear, taponar, etc., los dispositivos de seguridad">Bloquear, taponar, etc., los dispositivos de seguridad</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Desconectar o quitar dispositivos de seguridad' ? 'selected' : '' }} value="Desconectar o quitar dispositivos de seguridad">Desconectar o quitar dispositivos de seguridad</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Mal ajustar los dispositivos de seguridad' ? 'selected' : '' }} value="Mal ajustar los dispositivos de seguridad">Mal ajustar los dispositivos de seguridad</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Reemplazar dispositivos de seguridad con otros de capacidad no adecuada' ? 'selected' : '' }} value="Reemplazar dispositivos de seguridad con otros de capacidad no adecuada">Reemplazar dispositivos de seguridad con otros de capacidad no adecuada</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Hacer inoperantes los dispositivos de seguridad, sce' ? 'selected' : '' }} value="Hacer inoperantes los dispositivos de seguridad, sce">Hacer inoperantes los dispositivos de seguridad, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Calafatear, empacar, etc., equipo bajo presión ' ? 'selected' : '' }} value="Calafatear, empacar, etc., equipo bajo presión ">Calafatear, empacar, etc., equipo bajo presión </option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Limpiar, engrasar, ajustar, etc., equipo en movimiento' ? 'selected' : '' }} value="Limpiar, engrasar, ajustar, etc., equipo en movimiento">Limpiar, engrasar, ajustar, etc., equipo en movimiento</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Trabajar con equipo eléctricamente cargado' ? 'selected' : '' }} value="Trabajar con equipo eléctricamente cargado">Trabajar con equipo eléctricamente cargado</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Limpiar, engrasar, ajustar o reparar equipo en movimiento con carga eléctrica o presurizado, sce' ? 'selected' : '' }} value="Limpiar, engrasar, ajustar o reparar equipo en movimiento con carga eléctrica o presurizado, sce">Limpiar, engrasar, ajustar o reparar equipo en movimiento con carga eléctrica o presurizado, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Casco' ? 'selected' : '' }} value="Casco">Casco</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Cinturón de seguridad' ? 'selected' : '' }} value="Cinturón de seguridad">Cinturón de seguridad</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Delantal' ? 'selected' : '' }} value="Delantal">Delantal</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Gafas' ? 'selected' : '' }} value="Gafas">Gafas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Guantes' ? 'selected' : '' }} value="Guantes">Guantes</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Mascarilla' ? 'selected' : '' }} value="Mascarilla">Mascarilla</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'No usar el equipo de protección personal disponible, sce' ? 'selected' : '' }} value="No usar el equipo de protección personal disponible, sce">No usar el equipo de protección personal disponible, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Anillos' ? 'selected' : '' }} value="Anillos">Anillos</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Cabello suelto' ? 'selected' : '' }} value="Cabello suelto">Cabello suelto</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Cadenas' ? 'selected' : '' }} value="Cadenas">Cadenas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Collares' ? 'selected' : '' }} value="Collares">Collares</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Mangas largas' ? 'selected' : '' }} value="Mangas largas">Mangas largas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Mascadas' ? 'selected' : '' }} value="Mascadas">Mascadas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Tacones muy altos' ? 'selected' : '' }} value="Tacones muy altos">Tacones muy altos</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Usar accesorios de indumentaria personal inseguros, sce' ? 'selected' : '' }} value="Usar accesorios de indumentaria personal inseguros, sce">Usar accesorios de indumentaria personal inseguros, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Alimentar o abastecer con demasiada rapidez' ? 'selected' : '' }} value="Alimentar o abastecer con demasiada rapidez">Alimentar o abastecer con demasiada rapidez</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Arrojar el material en lugar de llevarlo o pasarlo' ? 'selected' : '' }} value="Arrojar el material en lugar de llevarlo o pasarlo">Arrojar el material en lugar de llevarlo o pasarlo</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Correr' ? 'selected' : '' }} value="Correr">Correr</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Operar los vehículos de la planta a velocidad insegura' ? 'selected' : '' }} value="Operar los vehículos de la planta a velocidad insegura">Operar los vehículos de la planta a velocidad insegura</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Saltar de alturas' ? 'selected' : '' }} value="Saltar de alturas">Saltar de alturas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Operaro trabajar a velocidad insegura, sce' ? 'selected' : '' }} value="Operar  o trabajar a velocidad insegura, sce">Operar o trabajar a velocidad insegura, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Abusar' ? 'selected' : '' }} value="Abusar">Abusar</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Asustar' ? 'selected' : '' }} value="Asustar">Asustar</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Distraer' ? 'selected' : '' }} value="Distraer">Distraer</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Molestar' ? 'selected' : '' }} value="Molestar">Molestar</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Payasear' ? 'selected' : '' }} value="Payasear">Payasear</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Comportamiento inapropiado en el trabajo, sce' ? 'selected' : '' }} value="Comportamiento inapropiado en el trabajo, sce">Comportamiento inapropiado en el trabajo, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Uso de material o equipo en forma para lo que no fue proyectado ' ? 'selected' : '' }} value="Uso de material o equipo en forma para lo que no fue proyectado ">Uso de material o equipo en forma para lo que no fue proyectado </option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Sobrecargar' ? 'selected' : '' }} value="Sobrecargar">Sobrecargar</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Uso inapropiado del equipo, sce' ? 'selected' : '' }} value="Uso inapropiado del equipo, sce">Uso inapropiado del equipo, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Tomar mal los objetos' ? 'selected' : '' }} value="Tomar mal los objetos">Tomar mal los objetos</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Sujetar los objetos en forma insegura' ? 'selected' : '' }} value="Sujetar los objetos en forma insegura">Sujetar los objetos en forma insegura</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Usar las manos en lugar de herramientas' ? 'selected' : '' }} value="Usar las manos en lugar de herramientas">Usar las manos en lugar de herramientas</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Uso inapropiado de las manos o de otras partes del cuerpo, sce' ? 'selected' : '' }} value="Uso inapropiado de las manos o de otras partes del cuerpo, sce">Uso inapropiado de las manos o de otras partes del cuerpo, sce</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Uso de equipo inseguro.' ? 'selected' : '' }} value="Uso de equipo inseguro.">Uso de equipo inseguro.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Falla o acto inseguro de terceros.' ? 'selected' : '' }} value="Falla o acto inseguro de terceros.">Falla o acto inseguro de terceros.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Sin clasificar por datos insuficientes.' ? 'selected' : '' }} value="Sin clasificar por datos insuficientes.">Sin clasificar por datos insuficientes.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Acto inseguro, s.c.e.' ? 'selected' : '' }} value="Acto inseguro, s.c.e.">Acto inseguro, s.c.e.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'Sin acto inseguro.' ? 'selected' : '' }} value="Sin acto inseguro.">Sin acto inseguro.</option>
                <option {{ isset($registroAccidente->form3ActoInseguro) === 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
            </select>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form3DescribaCausa">Describa la causa: </label>
            <textarea class="form-control" name="form3DescribaCausa" id="form3DescribaCausa" rows="2">
            {{isset($registroAccidente->form3DescribaCausa)?$registroAccidente->form3DescribaCausa:''}}
            </textarea>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form3CondicionesInseguras">Condiciones inseguras: </label>
            <select name="form3CondicionesInseguras" id="form3CondicionesInseguras" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Aspero, anfractuoso, etc' ? 'selected' : '' }} value="Aspero, anfractuoso, etc">Aspero, anfractuoso, etc</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Compuesto de materiales inapropiados' ? 'selected' : '' }} value="Compuesto de materiales inapropiados">Compuesto de materiales inapropiados</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Cortante, filoso' ? 'selected' : '' }} value="Cortante, filoso">Cortante, filoso</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Descompuesto' ? 'selected' : '' }} value="Descompuesto">Descompuesto</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Gastado, rajado, raido, roto, etc' ? 'selected' : '' }} value="Gastado, rajado, raido, roto, etc">Gastado, rajado, raido, roto, etc</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Impropiamente compuesto, construido o ensamblado' ? 'selected' : '' }} value="Impropiamente compuesto, construido o ensamblado">Impropiamente compuesto, construido o ensamblado</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Impropiamente diseñado' ? 'selected' : '' }} value="Impropiamente diseñado">Impropiamente diseñado</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Resbaloso' ? 'selected' : '' }} value="Resbaloso">Resbaloso</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Romo' ? 'selected' : '' }} value="Romo">Romo</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Otros defectos, s.c.e' ? 'selected' : '' }} value="Otros defectos, s.c.e">Otros defectos, s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Falta de equipo necesario de proteccion personal' ? 'selected' : '' }} value="Falta de equipo necesario de proteccion personal">Falta de equipo necesario de proteccion personal</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Falta de ropa adecuada' ? 'selected' : '' }} value="Falta de ropa adecuada">Falta de ropa adecuada</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Peligros de indumentaria o vestido s.c.e' ? 'selected' : '' }} value="Peligros de indumentaria o vestido s.c.e">Peligros de indumentaria o vestido s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Amplitud inadecuada para el movimiento de objetos o personas' ? 'selected' : '' }} value="Amplitud inadecuada para el movimiento de objetos o personas">Amplitud inadecuada para el movimiento de objetos o personas</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Control inadecuado del transito en areas de trabajo' ? 'selected' : '' }} value="Control inadecuado del transito en areas de trabajo">Control inadecuado del transito en areas de trabajo</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Espacio de trabajo insuficiente' ? 'selected' : '' }} value="Espacio de trabajo insuficiente">Espacio de trabajo insuficiente</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Iluminacion inapropiada' ? 'selected' : '' }} value="Iluminacion inapropiada">Iluminacion inapropiada</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Presiones inconvenientes' ? 'selected' : '' }} value="Presiones inconvenientes">Presiones inconvenientes</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Ruido excesivo' ? 'selected' : '' }} value="Ruido excesivo">Ruido excesivo</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Ventilacion inadecuada' ? 'selected' : '' }} value="Ventilacion inadecuada">Ventilacion inadecuada</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Peligros del medio ambiente s.c.e' ? 'selected' : '' }} value="Peligros del medio ambiente s.c.e">Peligros del medio ambiente s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Uso de material o equipo inherentemente peligroso, no defectuoso' ? 'selected' : '' }} value="Uso de material o equipo inherentemente peligroso, no defectuoso">Uso de material o equipo inherentemente peligroso, no defectuoso</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Uso de metodos o procedimientos inherentemente peligrosos' ? 'selected' : '' }} value="Uso de metodos o procedimientos inherentemente peligrosos">Uso de metodos o procedimientos inherentemente peligrosos</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Uso de herramientas o equipos inadecuados' ? 'selected' : '' }} value="Uso de herramientas o equipos inadecuados">Uso de herramientas o equipos inadecuados</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Ayuda inadecuada para levantar, mover, rodar, etc., cargas' ? 'selected' : '' }} value="Ayuda inadecuada para levantar, mover, rodar, etc., cargas">Ayuda inadecuada para levantar, mover, rodar, etc., cargas</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Asignacion inadecuada de personal, para el desarrollo de una actividad especifica' ? 'selected' : '' }} value="Asignacion inadecuada de personal, para el desarrollo de una actividad especifica">Asignacion inadecuada de personal, para el desarrollo de una actividad especifica</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Metodos, materiales o procedimientos peligrosos, s.c.e' ? 'selected' : '' }} value="Metodos, materiales o procedimientos peligrosos, s.c.e">Metodos, materiales o procedimientos peligrosos, s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Apilamiento inapropiado' ? 'selected' : '' }} value="Apilamiento inapropiado">Apilamiento inapropiado</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Colocacion inapropiada' ? 'selected' : '' }} value="Colocacion inapropiada">Colocacion inapropiada</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Asegurados inadecuadamente contra movimientos indeseables' ? 'selected' : '' }} value="Asegurados inadecuadamente contra movimientos indeseables">Asegurados inadecuadamente contra movimientos indeseables</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Sin guardas' ? 'selected' : '' }} value="Sin guardas">Sin guardas</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Inadecuadamente protegido' ? 'selected' : '' }} value="Inadecuadamente protegido">Inadecuadamente protegido</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Falta de, o inadecuada colocacion de ademes en minas, excavaciones, construcciones, etc' ? 'selected' : '' }} value="Falta de, o inadecuada colocacion de ademes en minas, excavaciones, construcciones, etc">Falta de, o inadecuada colocacion de ademes en minas, excavaciones, construcciones, etc</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Sin conexión a tierra' ? 'selected' : '' }} value="Sin conexión a tierra">Sin conexión a tierra</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Conductores, conexiones, interruptores, etc., electricos, no aislados' ? 'selected' : '' }} value="Conductores, conexiones, interruptores, etc., electricos, no aislados">Conductores, conexiones, interruptores, etc., electricos, no aislados</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Conductores, conexiones, interruptores, etc., electricos descubiertos' ? 'selected' : '' }} value="Conductores, conexiones, interruptores, etc., electricos descubiertos">Conductores, conexiones, interruptores, etc., electricos descubiertos</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Sin blindaje' ? 'selected' : '' }} value="Sin blindaje">Sin blindaje</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Blindado inadecuadamente' ? 'selected' : '' }} value="Blindado inadecuadamente">Blindado inadecuadamente</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Materiales sin marcar o inapropiadamente marcados' ? 'selected' : '' }} value="Materiales sin marcar o inapropiadamente marcados">Materiales sin marcar o inapropiadamente marcados</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Protegido inadecuadamente, s.c.e' ? 'selected' : '' }} value="Protegido inadecuadamente, s.c.e">Protegido inadecuadamente, s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Terrenos defectuosos no propiedad del empleador' ? 'selected' : '' }} value="Terrenos defectuosos no propiedad del empleador">Terrenos defectuosos no propiedad del empleador</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Materiales o equipo defectuoso no propiedad del empleador' ? 'selected' : '' }} value="Materiales o equipo defectuoso no propiedad del empleador">Materiales o equipo defectuoso no propiedad del empleador</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Otros peligros asociados con propiedades u operaciones ajenas a las del empleador' ? 'selected' : '' }} value="Otros peligros asociados con propiedades u operaciones ajenas a las del empleador">Otros peligros asociados con propiedades u operaciones ajenas a las del empleador</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Peligros naturales' ? 'selected' : '' }} value="Peligros naturales">Peligros naturales</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Asaltos; agresiones por animales' ? 'selected' : '' }} value="Asaltos; agresiones por animales">Asaltos; agresiones por animales</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Peligros de transportacion publica' ? 'selected' : '' }} value="Peligros de transportacion publica">Peligros de transportacion publica</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Peligros del trafico' ? 'selected' : '' }} value="Peligros del trafico">Peligros del trafico</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Otros peligros publicos' ? 'selected' : '' }} value="Otros peligros publicos">Otros peligros publicos</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Sin clasificar por informacion insuficiente' ? 'selected' : '' }} value="Sin clasificar por informacion insuficiente">Sin clasificar por informacion insuficiente</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Riesgo fisico, s.c.e' ? 'selected' : '' }} value="Riesgo fisico, s.c.e">Riesgo fisico, s.c.e</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'Sin riesgo fisico' ? 'selected' : '' }} value="Sin riesgo fisico">Sin riesgo fisico</option>
                <option {{ isset($registroAccidente->form3CondicionesInseguras) === 'No especificad' ? 'selected' : '' }} value="No especificad">No especificado</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col">
        <div class="form-group">
            <label for="form3FactorPersonal">Factor personal de inseguridad: </label>
            <select name="form3FactorPersonal" id="form3FactorPersonal" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3FactorPersonal) === 'Actitud Inapropiada' ? 'selected' : '' }} value="Actitud Inapropiada">Actitud Inapropiada</option>
                <option {{ isset($registroAccidente->form3FactorPersonal) === 'Falta de conocimientos' ? 'selected' : '' }} value="Falta de conocimientos">Falta de conocimientos</option>
                <option {{ isset($registroAccidente->form3FactorPersonal) === 'Defectos orgánicos o psíquicos' ? 'selected' : '' }} value="Defectos orgánicos o psíquicos">Defectos orgánicos o psíquicos</option>
                <option {{ isset($registroAccidente->form3FactorPersonal) === 'Ninguno' ? 'selected' : '' }} value="Ninguno">Ninguno</option>
                <option {{ isset($registroAccidente->form3FactorPersonal) === 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
            </select>
        </div>
    </div>

    <div class="form-group col">
        <div class="form-group">
            <label for="form3Estado">Estado en el que se encontraba: </label>
            <select name="form3Estado" id="form3Estado" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3Estado) === 'Normal' ? 'selected' : '' }} value="Normal">Normal</option>
                <option {{ isset($registroAccidente->form3Estado) === 'Enfermo' ? 'selected' : '' }} value="Enfermo">Enfermo</option>
                <option {{ isset($registroAccidente->form3Estado) === 'Ebrio' ? 'selected' : '' }} value="Ebrio">Ebrio</option>
                <option {{ isset($registroAccidente->form3Estado) === 'Drogado' ? 'selected' : '' }} value="Drogado">Drogado</option>
                <option {{ isset($registroAccidente->form3Estado) === 'Cansado' ? 'selected' : '' }} value="Cansado">Cansado</option>
                <option {{ isset($registroAccidente->form3Estado) === 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
            </select>
        </div>
    </div>

    <div class="form-group col">
        <div class="form-group">
            <label for="form3EquipoProteccion">Equipo de protección que usaba: </label>
            <select name="form3EquipoProteccion" id="form3EquipoProteccion" class="form-control">
                <option value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form3EquipoProteccion) === 'Completo' ? 'selected' : '' }} value="Completo">Completo</option>
                <option {{ isset($registroAccidente->form3EquipoProteccion) === 'Parcial' ? 'selected' : '' }} value="Parcial">Parcial</option>
                <option {{ isset($registroAccidente->form3EquipoProteccion) === 'No llevaba' ? 'selected' : '' }} value="No llevaba">No llevaba</option>
                <option {{ isset($registroAccidente->form3EquipoProteccion) === 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
            </select>
        </div>
    </div>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorEvidencia">Evidencia</h3>
    </div>
</div>

<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form3RegistroAnalista">Describa la forma en que ocurrió el accidente (Registro de analista): </label>
            <textarea class="form-control" name="form3RegistroAnalista" id="form3RegistroAnalista" rows="3">
            {{isset($registroAccidente->form3RegistroAnalista)?$registroAccidente->form3RegistroAnalista:''}}
            </textarea>
        </div>
    </div>
</div>