<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function index()
    {
        $offers = $this->offers();

        return view('offer.index', compact('offers'));
    }

    public function show($slug)
    {
        $offer = $this->offers()->where('slug', $slug)->first();

        return view('offer.show', compact('offer'));
    }

    public function faqs($slug)
    {
        $offer = $this->offers()->where('slug', $slug)->first();

        return view('offer.faqs', compact('offer'));
    }

    public function schedules($slug)
    {
        $offer = $this->offers()->where('slug', $slug)->first();

        return view('offer.schedules', compact('offer'));
    }

    public function modules($slug)
    {
        $offer = $this->offers()->where('slug', $slug)->first();

        return view('offer.modules', compact('offer'));
    }

    public function tutors($slug)
    {
        $offer = $this->offers()->where('slug', $slug)->first();

        return view('offer.tutors', compact('offer'));
    }

    private function offers()
    {
        Carbon::setLocale('es');
        $now = Carbon::now('America/Managua');

        return collect([
            [
                'name' => 'Course name one',
                'slug' => 'course-name-one',
                'image' => 'https://s3-us-west-2.amazonaws.com/uccleon.peide.website/projects/1/G29IpdxxiJpEkbmhNA22w80rPrBsw5wkdOzhuDgK.jpeg',
                'price' => '125',
                'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                'modality' => 'sunday',
                'faqs' => [
                    [
                        'question' => 'Question one?',
                        'answer' => 'Lorem ipsum dolor sit amet',
                        'updated_at' => $now
                    ],[
                        'question' => 'Question two?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quidem iste neque doloremque assumenda vitae adipisci aspernatur, odit dolorum! Cum fugit rerum ipsa numquam iure, qui quas ullam saepe sint!',
                        'updated_at' => $now
                    ]
                ],
                'schedules' => [
                    [
                        'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                        'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                    ],[
                        'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                        'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                    ],[
                        'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                        'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                    ]
                ],
                'modules' => [
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequatur illo maiores suscipit error et modi sunt at!',
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium amet dolores repellendus, nisi, asperiores iste placeat, sequi voluptas dignissimos illo ducimus.',
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero fugit necessitatibus.'
                ],
                'tutors' => [
                    [
                        'name' => 'John Doe',
                        'title' => 'MSC'
                    ],[
                        'name' => 'Jane Doe',
                        'title' => 'Dr.'
                    ]
                ],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nobis, fugit voluptates excepturi iusto officiis reprehenderit quas nam sint tempore, assumenda similique numquam ullam nostrum quisquam iure dolor expedita repudiandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ratione ab reprehenderit omnis voluptates quae ullam vero, quidem maxime molestiae tenetur, voluptatibus hic eaque numquam est quas, dicta repellendus nulla.',
                'addressed_to' => [
                    'Sistemas', 'Marketing', 'Administracion'
                ]
            ],[
                'name' => 'Course name two',
                'slug' => 'course-name-two',
                'image' => ' https://s3-us-west-2.amazonaws.com/uccleon.peide.website/projects/12/Buj2vANNoly32mm8oCq0ihqmWV6Ra6LldByVaSGD.jpeg',
                'price' => '80',
                'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                'modality' => 'saturday',
                'faqs' => [
                    [
                        'question' => 'Question one?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'updated_at' => $now
                    ],[
                        'question' => 'Question two?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quidem iste neque doloremque assumenda vitae adipisci aspernatur, odit dolorum! Cum fugit rerum ipsa numquam iure, qui quas ullam saepe sint!',
                        'updated_at' => $now
                    ],[
                        'question' => 'Question three?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quidem iste neque doloremque assumenda vitae adipisci aspernatur, odit dolorum!',
                        'updated_at' => $now
                    ]
                ],
                'schedules' => [
                    [
                        'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                        'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                    ],[
                        'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                        'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                    ]
                ],
                'modules' => [
                    'Lorem ipsum dolor sit amet xml',
                    'Lorem ipsum dolor sit amet abc',
                ],
                'tutors' => [
                    [
                        'name' => 'John Doe',
                        'title' => 'MSC'
                    ]
                ],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nobis, fugit voluptates excepturi iusto officiis reprehenderit quas nam sint tempore, assumenda similique numquam ullam nostrum quisquam iure dolor expedita repudiandae.',
                'addressed_to' => [
                    'Agraria'
                ]
            ]
        ]);
    }
}
