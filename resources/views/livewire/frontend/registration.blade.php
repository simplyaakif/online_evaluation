<div>
    <form wire:submit.prevent="submit" class="space-y-6" action="#" method="POST">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">
                Name
            </label>
            <div class="mt-1">
                <input wire:model.defer="name" id="name" name="name" type="text" autocomplete="name" required
                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('name') <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p> @enderror
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
                Mobile Number
            </label>
            <div class="mt-1">
                <input wire:model.defer="mobile"  id="mobile" name="phone" type="text"
                       autocomplete="phone" required
                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('mobile') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p> @enderror
            </div>
            <script>
                var mobile = document.getElementById('mobile');
                var maskOptions = {
                    mask: '00000000000'
                };
                var mask = IMask(mobile, maskOptions);
            </script>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
                Email address
            </label>
            <div class="mt-1">
                <input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" required
                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
                Password
            </label>
            <div class="mt-1">
                <input wire:model.defer="password" id="password" name="password" type="password"
                       autocomplete="current-password"
                       required
                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p> @enderror
            </div>
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
                Confirm Password
            </label>
            <div class="mt-1">
                <input wire:model.defer="password_confirmation" id="password" name="password" type="password"
                       autocomplete="current-password"
                       required
                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password_confirmation') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message
                }}</p>
                @enderror

            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="text-sm">
                <a href="{{route('login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Already Registered ? Login Now
                </a>
            </div>
        </div>

        <div>
            <button type="submit"
                    class="w-full relative flex items-center justify-center py-2 px-4 border border-transparent rounded-md
                    shadow-sm
                    text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <div wire:loading class="mr-2 ">
                    <div class="la-ball-clip-rotate la-sm">
                        <div></div>
                    </div>
                </div>
                Sign Up
            </button>
        </div>
    </form>
</div>
