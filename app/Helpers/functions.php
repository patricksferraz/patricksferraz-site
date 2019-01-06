<?php

function parseLocale()
{
    // Busca a primeira rota da URL
    $locale = request()->segment(1);

    // Define os locales da aplicação
    $languages = ['br', 'en'];

    // Verifica se o locale passado na URL é válido
    // Se sim, então muda o idioma da aplicação e retorna o locale
    // Se não, então deixa o idioma padrão
    if (in_array($locale, $languages))
    {
        App::setLocale($locale);
        return $locale;
    }

    return '/';
}
