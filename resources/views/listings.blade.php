<h1>
    Eugene Together
    <?php{{ $heading}}; ?>
</h1>

{{-- @if(count($listing) == 0)
    {p>No listings found</p>}
@endif --}}

@unless((count($listings) == 0))

@foreach ($listings as $listing) 
    <h3>
       <a href="/listings/{{$listing['id']}}"> 
       {{$listing['title']}}; </a>
    </h3>
    <p>
       {{$listing['description']}}
    </p>
@endforeach

@else
    <p>No listings found</p>
@endunless