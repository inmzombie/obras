<div class="mainmenu">
    <ul id="nav">
        <li><a href="<?php echo url_for('@homepage') ?>">Inicio</a>
            <ul>
                <li><a href="<?php echo url_for('@obra_new') ?>">Nueva Obra</a></li>
            </ul>
        </li>
        <?php if ($sf_user->hasCredential('general_admin')): ?>
            <li><a href="<?php echo url_for('@homepage') ?>">Administración</a>
                <ul>
                    <li><a href="<?php echo url_for('@sf_guard_user') ?>">Usuarios</a></li>
                    <li><a href="<?php echo url_for('@sf_guard_group') ?>">Grupos</a></li>
                    <li><a href="<?php echo url_for('@sf_guard_permission') ?>">Permisos</a></li>
                </ul>
            </li>
        <?php endif ?>
            <li>
                <a href="#">Administración de Datos de Obra</a>
                <ul>
                    <li><a href="<?php echo url_for('@tipo_de_obra') ?>">Tipos de Obras</a>
                        <ul>
                            <li><a href="<?php echo url_for('@tipo_de_obra_new') ?>">Agregar Tipo de Obra</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url_for('@fuente_financiamiento') ?>">Fuentes de Financiamientos</a>
                        <ul>
                            <li><a href="<?php echo url_for('@fuente_financiamiento_new') ?>">Agregar Fuente Financiamiento</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url_for('@programa') ?>">Programas</a>
                        <ul>
                            <li><a href="<?php echo url_for('@programa_new') ?>">Agregar Programa</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url_for('@empresa') ?>">Empresas</a>
                        <ul>
                            <li><a href="<?php echo url_for('@empresa_new') ?>">Agregar Empresa</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url_for('@organismo') ?>">Organismos</a>
                        <ul>
                            <li><a href="<?php echo url_for('@organismo_new') ?>">Agregar Organismo</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        <?php if ($sf_user->hasCredential('general_admin')): ?>
                <li>
                    <a href="<?php echo url_for('@provincia') ?>">Provincias</a>
                    <ul>
                        <li><a href="<?php echo url_for('@provincia_new') ?>">Agregar Provincia</a></li>
                    </ul>
                </li>        
                <li>
                    <a href="<?php echo url_for('@region') ?>">Regiones</a>
                    <ul>
                        <li><a href="<?php echo url_for('@region_new') ?>">Agregar Región</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url_for('@udt') ?>">UDTs</a>
                    <ul>
                        <li><a href="<?php echo url_for('@udt_new') ?>">Agregar UDT</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url_for('@departamento') ?>">Departamentos</a>
                    <ul>
                        <li><a href="<?php echo url_for('@departamento_new') ?>">Agregar Departamento</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url_for('@municipio') ?>">Municipios</a>
                    <ul>
                        <li><a href="<?php echo url_for('@municipio_new') ?>">Agregar Municipio</a></li>
                    </ul>
                </li>
        <?php endif ?>
                <li>
                    <a href="<?php echo url_for('@sf_guard_signout') ?>">Salir</a>
                </li>
                <li>
                    <a href="#" >
                <?php if ($sf_user->getGuardUser())
                    echo 'Usuario: ' . $sf_user->getGuardUser()->getFirstName() ?>

                <?php $date = date("d/m/Y");
                    echo '   fecha:' . $date ?>
            </a>
        </li>
    </ul>
</div>