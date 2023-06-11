<x-app-layout>
    <div>
        @foreach($reviews as $review)
        <div>
            <div>
                <img src="" alt="Profile Image">
                <h4>{{User::find($review->request->user_id)->name}}</h4>
            </div>
            <div>
                <p>$review->description</p>
                <h6>$review->timestamp</h6>
            </div>
        </div>
    </div>
</x-app-layout>