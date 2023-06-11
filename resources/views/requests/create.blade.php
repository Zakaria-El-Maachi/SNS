<x-app-layout>
    <form action="/request" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="service" :value="__('service')" />
            <x-text-input id="service" class="block mt-1 w-full" type="service" name="service" :value="old('service')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </form>
</x-app-layout>