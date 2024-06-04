<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" style="margin-top: -10%;"> <!-- Adicionada margem superior negativa -->
    <div class="modal-content">
      <!-- Conteúdo para dispositivos médios e grandes -->
      <div class="modal-body d-none d-md-block" style="background-image: url('assets/img/banner-3.jpg'); background-size: contain; background-position: right; border: none; background-repeat: no-repeat;">
        <button type="button" class="btn-close" style="float:right" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="container-fluid">
          <div class="row g-0">
            <div class="col-md-5">
              <form autocomplete="off">
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                  <label for="tipo" class="form-label">Tipo</label>
                  <select class="form-select" id="tipo" required>
                    <option value="" disabled selected>Selecione o tipo</option>
                    <option value="lojista">Lojista</option>
                    <option value="distribuidor">Distribuidor</option>
                    <option value="consumidor_final">Consumidor Final</option>
                  </select>
                </div>
                <div style="margin: auto; max-width: fit-content;">
                  <button type="submit" class="btn btn-orange">Enviar</button>
                </div>
              </form>
            </div>
            <div class="col-md-7 d-none d-md-block">
            </div>
          </div>
        </div>
      </div>
      <!-- Conteúdo para dispositivos pequenos -->
      <div class="modal-body d-block d-md-none">
        <button type="button" class="btn-close" style="float:right" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="container-fluid">
          <div class="row g-0">
            <div class="col-12">
              <form autocomplete="off">
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                  <label for="tipo" class="form-label">Tipo</label>
                  <select class="form-select" id="tipo" required>
                    <option value="" disabled selected>Selecione o tipo</option>
                    <option value="lojista">Lojista</option>
                    <option value="distribuidor">Distribuidor</option>
                    <option value="consumidor_final">Consumidor Final</option>
                  </select>
                </div>
                <div style="margin: auto; max-width: fit-content;">
                  <button type="submit" class="btn btn-orange">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-3 d-block d-md-none">
        <img src="assets/img/banner-3.jpg" alt="Banner" class="img-fluid">
      </div>
    </div>
  </div>
</div>
