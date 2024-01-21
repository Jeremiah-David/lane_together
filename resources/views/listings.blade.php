@extends('layout')

@section("content")


<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>


@unless((count($listings) == 0))

@foreach ($listings as $listing) 
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
       
        <div>

            {{--      'title' => $this->faker->sentence(1),
                'tags' => 'Information',
                'company' => $this->faker->sentence(1),
                'location' => $this->faker->sentence(1),
                'phone' => '541-123-1234',
                'description' => $this->faker->sentence(1) --}}
            <h2 class="text-2xl">
               {{$listing->title}}
            </h2>
            <div class="mb-4">
                <span class="text-xl font-bold ">{{$listing->company}}</span> 
                <span class="text-xl">{{$listing->location}}</span>
            </div>

            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-eugene text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$listing->title}}</a>
                </li>
                <li
                    class="flex items-center justify-center bg-eugene text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$listing->title}}</a>
                </li>
                <li
                    class="flex items-center justify-center bg-eugene text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$listing->title}}</a>
                </li>
                <li
                    class="flex items-center justify-center bg-eugene text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$listing->title}}</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</div>
@endforeach

@else
    <p>No listings found</p>
@endunless

</div>

@endsection