@props(['active' => false])
<li>
    <a {{ $attributes }}
        @class([ 'p-2 border-white ' , 'border-b-2 '=> $active, 'border-none ' => !$active])>{{ $slot }}</a>
</li>