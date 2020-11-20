Formulario de Datos del empleado
</br>
    {{ $Modo=='crear' ? 'Agregar empleado':'Modificar empleado'}}
</br>
    <div class="form-group">
    <label class="control-label" for="codigo">{{'Código'}}</label>
    <input class="form-control" type="text" name="codigo" id="codigo" value="" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="nombre">{{'Nombre'}}</label>
    <input class="form-control" type="alfabet" name="nombre" id="nombre" value="" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="salarioDolares">{{'Salario Dolares'}}</label>
    <input class="form-control" type="number" name="salarioDolares" id="salarioDolares" value="" min="1" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="salarioPesos">{{'Salario Pesos'}}</label>
    <input class="form-control" type="number" name="salarioPesos" id="salarioPesos" value="" min="1" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="direccion">{{'Direccion'}}</label>
    <input class="form-control" type="text" name="direccion" id="direccion" value="" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="estado">{{'Estado'}}</label>
    <input class="form-control" type="text" name="estado" id="estado" value="" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="ciudad">{{'Ciudad'}}</label>
    <input class="form-control" type="text" name="ciudad" id="ciudad" value="" required>
    </div>

    <div class="form-group">
    <label class="control-label" for="telefono">{{'Telefono'}}</label>
    <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="123-456-7899" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required >
    </div>

    <div class="form-group">
    <label class="control-label" for="correo">{{'Correo'}}</label>
    <input class="form-control" type="email" name="correo" id="correo" value="" placeholder="your@email.com" required>
    </div>

    <input class="btn btn-success" type="submit" value="Agregar">
    <a class="btn btn-warning" href="{{url('empleados')}}">Regresar</a>
