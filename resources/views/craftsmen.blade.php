<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($craftsmen as $craftsman)
        <div class="grid grid-cols-3 gap-2 h-50 p-5  border rounded-lg border-gray-500">
            <div class="col-span-1 text-center flex flex-col justify-around items-center">
                <div class="block w-28">
                    <img class="object-cover" src="storage/{{$craftsman->image}}" alt="Image">
                </div>
                <h2 class="mt-4 font-extrabold text-gray-500">@if($craftsman->user)
                    {{$craftsman->user->name}}
                    @else
                    {{"Craftsman".$craftsman->id}}
                    @endif
                </h2>
                <ul class="mt-4">
                    <li><span class="font-extrabold">Company Name : </span>{{$craftsman->company_name}}</li>
                    <li><span class="font-extrabold">Company Address : </span>{{$craftsman->company_address}}</li>
                </ul>
            </div>
            <div class="col-span-2 h-full flex flex-col justify-around">
                <p class="overflow-y-auto rounded">{{$craftsman->description}}</p>
                <ul class="flex justify-around list-disc">
                    @foreach($craftsman->services as $service)
                    <li>{{$service->name}}</li>
                    @endforeach
                </ul>
                <a href="{{$craftsman->id}}/requests/create" class="self-end inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">New Request ></a>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>