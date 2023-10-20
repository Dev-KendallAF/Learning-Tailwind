<div class="container-fluid mx-auto bg-red-500 p-5">
    <div class="grid lg:grid-cols-12 sm:grid-cols-1 md:grid-cols-3">
      @foreach (range(1, 12) as $i)
      <div class="p-3 border mx-2">
        {{ $i }}
      </div>
      @endforeach
    </div>
  </div>