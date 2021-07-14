<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading title="Personal Information" description="Enter your information to complete the
    registration" step="Step 03"/>
    <x-candidate.steps  />

    <div class="max-w-6xl mx-auto mt-10">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    @livewire('frontend.lw-personal-info')
                </div>
            </div>
        </div>



    </div>
</x-layouts.main>
