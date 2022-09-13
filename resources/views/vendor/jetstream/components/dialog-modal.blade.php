@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div>
        <div>
            {{ $title }}
        </div>

        <div>
            {{ $content }}
        </div>
    </div>

    <div>
        {{ $footer }}
    </div>
</x-jet-modal>
