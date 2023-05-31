<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($craftsmen as $craftsman)
        <div class="grid grid-cols-3 gap-2 h-50">
            <div class="col-span-1 text-center flex flex-col justify-around">
                <img src="{{$craftsman->image}}" alt="">
                <h2>{{$craftsman->name}}</h2>
                <ul>
                    <li>Company Name : {{$craftsman->company_name}}</li>
                    <li>Company Address : {{$craftsman->company_address}}</li>
                </ul>
            </div>
            <div class="col-span-2 h-full flex flex-col justify-around">
                <p class="overflow-y-auto rounded">{{$craftsman->description}}</p>
                <ul class="flex justify-around">
                    @foreach($craftsman->services as $service)
                    <li>{{$service->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>