<x-html-layout>
	<x-slot name="page_title">
		RicetteItaliane
	</x-slot>
	<x-slot name="page_content">
		
		<!-- Header recipe -->
		<x-big-recipe>
			
			<x-slot name="recipe_img">
				{{$recipe->image}}
			</x-slot>

			<x-slot name="recipe_name">
				{{$recipe->name}}
			</x-slot>

			<x-slot name="recipe_overview">
				{{substr($recipe->overview, 0, 300) . "[...]"}}
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
		
		<!-- regions -->
		@foreach ($regions as $region)
            <x-region-section>
				<x-slot name="region_name">
					{{$region->name}}
				</x-slot>

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
        @endforeach
	</x-slot>
</x-html-layout>