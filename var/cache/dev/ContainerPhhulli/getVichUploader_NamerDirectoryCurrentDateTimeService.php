<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.namer_directory_current_date_time' shared service.

return $this->services['vich_uploader.namer_directory_current_date_time'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(${($_ = isset($this->services['vich_uploader.current_date_time_helper']) ? $this->services['vich_uploader.current_date_time_helper'] : $this->services['vich_uploader.current_date_time_helper'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper()) && false ?: '_'});
