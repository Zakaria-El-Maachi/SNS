<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($requests as $request)
        <div class="grid grid-cols-3 gap-2 h-50">
            <div class="col-span-2 h-full flex flex-col justify-around">
                <h2>{{$request->service_id}}</h2>
                <p class="h-1/3 overflow-y-auto rounded">{{$request->description}}</p>
                <h5>{{$request->status}}</h5>
            </div>
            <div class="col-span-1 text-center flex flex-col justify-around">
                <h2>{{$request->craftsman_id}}</h2>
                <img src="" alt="">
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>