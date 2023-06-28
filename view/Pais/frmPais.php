<?php
    include_once '../../app.php';
    use Models\Pais;
    Pais::setConn($conn);
    $objRegion = new Pais();
?>
<script type="text/javascript" src="view/Pais/pais.js"></script>
<h1>Registro País</h1>
<form id="frmRegpais">
  <div class="mb-3">
    <label class="form-label">Nombre del País</label>
    <input type="text" class="form-control" id="nombrePais" name="nombrePais">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
