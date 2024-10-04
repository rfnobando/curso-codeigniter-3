<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="text-white my-5"><?php echo $title; ?></h1>
<div class="table-responsive px-5">
  <table class="table table-bordered table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $product->id; ?></td>
        <td><?php echo $product->name; ?></td>
        <td><?php echo '$' . $product->price; ?></td>
        <td>Editar | Borrar</td>
      </tr>
    </tbody>
  </table>
</div>