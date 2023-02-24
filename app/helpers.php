<?php

function setActive(string $ruta)
{
    return request()->routeIs($ruta) ? 'active' : '';
}
