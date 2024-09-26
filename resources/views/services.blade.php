<hl>Our services</hl>
@if(count($services)>0)
<ul>
    @foreach($services as $service)
    <li> {{$service}} </li>
    @endforeach
    @else
    No Data
    @endif
</ul>