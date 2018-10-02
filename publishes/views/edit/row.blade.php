@if ($field instanceof \Terranet\Administrator\Collection\Group)
    @component('administrator::components.table.group')
        @slot('title', $field->title())
    @endcomponent
@else
    @component('administrator::components.table.row')
        @slot('label', Form::label($field->id(), $field->title()))
        @slot('description', $field->getDescription())
        @slot('input', $field->render(\Terranet\Administrator\Scaffolding::PAGE_EDIT))
    @endcomponent
@endif