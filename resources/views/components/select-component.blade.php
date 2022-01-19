<div wire:ignore x-data="{ }" x-init="() => {
	$('.select2').select2();
	$('.select2').on('change', function(e) {

	let elementName = $(this).attr('id');
	@this.set(elementName, e.target.value);
		Livewire.hook('message.processed', (m, component) => {
			$('.select2').select2();
		})

	})
}">
    <select class="select2" {{$attributes}} style="width: 100%;">
        <option value="">--- Seleccione ---</option>
        @foreach ($options as $option)
        <option value="{{$option->id}}">{{$option->name}}</option>
        @endforeach
    </select>
</div>
