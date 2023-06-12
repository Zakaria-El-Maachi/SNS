<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($requests as $request)
        <div class="grid grid-cols-3 gap-2 h-50 border border-gray-500 p-4 rounded-lg">
            <div class="col-span-2 h-full flex flex-col justify-around">
                <h2>{{$request->service->name}}</h2>
                <p class="h-1/3 overflow-y-auto rounded">{{$request->description}}</p>
                <h5 class="w-fit px-4 py-2 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest">{{$request->status}}</h5>
            </div>
            <div class="col-span-1 text-center flex flex-col justify-around items-center">
                <h2 class="underline underline-offset-4">@if($request->craftsman->user)
                    {{$request->craftsman->user->name}}
                    @else
                    Craftsman
                    @endif
                </h2>
                <div class="w-3/5 mx-auto">
                    <img class="object-cover" src="storage/{{$request->craftsman->image}}" alt="Image">
                </div>
                @if($request->status == 'finished')
                <a href="{{$request->craftsman->id}}/reviews/create" class="cursor-pointer w-fit px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Review</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>