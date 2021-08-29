<x-html-layout>
<x-slot name="page_title">{{$recipe->name}}</x-slot>
<x-slot name="page_content">
	<x-recipe-page>
		<x-slot name="recipe_image">{{$recipe->image}}</x-slot>
		<x-slot name="recipe_name">{{$recipe->name}}</x-slot>
		<x-slot name="recipe_difficulty">{{$recipe->difficulty}}</x-slot>
		<x-slot name="recipe_time">{{$recipe->time}}</x-slot>
		<x-slot name="recipe_quantity">{{$recipe->quantity}}</x-slot>
		<x-slot name="recipe_price">{{$recipe->price}}</x-slot>
		<x-slot name="recipe_overview">{{$recipe->overview}}</x-slot>
		<x-slot name="recipe_ingredients">
			@foreach ($recipe->ingredients as $ingredient)
				<li>
					{{$ingredient ?? 'Errore: ingrediente non disponibile'}}
				</li>
			@endforeach
		</x-slot>
		<x-slot name="recipe_method">{{$recipe->method}}</x-slot>
	</x-recipe-page>
	<x-region-section>
		<x-slot name="region_name">{{$region->name}}</x-slot>
		<x-slot name="region_recipes">
			@foreach ($region->recipes as $recipe)
				<x-recipe-card>
					<x-slot name="recipe_img">
						{{$recipe->image}}
					</x-slot>

					<x-slot name="recipe_name">
						{{$recipe->name}}
					</x-slot>

					<x-slot name="recipe_uri">
						{{$recipe->uri}}
					</x-slot>
				</x-recipe-card>
			@endforeach
		</x-slot>
	</x-region-section>
</x-slot>
</x-html-layout>