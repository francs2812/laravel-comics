<main>
    <div class="container">
        <ul>
            @foreach ($comicsArray as $item)
                <li> 
                    <img src="{{$item["thumb"]}}" alt="" >
                    <h3>{{ $item["series"] }} </h3>
                </li>
            @endforeach
        </ul>
    </div>
</main>