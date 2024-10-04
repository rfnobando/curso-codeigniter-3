<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="text-white my-5"></h1>
<form class="text-light bg-dark rounded-4 border border-light p-4">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" placeholder="Ingrese el nombre">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Precio:</label>
    <input type="text" class="form-control bg-white text-dark border" id="price" placeholder="Ingrese el precio">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-primary">Crear producto</button>
  </div>
</form>