<label class="mb-1 flex items-center space-x-1">
    <input type="radio" name="{{$name}}" value="" @checked(!request($name))>
    <span>All</span>
</label>
@foreach($options as $option)
<label class="mb-1 flex items-center space-x-1">
    <input type="radio" name="{{$name}}" value="{{$option}}" @checked(request($name)===$option)>
    <span>{{ucfirst($option)}}</span>
    </input>
</label>
@endforeach