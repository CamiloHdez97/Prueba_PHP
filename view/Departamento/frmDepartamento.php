<?php
    include_once '../../app.php';
    use Models\Departamento;
    Departamento::setConn($conn);
    $objRegion = new Departamento();
?>
<script type="text/javascript" src="view/Departamento/Departamento.js"></script>
<h1>Registro Departamento</h1>
<form id="frmRegDepartamento">
  <div class="mb-3">
    <label class="form-label">Nombre del Departamento</label>
    <input type="text" class="form-control" id="nombreDepartamento" name="nombreDepartamento">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
