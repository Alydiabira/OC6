<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class RedirectController
{
    #[Route('/', name: 'redirect_home')]
    public function redirectToLocale(Request $request): RedirectResponse
    {
        return new RedirectResponse('/' . $request->getLocale() . '/');
    }
}
