<div style="display: initial;">
    @if($voted)
    <a wire:click.prevent="vote()" class="like-item like-item-liked" title="Like">
        <i class="fas fa-heart"></i>
        <span><ins>Like</ins> {{$likes_number}}</span>
    </a>
    @else
    <a wire:click.prevent="vote()" class="like-item" title="Like">
        <i class="fas fa-heart"></i>
        <span><ins>Like</ins> {{$likes_number}}</span>
    </a>
    @endif
</div>