<div class="relative p-4 border border-grey-lighter w-1/2">

		<div class="flex flex-wrap items-stretch w-full mb-4 relative">								
			<input type="text" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative focus:border-blue focus:shadow" placeholder="Income Description">
		</div>		

		<div class="flex flex-wrap items-stretch w-full mb-4 relative">
			<input type="text" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-r-none px-3 relative" placeholder="Value">					
		</div>	

		<button class="btn btn-success w-full" type="button" wire:click="addIncome">
			Add
		</button>

	</div>