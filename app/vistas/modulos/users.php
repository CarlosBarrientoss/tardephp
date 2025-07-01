
<?php 

  $users = UserController::ctrGetAllUsers();

?>
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Usuarios registrados</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Nombre
                    </th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Fecha de registro</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?= htmlspecialchars($user["user_name"], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user["user_name"], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user["user_name"], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user["user_name"], ENT_QUOTES, 'UTF-8') ?></td>
                  </tr>  
                   <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>