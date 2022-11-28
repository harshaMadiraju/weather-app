<div class="bg-weather">
    <div class="card card-body col-md-6 offset-md-1" wire:ignore>
        <select class="js-example-basic-single" name="citiy" id="select2" class="form-control">
            <option>q</option>
            <option>q</option>
            <option>q</option>
            @if(!empty($cities))
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->city_ascii.'-'.$city->country}}</option>
            @endforeach
            @endif
        </select>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#select2').select2();
        $('#select2').on('change', function(e) {
            var data = $('#select2').select2("val");
            console.log(data);
            @this.set('searchTerm', data);
        });
    });
</script>

@endpush