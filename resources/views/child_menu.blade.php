<ul>
    @foreach($data[$parent_id] as $menu_item)
        <li>
            <a href="{{ $menu_item['link'] }}">{{ $menu_item['name'] }} - {{ $menu_item['id'] }}</a>
            @if(isset($data[$menu_item['id']]) && count($data[$menu_item['id']]) > 0)
                {!!  show_menu($data, $menu_item['id']) !!}
            @endif
        </li>
    @endforeach
</ul>
