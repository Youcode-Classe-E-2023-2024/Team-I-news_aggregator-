<!-- navbar.blade.php -->

@props(['links'])

<nav>
    <ul>
        @foreach($links as $key => $value)
            <li><a  href="{{ $value }}">{{ $key }}</a></li>
        @endforeach
    </ul>
</nav>
