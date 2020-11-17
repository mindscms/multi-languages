<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LocaleController extends Controller
{

    protected $previousRequest;
    protected $locale;

    public function switch($locale)
    {
        $this->previousRequest = $this->getPreviousRequest();
        $this->locale = $locale;
        $segments = $this->previousRequest->segments();

        if (array_key_exists($this->locale, config('locales.languages'))) {
            $segments[0] = $this->locale;

            $newRoute = $this->translateRouteSegments($segments);

            return redirect()->to($this->buildNewRoute($newRoute));
        }

        return back();
    }

    protected function getPreviousRequest()
    {
        return request()->create(url()->previous());
    }

    protected function translateRouteSegments($segments)
    {
        $translatedSegments = collect();

        foreach ($segments as $segment) {
            if ($key = array_search($segment, Lang::get('routes'))) {
                $translatedSegments->push(trans('routes.' . $key, [], $this->locale));
            } else {
                $translatedSegments->push($segment);
            }
        }
        return $translatedSegments;
    }

    protected function buildNewRoute($newRoute)
    {
        $redirectUrl = implode('/', $newRoute->toArray());
        $queryBag = $this->previousRequest->query();
        $redirectUrl .= count($queryBag) ? '?' . http_build_query($queryBag) : '';

        return $redirectUrl;
    }

}
