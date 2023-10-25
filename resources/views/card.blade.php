<div class="col">
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">{{ $name['id'] }} {{ $name['name'] }}</h5>
            <p class="card-text">Lat: {{ $name['location']['lat'] }}, Lng: {{ $name['location']['lng'] }}</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#modal-map" data-lat="{{ $name['location']['lat'] }}" data-lng="{{ $name['location']['lng'] }}">View</button>
            <button type="button" class="btn btn-xs btn-secondary">Edit</button>
            <button type="button" class="btn btn-xs btn-danger">Delete</button>
        </div>
    </div>
</div>