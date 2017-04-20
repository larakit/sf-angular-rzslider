<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 23.05.16
 * Time: 10:02
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-rzslider')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->jsPackage('rzslider.min.js')
    ->cssPackage('rzslider.min.css');
