<div class="flex items-center space-x-2 my-2 px-4">
    @php
        $avatar = $getAvatar();
    @endphp
    @if($avatar)
        <x-filament::avatar
                :src="$avatar"
                :attributes="\Filament\Support\prepare_inherited_attributes($attributes)->class(['fi-user-avatar rounded-full'])"
        />
    @endif
    <div>{{ $getState() }}</div>
</div>
