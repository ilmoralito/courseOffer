<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Helper;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->helper = new Helper;
    }

    public function index($headquarter = 'Leon')
    {
        $headquarter = $this->helper->headquarters()->where('headquarter', $headquarter)->first();

        return view('offer.index', compact('headquarter'));
    }

    public function show($headquarter, $slug)
    {
        $offer = collect($this->helper->headquarters()->where('headquarter', $headquarter)->first()['offers'])->where('slug', $slug)->first();

        return view('offer.show', compact('offer'));
    }

    public function faqs($headquarter, $slug)
    {
        $offer = collect($this->helper->headquarters()->where('headquarter', $headquarter)->first()['offers'])->where('slug', $slug)->first();

        return view('offer.faqs', compact('offer'));
    }

    public function schedules($headquarter, $slug)
    {
        $offer = collect($this->helper->headquarters()->where('headquarter', $headquarter)->first()['offers'])->where('slug', $slug)->first();

        return view('offer.schedules', compact('offer'));
    }

    public function tutors($headquarter, $slug)
    {
        $offer = collect($this->helper->headquarters()->where('headquarter', $headquarter)->first()['offers'])->where('slug', $slug)->first();

        return view('offer.tutors', compact('offer'));
    }
}
