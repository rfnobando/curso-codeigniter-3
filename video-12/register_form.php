<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="text-white my-5"><?php echo $title; ?></h1>
<form action="" method="POST" class="text-light bg-dark rounded-4 border border-light p-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control bg-white text-dark border" id="email" name="email" placeholder="Ingrese su email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control bg-white text-dark border" id="password" name="password" placeholder="Ingrese su password">
  </div>
  <div class="mb-3">
    <label for="confirm-password" class="form-label">Repetir Password:</label>
    <input type="password" class="form-control bg-white text-dark border" id="confirm-password" name="confirm-password" placeholder="Repita su password">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </div>
</form>