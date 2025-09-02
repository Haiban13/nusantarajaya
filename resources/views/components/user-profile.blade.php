@if (empty($detail_acara) || empty($detail_artikel))
    <a href="{{ route('profile.show', $detail_acara->owner ?? $detail_artikel->owner ) }}">
    @elseif ($detail_acara || $detail_artikel )
    <a href="{{ route('profile.show', $detail_acara->owner ?? $detail_artikel->owner) }}">
        @else
        <a href="profile/1">
@endif
<div class="flex items-center my-5 gap-5">

    <div class="w-[55px] bg-center bg-cover h-[55px] rounded-full bg-zinc-400"
        style="background-image: url('https://images.unsplash.com/photo-1608734265656-f035d3e7bcbf?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    </div>
    <div>
        <h1 class="flex items-center gap-2">
            @if(isset($detail_acara))
                {{ $detail_acara->getRelations()["owner"]->name ?? 'Unknown' }}
            @elseif(isset($detail_artikel))
                {{ $detail_artikel->getRelations()["owner"]->name }}
             @endif
             


     

</div>
</a>
