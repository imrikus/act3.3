<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAegwjyE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAegwjyE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAegwjyE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAegwjyE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAegwjyE\App_KernelDevDebugContainer([
    'container.build_hash' => 'AegwjyE',
    'container.build_id' => '4c75e42a',
    'container.build_time' => 1591562526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAegwjyE');
