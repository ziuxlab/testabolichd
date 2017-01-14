@if(isset($idioma))
    <!-- Fixed navbar -->
    <nav class="navbar navbar-fixed-top margin-r">
        <div class="container width95">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-menu-hamburger color-white font25px mt8px"></span>
                </button>

                <div class="lognav">
                    <a href="/es"> <img src="{{url('images/logotestab.png')}}"  class="mt50px width200px" alt="logo-testabolichd" title="Logo Testabolic"> </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="notsee1k"> <a href="#testabolic" >TESTABOLIC</a> </li>
                    <li><a href="#active-ingredients" >INGREDIENTES ACTIVOS</a></li>
                    <li><a href="#how-to-use" >COMO USAR</a></li>
                    <li><a href="#get-in-touch" >ESTAR EN CONTACTO</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LENGUAJE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("/")}}">English</a></li>
                            <li><a href="{{url("es")}}">Español</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn btn-primary btn-buy mt8px ml20px" data-toggle="modal" data-target=".bs-example-modal-sm" > COMPRAR  </button>
                    </li>
                    <div class="modal fade bs-example-modal-sm">
                        <div class="modal-dialog modal-sm" role="document" >
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="gridSystemModalLabel"> PROMOCIONES</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="ml10">
                                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="8Y9NXSNB89ZRS">
                                                <br>
                                                    <select name="os0" class="form-control">
                                                        <option value="Testabolic HD X1">Testabolic HD X1 $60.00 USD</option>
                                                        <option value="Testabolic HD X3">Testabolic HD X3 $140.00 USD</option>
                                                        <option value="Testabolic HD X6">Testabolic HD X6 $220.001 USD</option>
                                                    </select>
                                                <br>
                                                <input type="hidden" name="currency_code" value="USD">
                                                <button type="submit" name="submit" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> COMPRAR</button>
                                                <img alt="pay-testabolic " src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1" title="Pay testabolic">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div>
                    </div>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

@else

    <!-- Fixed navbar -->
    <nav class="navbar navbar-fixed-top margin-r">
        <div class="container width95">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-menu-hamburger color-white font25px mt8px"></span>
                </button>

                <div class="lognav">
                    <a href="/"> <img src="{{url('images/logotestab.png')}}" class="mt50px width200px" alt="testabolic logo" title="Logo Testabolic"> </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="#testabolic" >TESTABOLIC</a> </li>
                    <li><a href="#active-ingredients" >ACTIVE INGREDIENTS</a></li>
                    <li><a href="#how-to-use" >HOW TO USE</a></li>
                    <li><a href="#get-in-touch" >GET IN TOUCH</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LANGUAGE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("/")}}">English</a></li>
                            <li><a href="{{url("es")}}">Español</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn btn-primary btn-buy mt8px ml20px" data-toggle="modal" data-target=".bs-example-modal-sm" > BUY NOW </button>
                    </li>
                    <div class="modal fade bs-example-modal-sm">
                        <div class="modal-dialog modal-sm" role="document" >
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="gridSystemModalLabel"> PROMOTIONS</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="ml10 ">
                                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="8Y9NXSNB89ZRS">
                                                <br>
                                                    <select name="os0" class="form-control ">
                                                        <option value="Testabolic HD X1">Testabolic HD X1 $60.00 USD</option>
                                                        <option value="Testabolic HD X3">Testabolic HD X3 $140.00 USD</option>
                                                        <option value="Testabolic HD X6">Testabolic HD X6 $220.00 USD</option>
                                                    </select>
                                                <br>
                                                <input type="hidden" name="currency_code" value="USD" >
                                                <button type="submit"  name="submit" class="btn btn-block btn-primary "><span class="glyphicon glyphicon-shopping-cart"></span> BUY</button>
                                                <img alt="pay-testabolic " src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1" title="Pay testabolic">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div>
                    </div>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
@endif