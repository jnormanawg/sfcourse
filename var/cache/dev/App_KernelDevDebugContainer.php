<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGKeZskT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGKeZskT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGKeZskT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGKeZskT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGKeZskT\App_KernelDevDebugContainer([
    'container.build_hash' => 'GKeZskT',
    'container.build_id' => 'd3313b4f',
    'container.build_time' => 1608647295,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGKeZskT');
