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
      <?php if(!empty($products)): ?>
        <?php foreach($products as $product): ?>
          <tr>
            <th scope="row"><?php echo $product->id; ?></th>
            <td><?php echo $product->name; ?></td>
            <td><?php echo '$' . $product->price; ?></td>
            <td>
              <a href="<?php echo base_url('products/show/') . $product->id; ?>">Ver</a>
              | Editar | Borrar
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="4" class="text-center fs-5">No hay productos.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>