<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index(){
            $pageData = array(
        'title'=>"Cory's Corner",
        'pages' => ['About', 'Projects', 'PodCasts', 'InstaGram', 'LinkedIn', 'Git' , 'Twitter'],
        'socialMedias' => [`/about`, `/projects`, `https://anchor.fm/corys-corner`,`https://www.instagram.com/cory_hrycko/`,`https://www.linkedin.com/in/cory-hrycko/`, `https://github.com/CoryHrycko/`, `https://twitter.com/CoryHrycko`],
        'frontEnd' => ['Html5/Css3', 'Sass/Scss', 'Bootstrap', 'Webpack/Gulp', 'JavaScript', 'React', 'Vue', 'jQuery', 'JSON', 'AJAX'],
        'backEnd' => ['PHP-Laravel/Laravel Routes',"Java", "API's, HTTP Methods",'SQL/MYSQL/TSQL/POSTGREs','NODE.JS/NODE.JS Routes','Version Controls','Python-Flask','Advanced Statistics'],
        );
		return view('pages.index') ->with($pageData) ;
    }
    public function about(){
        $pageData = array(
            'title'=>"Cory's Corner",
            'pages' => ['About', 'Projects', 'PodCasts', 'InstaGram', 'LinkedIn', 'Git' , 'Twitter'],
            'socialMedias' => [`/about`, `/projects`, `https://anchor.fm/corys-corner`,`https://www.instagram.com/cory_hrycko/`,`https://www.linkedin.com/in/cory-hrycko/`, `https://github.com/CoryHrycko/`, `https://twitter.com/CoryHrycko`],
            'frontEnd' => ['Html5/Css3', 'Sass/Scss', 'Bootstrap', 'Webpack/Gulp', 'JavaScript', 'React', 'Vue', 'jQuery', 'JSON', 'AJAX'],
            'backEnd' => ['PHP-Laravel/Laravel Routes',"Java", "API's, HTTP Methods",'SQL/MYSQL/TSQL/POSTGREs','NODE.JS/NODE.JS Routes','Version Controls','Python-Flask','Advanced Statistics'],
        );
        return view('pages.about') ->with($pageData) ;
    }
}