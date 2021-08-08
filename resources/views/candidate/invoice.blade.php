<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading step="Step 05" title="Invoice System" description="Generate your selected course
    invoice"/>
    <x-candidate.steps />

    <div class="max-w-6xl mx-auto mt-10">
        <div class="text-center">Courses for which Invoices are not generated yet.</div>
            @if(count($courses)!=0)
                <div class="max-w-6xl mx-auto mt-10">
                    <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                        @foreach($courses as $course)
                            <livewire:course-invoice :course="$course"/>
                        @endforeach
                    </div>
                </div>
            @endif
    </div>

</x-layouts.main>

