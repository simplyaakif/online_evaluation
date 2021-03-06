<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading title="Personal Information" description="Enter your information to complete the
    registration" step="Step 03"/>
    <x-candidate.steps  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/inputmask/dependencyLibs/inputmask.dependencyLib.min.js" integrity="sha512-b+0AfljGJrModvgOwccNQNSxHHD8vDLBZ9H4bf+dZL89QDJsa2OlGU94bVs5yxLEsAL92/mUcuSp1hJJ6390eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/inputmask/inputmask.min.js" integrity="sha512-DVfS/GbZzLMmxBL/CW92N84eHP2Fq9d+r9RKbvctcvzISVfu+WvD+MCvbK9j8I6nVLrntGo3UUVrNFUDX0ukBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
