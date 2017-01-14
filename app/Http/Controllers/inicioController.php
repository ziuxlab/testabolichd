<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    //
    public function espanol()
    {

        SEO::setTitle('TESTABOLIC HD - El mejor aumentador de testosterona');
        SEO::setDescription('TESTABOLIC HD es la fórmula más segura y eficaz para aumentar los niveles de testosterona en el cuerpo.'); //150
        SEO::setCanonical('https://testabolichd.com/es');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('https://testabolichd.com/es');
        SEOMeta::addKeyword(['testabolic hd', 'aumentador de testosterona', 'precursor de testosterona', 'precursor natural']);

        $idioma = "español";
        return view('inicio-es', compact('idioma'));
    }

    public function ingles()
    {

        SEO::setTitle('TESTABOLIC HD - The best testosterone booster');
        SEO::setDescription('TESTABOLIC HD is the formula to increase testosterone levels in the body.');
        SEO::setCanonical('https://testabolichd.com');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('https://testabolichd.com');
        SEOMeta::addKeyword(['testabolic hd', 'Increase testosterone', 'Testosterone precursor', 'natural precursor']);
        return view('inicio');
    }
}
