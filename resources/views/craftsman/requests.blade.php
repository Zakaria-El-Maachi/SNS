<x-app-layout>
    <div class="grid grid-cols-2 gap-5 p-5">
        @foreach($requests as $request)
        <div class="grid grid-cols-3 gap-2 border border-gray-500 rounded-lg px-5 py-3">
            <div class="col-span-2 h-full flex flex-col justify-evenly my-4">
                <h2>{{$request->service->name}}</h2>
                <p>{{$request->description}}</p>
                <h5>{{$request->status}}</h5>
            </div>
            <div class="col-span-1 text-center flex flex-col justify-evenly items-center my-4">
                <h2>{{$request->user->name}}</h2>
                <img class="object-contain h-60" src="/storage/{{$request->image}}" alt="Image">
            </div>
            @if($request->status == 'pending')
            <div class="col-span-3 flex justify-evenly mb-4" id="{{$request->id}}">
                <x-primary-button data-action="accept" class="accept">Accept</x-primary-button>
                <x-primary-button data-action="decline" class="decline">Decline</x-primary-button>
            </div>
            @endif
        </div>
        @endforeach
    </div>


    <script>
        function makeRequest(element) {
            var xhr = new XMLHttpRequest();
            var parent = element.parentElement;
            var id = parent.getAttribute('id');
            var action = element.getAttribute('data-action');
            xhr.open('PATCH', '/craftsman/request', true);

            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.setRequestHeader('X-HTTP-Method-Override', 'PATCH');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    location.reload();
                } else {
                    console.log('Error:', xhr.responseText);
                }
            };

            var data = {
                'request': id,
                'action': action
            };

            var jsonData = JSON.stringify(data);

            xhr.send(jsonData);
        }

        document.addEventListener('DOMContentLoaded', function() {
            var acceptButtons = document.querySelectorAll('.accept');
            var declineButtons = document.querySelectorAll('.decline');

            acceptButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    makeRequest(this);
                });
            });

            declineButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    makeRequest(this);
                });
            });
        });
    </script>


</x-app-layout>