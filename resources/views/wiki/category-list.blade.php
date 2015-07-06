
@if (count($index['subcategories']))
    <h3>Categories</h3>
    <ul>
        @foreach ($index['subcategories'] as $subcategory)
            <li><a href="{{ $subcategory['href'] }}">{{ $subcategory['name'] }}</a></li>
        @endforeach
    </ul>
@endif

@if (count($index['files']))
    <h3>Pages</h3>
    <ul>
        @foreach ($index['files'] as $file)
            <li><a href="{{ $file['href'] }}">{{ $file['name'] }}</a></li>
        @endforeach
    </ul>
@endif