<x-app-layout>
    <div class="w-4/5 mx-auto mt-28 border border-gray-500 rounded-lg grid grid-cols-2">
        <div class="px-5 py-8 border-r border-blue-200">
            <h2 class="text-center">New Review</h2>
            <form action="/reviews" method="post" class="flex flex-col justify-between items-stretch">
                @csrf
                <input type="hidden" name="request_id" value="{{$request->id}}">
                <x-input-label class=" mt-4" value='Rating' />
                <div class="flex justify-around items-center">
                    <div class="mt-4 flex flex-col justify-evenly items-center w-4">
                        <x-input-label for="rating1" value="1" />
                        <input id="rating1" class="block mt-1 w-full" type="radio" name="rating" value=' 1' />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>
                    <div class="mt-4 flex flex-col justify-evenly items-center w-4">
                        <x-input-label for="rating2" value="2" />
                        <input id="rating2" class="block mt-1 w-full" type="radio" name="rating" value='1' />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>
                    <div class="mt-4 flex flex-col justify-evenly items-center w-4">
                        <x-input-label for="rating3" value="3" />
                        <input id="rating3" class="block mt-1 w-full" type="radio" name="rating" value='1' />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>
                    <div class="mt-4 flex flex-col justify-evenly items-center w-4">
                        <x-input-label for="rating4" value="4" />
                        <input id="rating4" class="block mt-1 w-full" type="radio" name="rating" value='1' />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>
                    <div class="mt-4 flex flex-col justify-evenly items-center w-4">
                        <x-input-label for="rating5" value="5" />
                        <input id="rating5" class="block mt-1 w-full" type="radio" name="rating" value='1' />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" class="block mt-1 w-full" name="description" :value="old('description')" required></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Submit Review') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-3 h-50 border border-gray-500 px-4 rounded-lg">
            <div class="col-span-2 h-full flex flex-col justify-evenly">
                <h2>{{$request->service->name}}</h2>
                <p class="block">{{$request->description}}</p>
            </div>
            <div class="col-span-1 text-center flex flex-col justify-evenly items-center">
                <h2 class="underline underline-offset-4">@if($request->craftsman->user)
                    {{$request->craftsman->user->name}}
                    @else
                    Craftsman
                    @endif
                </h2>
                <div class="w-4/5 mx-auto">
                    <img class="object-cover rounded-full" src="/storage/{{$request->craftsman->image}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>