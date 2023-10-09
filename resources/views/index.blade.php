<x-layout>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gap-3">
                @forelse ($products as $product)
                <x-card :item="$product"/>
                @empty
                <span class="text-center">Nessun Prodotto</span>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>