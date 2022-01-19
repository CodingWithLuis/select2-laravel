<div>
    <x-select-component class="form-control" name="country_id" id="country_id" wire:model="country_id" :options="$this->countries" />

    <div class="mt-3">
        <x-select-component class="form-control" name="city_id" id="city_id" wire:model="city_id" :options="$this->countries" />
    </div>
</div>
