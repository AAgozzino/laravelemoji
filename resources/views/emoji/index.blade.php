<ul>
    @foreach ($emoji as $item)
        <li>
            <div>
                <a href="{{route('emoji.show', $item)}}">{{$item->character}}</a>
                 <a href="{{route('emoji.edit', $item)}}">Edit</a>
                 <form action="{{route('emoji.destroy', $item)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="delete">
                 </form>
            </div>
        </li>    
    @endforeach
</ul>