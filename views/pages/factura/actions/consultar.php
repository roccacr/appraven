

    
<section id="floating-label-input">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Buscar Facturas</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 mb-1">
              <p>
               Ingrese la clave de la factura <code>#000000000</code> Seguido del 
                <code>#numero de Transaccion</code>
              </p>
            </div>
            <div class="col-sm-6 col-12 mb-1 mb-sm-0">
              <div class="form-floating">
                <input type="number" class="form-control" id="floating-label1" placeholder="Clave">
                <label for="floating-label1">Clave</label>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input type="number" class="form-control" id="floating-label-disable" placeholder="# Transaccion">
                <label for="floating-label-disable"># Transaccion</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tipo de Factura</h4>
      </div>
      <div class="card-body">
        <div class="row custom-options-checkable g-1">
          <div class="col-md-6">
            <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios1" checked="">
            <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
              <span class="d-flex justify-content-between flex-wrap mb-50">
                <span class="fw-bolder">Factura</span>
                <span class="fw-bolder">#0000</span>
              </span>
              <small class="d-block">Buscar facturas electrónica</small>
            </label>
          </div>
          <div class="col-md-6">
            <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios2" value="">
            <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
              <span class="d-flex justify-content-between flex-wrap mb-50">
                <span class="fw-bolder">Nota Credito</span>
                <span class="fw-bolder">#0000</span>
              </span>
              <small class="d-block">Buscar #notas de Crédito</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
       <button type="button" class="btn btn-outline-dark waves-effect">Buscar</button>
      <br>
      <br>
      <br>
      </div>
    </div>
  </div>
</section>
