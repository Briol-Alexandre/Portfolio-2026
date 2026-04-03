<?php
$light = $args['light'] ?? false;
$ul_classes = $args['ul_classes'] ?? 'col-start-11 col-end-13 flex justify-end gap-4';
?>

<ul class="socials <?= $ul_classes ?>">
    <li class="w-5">
        <a href="" class="group">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 30 30"
                class=" <?= $light ? 'group-hover:fill-bg' : 'group-hover:fill-primary' ?> fill-transparent transition-all duration-300">
                <path class="<?= $light ? 'stroke-bg' : 'stroke-primary' ?>" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="3"
                    d="M10.834 25.333c-6.667 2-6.667-3.333-9.334-4m18.667 8v-5.16a4.5 4.5 0 0 0-1.253-3.48C23.1 20.227 27.5 18.64 27.5 11.36a7.25 7.25 0 0 0-2-5 6.76 6.76 0 0 0-.12-5.027s-1.573-.466-5.213 1.974a17.84 17.84 0 0 0-9.333 0C7.194.867 5.62 1.333 5.62 1.333A6.76 6.76 0 0 0 5.5 6.36a7.25 7.25 0 0 0-2 5.04c0 7.227 4.4 8.813 8.587 9.333a4.5 4.5 0 0 0-1.253 3.44v5.16" />
            </svg>
        </a>
    </li>
    <li class="w-5">
        <a href="" class="group">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30"
                class=" <?= $light ? 'group-hover:fill-bg' : 'group-hover:fill-primary' ?> fill-transparent transition-all duration-300">
                <path class="<?= $light ? 'stroke-bg' : 'stroke-primary' ?>" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="3"
                    d="M20.167 9.5a8 8 0 0 1 8 8v9.333h-5.334V17.5a2.667 2.667 0 1 0-5.333 0v9.333h-5.333V17.5a8 8 0 0 1 8-8M6.833 10.833H1.5v16h5.333zM4.167 6.833a2.667 2.667 0 1 0 0-5.333 2.667 2.667 0 0 0 0 5.333" />
            </svg>
        </a>
    </li>
</ul>