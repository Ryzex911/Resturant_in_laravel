<h1>hello</h1>
@foreach($items as $item)
    <h1>gerechtnaam:</h1>
    <p>{{ $item->gericht_naam }}</p>
    <p>euro{{ $item->prijs }}</p>
    <p>{{ $item->beschrijving }}</p>
    <p>{{ $item->categorie }}</p>
@endforeach
