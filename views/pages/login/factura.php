<?php
if (isset($routesArray[2]) == false) {
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    No se pede mostrar el resultado o Url no esta correcta, comuniquese con el administrador de la pagina
    </div>
  </div>';
} else {
    if (isset($routesArray[2])) {
        $select = "*";
        $url = "facturas?select=*&linkTo=clave&equalTo=" . $routesArray[2];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $response = $response->results;
            foreach ($response as $data) {
                if ($data->estado === "Rechazada") {
                    echo '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Lo sentimos</h4>
                    <div class="alert-body">
                       La factura solicitada esta Rechaza por lo que no se puede mostrar los datos<br>
                       Factura : ' . $routesArray[2] . ' <br>
                       Estado  : ' . $data->estado . '
                    </div>
                  </div>';
                } else {
                    echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Exelente</h4>
                    <div class="alert-body">
                       Factura solicitada <br>
                       Factura : ' . $routesArray[2] . ' <br>
                       Estado  : ' . $data->estado . '
                    </div>
                  </div>';
                ?>
                    <!DOCTYPE html>
                    <html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

                        <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
                        <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/Factura-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
                        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
                        <!-- BEGIN: Vendor CSS-->
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
                        <!-- END: Vendor CSS-->
                        <!-- BEGIN: Theme CSS-->
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">
                        <!-- BEGIN: Page CSS-->
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice.min.css">
                        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
                                <?php if($data->estado=="Aceptada"){?>
                        <div class="content-header row">
                        </div>
                        <div class="content-body"><section class="invoice-preview-wrapper">
                <div class="row invoice-preview">
                    <!-- Invoice -->
                    <div class="col-xl-9 col-md-8 col-12">
                    <div class="card invoice-preview-card">
                        <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                            <div class="logo-wrapper">
                                <svg
                                viewBox="0 0 139 95"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                height="24"
                                >
                                <defs>
                                    <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient
                                    id="invoice-linearGradient-2"
                                    x1="64.0437835%"
                                    y1="46.3276743%"
                                    x2="37.373316%"
                                    y2="100%"
                                    >
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-400.000000, -178.000000)">
                                    <g transform="translate(400.000000, 178.000000)">
                                        <path
                                        class="text-dark"
                                        d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                        style="fill: currentColor"
                                        ></path>
                                        <path
                                        d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                        fill="url(#invoice-linearGradient-1)"
                                        opacity="0.2"
                                        ></path>
                                        <polygon
                                        fill="#000000"
                                        opacity="0.049999997"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"
                                        ></polygon>
                                        <polygon
                                        fill="#000000"
                                        opacity="0.099999994"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"
                                        ></polygon>
                                        <polygon
                                        fill="url(#invoice-linearGradient-2)"
                                        opacity="0.099999994"
                                        points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"
                                        ></polygon>
                                    </g>
                                    </g>
                                </g>
                                </svg>
                                <h3 class="text-dark invoice-logo">Factura</h3>
                            </div>
                            <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>
                            <p class="card-text mb-25">San Diego County, CA 91905, USA</p>
                            <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                            </div>
                            <div class="mt-md-0 mt-2">
                            <h4 class="invoice-title">
                            FACTURA
                                <span class="invoice-number">#<?php echo $data->clave;?></span>
                            </h4>
                            <div class="invoice-date-wrapper">
                                <p class="invoice-date-title">Fecha de emisión:</p>
                                <p class="invoice-date"><?php echo $data->fecha_creacion;?></p>
                            </div>
                            <div class="invoice-date-wrapper">
                                <p class="invoice-date-title">Fecha de Modificaion:</p>
                                <p class="invoice-date"><?php echo $data->fecha_ultima_modificacion;?></p>
                            </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                        </div>

                        <hr class="invoice-spacing" />

                        <!-- Address and Contact starts -->
                        <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                            <div class="col-xl-8 p-0">
                            <h6 class="mb-2">Invoice To:</h6>
                            <h6 class="mb-25">Thomas shelby</h6>
                            <p class="card-text mb-25">Shelby Company Limited</p>
                            <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>
                            <p class="card-text mb-25">718-986-6062</p>
                            <p class="card-text mb-0">peakyFBlinders@gmail.com</p>
                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                            <h6 class="mb-2">Payment Details:</h6>
                            <table>
                                <tbody>
                                <tr>
                                    <td class="pe-1">Total Due:</td>
                                    <td><span class="fw-bold">$12,110.55</span></td>
                                </tr>
                                <tr>
                                    <td class="pe-1">Bank name:</td>
                                    <td>American Bank</td>
                                </tr>
                                <tr>
                                    <td class="pe-1">Country:</td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td class="pe-1">IBAN:</td>
                                    <td>ETD95476213874685</td>
                                </tr>
                                <tr>
                                    <td class="pe-1">SWIFT code:</td>
                                    <td>BR91905</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                        <!-- Address and Contact ends -->

                        <!-- Invoice Description starts -->
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="py-1">Task description</th>
                                <th class="py-1">Rate</th>
                                <th class="py-1">Hours</th>
                                <th class="py-1">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="py-1">
                                <p class="card-text fw-bold mb-25">Native App Development</p>
                                <p class="card-text text-nowrap">
                                    Developed a full stack native app using React Native, Bootstrap & Python
                                </p>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">$60.00</span>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">30</span>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">$1,800.00</span>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="py-1">
                                <p class="card-text fw-bold mb-25">Ui Kit Design</p>
                                <p class="card-text text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">$60.00</span>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">20</span>
                                </td>
                                <td class="py-1">
                                <span class="fw-bold">$1200.00</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>

                        <div class="card-body invoice-padding pb-0">
                        <div class="row invoice-sales-total-wrapper">
                            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                            <p class="card-text mb-0">
                                <span class="fw-bold">Salesperson:</span> <span class="ms-75">Alfie Solomons</span>
                            </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                            <div class="invoice-total-wrapper">
                                <div class="invoice-total-item">
                                <p class="invoice-total-title">Subtotal:</p>
                                <p class="invoice-total-amount">$1800</p>
                                </div>
                                <div class="invoice-total-item">
                                <p class="invoice-total-title">Discount:</p>
                                <p class="invoice-total-amount">$28</p>
                                </div>
                                <div class="invoice-total-item">
                                <p class="invoice-total-title">Tax:</p>
                                <p class="invoice-total-amount">21%</p>
                                </div>
                                <hr class="my-50" />
                                <div class="invoice-total-item">
                                <p class="invoice-total-title">Total:</p>
                                <p class="invoice-total-amount">$1690</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Invoice Description ends -->

                        <hr class="invoice-spacing" />

                        <!-- Invoice Note starts -->
                        <div class="card-body invoice-padding pt-0">
                        <div class="row">
                            <div class="col-12">
                            <span class="fw-bold">Note:</span>
                            <span
                                >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                                projects. Thank You!</span
                            >
                            </div>
                        </div>
                        </div>
                        <!-- Invoice Note ends -->
                    </div>
                    </div>
                    <!-- /Invoice -->

                    <!-- Invoice Actions -->
                    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                    <div class="card">
                        <div class="card-body">
                        <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="app-invoice-print.html" target="_blank"> Print </a>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="app-invoice-edit.html"> Edit </a>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/consultar"> Consultar Factura </a>
                        <?php }?>

    <?php  }
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Lo sentimos</h4>
            <div class="alert-body">
               No se encontro la Factura : ' . $routesArray[2] . ' <br>Vuelve a intentarlo o comunicate con eladministrador
            </div>
          </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    No se pede mostrar el resultado o Url no esta correcta, comuniquese con el administrador de la pagina
    </div>
  </div>';
    }
}
