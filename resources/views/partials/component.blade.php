@php
    $tagsArray = json_decode($component->tags, true);
    $selectedValue = Session::get('selectedValue');
@endphp

@if($selectedValue === null || array_key_exists($selectedValue, $tagsArray))
<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }} status-{{ $component->status }}">
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" rel="noopener" class="links">{!! $component->name !!}</a>
    @else
    {!! $component->name !!} 
    @endif

    @if($component->description)
    
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{!! $component->description !!}"></i>
@endif

    <div class="pull-right">
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip" title="{{ trans('cachet.components.last_updated', ['timestamp' => $component->updated_at_formatted]) }}">{{ $component->human_status }}</small>
    </div>
</li>
@endif




