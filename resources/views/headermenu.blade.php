@php
    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }
@endphp

@foreach($items as $menu_item)
    <li class="nav-item">
        <a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}
            @if ($menu_item->title == 'Videos')
                <i class="las la-angle-down"></i>
            @endif
        </a>
        @php
            $submenu = $menu_item->children;
        @endphp
        
        @if(isset($submenu))
     
            <ul class="{{ $menu_item->title == 'Videos' ? 'dropdown-menu' : '' }}">
                @foreach($submenu as $item)
                    <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
