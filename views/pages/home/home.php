


    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
              
                <div   style="color: #fff;"class="breadcrumb-wrapper">
                <h2 class="content-header-title float-start mb-0">Inicio</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-dark btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="factura/consultar">
                    <i class="me-1" data-feather="check-square">

                    </i><span class="align-middle">Consultar Factura</span></a>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- search header -->
<section id="faq-search-filter">
  <div class="card faq-search">
    <div class="card-body text-center">
      <!-- main title -->
      <h2 class="text-dark">BIENVENIDOS AL APP RAVEN  PRODUCTOS FARMACÉUTICOS</h2>

      <!-- subtitle -->
      <p class="card-text mb-2">Sistema de facturación electrónica</p>
      <img style="width: 100%;
  max-width: 400px;
  height: auto;" src="../../../app-assets/images/logos/fac.svg">
    </div>
  </div>
</section>
<!-- /search header -->

<!-- frequently asked questions tabs pills -->
<section id="faq-tabs">
  <!-- vertical tab pill -->
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
      <div class="faq-navigation d-flex justify-content-between flex-column mb-2 mb-md-0">
        <!-- pill tabs navigation -->
        <ul class="nav nav-pills nav-left flex-column" role="tablist">
          <!-- payment -->
          <li class="nav-item">
            <a
              class="nav-link active"
              id="payment"
              data-bs-toggle="pill"
              href="#faq-payment"
              aria-expanded="true"
              role="tab"
            >
              <i data-feather="credit-card" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Infomacion</span>
            </a>
          </li>

          <!-- delivery -->
          <li class="nav-item">
            <a
              class="nav-link"
              id="delivery"
              data-bs-toggle="pill"
              href="#faq-delivery"
              aria-expanded="false"
              role="tab"
            >
              <i data-feather="shopping-bag" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Delivery</span>
            </a>
          </li>

          <!-- cancellation and return -->
          <li class="nav-item">
            <a
              class="nav-link"
              id="cancellation-return"
              data-bs-toggle="pill"
              href="#faq-cancellation-return"
              aria-expanded="false"
              role="tab"
            >
              <i data-feather="refresh-cw" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Cancellation & Return</span>
            </a>
          </li>

          <!-- my order -->
          <li class="nav-item">
            <a
              class="nav-link"
              id="my-order"
              data-bs-toggle="pill"
              href="#faq-my-order"
              aria-expanded="false"
              role="tab"
            >
              <i data-feather="package" class="font-medium-3 me-1"></i>
              <span class="fw-bold">My Orders</span>
            </a>
          </li>

          <!-- product and services-->
          <li class="nav-item">
            <a
              class="nav-link"
              id="product-services"
              data-bs-toggle="pill"
              href="#faq-product-services"
              aria-expanded="false"
              role="tab"
            >
              <i data-feather="settings" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Product & Services</span>
            </a>
          </li>
        </ul>

        <!-- FAQ image -->
        <img
          src="../../../app-assets/images/logos/ques.svg"
          class="img-fluid d-none d-md-block"
          alt="demand img"
        />
      </div>
    </div>

    <div class="col-lg-9 col-md-8 col-sm-12">
      <!-- pill tabs tab content -->
      <div class="tab-content">
        <!-- payment panel -->
        <div role="tabpanel" class="tab-pane active" id="faq-payment" aria-labelledby="payment" aria-expanded="true">
          <!-- icon and header -->
          <div class="d-flex align-items-center">
            <div class="avatar avatar-tag bg-light-dark me-1">
              <i data-feather="credit-card" class="font-medium-4"></i>
            </div>
            <div>
              <h4  class="mb-0">Infomacion</h4>
              <span>Which license do I need?</span>
            </div>
          </div>

          <!-- frequent answer and question  collapse  -->
          <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentOne">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-one"
                  aria-expanded="false"
                  aria-controls="faq-payment-one"
                >
                 Modulo Consultar Factura
                </button>
              </h2>

              <div
                id="faq-payment-one"
                class="collapse accordion-collapse"
                aria-labelledby="paymentOne"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                 Este modulo nos ayuda a buscar una factura en la base de datos. para poder usar este modulo se debe contar con la clave y el # de transaccion, asi msmo se debe seleccionar un metodo de busqueda ya sea FACTURA O NOTA DE CREDITO 
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentTwo">
                <button
                  class="accordion-button"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-two"
                  aria-expanded="true"
                  aria-controls="faq-payment-two"
                >
                  Can I store the item on an intranet so everyone has access?
                </button>
              </h2>
              <div
                id="faq-payment-two"
                class="collapse show"
                aria-labelledby="paymentTwo"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                  liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                  gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentThree">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-three"
                  aria-expanded="false"
                  aria-controls="faq-payment-three"
                >
                  What does non-exclusive mean?
                </button>
              </h2>
              <div
                id="faq-payment-three"
                class="collapse"
                aria-labelledby="paymentThree"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                  soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                  muffin chocolate candy pie tootsie roll marzipan.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentFour">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-four"
                  aria-expanded="false"
                  aria-controls="faq-payment-four"
                >
                  Is the Regular License the same thing as an editorial license?
                </button>
              </h2>
              <div
                id="faq-payment-four"
                class="collapse accordion-collapse"
                aria-labelledby="paymentFour"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                  croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                  jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                  wafer tootsie roll. Tootsie roll sweet cupcake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentFive">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-five"
                  aria-expanded="false"
                  aria-controls="faq-payment-five"
                >
                  Which license do I need for an end product that is only accessible to paying users?
                </button>
              </h2>
              <div
                id="faq-payment-five"
                class="collapse accordion-collapse"
                aria-labelledby="paymentFive"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentSix">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-six"
                  aria-expanded="false"
                  aria-controls="faq-payment-six"
                >
                  Which license do I need to use an item in a commercial?
                </button>
              </h2>
              <div
                id="faq-payment-six"
                class="collapse accordion-collapse"
                aria-labelledby="paymentSix"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  At tempor commodo ullamcorper a lacus vestibulum. Ultrices neque ornare aenean euismod. Dui vivamus
                  arcu felis bibendum. Turpis in eu mi bibendum neque egestas congue. Nullam ac tortor vitae purus
                  faucibus ornare suspendisse sed.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="paymentSeven">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-payment-seven"
                  aria-expanded="false"
                  aria-controls="faq-payment-seven"
                >
                  Can I re-distribute an item? What about under an Extended License?
                </button>
              </h2>
              <div
                id="faq-payment-seven"
                class="collapse"
                aria-labelledby="paymentSeven"
                data-bs-parent="#faq-payment-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Euismod lacinia at quis risus sed vulputate odio ut enim. Dictum at tempor
                  commodo ullamcorper a lacus vestibulum.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- delivery panel -->
        <div class="tab-pane" id="faq-delivery" role="tabpanel" aria-labelledby="delivery" aria-expanded="false">
          <!-- icon and header -->
          <div class="d-flex align-items-center">
            <div class="avatar avatar-tag bg-light-dark me-1">
              <i data-feather="shopping-bag" class="font-medium-4"></i>
            </div>
            <div>
              <h4 class="mb-0">Delivery</h4>
              <span>Which license do I need?</span>
            </div>
          </div>

          <!-- frequent answer and question  collapse  -->
          <div class="accordion accordion-margin mt-2" id="faq-delivery-qna">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="deliveryOne">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-delivery-one"
                  aria-expanded="false"
                  aria-controls="faq-delivery-one"
                >
                  Where has my order reached?
                </button>
              </h2>

              <div
                id="faq-delivery-one"
                class="collapse accordion-collapse"
                aria-labelledby="deliveryOne"
                data-bs-parent="#faq-delivery-qna"
              >
                <div class="accordion-body">
                  Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                  bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                  caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                  marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="deliveryTwo">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-delivery-two"
                  aria-expanded="false"
                  aria-controls="faq-delivery-two"
                >
                  The shipment status shows that it has been returned/cancelled. What does it mean and who do I contact?
                </button>
              </h2>
              <div
                id="faq-delivery-two"
                class="collapse accordion-collapse"
                aria-labelledby="deliveryTwo"
                data-bs-parent="#faq-delivery-qna"
              >
                <div class="accordion-body">
                  Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                  liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                  gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="deliveryThree">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-delivery-three"
                  aria-expanded="false"
                  aria-controls="faq-delivery-three"
                >
                  What if my shipment is marked as lost?
                </button>
              </h2>
              <div
                id="faq-delivery-three"
                class="collapse"
                aria-labelledby="deliveryThree"
                data-bs-parent="#faq-delivery-qna"
              >
                <div class="accordion-body">
                  Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                  soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                  muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow pastry. Bonbon biscuit
                  pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton candy dessert tiramisu.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="deliveryFour">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-delivery-four"
                  aria-expanded="false"
                  aria-controls="faq-delivery-four"
                >
                  My shipment status shows that it’s out for delivery. By when will I receive it?
                </button>
              </h2>
              <div
                id="faq-delivery-four"
                class="collapse"
                aria-labelledby="deliveryFour"
                data-bs-parent="#faq-delivery-qna"
              >
                <div class="accordion-body">
                  Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                  croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                  jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                  wafer tootsie roll. Tootsie roll sweet cupcake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="deliveryFive">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-delivery-five"
                  aria-expanded="false"
                  aria-controls="faq-delivery-five"
                >
                  What do I need to do to get the shipment delivered within a specific timeframe?
                </button>
              </h2>
              <div
                id="faq-delivery-five"
                class="collapse"
                aria-labelledby="deliveryFive"
                data-bs-parent="#faq-delivery-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- cancellation return  -->
        <div
          class="tab-pane"
          id="faq-cancellation-return"
          role="tabpanel"
          aria-labelledby="cancellation-return"
          aria-expanded="false"
        >
          <!-- icon and header -->
          <div class="d-flex align-items-center">
            <div class="avatar avatar-tag bg-light-dark me-1">
              <i data-feather="refresh-cw" class="font-medium-4"></i>
            </div>
            <div>
              <h4 class="mb-0">Cancellation & Return</h4>
              <span>Which license do I need?</span>
            </div>
          </div>

          <!-- frequent answer and question  collapse  -->
          <div class="accordion accordion-margin mt-2" id="faq-cancellation-qna">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationOne">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-one"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-one"
                >
                  Can my security guard or neighbour receive my shipment if I am not available?
                </button>
              </h2>

              <div
                id="faq-cancellation-one"
                class="collapse"
                aria-labelledby="cancellationOne"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                  bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                  caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                  marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationTwo">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-two"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-two"
                >
                  How can I get the contact number of my delivery agent?
                </button>
              </h2>
              <div
                id="faq-cancellation-two"
                class="collapse"
                aria-labelledby="cancellationTwo"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                  liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                  gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationThree">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-three"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-three"
                >
                  How can I cancel my shipment?
                </button>
              </h2>
              <div
                id="faq-cancellation-three"
                class="collapse"
                aria-labelledby="cancellationThree"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                  soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                  muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow pastry. Bonbon biscuit
                  pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton candy dessert tiramisu.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationFour">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-four"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-four"
                >
                  I have received a defective/damaged product. What do I do?
                </button>
              </h2>
              <div
                id="faq-cancellation-four"
                class="collapse"
                aria-labelledby="cancellationFour"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                  croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                  jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                  wafer tootsie roll. Tootsie roll sweet cupcake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationFive">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-five"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-five"
                >
                  How do I change my delivery address?
                </button>
              </h2>
              <div
                id="faq-cancellation-five"
                class="collapse"
                aria-labelledby="cancellationFive"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationSix">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-six"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-six"
                >
                  What documents do I need to carry for self-collection of my shipment?
                </button>
              </h2>
              <div
                id="faq-cancellation-six"
                class="collapse"
                aria-labelledby="cancellationSix"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  At tempor commodo ullamcorper a lacus vestibulum. Ultrices neque ornare aenean euismod. Dui vivamus
                  arcu felis bibendum. Turpis in eu mi bibendum neque egestas congue. Nullam ac tortor vitae purus
                  faucibus ornare suspendisse sed. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est
                  velit. Tortor consequat id porta nibh. Id aliquet lectus proin nibh nisl condimentum id venenatis a.
                  Faucibus nisl tincidunt eget nullam non nisi. Enim nunc faucibus a pellentesque. Pellentesque diam
                  volutpat commodo sed egestas egestas fringilla phasellus. Nec nam aliquam sem et tortor consequat id.
                  Fringilla est ullamcorper eget nulla facilisi. Morbi tristique senectus et netus et.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="cancellationSeven">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-cancellation-seven"
                  aria-expanded="false"
                  aria-controls="faq-cancellation-seven"
                >
                  What are the timings for self-collecting shipments from the Delhivery Branch?
                </button>
              </h2>
              <div
                id="faq-cancellation-seven"
                class="collapse"
                aria-labelledby="cancellationSeven"
                data-bs-parent="#faq-cancellation-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Euismod lacinia at quis risus sed vulputate odio ut enim. Dictum at tempor
                  commodo ullamcorper a lacus vestibulum.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- my order -->
        <div class="tab-pane" id="faq-my-order" role="tabpanel" aria-labelledby="my-order" aria-expanded="false">
          <!-- icon and header -->
          <div class="d-flex align-items-center">
            <div class="avatar avatar-tag bg-light-dark me-1">
              <i data-feather="package" class="font-medium-4"></i>
            </div>
            <div>
              <h4 class="mb-0">My Orders</h4>
              <span>Which license do I need?</span>
            </div>
          </div>

          <!-- frequent answer and question  collapse  -->
          <div class="accordion accordion-margin mt-2" id="faq-my-order-qna">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="myOrderOne">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-my-order-one"
                  aria-expanded="false"
                  aria-controls="faq-my-order-one"
                >
                  Can I avail of an open delivery?
                </button>
              </h2>

              <div
                id="faq-my-order-one"
                class="collapse accordion-collapse"
                aria-labelledby="myOrderOne"
                data-bs-parent="#faq-my-order-qna"
              >
                <div class="accordion-body">
                  Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                  bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                  caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                  marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="myOrderTwo">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-my-order-two"
                  aria-expanded="false"
                  aria-controls="faq-my-order-two"
                >
                  I haven’t received the refund of my returned shipment. What do I do?
                </button>
              </h2>
              <div
                id="faq-my-order-two"
                class="collapse accordion-collapse"
                aria-labelledby="myOrderTwo"
                data-bs-parent="#faq-my-order-qna"
              >
                <div class="accordion-body">
                  Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                  liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                  gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="myOrderThree">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-my-order-three"
                  aria-expanded="false"
                  aria-controls="faq-my-order-three"
                >
                  How can I ship my order to an international location?
                </button>
              </h2>
              <div
                id="faq-my-order-three"
                class="collapse"
                aria-labelledby="myOrderThree"
                data-bs-parent="#faq-my-order-qna"
              >
                <div class="accordion-body">
                  Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                  soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                  muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow pastry. Bonbon biscuit
                  pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton candy dessert tiramisu.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="myOrderFour">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-my-order-four"
                  aria-expanded="false"
                  aria-controls="faq-my-order-four"
                >
                  I missed the delivery of my order today. What should I do?
                </button>
              </h2>
              <div
                id="faq-my-order-four"
                class="collapse"
                aria-labelledby="myOrderFour"
                data-bs-parent="#faq-my-order-qna"
              >
                <div class="accordion-body">
                  Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                  croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                  jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                  wafer tootsie roll. Tootsie roll sweet cupcake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="myOrderFive">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-my-order-five"
                  aria-expanded="false"
                  aria-controls="faq-my-order-five"
                >
                  The delivery of my order is delayed. What should I do?
                </button>
              </h2>
              <div
                id="faq-my-order-five"
                class="collapse"
                aria-labelledby="myOrderFive"
                data-bs-parent="#faq-my-order-qna"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- product services -->
        <div
          class="tab-pane"
          id="faq-product-services"
          role="tabpanel"
          aria-labelledby="product-services"
          aria-expanded="false"
        >
          <!-- icon and header -->
          <div class="d-flex align-items-center">
            <div class="avatar avatar-tag bg-light-dark me-1">
              <i data-feather="settings" class="font-medium-4"></i>
            </div>
            <div>
              <h4 class="mb-0">Product & Services</h4>
              <span>Which license do I need?</span>
            </div>
          </div>

          <!-- frequent answer and question  collapse  -->
          <div class="accordion accordion-margin mt-2" id="faq-product-qna">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="productOne">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-product-one"
                  aria-expanded="false"
                  aria-controls="faq-product-one"
                >
                  How can I register a complaint against the courier executive who came to deliver my order?
                </button>
              </h2>

              <div
                id="faq-product-one"
                class="collapse accordion-collapse"
                aria-labelledby="productOne"
                data-bs-parent="#faq-product-qna"
              >
                <div class="accordion-body">
                  Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                  bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                  caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                  marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="productTwo">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-product-two"
                  aria-expanded="false"
                  aria-controls="faq-product-two"
                >
                  The status for my shipment shows as ‘not picked up’. What do I do?
                </button>
              </h2>
              <div
                id="faq-product-two"
                class="collapse accordion-collapse"
                aria-labelledby="productTwo"
                data-bs-parent="#faq-product-qna"
              >
                <div class="accordion-body">
                  Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                  liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                  gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="productThree">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-product-three"
                  aria-expanded="false"
                  aria-controls="faq-product-three"
                >
                  How can I get a proof of delivery for my shipment?
                </button>
              </h2>
              <div
                id="faq-product-three"
                class="collapse"
                aria-labelledby="productThree"
                data-bs-parent="#faq-product-qna"
              >
                <div class="accordion-body">
                  Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                  soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                  muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow pastry. Bonbon biscuit
                  pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton candy dessert tiramisu.
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="productFour">
                <button
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  role="button"
                  data-bs-target="#faq-product-four"
                  aria-expanded="false"
                  aria-controls="faq-product-four"
                >
                  How can I avail your services?
                </button>
              </h2>
              <div
                id="faq-product-four"
                class="collapse accordion-collapse"
                aria-labelledby="productFour"
                data-bs-parent="#faq-product-qna"
              >
                <div class="accordion-body">
                  Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                  croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                  jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                  wafer tootsie roll. Tootsie roll sweet cupcake.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / frequently asked questions tabs pills -->

<!-- contact us -->
<section class="faq-contact">
  <div class="row mt-5 pt-75">
    <div class="col-12 text-center">
      <h2>¿Aún tienes una pregunta?</h2>
      <p class="mb-3">
      Si no puede encontrar una pregunta en nuestras preguntas frecuentes, siempre puede contactarnos. ¡Te responderemos en breve!
      </p>
    </div>
    <div class="col-sm-6">
      <div class="card text-center faq-contact-card shadow-none py-1">
        <div class="accordion-body">
          <div class="avatar avatar-tag bg-light-dark mb-2 mx-auto">
            <i data-feather="phone-call" class="font-medium-3"></i>
          </div>
          <h4>+ (810) 2548 2568</h4>
          <span class="text-body">¡Siempre estamos felices de ayudar!</span>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card text-center faq-contact-card shadow-none py-1">
        <div class="accordion-body">
          <div class="avatar avatar-tag bg-light-dark mb-2 mx-auto">
            <i data-feather="mail" class="font-medium-3"></i>
          </div>
          <h4>hello@help.com</h4>
          <span class="text-body">¡La mejor manera de obtener una respuesta más rápida!</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ contact us -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

