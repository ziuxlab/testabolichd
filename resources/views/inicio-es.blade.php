@extends('layouts.app')

@section('html')
    <html lang="es">
@endsection

@section('meta')
    <!-- MINIFIED -->
    {!! SEO::generate() !!}


    <meta name="language" content="Spanish">
    <link rel="alternate" hreflang="es" href="https://testabolichd.com/es">
@endsection

@section('content')
    @if (Session::has('send'))
        <div class="alert alert-success alerta mt70px">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="glyphicon glyphicon-remove text-white"></i>
            </button>
            Mensaje enviado correctamente
        </div>
    @endif

    <section class="bg0 parallax">
        <div class="col-lg-12">
            <div class="center-block container fw700">
                <div class="col-md-10">
                    <div class="height150px">
                        <div class="h1 mt-100px">
                            <div id="typed-strings">
                                <p><h1>FÓRMULA SÚPER ANABÓLICA</h1>
                            </div>
                            <strong><span class="element float-left"></span></strong>
                        </div>
                    </div>
                    <p class="h2">
                        <strong>TESTABOLIC HD</strong> es el resultado de los estudios clínicos
                        que da origen a la fórmula más segura y más eficaz para aumentar los niveles de testosterona en el cuerpo.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="bgnone ">
        <div class="col-lg-12">
            <div class=" col-md-6 col-md-offset-3">
                <h2 class="center-b ">FÓRMULA SÚPER ANABÓLICA</h2>
                <hr class="center-b ">
                <p class="text-center">
                    <b> TESTABOLIC HD</b> es el resultado de los estudios clínicos que da origen a la fórmula más segura y más eficaz para aumentar los niveles de testosterona en el cuerpo.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="col-lg-12 mt50px">
            <div class="center-block container center-b">
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-star wow fadeInUp center-b fontOne"></span>
                    <h3 class="center-b">FÓRMULA RENOVADA</h3>
                    <hr class="center-b">
                    <p>Hemos actualizado y mejorado la fórmula para mejorar los efectos de <u>TESTABOLIC HD</u>.</p>

                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-leaf wow fadeInUp center-b fontTwo"></span>
                    <h3 class="center-b ">PRECURSOR NATURAL</h3>
                    <hr class="center-b ">
                    <p><u>TESTABOLIC HD</u> contiene una mezcla de extractos de plantas, por lo que es un suplemento seguro y sin contraindicaciones.</p>

                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-ok wow fadeInUp fontThree"></span>
                    <h3>RESULTADOS REALES</h3>
                    <hr class="center-b ">
                    <p><u>TESTABOLIC HD</u> tiene los mejores resultados, estables
                        y seguras en el aumento de la testosterona a niveles fisiológicos máximos en tan sólo 28 días.</p>
                </div>
            </div>
        </div>

    </section>

    <section class="bg4 fw700 parallax2" id="testabolic">
        <div class="col-lg-12">
            <div class="center-block container">
                <div class="col-sm-4 center-b">
                    <img src="{{url('images/testabolic1.png')}}" class=" wow fadeIn " data-wow-duration="1s" alt="testabolichd" title="Testabolic HD">
                </div>
                <div class="col-md-8">

                    <h2 class="center-b ">¿QUE ES <strong>TESTABOLIC HD</strong>?</h2>
                    <hr class="center-b ">
                    <p class="text-justify">
                        <strong>TESTABOLIC HD</strong> es el resultado de estudios clínicos que dan origen
                        a la fórmula más segura y eficaz para subir los niveles de testosterona
                        en el organismo, diseñada especialmente para personas que quieren aumentar
                        su masa muscular, incrementar niveles de fuerza y energía, disminuir
                        porcentajes de grasa corporal para tener un aspecto “rocoso” y magro
                        en su estructura muscular y potenciar su deseo sexual.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="paddingout">
        <iframe class="width100" height="505" src="https://www.youtube.com/embed/RwGEUHjQwPU" allowfullscreen></iframe>
    </section>

    <section class="bg7" id="active-ingredients">
        <div class="center-b">
            <h2> INGREDIENTES ACTIVOS </h2>
            <hr class="center-b">
        </div>
        <div class="col-lg-12">
            <div class="center-b container ">
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                    <img class="img-circle  img-responsive center-b"
                         src="{{url('images/activein-1.jpg')}}" alt="long-jack" title="Long Jack">
                    <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Long Jack<span
                                class="glyphicon glyphicon-minus"></span></p>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                    <img class="img-circle img-responsive center-b"
                         src="{{url('images/activein-2.jpg')}}" alt="boron-citrate" title="Boron Citrate">
                    <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Boron Citrate<span
                                class="glyphicon glyphicon-minus"></span></p>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                    <img class="img-circle img-responsive center-b"
                         src="{{url('images/activein-3.jpg')}}" alt="Methoxyisoflavone" title="Methoxyisoflavone">
                    <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span> Methoxyisoflavone<span
                                class="glyphicon glyphicon-minus"></span></p>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                    <img class="img-circle img-responsive center-b"
                         src="{{url('images/activein-4.jpg')}}" alt="Ecdysterone" title="Ecdysterone">
                    <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Ecdysterone<span
                                class="glyphicon glyphicon-minus"></span></p>
                </div>
                <hr class="center-b op0">
            </div>
            <div class="center-b container ">
                <div class="col-md-6">
                    <p class="text-justify mt10px">
                        <strong>TESTABOLIC HD</strong> fue diseñado de una manera especial. Ignoramos el mercado y sólo
                        oímos CIENCIA, no incorporamos cualquier nutracéutico, por popular que era, sólo
                        si no había demostrado buenos resultados en los estudios en humanos para el aumento
                        de la tasa de producción de testosterona.
                        <br><br>
                        sí que en  <strong>TESTABOLIC HD</strong> no encuentra sustancias como <i>"Tribulus terrestris" (1-2),</i>
                        el <i>ácido D-aspártico (DAA),</i> o cualquier otro "relleno", sólo ingredientes que han
                        demostrado científicamente.
                        <br><br>
                        <strong>TESTABOLIC HD</strong> incorpora su fórmula patentada, uno de la industria de componentes
                        más revolucionaria de culturismo y fitness, extracto estandarizado <i>Long Jack
                            (Tongkat Ali - Libidus Jack),</i> planta originaria de <i>Malasia,</i> que ha demostrado
                        la estimulación de los niveles de testosterona de producción casi se duplicó ( 192%)
                        de la fisiológica, mientras que la disminución favorable de las hormonas sexuales
                        (SHBG) (el compuesto que se une a la testosterona para mantenerlo en el estado
                        inutilizable unión), y la promoción de <i>IGF-1.</i>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-justify mt10px">
                        <strong>TESTABOLIC HD</strong> también añade <i>boro citrato,</i> proporcionando una precisión Elemental
                        boro según los estudios científicos (6), mostró una gran eficacia para aumentar los
                        niveles de los niveles de testosterona y estradiol libre disminuye, mejorando notablemente
                        el aumento de masa muscular, pérdida de grasa dosis, mejorar el tono de la piel
                        ( muscular), aumento de la fuerza, un mejor sueño y la recuperación, reparación de
                        lesiones a nivel articular y aumento de la vascularización.
                        <br><br>
                        Incorpora ingredientes revolucionarios con alta pureza.
                        <br><br>
                        <strong>TESTABOLIC HD</strong> combina los dos agentes anabólicos naturales más potentes descubrieron
                        que los niveles máximos de pureza, <i>Metoxiisoflavona</i> y <i>Ecdysterone,</i> responsables de
                        generar el crecimiento muscular rápido, proporcionan la recuperación después de un
                        entrenamiento intensivo y generar la quema de grasa a través de mecanismos <i>lipotrópicos</i>
                        (uso de las reservas de grasa como energía - grasa oxidación), sin que ninguno de los
                        efectos secundarios de los esteroides, tales como el acné, calvicie de patrón masculino,
                        agrandamiento de la próstata, presión arterial alta, problemas del corazón, toxicidad
                        hepática, entre muchos otros.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg3">
        <div class="col-lg-12">
            <div class="center-b container">
                <div class="col-sm-4 col-md-offset-1">
                    <img src="{{url('/images/testatestaenglish.png')}}"
                         class="img-responsive wow fadeIn" data-wow-duration="1s" alt="testabolic-comparacion" title="Testabolic hd comparacion">
                </div>
                <div class="col-sm-6 ">
                    <h5 class="h2 center-b"> <strong>TESTABOLIC HD</strong> LA MEJOR FÓRMULA </h5>
                    <hr class="center-b">
                    <p class="text-justify mt50px">
                        <strong>TESTABOLIC HD</strong> es la única fórmula natural patentado que ha producido los resultados
                        más espectaculares, estables y fiables en el aumento de la testosterona a niveles
                        fisiológicos máximos en tan sólo 28 días.
                        <br><br>
                        La alta eficacia de <strong>TESTABOLIC HD</strong> se basa en proporcionar la dosis exacta de su
                        cuerpo para aumentar los niveles de testosterona libre (activa) y menores niveles
                        de estradiol (estrógeno), al tiempo que reduce drásticamente la tasa de conversión
                        de <i>dihidrotestosterona (DHT)</i> por esa razón la aromatización se nula y se convierte
                        en <strong>TESTABOLIC HD</strong>, en la testosterona escalador resultados en el mercado duradera.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg6">
        <div class="col-lg-12">
            <div class="center-block container center-b">
                <h5 class="h2"> INGREDIENTES ACTIVOS DE <strong>TESTABOLIC HD </strong> </h5>
                <hr class="center-b">
                <div class="col-sm-6">
                    <p class="text-left">
                        Cada servicio de <strong> TESTABOLIC HD </strong> provee Gluconato de <i>Zinc y Aspartato de Magnesio,</i>
                        minerales claves, en los estados de mayor valor biológico para el organismo, para
                        mantener el correcto funcionamiento del sistema endocrino respecto a producción
                        y regulación de testosterona libre y hormona de crecimiento.

                        <strong>TESTABOLIC HD</strong> es el único suplemento del mercado que provee al usuario una DOSIS
                        DUAL EXACTA. En la primera toma (con la primer comida del día, una capsula softgel
                        de liberación lenta), se proveerán componentes precisos para una producción prolongada
                        de testosterona a lo largo del día, a la vez que se inhibe el ratio de producción
                        de cortisol. La segunda toma (antes de ir a la cama, una capsula <i>softgel),</i> proveen
                        una carga extra de extracto estandarizado de <i>L-Dopa,</i> aislado de la <i>Mucuna pruriens,</i>
                        que según investigación, demuestra ser un excelente precursor de la dopamina y a su
                        vez incrementa en gran medida la producción de la hormona de crecimiento.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bgnone" id="how-to-use">
        <div class="col-lg-12">
            <div class="center-block container">
                <div class="col-sm-6">
                    <h6 class="center-b h3">LAS PREGUNTAS MÁS FRECUENTES</h6>
                    <hr class="center-b">
                                      <!-- VER MAS -->

                    <p role="button" data-toggle="collapse" data-target="#1" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span> La mujer puede consumir <i>TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="1">
                        <div class="well">
                            <p>R / Sí. Tanto los hombres como las mujeres pueden recibir todos
                                los beneficios de comer <u>TESTABOLIC HD</u> de forma segura, aumentar la masa
                                muscular, aumentar la fuerza y ​​los niveles de energía y disminuir los
                                porcentajes de grasa corporal. <u>TESTABOLIC HD</u> es un anabólico natural,
                                pero no debe ser consumido por mujeres embarazadas o en periodo de lactancia.</p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#2" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>¿Qué pasa si olvida una dosis de <i>TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="2">
                        <div class="well">
                            <p> R / Es bien. Omita esta dosis olvidada y continúe con su horario
                                regular de dosificación. No tome una dosis doble para compensar la falta de un uno.
                            </p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#3" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>  ¿Qué productos debería o no debería
                        combinarse con<i> TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="3">
                        <div class="well">
                            <p class="text-justify">R / <u>TESTABOLIC HD</u> es totalmente compatible con todos los
                                tipos de suplementos nutricionales y suplementos. </p>
                        </div>
                    </div>
                    <br>
                    <p role="button" data-toggle="collapse" data-target="#4" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>¿Tiene alta definición ¿Requiere <i>TESTABOLIC HD</i> ser ciclado?
                    </p>
                    <div class="collapse" id="4">
                        <div class="well">
                            <p class="text-justify">R/ No. <u>TESTABOLIC HD</u> se puede tomar permanentemente
                                independientemente de los objetivos que se busquen; <u>TESTABOLIC HD </u>es
                                totalmente compatible y altamente recomendado en etapas de volumen,
                                definición y mantenimiento.
                            </p>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-sm-6">
                    <h3 class="center-b">TOMANDO <i>TESTABOLIC HD</i></h3>
                    <hr class="center-b">
                    <ul class="ml8">
                        <li class="mt8px">Tomar 2 dosis por día, incluyendo los días que no son físicamente activos.</li>
                        <li class="mt8px">Tomar una cápsula de gelatina blanda de color rojo con la primera comida del día (desayuno).</li>
                        <li class="mt8px">Tomar una cápsula de gelatina blanda de color rojo oscuro antes de la hora de acostarse.</li>
                        <li class="mt8px">No exceder más de 2 cápsulas en 24 horas.</li>
                        <li class="mt8px">Por favor, lea toda la etiqueta antes de usar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg1">
        <div id="carousel-example-generic" class="carousel slide mt-80px" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('images/bg-transparente.png')}}" alt="imagen-transparente1" title="imagen t">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">Los resultados son excelentes, muy sorprendido. </p >
                                <p class="fw700"> - Ian Tower,  instructor de gimnasia</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('images/bg-transparente.png')}}" alt="imagen-transparente-testabolichd" title="imagen t">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">He aumentado mi masa muscular de una manera increíble.</p>
                                <p class="fw700">  - John Sommer,  Modelo Fitness</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('images/bg-transparente.png')}}" alt="imagen transparente" title="imagen t">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">Me he dado cuenta de más fuerza, más el crecimiento muscular.</p>
                                <p class="fw700"> - Jhon Sneider, Abogado</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="bg2" id="get-in-touch">
        <div class="col-lg-12">
            <div class="center-block container">
                <div class="col-md-6">
                    <h3 class="center-b">
                        ESTAR EN CONTACTO
                    </h3>
                    <hr class="center-b">
                    <p class="text-center">
                        Nos encantaría saber de usted, si tiene alguna pregunta, no dude en ponerse en contacto con nosotros
                    </p>
                    <div class="center-b container">
                        <form action="{{ url('/basicemail') }}" method="post" class="col-sm-6 col-lg-5 center-b">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label class="col-xs-12">Tu nombre</label>
                            <input type="text" class="form-control" name="name" required="" placeholder="Nombre">
                            <label class="col-xs-12 mt10px">Tu email</label>
                            <input type="text" class="form-control" name="mail" required="" placeholder="ejemplo@email.com">
                            <label class="col-xs-12 mt10px">Tu mensaje</label>
                            <textarea class="form-control" rows="3" name="mensaje" required="" placeholder="Escribe aqui tu mensaje"></textarea>
                            <button type="submit" value="SEND" class="form-control btn azuloscuro mt20px"><span
                                        class="glyphicon glyphicon-envelope"></span> ENVIAR
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 mt-100px">
                    <div class="title-collapse col-sm-10">
                        <h4 class="h3 center-b"> COMPRAR AHORA!</h4>
                        <hr class="center-b">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="8Y9NXSNB89ZRS">
                                <select name="os0" class="form-control" title="Selecciona el producto">
                                    <option value="Testabolic HD X1">Testabolic HD X1 $60.00 USD</option>
                                    <option value="Testabolic HD X3">Testabolic HD X3 $140.00 USD</option>
                                    <option value="Testabolic HD X6">Testabolic HD X6 $220.00 USD</option>
                                </select>
                            <br>
                            <input type="hidden" name="currency_code" value="USD">
                            <button type="submit" name="submit" class="btn btn-block azuloscuro"><span
                                        class="glyphicon glyphicon-shopping-cart"></span> COMPRAR
                            </button>
                            <img alt="pay-testabolichd " src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif"
                                 width="1" height="1" title="Pay Testabolic HD">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection