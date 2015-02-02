<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>GAMEGURU</title>
    <link rel="stylesheet" type="text/css" href="{$css_dir}bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
    <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
    </script>

    <![endif]-->
    {if isset($css_files)}
        {foreach from=$css_files key=css_uri item=media}
            <link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
        {/foreach}
    {/if}
    {if isset($js_files)}
        {foreach from=$js_files item=js_uri}
            <script type="text/javascript" src="{$js_uri}"></script>
        {/foreach}
    {/if}
    {$HOOK_HEADER}
    <script src="{$js_dir}jquery-1.11.0.js"></script>
    <script src="{$js_dir}bootstrap.js"></script>
    <script src="{$js_dir}jquery.tinycarousel.js"></script>
    <script src="{$js_dir}function.js"></script>

</head>
<body>
<section class="header">
    <div class="header-nav">
        <div class="container">
            <ul>
                <li>
                    <a href="" class="account">My Account</a>
                </li>
                <li>
                    <a href="" class="wish">Wish List <span>(0)</span></a>
                </li>
                <li>
                    <a href="" class="shop-cart">Shopping Cart</a>
                </li>
                <li>
                    <a href="" class="delivery">Delivery</a>
                </li>
                <li>
                    <a href="" class="log">Login</a>
                </li>
            </ul>
            <div class="search-block">
                <input type="search" placeholder="Search" class="search">
                <input type="submit" class="submit-search" value="">
            </div>
            <div class="top-right">
                <div class="shop-block">
                    <a href="" class="items">0</a> item(s) - <span class="cash">0.00</span>
                </div>
                <div class="dropdown money">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
                        USD
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">RUR</a></li>
                    </ul>
                </div>
                <div class="dropdown lang">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
                        <a href="#" class="en-En lang-link">English</a>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" >
                        <li><a href="#" class="ru-Ru lang-link">Russian</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navigation">
        <div class="container">
            <a href="" class="logo"></a>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="" class="active">PC</a>
                </li>
                <li>
                    <a href="">xbox360</a>
                </li>
                <li>
                    <a href="">ps3</a>
                </li>
                <li>
                    <a href="">vita</a>
                </li>
                <li>
                    <a href="">wii</a>
                </li>
                <li>
                    <a href="">3ds</a>
                </li>
                <li>
                    <a href="">games guide</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-title">
        <div class="container">
            <span>best</span>game collection 2015
        </div>
        <a href="" class="shop-now">shop now</a>
    </div>
    <div class="cursor"></div>
</section>