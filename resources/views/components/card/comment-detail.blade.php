<div class="card mb-4">
    <div class="card-header bg-primary">
        <h4 class="m-0 text-white">{{ $comment->card->title_card }}</h4>
    </div>
    <div class="card-body p-5">
        <?php echo $comment->comment; ?>
    </div>
</div>