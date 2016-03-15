@foreach($recipes as $recipe)
    <article>
        <h3>
            <a href="{{ url ('recipes', $recipe->id) }}">{{ $recipe->title }}</a>
        </h3>

        <div class="body">{{ $recipe->excerpt }}</div>
    </article>
@endforeach