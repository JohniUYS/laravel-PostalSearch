<div class="postalSearch">
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Enter Postal" wire:model="search"></input>
            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" id="btnSubmit" class="btn btn-primary">Search Postal</button>
    </form>
</div>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Primary Beat: {{$postal->area}}</h4>
    <p>Area: {{$postal->area}}</p>
    <p>District: {{($postal->district != 0 ? $postal->district : "Not LSPD")}}</p>
    <p>DNR?: {{($postal->isDNR != 0 ? "yes" : "no")}}</p>
    <hr>
    <p class="mb-0">Click below to Dismiss</p>
 </div>




