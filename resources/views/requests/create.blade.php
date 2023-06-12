<x-app-layout>
    <div class="border border-gray-500 rounded-lg px-5 py-8 w-1/3 mt-28 m-auto">
        <h2 class="text-center">New Request</h2>
        <form action="/requests" method="post" enctype="multipart/form-data" class="flex flex-col justify-between items-stretch">
            @csrf
            <input type="hidden" name="user" value="{{auth()->user()->id}}">
            <input type="hidden" name="craftsman" value="{{$craftsman->id}}">
            <div class="mt-4">
                <x-input-label for="service" :value="__('Service')" />
                <select id="service" class="block mt-1 w-full" type="text" name="service" :value="old('service')" required>
                    @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('service')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" class="block mt-1 w-full" name="description" :value="old('description')" required></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />
                <input name="image" id="image" type="file" required>
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Create Request') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>