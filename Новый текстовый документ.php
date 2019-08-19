<?php if($item['old_price'] > 0): ?>
    <div class="srch">
        <span><?php echo round(100 - ($item['price']*100/$item['old_price']), '1') . '%'; ?></span>
    </div>
<?php endif; ?>






<?php if($hit->old_price): ?>
    <div class="srch">
        <span><?php echo round(100 - ($hit->price*100/$hit->old_price), '1') . '%'; ?></span>
    </div>
<?php endif; ?>
