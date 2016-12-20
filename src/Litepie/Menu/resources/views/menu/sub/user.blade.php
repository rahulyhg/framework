
@foreach ($menus as $menu)
    @if ($menu->hasChildren())
    <li class="{{ $menu->active or '' }}">
        <a href="{{trans_url($menu->url)}}" >{{$menu->name}}</a>
        @include('menu::menu.sub.main', array('menus' => $menu->getChildren()))
    </li>
    @else
    <li  class="{{ $menu->active or '' }}">
            <a href="{{trans_url($menu->url)}}"><i class="{{$menu->icon}} hidden-sm hidden-xs"></i><span>{{$menu->name}}</span></a>
    </li>          
    @endif
@endforeach
