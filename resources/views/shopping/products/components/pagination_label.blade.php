@php
    $data = $data ?? null;
@endphp

@if($data)
{{ __('tag.pagination', [
    'from' => ($data->currentpage() - 1) * $data->perpage() + 1,
    'to' => $data->total() >= $data->perpage() ? ($data->currentpage() * $data->perpage()) : $data->total(),
    'total' => $data->total()
]) }}
@endif