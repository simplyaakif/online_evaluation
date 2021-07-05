<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading title="Select your Course" step="Step 01" description="Kindly select the desired course"/>
    <x-candidate.steps/>
    <div class="max-w-6xl mx-auto mt-10">
        @livewire('frontend.course-selection')
    </div>
</x-layouts.main>
