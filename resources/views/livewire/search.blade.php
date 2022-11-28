<div class="bg-weather">
    <div class="card card-body col-md-6 offset-md-1">
        <input list="cities" name="citiy" id="citiy" class="form-control" value="Vijayawada" wire:model="searchTerm">
        <datalist id="cities" class="form-control">
            @if(!empty($cities))
            @foreach($cities as $city)
            <option id="{{$city->id}}" value="{{$city->id}}">{{$city->city_ascii.'-'.$city->country}}</option>
            @endforeach
            @endif
        </datalist>
    </div>
</div>
@push('scripts')
<script>
    $(function() {
        $('#citiy').on('blur', function() {
            alert($(this).val())
        });
    });
</script>
@endpush