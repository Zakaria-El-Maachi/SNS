<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($requests as $request)
        <div class="grid grid-cols-3 gap-2 h-50 border border-gray-500">
            <div class="col-span-2 h-full flex flex-col justify-around">
                <h2>@if($request->service)
                    {{$request->service->name}}
                    @else
                    Service
                    @endif
                </h2>
                <p class="h-1/3 overflow-y-auto rounded">{{$request->description}}</p>
                <h5>{{$request->status}}</h5>
            </div>
            <div class="col-span-1 text-center flex flex-col justify-around">
                <h2>@if($request->craftsman->user)
                    {{$request->craftsman->user->name}}
                    @else
                    Craftsman
                    @endif
                </h2>
                <img src="storage/{{$request->craftsman->image}}" alt="Image">
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>