<ul>
    @foreach($data_menu[0] as $menu_item)
        <li>
            <a href="{{ $menu_item['link'] }}">{{ $menu_item['name'] }}</a>
            @if(isset($data_menu[$menu_item['id']]) && count($data_menu[$menu_item['id']]) > 0)
                {!!  show_menu($data_menu, $menu_item['id'])  !!}
            @endif
        </li>
    @endforeach
</ul>
