<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($major_category_names as $major_category_name)
        <h2>{{ $major_category_name  }}</h2>
            @foreach ($categories as $category)
                @if ($category->major_category_name === $major_category_name)
                        <label class="samuraimart-sidebar-category-label"><a href="{{ route('products.index',['category' => $category->id]) }}">{{ $category->name }}</a></label>
                @endif 
            @endforeach
        @endforeach
    </div>
</body>
</html>