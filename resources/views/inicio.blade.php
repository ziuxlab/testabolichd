@extends('layouts.app')

@section('html')
<html lang="en">
@endsection

@section('meta')
    <!-- MINIFIED -->
    {!! SEO::generate() !!}

    <meta name="language" content="english">
    <link rel="alternate" hreflang="es" href="https://testabolichd.com/">
@endsection

@section('content')
    @if (Session::has('send'))
        <div class="alert alert-success alerta mt70px">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="glyphicon glyphicon-remove text-white"></i>
            </button>
            Message send correctly
        </div>
    @endif

    <section class="bg0 parallax">
        <div class="col-lg-12">
            <div class="center-block container fw700">
                <div class="col-md-10">
                    <div class="height150px">
                        <div class="h1 mt-100px">
                            <div id="typed-strings">
                                <p><h1>SUPER ANABOLIC FORMULA </h1>
                            </div>
                            <strong><span class="element float-left"></span></strong>
                        </div>
                    </div>
                    <p class="h2">
                        <strong>TESTABOLIC HD</strong> is the result of clinical studies that gives rise to the safest and most
                        effective formula to increase testosterone levels in the body.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bgnone">
        <div class="col-lg-12">
            <div class=" col-md-6 col-md-offset-3">
                <h2 class="center-b">SUPER ANABOLIC FORMULA</h2>
                <hr class="center-b">
                <p class="text-center">
                    <strong>TESTABOLIC HD</strong> is the result of clinical studies that gives rise to the safest and most
                    effective formula to increase testosterone levels in the body.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="col-lg-12 mt50px">
            <div class="center-block container center-b">
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-star wow fadeInUp center-b fontOne"></span>
                    <h3 class="center-b">RENEWED FORMULA</h3>
                    <hr class="center-b">
                    <p>We have updated and improved the formula to enhance the effects of <u>TESTABOLIC HD</u>
                       .</p>
                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-leaf wow fadeInUp center-b fontTwo"></span>
                    <h3 class="center-b ">NATURAL PRECURSOR</h3>
                    <hr class="center-b ">
                    <p><u>TESTABOLIC HD</u> contains a blend of plant extracts, making it a safe supplement
                        with no contraindications.</p>
                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-ok wow fadeInUp fontThree"></span>
                    <h3>REAL RESULTS</h3>
                    <hr class="center-b ">
                    <p><u>TESTABOLIC HD</u> has the best results, stable and secure in increasing testosterone
                        to maximum physiological levels in just 28 days.</p>
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

                    <h2 class="center-b ">¿WHAT IS <strong>TESTABOLIC HD</strong>?</h2>
                    <hr class="center-b ">
                    <p class="text-justify">
                        <strong>TESTABOLIC HD</strong> is the result of clinical studies that give rise to the safest and most effective
                        formula to increase testosterona levels in the body, especially designed for people who want to
                        increase their muscle mass, increase strength and energy levels, lower rates body to have a “rocky”
                        and lean look on his muscular build and enhance their sexual desire.
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
            <h2> ACTIVE INGREDIENTS</h2>
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
                        <strong>TESTABOLIC HD</strong> was designed in a special way. We ignore the market and only we hear SCIENCE, we
                        do not incorporate any nutraceutical, by popular it was, only if it had not shown strong results
                        in human studies for the increased rate of production of testosterone.
                        <br><br>
                        So in <strong>TESTABOLIC HD </strong> you do not find substances as <i>“Tribulus Terrestris” (1-2), D-aspartic acid
                            (DAA),</i> or any other “stuffing”, only ingredients that are scientifically proven.
                        <br><br>
                        <strong>TESTABOLIC HD</strong> incorporates its patented formula, one of the most revolutionary components
                        industry of bodybuilding and fitness, standardized extract <i>Long Jack (Tongkat Ali – Eurycoma
                            Longifolia Jack),</i> plant native from Malaysia, which has demonstrated the stimulation of
                        production testosterone levels almost doubled (192%) of physiological, while decreasing
                        conducive OF SEX HORMONES binding globulin (SHBG) (the compound that binds to testosterone to
                        keep it in the unusable state), and the promotion of <i>IGF-1.</i>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-justify mt10px">
                        <strong>TESTABOLIC HD</strong> also adds <i>Boron Citrate,</i> providing a precise Elemental Boron according to
                        scientific studies (6), showed great effectiveness to increase levels of free testosterone and
                        estradiol levels decrease, improving markedly increased muscle mass, loss of dose fat, improve
                        skin tone (muscle), increased strength, better sleep and recovery, repair of injuries to
                        articular level and increased vascularity.
                        <br><br>
                        It incorporates revolutionary ingredients with high purity.
                        <br><br>
                        <strong>TESTABOLIC HD</strong> combines the two most powerful natural anabolic agents discovered to maximum
                        levels of purity, <i>Methoxyisoflavone and Ecdysterone,</i> responsible for generating fast muscle
                        growth, provide recovery after intensive training and generate fat burning through <i>lipotropic
                            mechanisms</i> (use of reserves fat as energy – fat oxidation), without any of the secondary effects
                        of steroids, such as acne, male pattern baldness, enlarged prostate, high blood pressure, heart
                        problems, liver toxicity, among many others.
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
                         class="img-responsive wow fadeIn" data-wow-duration="1s" alt="testabolic-comparacion" title="Testabolic Comparison">
                </div>
                <div class="col-sm-6 ">
                    <h5 class="h2 center-b"><strong>TESTABOLIC HD </strong> THE BEST FORMULA</h5>
                    <hr class="center-b">
                    <p class="text-justify mt50px">
                        <strong>TESTABOLIC HD</strong> is the only patented natural formula that has produced the most dramatic, stable
                        and reliable results in the increase of testosterone to maximum physiological levels in just 28
                        days.
                        <br><br>
                        The high effectiveness of <strong>TESTABOLIC HD</strong> is based on providing the body exact dose to increase
                        levels of free testosterone (active) and lower levels of <i>estradiol (estrogen),</i> while
                        dramatically reducing the conversion rate of <i>dihydrotestosterone (DHT)</i> for that reason the
                        flavoring is null and converted to <strong>TESTABOLIC HD</strong>, in the climber testosterone lasting results
                        on the market.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg6">
        <div class="col-lg-12">
            <div class="center-block container center-b">
                <h5 class="h2"> INGREDIENTES ACTIVOS DE <strong>TESTABOLIC HD</strong> </h5>
                <hr class="center-b">
                <div class="col-sm-6">
                    <p class="text-left">
                        Each service provides <strong>TESTABOLIC HD</strong> <i>Zinc Gluconate and Magnesium Aspartate</i>, key minerals in the
                        states of higher biological value for the organism to maintain the proper function of the endocrine
                        system over production and regulation of free testosterone and growth hormone.

                        <strong>TESTABOLIC HD</strong> is the only supplement on the market that provides the user a DUAL EXACT DOSE. In
                        the first consume (with the first meal of the day, one red cap softgel), precise components will be
                        provided for an extended production of testosterone throughout the day while the ratio of cortisol
                        production is inhibited. The second decision (before going to bed, one dark red cap softgel),
                        provide an extra load of L-Dopa standardized extract of <i>Mucuna pruriens</i> isolated, which according to
                        research, proves to be an excellent precursor of dopamine and in turn greatly increases the
                        production of growth hormone.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bgnone" id="how-to-use">
        <div class="col-lg-12">
            <div class="center-block container">
                <div class="col-sm-6">
                    <h3 class="center-b">FAQS</h3>
                    <hr class="center-b">
                    <!-- VER MAS -->

                    <p role="button" data-toggle="collapse" data-target="#1" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span> La mujer puede consumir <i>TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="1">
                        <div class="well">
                            <p>R / Yes. Both men and women can receive all the benefits of eating
                                <u>TESTABOLIC HD</u> safely, increase muscle mass, increase strength and energy levels and
                                decrease body fat percentages. <u>TESTABOLIC HD</u> is a natural anabolic, but should not be
                                consumed by pregnant or lactating women.</p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#2" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span> What if miss a dose of <i>TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="2">
                        <div class="well">
                            <p> R / It is okay. Skip this missed dose and continue your regular dosing
                                schedule. Do not take a double dose to make up for a missing one.
                            </p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#3" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>  What products should I or not should I combine
                        with <i>TESTABOLIC HD</i>?
                    </p>
                    <div class="collapse" id="3">
                        <div class="well">
                            <p class="text-justify">R / <u>TESTABOLIC HD</u> is fully compatible with all types of supplements
                                and nutritional supplements. </p>
                        </div>
                    </div>
                    <br>
                    <p role="button" data-toggle="collapse" data-target="#4" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span> ¿Does <i>HD TESTABOLIC</i> requires to be cycling?
                    </p>
                    <div class="collapse" id="4">
                        <div class="well">
                            <p class="text-justify">R / No. <u>TESTABOLIC HD</u> can be taken permanently regardless of the
                                objectives they pursue; <u>TESTABOLIC HD</u> is fully compatible and highly recommended in
                                stages of volume, definition and maintenance.
                            </p>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-sm-6">
                    <h3 class="center-b">TAKING <u>TESTABOLIC HD</u></h3>
                    <hr class="center-b">
                    <ul class="ml8">
                        <li class="mt8px">Take 2 dose per day, including the days you are not physically active.</li>
                        <li class="mt8px">Take one red softgel capsule with the first meal of the day (breakfast).</li>
                        <li class="mt8px">Take one dark red softgel capsule before bedtime.</li>
                        <li class="mt8px">Do not exceed more than 2 capsules within 24 hours.</li>
                        <li class="mt8px">Please read the entire label before using.</li>
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
                    <img src="{{url('images/bg-transparente.png')}}" alt="imagen transparente" title="image transparent ">
                    <div class="carousel-caption">
                        <div class="title-collapse">
                            <p class="titleCollapse">The results are great, really surprised.</p >
                            <p class="fw700"> - Ian Tower, Gym instructor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                    <div class="carousel-caption">
                        <div class="title-collapse">
                            <p class="titleCollapse">I have increased my muscle mass in an incredible way.</p>
                            <p class="fw700">- John Sommer, Fitness Model</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                    <div class="carousel-caption">
                        <div class="title-collapse">
                            <p class="titleCollapse">I have noticed more strength , more muscle growth.</p>
                            <p class="fw700"> - Jhon Sneider, Lawyer</p>
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
                        GET IN TOUCH
                    </h3>
                    <hr class="center-b">
                    <p class="text-center">
                        We would love to hear from you, if you have any questions, do not hesitate to contact us
                    </p>
                    <div class="center-b container">
                        <form action="{{ url('/basicemail') }}" method="post" class="col-sm-6 col-lg-5 center-b">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label class="col-xs-12">Your name</label>
                                <input type="text" class="form-control " name="name" required="" placeholder="Name">
                            <label class="col-xs-12 mt10px">Your email</label>
                                <input type="text" class="form-control" name="mail" required="" placeholder="Example@email.com">
                            <label class="col-xs-12 mt10px">Your message</label>
                                <textarea class="form-control " rows="3" name="mensaje" required="" placeholder="Write here your message"></textarea>
                            <button type="submit" value="SEND" class="form-control btn azuloscuro mt20px"><span
                                        class="glyphicon glyphicon-envelope"></span> SEND
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 mt-100px">
                    <div class="title-collapse col-sm-10">
                        <h4 class="h3 center-b">BUY NOW!</h4>
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
                                        class="glyphicon glyphicon-shopping-cart"></span> BUY
                            </button>
                            <img alt="pay-testabolic " src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif"
                                 width="1" height="1" title="Pay Testabolic">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection