<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX3F11Me\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX3F11Me/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX3F11Me.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX3F11Me\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX3F11Me\App_KernelDevDebugContainer([
    'container.build_hash' => 'X3F11Me',
    'container.build_id' => 'd6bfe749',
    'container.build_time' => 1714419500,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX3F11Me');