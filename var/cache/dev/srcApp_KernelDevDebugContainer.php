<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT5xEBUB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT5xEBUB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT5xEBUB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT5xEBUB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerT5xEBUB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'T5xEBUB',
    'container.build_id' => 'c46e834e',
    'container.build_time' => 1645371047,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT5xEBUB');
