<div class="postalSearch">
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Enter Postal" wire:model="search"></input>
            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" id="btnSubmit" class="btn btn-primary">Search Postal</button>
    </form>
</div>





