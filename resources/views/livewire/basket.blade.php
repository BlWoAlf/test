<div>
   @foreach ($items as $item)
       <div style="max-width: 200px; cursor: pointer">{{$item['name']}} - {{$item['cost']}} денег</div>
   @endforeach
   <button wire:click="dublicate">нажать</button>
</div>
