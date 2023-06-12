<x-app-layout>
    <div class="flex justify-around items-center mt-8">
        <h1 class="text-center text-7xl">Reviews</h1>
        <div class="flex justify-evenly items-center gap-x-20">
            <h3 class="text-4xl">{{$requests[0]->craftsman->user->name}}</h3>
            <img class="object-contain h-20 rounded-lg" src="/storage/{{$requests[0]->craftsman->image}}" alt="Image">
        </div>
    </div>
    <div class="mx-auto w-4/5">
        @foreach($requests as $request)
        <div class="flex flex-col justify-around border border-gray-500 rounded-lg my-7 p-5">
            <div>
                <h3 class="mb-4 font-extrabold">{{$request->user->name}}</h3>
                <h4 class="mb-4 text-sm">{{$request->review->rating}} Stars</h4>
            </div>
            <div class="self-center">
                <p class="mb-4">{{$request->review->description}}</p>
                <h6 class="text-right">{{$request->review->created_at}}</h6>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>