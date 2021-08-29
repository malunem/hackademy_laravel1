<x-html-layout>

	<x-slot name="page_title">{{$region->name}}</x-slot>

	<x-slot name="page_content">
			@foreach ($region->recipes as $recipe)
				<x-big-recipe>
					<x-slot name="recipe_img">
						{{$recipe->image}}
					</x-slot>
		
					<x-slot name="recipe_name">
						{{$recipe->name}}
					</x-slot>
		
					<x-slot name="recipe_overview">
						{{$recipe->overview}}
					</x-slot>
		
					<x-slot name="recipe_difficulty">
						{{$recipe->difficulty}}
					</x-slot>
		
					<x-slot name="recipe_time">
						{{$recipe->time}}
					</x-slot>
		
					<x-slot name="recipe_quantity">
						{{$recipe->quantity}}
					</x-slot>
		
					<x-slot name="recipe_price">
						{{$recipe->price}}
					</x-slot>
		
					<x-slot name="recipe_uri">
						{{$recipe->uri}}
					</x-slot>
				</x-big-recipe>
			@endforeach
	</x-slot>
</x-html-layout>