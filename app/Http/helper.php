<?php

function controllerName() {
    return substr(class_basename(Route::currentRouteAction()), 0, (strpos(class_basename(Route::currentRouteAction()), '@') -0) );
}
