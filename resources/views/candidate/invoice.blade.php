<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading step="Step 05" title="Invoice System" description="Generate your selected course
    invoice"/>
    <x-candidate.steps />

    <div class="max-w-6xl mx-auto mt-10">
        {{json_encode($candidate)}}
        {{json_encode($courses)}}
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis laudantium quo recusandae. A alias dolores earum eum fuga laborum, magnam, maxime nam necessitatibus nostrum numquam, odio sint temporibus ullam voluptatum!
    </div>

</x-layouts.main>
