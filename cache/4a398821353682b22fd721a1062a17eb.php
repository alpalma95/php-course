<?php
    $active = $link === parse_url($_SERVER['REQUEST_URI'])['path'];
?>
<a
    <?php if($active): ?>
        aria-current="<?php echo e($link); ?>"
    <?php endif; ?> 
    href="<?php echo e($link); ?>" 
    class="
        <?php if($active): ?> bg-gray-900 text-white 
        <?php else: ?> text-gray-300 hover:bg-gray-700 hover:text-white 
        <?php endif; ?> 
        rounded-md px-3 py-2 text-sm font-medium
    "><?php echo e($slot); ?></a><?php /**PATH /Users/alvaropalma/code/php/php-course/views/components/navlink.blade.php ENDPATH**/ ?>